<?php $__env->startSection('content'); ?>
<div class="container">
  <div class="row justify-content-center">
    
      <div class="card">
        
        <div class="card-body">
          <?php if(session('status')): ?>
            <div class="alert alert-success" role="alert">
              <?php echo e(session('status')); ?>

          </div>
      <?php endif; ?>

  </div>
  <div class="row tile_count" style='margin-bottom: 20px;margin-top: 20px;'>                  
  <div class="col-md-6 col-sm-4 col-xs-6 tile_stats_count" style='border-bottom:1px solid #D9DEE4;border-left:1px solid #D9DEE4'>
      <span class="count_top"><i class="fa fa-user"></i> Total Users</span>
      <div class="count green"><?php echo e($countUsers); ?></div>
      
  </div>
  <div class="col-md-6 col-sm-4 col-xs-6 tile_stats_count" style='border-bottom:1px solid #D9DEE4;border-left:1px solid #D9DEE4''>
      <span class="count_top"><i class="fa fa-user"></i> Total Categories</span>
      <div class="count green"><?php echo e($countCategories); ?></div>
      
  </div>


<div class="col-md-6 col-sm-12 col-xs-12">
    <div class="x_panel">
      <div class="x_title">
      
        <h2> Categories </h2>
        <ul class="nav navbar-right panel_toolbox">
        
          <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
          </li>
         </ul>
        <div class="clearfix"></div>
      </div>
      <div class="x_content">
  
          <div class="">
            <ul class="to_do">
                <?php $__currentLoopData = $categories; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $category): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
              <li>
                  <?php echo e($category->name); ?>

             </li>
              <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </ul>
          </div>
        </div>
    </div>
  </div>



  <div class="col-md-6 col-sm-12 col-xs-12">
      <div class="x_panel">
        <div class="x_title">
        
          <h2> Users </h2>
          <ul class="nav navbar-right panel_toolbox">
          
            <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
            </li>
           </ul>
          <div class="clearfix"></div>
        </div>
        <div class="x_content">
    
            <div class="">
              <ul class="to_do">
                  <?php $__currentLoopData = $users; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $user): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <li>
                    <?php echo e($user->name); ?>

               </li>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
              </ul>
            </div>
          </div>
      </div>
    </div>
  


<?php $__env->stopSection(); ?>

<?php echo $__env->make('dashboard.layouts.main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\ShoofToday\resources\views/dashboard/home.blade.php ENDPATH**/ ?>