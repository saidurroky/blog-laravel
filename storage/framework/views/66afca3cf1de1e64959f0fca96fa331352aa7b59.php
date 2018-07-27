<?php $__env->startSection('content'); ?>
<div id="templatemo_content">

    <div class="post_section">

        <div class="post_date">
            30<span>Nov</span>
        </div>
        
        <?php $__currentLoopData = $published_blog; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $result): $__env->incrementLoopIndices(); $loop = $__env->getFirstLoop(); ?>
        <div class="post_content">

            <h2><a href="<?php echo e(URL::to('/blog_detail/'.$result->blog_id)); ?>"><?php echo e($result->blog_title); ?></a></h2>

            <strong>Author:</strong> Steven | <strong>Category:&nbsp</strong> <a href="#"><?php echo e($result->category_name); ?></a>

            <a href="" target="_parent"><img src="<?php echo e($result->blog_image); ?>" alt="image" width="500px" height="200px"/></a>

            <?php echo e($result->blog_short_description); ?>

            <p><a href="blog_post.html">24 Comments</a> | <a href="<?php echo e(URL::to('/blog_detail/'.$result->blog_id)); ?>">Continue reading...</a>                </p>
        </div>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getFirstLoop(); ?>
        <div class="cleaner"></div>
    </div>


 <?php $__env->stopSection(); ?>
<?php echo $__env->make('master', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>