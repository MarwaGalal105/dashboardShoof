<?php $__env->startSection('content'); ?>
<link rel='stylesheet' href='https://use.fontawesome.com/releases/v5.7.0/css/all.css' integrity='sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ' crossorigin='anonymous'>
<script src="https://cdn.tiny.cloud/1/qobme9jymvqrcvzh7jfqenmhs791t8t7um4liezy38tgrbk7/tinymce/5/tinymce.min.js"></script>

<div class="clearfix"></div>
<div class="row">
              <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                  <div class="x_title">
                    <h2>Create Offer</h2>
                    <ul class="nav navbar-right panel_toolbox">
                      <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                      </li>
                      
                    </ul>
                    <div class="clearfix"></div>
                  </div>
                  <div class="x_content">
                    <br>
                    <form method="POST" action="<?php echo e(route('offers.store')); ?>"  enctype="multipart/form-data" data-parsley-validate="" class="form-horizontal form-label-left" novalidate="">

                        <?php echo e(csrf_field()); ?>


                        <div class="form-group">
                            <label class="control-label col-md-3 col-sm-3 col-xs-12" for="offer_category">offer_category: 
                            </label>
                            <div class="col-md-6 col-sm-6 col-xs-12">
                              <select  class="form-control" name="offer_category">
                                <?php $__currentLoopData = $categories; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $category): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <option value="<?php echo e($category->id); ?>"><?php echo e($category->name); ?></option>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                              </select>
                            </div>
                          </div>
    

                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="offer_title">Title:<span class="required">*</span>
                        </label>
                        <div class="input-group" >
                            <span class="input-group-addon">
                                <i class="  glyphicon glyphicon-pencil"></i>
                            </span>

                        <div class="col-md-8 col-sm-6 col-xs-12" style="padding-left:0px">
                          <input type="text"  name="offer_title" id="offer_title" required="required" class="form-control col-md-7 col-xs-12">
                        </div>
                      </div>

                      <script>tinymce.init({ selector:'textarea' });</script>
                      <div class="panel-body">
                          <label class="control-label col-md-3 col-sm-3 col-xs-12" for="offer_post">Post:<span class="required">*</span>
                          </label>
                          <div class="col-md-6 col-sm-6 col-xs-12">
                          <textarea name="offer_post" id="offer_post" required="required" class="form-control col-md-7 col-xs-12"></textarea>
                          </div>
                      </div>
                     
              
                      <div class="form-group">
                            <label class="control-label col-md-3 col-sm-3 col-xs-12" >Image:</label>
                            <div class="input-group" >
                              <span class="input-group-addon">
                                  <i class='fas fa-image' style="font-size:20px"></i>
                              </span>
                            <div class="col-md-8 col-sm-12 col-xs-12" style="padding-left:0px">
                                <input type="file" name="main_image" id="main_image" class="form-control"> </div>
                            </div>
                        </div>
                      
                      
                      <div class="form-group">
                            <label class="control-label col-md-3 col-sm-3 col-xs-12" >Extra images:</label>
                            <div class="input-group" >
                            <span class="input-group-addon">
                                <i class='fas fa-image' style="font-size:20px"></i>
                            </span>
                            <div class="col-md-8 col-sm-12 col-xs-12" style="padding-left:0px">
                                <input type="file" name="imgs[]" id="imgs" class="form-control" multiple> </div>
                            </div>
                        </div>
                    </div>
    
                      
                      <div class="form-group">
                        <div class="col-md-6 col-sm-6 col-xs-12 col-md-offset-3">
                          <button class="btn btn-primary" type="button"><a href="<?php echo e(url('/')); ?>/offers" style="color:white">Cancel</a></button>
						              <button class="btn btn-primary" type="reset">Reset</button>
                          <button type="submit" class="btn btn-success"><a href="<?php echo e(url('/')); ?>/offers" style="color:white">Create</a></button>
                          
                         
                        </div>
                      </div>
                      
                    </form>
                  </div>
                </div>
              </div>
            </div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\wamp\www\firstapp\resources\views/offers/create.blade.php ENDPATH**/ ?>