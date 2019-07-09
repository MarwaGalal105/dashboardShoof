<?php $__env->startSection('content'); ?>
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                
                <div class="card-body">
                    <?php if(session('status')): ?>
                        <div class="alert alert-success" role="alert">
                            <?php echo e(session('status')); ?>

                        </div>
                    <?php endif; ?>

                    </div>                  
</div>
<div class="col-md-6 col-sm-12 col-xs-12">
                <div class="x_panel">
                  <div class="x_title">
                 
                    <h2> Offers </h2>
                    <ul class="nav navbar-right panel_toolbox">
                    
                      <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                      </li>
                      
                      
                     
                    </ul>
                    <div class="clearfix"></div>
                  </div>
                  
                  <div class="x_content">

                    <table class="table table-striped">
                      <thead  class="thead-light">
                        <tr>
                          
                          <th>Title</th>
                          <th>Post</th>
                          <th>Image</th>
                        </tr>
                      </thead>
                      <tbody>
                      <?php $__currentLoopData = $offers; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $offer): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <tr>
                      
                          <td><?php echo e($offer->offer_title); ?></td>
                          <td><?php echo e($offer->offer_post); ?></td>
                          <td><?php echo e($offer->main_image); ?></td>
   
                            
                        </tr>
                       <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                      </tbody>
                    </table>

                  </div>
                </div>
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

                    <table class="table table-striped">
                      <thead  class="thead-light">
                        <tr>
                         <th>Name</th>
                        </tr>
                      </thead>
                      <tbody>
                      <?php $__currentLoopData = $categories; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $category): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <tr>
                          <td><?php echo e($category->name); ?></td>    
                        </tr>
                       <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                      </tbody>
                    </table>

                  </div>
                </div>
        </div>

 <div class="col-md-6 col-sm-12 col-xs-12">
                <div class="x_panel">
                  <div class="x_title">
                 
                    <h2> Options </h2>
                    <ul class="nav navbar-right panel_toolbox">

                      <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                      </li>
                      
                      
                    </ul>
                    <div class="clearfix"></div>
                  </div>
                  
                  <div class="x_content">

                    <table class="table table-striped">
                      <thead  class="thead-light">
                        <tr>
                          
                          <th>Title</th>
                          <th>Post</th>
                        </tr>
                      </thead>
                      <tbody>
                      <?php $__currentLoopData = $options; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $option): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <tr>
                      
                          <td><?php echo e($option->key); ?></td>
                          <td><?php echo e($option->value); ?></td>
                        </tr>
                       <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                      </tbody>
                    </table>

                  </div>
                </div>
  </div>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\firstapp\resources\views/home.blade.php ENDPATH**/ ?>