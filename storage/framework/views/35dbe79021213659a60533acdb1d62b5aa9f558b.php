<?php $__env->startSection('admin_content'); ?>

<div class="row-fluid sortable">
    <div class="box span12">
        <div class="box-header" data-original-title>
            <h2><i class="halflings-icon edit"></i><span class="break"></span>Add Category</h2>
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
            <?php echo Form::open(['url' => '/save-category', 'method'=>'post','class'=>'form-horizontal']); ?>

                <fieldset>
                    <div class="control-group">
                        <label class="control-label" for="typeahead">Category Name</label>
                        <div class="controls">
                            <input type="text" name="category_name" class="span6 typeahead" id="typeahead"  >
                           
                        </div>
                    </div>
                             
                    <div class="control-group hidden-phone">
                        <label class="control-label" for="textarea2">Category Description</label>
                        <div class="controls">
                            <textarea class="cleditor" name="category_description"id="textarea2" rows="3"></textarea>
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