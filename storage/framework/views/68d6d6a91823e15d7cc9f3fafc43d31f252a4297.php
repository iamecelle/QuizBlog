<?php $__env->startSection('content'); ?>

<!-- <?php echo Form::text('name','value', ['class' => 'form-control']); ?> -->

<?php echo Form::open(['url' => 'articles']); ?>


<?php echo Form::label('title', 'Title'); ?>

<?php echo Form::text('title', null, ['class' => 'form-control', 'placeholder' => 'ex. Article Title']); ?>


<div class="form-group" >
	<?php echo Form::label('body', 'Body:'); ?>

	<?php echo Form::textarea('body', null, ['class' => 'form-control']); ?>

</div>
<?php echo Form::submit('Add new', ['class' => 'btn btn-primary']); ?>

<?php echo Form::close(); ?>



<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>