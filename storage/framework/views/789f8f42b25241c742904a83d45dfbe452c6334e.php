<?php $__env->startSection('content'); ?>
<div class="clearfix"></div>
<div class="row">
              <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                  <div class="x_title">
                    <h2>Edit Category</h2>
                    <ul class="nav navbar-right panel_toolbox">
                      <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                      </li>
                     
                    </ul>
                    <div class="clearfix"></div>
                  </div>
                  <div class="x_content">
                    <br>
                    <form method="POST" action="<?php echo e(url('categories/'.$data->id)); ?>" data-parsley-validate="" class="form-horizontal form-label-left" novalidate="">
                    <input name="_method" type="hidden" value="PUT">
                        <?php echo e(csrf_field()); ?>



                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="name">Name:<span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input type="text"  name="name" value="<?php echo e($data->name); ?>" id="name" required="required" class="form-control col-md-7 col-xs-12">
                        </div>
                      </div>

                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="name">Parent category
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <select class="form-control" id="exampleFormControlSelect1" class="form-control col-md-7 col-xs-12" name="parent_id">
                            <option value="">Parent Category</option>
                            <?php $__currentLoopData = $categories; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $category): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                              <option value="<?php echo e($category->id); ?>" <?php echo e(($category->id == $data->parent_id)?"selected":""); ?>><?php echo e($category->name); ?></option>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?> 
                          </select>
                        </div>
                      </div>
                      
                      <div class="ln_solid"></div>
                      <div class="form-group">
                        <div class="col-md-6 col-sm-6 col-xs-12 col-md-offset-3">
                          <button class="btn btn-primary" type="button">Cancel</button>
						                <button class="btn btn-primary" type="reset">Reset</button>
                          <button type="submit" class="btn btn-success">Edit</button>
                         
                        </div>
                      </div>

                    </form>
                  </div>
                </div>
              </div>
            </div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\wamp\www\firstapp\resources\views/categories/edit.blade.php ENDPATH**/ ?>