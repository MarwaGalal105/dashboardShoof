<?php $__env->startSection('content'); ?>

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
        <h2>Add Category</h2>
        <ul class="nav navbar-right panel_toolbox">
          <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a></li>
        </ul>
        <div class="clearfix"></div>
      </div>
      <div class="x_content">
        <br />
      <form action="<?php echo e(route('categories.store')); ?>" method="POST" data-parsley-validate class="form-horizontal form-label-left" data-parsley-validate="" novalidate="">
        <?php echo csrf_field(); ?>

        <div class="form-group">
            <label class="control-label col-md-3 col-sm-3 col-xs-12" for="name">Name<span class="required">*</span>
            </label>
            <div class="col-md-6 col-sm-6 col-xs-12">
              <input type="text" id="name" name="name" value="<?php echo e(old('name')); ?>" required class="form-control col-md-7 col-xs-12">
            </div>
          </div>

          <div class="form-group">
            <label class="control-label col-md-3 col-sm-3 col-xs-12" for="parent_id">Parent category
            </label>
            <div class="col-md-6 col-sm-6 col-xs-12">
              <select class="form-control" id="exampleFormControlSelect1"  class="form-control col-md-7 col-xs-12" name="parent_id">
                  <option value="">Parent Category</option>
                <?php $__currentLoopData = $categories; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $category): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                  <option value="<?php echo e($category->id); ?>"><?php echo e($category->name); ?></option>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?> 
              </select>
            </div>
          </div>
          
          <div class="form-group">
            <div class="col-md-6 col-sm-6 col-xs-12 col-md-offset-3" style="margin-top:20px">
              <button class="btn btn-primary" type="button"><a href="<?php echo e(url('/')); ?>/categories" style="color:white">Cancel</a></button>
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
<?php echo $__env->make('layouts.main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\wamp\www\app_dashboard\resources\views/categories/create.blade.php ENDPATH**/ ?>