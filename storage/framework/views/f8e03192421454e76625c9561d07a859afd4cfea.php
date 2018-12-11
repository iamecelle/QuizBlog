<?php $__env->startSection('content'); ?>

<button type="button" class="btn btn-success" onclick="window.location='<?php echo e(url("blogs/create")); ?>'">Create New</button>
<hr>

	<?php $__currentLoopData = $blogs; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $blog): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>

		<div class="panel panel-default">
			<div class="panel-body" style="padding-top: 0px">
				<article>
				<h3><a href="<?php echo e(url('blogs/show/'.$blog->id)); ?>"><b><?php echo e($blog->title); ?></b></a></h3>
				<p><?php echo e($blog->body); ?></p>
				<a href="<?php echo e(url('blogs/category/' .$blog->category)); ?>"><b><?php echo e($blog->category); ?></b></a>
				<br>
				<small class="text-muted"><i>Posted: <?php echo e($blog->updated_at); ?></i> </small>
			</article>
			</div>
			
		</div>
	<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
	
	



<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>