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
             <?php
                        foreach ($category as $result) {
                      
                ?>
            
            <?php echo Form::open(['url' => '/update_category', 'method'=>'post','class'=>'form-horizontal']); ?>

                <fieldset>
                    <div class="control-group">
                        <label class="control-label" for="typeahead">Category Name</label>
                        <div class="controls">
                            <input type="text" name="category_name"  value="<?php echo $result->category_name ; ?>" class="span6 typeahead" id="typeahead"  >
                            <input type="hidden" name="category_id"  value="<?php echo $result->category_id ; ?>" class="span6 typeahead" id="typeahead"  >

                        </div>
                    </div>
                             
                    <div class="control-group hidden-phone">
                        <label class="control-label" for="textarea2">Category Description</label>
                        <div class="controls">
                            <textarea class="cleditor" name="category_description"id="textarea2" rows="3"><?php echo $result->category_description ; ?></textarea>
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
                        <button type="submit" class="btn btn-primary">Update Category</button>
                        <button type="reset" class="btn">Cancel</button>
                    </div>
                </fieldset>
            <?php echo Form::close(); ?> 
                        <?php } ?>

        </div>
    </div><!--/span-->

</div><!--/row-->

<?php $__env->stopSection(); ?>
<?php echo $__env->make('admin.dashboard', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>