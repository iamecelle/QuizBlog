<?php $__env->startSection('content'); ?>

This is a create form

<!-- <h2>Articles</h2>
<hr>

	<?php $__currentLoopData = $articles; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $article): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
		<article>
			<h3><?php echo e($article->title); ?></h3>
			<p><?php echo e($article->body); ?></p>
			</article>
		<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?> -->
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>