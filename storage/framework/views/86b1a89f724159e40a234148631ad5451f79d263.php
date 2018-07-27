<?php $__env->startSection('admin_content'); ?>
<div class="row-fluid sortable">		
    <div class="box span12">
        <div class="box-header" data-original-title>
            <h2><i class="halflings-icon user"></i><span class="break"></span>Members</h2>
            <div class="box-icon">
                <a href="#" class="btn-setting"><i class="halflings-icon wrench"></i></a>
                <a href="#" class="btn-minimize"><i class="halflings-icon chevron-up"></i></a>
                <a href="#" class="btn-close"><i class="halflings-icon remove"></i></a>
            </div>
        </div>
        <div class="box-content">
            <table class="table table-striped table-bordered bootstrap-datatable datatable">
                <thead>
                    <tr>
                        <th>category Id</th>
                        <th>Category Name</th>
                        <th>Status</th>
                        <th>Actions</th>
                    </tr>
                </thead>   
                <tbody>
                    <?php
                        foreach ($all_category_info as $category) {
                      
                    ?>
                    <tr>
                        <td><?php echo $category->category_id ; ?></td>
                        <td class="center"><?php echo $category->category_name ; ?></td>
                       
                        <td class="center">
                            <?php 
                                if($category->publication_status == 1){
                              
                            ?>
                            <span class="label label-success">Published</span>
                            <?php 
                                } else{
                            ?>
                            <span class="label label-important">Unpublished</span>
                                <?php } ?>
                        </td>
                        <td class="center">
                            <?php 
                                if($category->publication_status == 1){
                              
                            ?>
                            <a class="btn btn-danger" href="<?php echo e(URL::to('/unpublished_category/'.$category->category_id)); ?>">
                                <i class="halflings-icon white thumbs-down"></i>  
                            </a>
                            <?php 
                                } else{
                            ?>
                            <a class="btn btn-success" href="<?php echo e(URL::to('/published_category/'.$category->category_id)); ?>">
                                <i class="halflings-icon white thumbs-up"></i>  
                            </a>
                            <?php } ?>
                            
                            <a class="btn btn-info" href="<?php echo e(URL::to('/edit_category/'.$category->category_id)); ?>">
                                <i class="halflings-icon white edit"></i>  
                            </a>
                            <a class="btn btn-danger" href="<?php echo e(URL::to('/delete_category/'.$category->category_id)); ?>" onclick="return CheckDelete();">
                                <i class="halflings-icon white trash"></i> 
                            </a>
                        </td>
                    </tr>
                        <?php } ?>
                    
                </tbody>
            </table>            
        </div>
    </div><!--/span-->

</div><!--/row-->

<?php $__env->stopSection(); ?>
<?php echo $__env->make('admin.dashboard', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>