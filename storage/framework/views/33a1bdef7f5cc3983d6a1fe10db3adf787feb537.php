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
        <h2>Edit City</h2>
        <ul class="nav navbar-right panel_toolbox">
          <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
          </li>
        </ul>
        <div class="clearfix"></div>
      </div>
      <div class="x_content">
        
     
        <form method="POST" action="<?php echo e(url('cities/'.$cities->id)); ?>" data-parsley-validate="" class="form-horizontal form-label-left" novalidate="">
            <input name="_method" type="hidden" value="PUT">
                <?php echo e(csrf_field()); ?>

        <?php echo csrf_field(); ?>


        <div class="form-group">
            <label class="control-label col-md-3 col-sm-3 col-xs-12" for="name">Name<span class="required">*</span>
            </label>
            <div class="col-md-6 col-sm-6 col-xs-12">
              <input type="text" id="name" name="name" value="<?php echo e($cities->name); ?>" required class="form-control col-md-7 col-xs-12">
            </div>
          </div>

          
          <div class="form-group" >
            <div class="col-md-6 col-sm-6 col-xs-12 col-md-offset-3" style="margin-top:20px">
              <button class="btn btn-primary"  type="button"><a href="<?php echo e(url('/')); ?>/cities" style="color:white">Cancel</a></button>
              <button class="btn btn-warning" type="reset">Reset</button>
              <button type="submit" class="btn btn-success">Update</button>
            </div>
          </div>
        </form>
      </div>
    </div>
  </div>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\ShoofToday\resources\views/cities/edit.blade.php ENDPATH**/ ?>