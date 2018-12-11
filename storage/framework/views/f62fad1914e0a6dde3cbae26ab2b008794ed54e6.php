<?php $__env->startSection('content'); ?>


	<?php if(count($errors)): ?>
		<div class="alert alert-danger">
			<?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
				<?php echo e($error); ?> <br>
			<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
		</div>
		
	<?php endif; ?>


	<?php echo Form::open(['url' => 'blogs']); ?>


		<?php echo Form::label('title','Blog Title:'); ?>

		<?php echo Form::text('title',null, ['class' => 'form-control', 'placeholder' => 'ex. Blog Title']); ?>

		<br>

		<div class="form-group">
			<?php echo Form::label('body', 'Body:'); ?>

			<?php echo Form::textarea('body',null,['class' => 'form-control']); ?>

		</div>

		
		<div>
			<?php echo Form::label('category','Category:'); ?> 

			<?php echo Form::select('category',array ('Tips' => 'Tips', 'Technology' => 'Technology', 'Health' => 'Health', 'Politics' => 'Politics', 'Review' => 'Review'),null, ['class' => 'form-control']); ?>

		</div>
		
		<br>
		<?php echo Form::submit('Add new Blog', ['class' => 'btn btn-primary']); ?>


	<?php echo Form::close(); ?>


	<?php if($errors->has('title')): ?>
		An error occured.
	<?php endif; ?>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>