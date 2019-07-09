<?php $__env->startSection('content'); ?>

<div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                  <div class="x_title">
                 
                    <h2> Options </h2>
                    <ul class="nav navbar-right panel_toolbox">
                      <li> <a href="<?php echo e(url('/options/create')); ?>"> <i class="fa fa-plus"></i> New</a></li>


                      <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                      </li>
                      
                      
                    </ul>
                    <div class="clearfix"></div>
                  </div>
                  
                  <div class="x_content">

                    <table class="table table-striped">
                      <thead  class="thead-light">
                        <tr>
                          <th>#</th>
                          <th>Title</th>
                          <th>Post</th>
                          <th width="15%">control</th>
                         
                        </tr>
                      </thead>
                      <tbody>
                      <?php $__currentLoopData = $options; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $i=>$option): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <tr>
                          <th scope="row"><?php echo e(++$i); ?></th>
                          <td><?php echo e($option->key); ?></td>
                          <td><?php echo e($option->value); ?></td>
   
                            <td>
                            <a href="<?php echo e(url('/options/'.$option['id'].'/edit')); ?>" class="btn btn-success" >
                            <span class="glyphicon glyphicon-edit"></span> 
                             </a>

                             <form method="POST" action="<?php echo e(url('options/'.$option->id)); ?>"  style="display:inline" >
                            
                            <button name="_method" type="hidden" value="DELETE" class="btn btn-default btn-sm">
                            <span class="glyphicon glyphicon-remove"></span>
                            </button>
                            <input type="hidden" name="_token" value="<?php echo e(csrf_token()); ?>">
                            </form>

                           </td>
                        </tr>
                       <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                      </tbody>
                    </table>

                  </div>
                </div>
              </div>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\wamp\www\app_dashboard\resources\views/options/index.blade.php ENDPATH**/ ?>