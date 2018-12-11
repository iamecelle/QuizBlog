<?php $__env->startSection('content'); ?>

<?php echo Form::open([]); ?>


<?php echo Form::label('title', 'Title'); ?>

<?php echo Form::text('title', $article->title, ['class' => 'form-control', 'placeholder' => 'ex. Article Title']); ?>


<div class="form-group" >
	<?php echo Form::label('body', 'Body:'); ?>

	<?php echo Form::textarea('body', $article->body, ['class' => 'form-control']); ?>

</div>
	<?php echo Form::submit('Save New', ['class' => 'btn btn-primary']); ?>


<?php echo Form::close(); ?>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>