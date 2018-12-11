<?php $__env->startSection('content'); ?>

<h2>Articles</h2>
<hr>

	<?php $__currentLoopData = $articles; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $article): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
		<article>
			<h3><a href="<?php echo e(url('articles/show/'.$article->id)); ?>"><?php echo e($article->title); ?></a></h3>
			<p><?php echo e($article->body); ?></p>
			</article>
		<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>