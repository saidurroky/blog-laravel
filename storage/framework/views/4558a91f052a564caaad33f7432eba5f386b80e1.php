<?php $__env->startSection('friends'); ?>
<h4>Recent</h4>
<?php
    $recent_blog=DB::table('tbl_blog')
                ->orderby('blog_id','desc')
                ->where('publication_status',1)
                ->take(2)
                ->get();
?>
<ul class="templatemo_list">
    <?php $__currentLoopData = $recent_blog; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $recent): $__env->incrementLoopIndices(); $loop = $__env->getFirstLoop(); ?>
    <li><a href="<?php echo e(URL::to('/blog_detail/'.$recent->blog_id)); ?>" target="_parent"><?php echo e($recent->blog_title); ?></a></li>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getFirstLoop(); ?>
</ul>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('master', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>