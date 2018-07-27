<?php $__env->startSection('content'); ?>
<div id="templatemo_content">

    <div class="post_section">

        <div class="post_date">
            30<span>Nov</span>
        </div>
        
        
        <div class="post_content">

            <h2><?php echo e($blog_info->blog_title); ?></a></h2>

            <strong>hit count:&nbsp</strong><?php echo e($blog_info->hit_count); ?> | <strong>Category:&nbsp</strong> <a href="#"><?php echo e($blog_info->category_name); ?></a>

            <a href="" target="_parent"><img src="<?php echo e(URL::to($blog_info->blog_image)); ?>" alt="image" width="500px" height="200px"/></a>

            <?php echo $blog_info->blog_long_description;?>
           
        </div>
        
        <div class="cleaner"></div>
    </div>


 <?php $__env->stopSection(); ?>
<?php echo $__env->make('master', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>