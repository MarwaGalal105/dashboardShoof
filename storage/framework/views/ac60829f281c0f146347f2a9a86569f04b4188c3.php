<?php $__env->startSection('content'); ?>
<div class="clearfix"></div>
<div class="row">
  <div class="col-md-12 col-sm-12 col-xs-12">
    <div class="x_panel">
      <div class="x_title">
        <h2>Edit Option</h2>
        <ul class="nav navbar-right panel_toolbox">
          <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
          </li>
         
        </ul>
        <div class="clearfix"></div>
      </div>
      <div class="x_content">
        <br>
        <form method="POST" action="<?php echo e(url('dashboard/options/'.$options->id)); ?>" enctype="multipart/form-data" data-parsley-validate="" class="form-horizontal form-label-left" novalidate="">
        <input name="_method" type="hidden" value="PUT">
            <?php echo e(csrf_field()); ?>



          <div class="form-group">
            <label class="control-label col-md-3 col-sm-3 col-xs-12" for="key">Key<span class="required">*</span>
            </label>
            <div class="col-md-6 col-sm-6 col-xs-12">
              <input type="text"  name="key" value="<?php echo e($options->key); ?>" id="key" required="required" class="form-control col-md-7 col-xs-12">
            </div>
          </div>

          <div class="form-group">
            <label class="control-label col-md-3 col-sm-3 col-xs-12" for="value">Value<span class="required">*</span>
            </label>
            <div class="col-md-6 col-sm-6 col-xs-12">
              <input type="text" name="value" value="<?php echo e($options->value); ?>" id="value" required="required" class="form-control col-md-7 col-xs-12">
            </div>
          </div>
  
          
          <div class="ln_solid"></div>
          <div class="form-group">
            <div class="col-md-6 col-sm-6 col-xs-12 col-md-offset-3">
              <button class="btn btn-primary" type="button"><a href="<?php echo e(url('/')); ?>/dashboard/options" style="color:white">Cancel</a></button>
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
<?php echo $__env->make('dashboard.layouts.main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\ShoofToday\resources\views/dashboard/options/edit.blade.php ENDPATH**/ ?>