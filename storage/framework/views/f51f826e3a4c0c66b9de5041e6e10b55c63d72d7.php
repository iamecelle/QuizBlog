<?php $__env->startSection('content'); ?>

<h2>Blogs</h2>
<hr>

	<?php $__currentLoopData = $blogs; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $blog): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
		<article>
			<h3><a href="<?php echo e(url('blogs/show/'.$blog->id)); ?>"><?php echo e($blog->title); ?></a></h3>
			<p><?php echo e($blog->body); ?></p>
			</blog>
		<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>