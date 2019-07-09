<?php $__env->startSection('content'); ?>
<script src="https://cdn.tiny.cloud/1/qobme9jymvqrcvzh7jfqenmhs791t8t7um4liezy38tgrbk7/tinymce/5/tinymce.min.js"></script>
<div class="clearfix"></div>
<?php if($errors->any()): ?>
    <div class="alert alert-danger">
        <ul>
            <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <li><?php echo e($error); ?></li>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </ul>
    </div>
<?php endif; ?>


<div class="row">
  <div class="col-md-12 col-sm-12 col-xs-12">
    <div class="x_panel">
      <div class="x_title">
        <h2>Add Data</h2>
        <ul class="nav navbar-right panel_toolbox">
          <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a></li>
        </ul>
        <div class="clearfix"></div>
      </div>
      <div class="x_content">
        <br />
      <form action="<?php echo e(Route('info.store')); ?>" method="POST"  enctype="multipart/form-data" data-parsley-validate class="form-horizontal form-label-left" data-parsley-validate="" novalidate="">
        <?php echo csrf_field(); ?>

        <div class="form-group">
            <label class="control-label col-md-3 col-sm-3 col-xs-12" for="name">Name<span class="required">*</span>
            </label>
            <div class="col-md-6 col-sm-6 col-xs-12">
              <input type="text" id="name" name="name" value="<?php echo e(old('name')); ?>" required class="form-control col-md-7 col-xs-12">
            </div>
          </div>


          <div class="form-group">
            <label class="control-label col-md-3 col-sm-3 col-xs-12" for="address">Address<span class="required">*</span>
            </label>
            <div class="col-md-6 col-sm-6 col-xs-12">
              <input type="text" id="address" name="address" value="<?php echo e(old('address')); ?>" required class="form-control col-md-7 col-xs-12">
            </div>
          </div>

         <div class="form-group">
              <label class="control-label col-md-3 col-sm-3 col-xs-12" for="city">City: 
              </label>
              <div class="col-md-6 col-sm-6 col-xs-12">
                <select  class="form-control" id="exampleFormControlSelect1" name="city">
                  <?php $__currentLoopData = $cities; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $city): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                      <option value="<?php echo e($city->id); ?>"><?php echo e($city->name); ?></option>
                  <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </select>
              </div>
        </div>


          <div class="form-group">
            <label class="control-label col-md-3 col-sm-3 col-xs-12" for="age">Age<span class="required">*</span>
            </label>
            <div class="col-md-6 col-sm-6 col-xs-12">
              <input type="number" id="age" name="age" value="<?php echo e(old('age')); ?>" required class="form-control col-md-7 col-xs-12">
            </div>
          </div>

          <div class="form-group">
            <label class="control-label col-md-3 col-sm-3 col-xs-12" for="date">Date<span class="required">*</span>
            </label>
            <div class="col-md-6 col-sm-6 col-xs-12">
              <input type="date" id="date" name="date" value="<?php echo e(old('date')); ?>" required class="form-control col-md-7 col-xs-12">
            </div>
          </div>

          <div  class="form-group">
            <label class="control-label col-md-3 col-sm-3 col-xs-12" for="gender">Gender:
              </label>
            <div class="col-md-6 col-sm-6 col-xs-12">
            <select class="form-control" name="gender" >
                       <option value="1" selected>Male </option>
                      <option value="0">Female</option>

            </select>
            </div>
        </div>

          <div class="form-group">
            <label class="control-label col-md-3 col-sm-3 col-xs-12" for="name">Telephone<span class="required">*</span>
            </label>
            <div class="col-md-6 col-sm-6 col-xs-12">
              <input type="number" id="telephone" name="telephone" value="<?php echo e(old('telephone')); ?>" required class="form-control col-md-7 col-xs-12">
            </div>
          </div>


          <script>tinymce.init({ selector:'textarea' });</script>
          <div class="panel-body">
              <label class="control-label col-md-3 col-sm-3 col-xs-12" for="notes">Notes:<span class="required">*</span>
              </label>
              <div class="col-md-6 col-sm-6 col-xs-12">
              <textarea name="notes" id="notes" required="required" class="form-control col-md-7 col-xs-12"></textarea>
              </div>
          </div>

          <div class="form-group">
            <label class="control-label col-md-3 col-sm-3 col-xs-12" >Image:</label>
            <div class="input-group" >
              <span class="input-group-addon">
                  <i class='fas fa-image' style="font-size:20px"></i>
              </span>
            <div class="col-md-8 col-sm-12 col-xs-12" style="padding-left:0px">
                <input type="file" name="image" id="image" class="form-control"> </div>
            </div>
        </div>
      
        <div  class="form-group">
            <label class="control-label col-md-3 col-sm-3 col-xs-12" for="status">Status:
              </label>
            <div class="col-md-6 col-sm-6 col-xs-12">
            <select class="form-control" name="status" >
                       <option value="1" selected>Active </option>
                      <option value="0">Inactive</option>

            </select>
            </div>
        </div>
          
       <div class="form-group">
            <label class="control-label col-md-3 col-sm-3 col-xs-12" for="type">Type
            </label>
            <div class="col-md-6 col-sm-6 col-xs-12">
              <select class="form-control" id="exampleFormControlSelect1"  class="form-control col-md-7 col-xs-12" name="type">
                  <option value="">Parent Category</option>
                <?php $__currentLoopData = $categories; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $category): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                  <option value="<?php echo e($category->id); ?>"><?php echo e($category->name); ?></option>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?> 
              </select>
            </div>
        </div>
          <div class="form-group">
            <div class="col-md-6 col-sm-6 col-xs-12 col-md-offset-3" style="margin-top:20px">
              <button class="btn btn-primary" type="button"><a href="<?php echo e(url('/')); ?>/info" style="color:white">Cancel</a></button>
              <button class="btn btn-warning" type="reset">Reset</button>
              <button type="submit" class="btn btn-success">Create</button>
            </div>
          </div>
      </form>
      </div>
    </div>
  </div>
</div>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('dashboard.layouts.main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\wamp\www\ShoofToday\resources\views/dashboard/info/create.blade.php ENDPATH**/ ?>