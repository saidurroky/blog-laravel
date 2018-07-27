<?php $__env->startSection('category'); ?>
<h4>Categories</h4>

<?php
    foreach ($all_category_info as $category) {

?>
<ul class="templatemo_list">
    <li><a href="index.html"><?php echo $category->category_name; ?></a></li>
    
</ul>
    <?php } ?>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('master', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>