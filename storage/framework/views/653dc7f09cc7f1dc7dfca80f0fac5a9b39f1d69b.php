<?php $__env->startSection('admin_content'); ?>

<div class="row-fluid sortable">
    <div class="box span12">
        <div class="box-header" data-original-title>
            <h2><i class="halflings-icon edit"></i><span class="break"></span>Add Blog</h2>
            <div class="box-icon">
                <a href="#" class="btn-setting"><i class="halflings-icon wrench"></i></a>
                <a href="#" class="btn-minimize"><i class="halflings-icon chevron-up"></i></a>
                <a href="#" class="btn-close"><i class="halflings-icon remove"></i></a>
            </div>
        </div>
        <h2 style="color:green">
                                        
            <?php
                $message = Session::get('message');
                if($message){
                    echo $message;
                    Session::put('message',null);
                }
            ?>

        </h2>
        <div class="box-content">
            <?php echo Form::open(['url' => '/save_blog', 'method'=>'post','class'=>'form-horizontal','enctype'=>'multipart/form-data']); ?>

                <fieldset>
                    <div class="control-group">
                        <label class="control-label" for="typeahead">Blog Title</label>
                        <div class="controls">
                            <input type="text" name="blog_title" class="span6 typeahead" id="typeahead"  >
                           
                        </div>
                    </div>
                     <div class="control-group">
                        <label class="control-label" for="selectError3">Category Name</label>
                        <div class="controls">
                          <select name="category_id">
                                <option >Select category</option>
                                <?php $__currentLoopData = $category_info; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $category): $__env->incrementLoopIndices(); $loop = $__env->getFirstLoop(); ?>
                                <option value="<?php echo e($category->category_id); ?>"><?php echo e($category->category_name); ?></option>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getFirstLoop(); ?>  
                          </select>
                        </div>
                  </div>        
                    <div class="control-group hidden-phone">
                        <label class="control-label" for="textarea2">Blog Short Description</label>
                        <div class="controls">
                            <textarea class="cleditor" name="blog_short_description"id="textarea2" rows="3"></textarea>
                        </div>
                    </div>
                    <div class="control-group hidden-phone">
                        <label class="control-label" for="textarea2">Blog Long Description</label>
                        <div class="controls">
                            <textarea class="cleditor" name="blog_long_description"id="textarea2" rows="3"></textarea>
                        </div>
                    </div>
                     <div class="control-group">
                        <label class="control-label" for="selectError3">Publication Status</label>
                        <div class="controls">
                          <select name="publication_status">
                                <option >Select Status</option>
                                <option value="1">Published</option>
                                <option value="0">Unpublished</option>     
                          </select>
                        </div>
                  </div>
                  <div class="control-group">
                    <label class="control-label" for="fileInput">Upload Image</label>
                    <div class="controls">
                          <input class="input-file uniform_on"name="blog_image" id="fileInput" type="file">
                    </div>
                  </div>
                    <div class="form-actions">
                        <button type="submit" class="btn btn-primary">Save changes</button>
                        <button type="reset" class="btn">Cancel</button>
                    </div>
                </fieldset>
            <?php echo Form::close(); ?>   

        </div>
    </div><!--/span-->

</div><!--/row-->

<?php $__env->stopSection(); ?>
<?php echo $__env->make('admin.dashboard', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>