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
                    <h2>Edit User</h2>
                    <ul class="nav navbar-right panel_toolbox">
                      <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                      </li>
                      
                    </ul>
                    <div class="clearfix"></div>
                  </div>
                  <div class="x_content">
                    <br>
                    <form method="POST" action="<?php echo e(url('users/'.$users->id)); ?>" data-parsley-validate="" class="form-horizontal form-label-left" novalidate="">
                    
                    <input name="_method" type="hidden" value="PUT">
                        <?php echo e(csrf_field()); ?>



                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="name">Name: <span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input type="text"  name="name" value="<?php echo e($users->name); ?>" id="name" required="required" class="form-control col-md-7 col-xs-12">
                        </div>
                      </div>
                      
                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="email">Email:<span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input type="email" name="email" id="email" value="<?php echo e($users->email); ?>" required="required" class="form-control col-md-7 col-xs-12">
                        </div>
                      </div>

                      <div class="form-group">
                        
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input type="hidden" name="password" id="password" value="<?php echo e($users->password); ?>" required="required" class="form-control col-md-7 col-xs-12">
                        </div>
                      </div>
                        
                      <div  class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="permission">Permission:<span class="required">*</span>
                          </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                        <select class="form-control" name="permission"  value="<?php echo e($users->permission); ?>">
                              <option>Select permission</option>
                              <option value="user" >User </option>
                              <option value="editor"> Editor</option>
                              <option value="admin">Admin</option>

  
                          </select>
                          </div>
                          </div>
  

                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="website">Website:
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input type="text" name="website" id="website" value="<?php echo e($users->website); ?>" class="form-control col-md-7 col-xs-12">
                        </div>
                      </div>


                      <div  class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="status">Status:
                          </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                        <select class="form-control" name="status" value="<?php echo e($users->status); ?>">
                              <option>Select status</option>
                                   <option value="1">Active </option>
                                  <option value="0">Inactive</option>
  
                          </select>
                          </div>
                          </div>
  


                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="offersCount">Offers Count:
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input type="text" name="offersCount" id="offersCount" value="<?php echo e($users->offersCount); ?>"  class="form-control col-md-7 col-xs-12">
                        </div>
                      </div>

                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="telephone">Telephone:
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input type="text" name="telephone" id="telephone" value="<?php echo e($users->telephone); ?>"  class="form-control col-md-7 col-xs-12">
                        </div>
                      </div>

                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="companyName">Company Name:
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input type="text" name="companyName" id="companyName" value="<?php echo e($users->companyName); ?>"  class="form-control col-md-7 col-xs-12">
                        </div>
                      </div>

                      <div class="form-group">
                          <label class="control-label col-md-3 col-sm-3 col-xs-12" for="department">Department: 
                          </label>
                          <div class="col-md-6 col-sm-6 col-xs-12">
                            <select  class="form-control" name="department" >
                              <?php $__currentLoopData = $categories; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $category): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                  <option value="<?php echo e($category->id); ?>"><?php echo e($category->name); ?></option>
                              <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            </select>
                          </div>
                        </div>
  

                      <div  class="form-group">
                      <label class="control-label col-md-3 col-sm-3 col-xs-12" for="workDays_from">Work Days From:<span class="required">*</span>
                        </label>
                      <div class="col-md-6 col-sm-6 col-xs-12">
                      <select class="form-control" name="workDays_from" id="workDays_from" value="<?php echo e($users->workDays_from); ?>">
                            <option>Select day</option>
                                 <option value="saturday">Saturday</option>
                                <option value="sunday"> Sunday</option>
                                <option value="monday"> Monday</option>
                                <option value="tuesday"> Tuesday</option>
                                <option value="wednesday"> Wednesday</option>
                                <option value="thursday"> Thursday</option>
                                <option value="friday"> Friday</option>

                        </select>
                        </div>
                        </div>

                        <div  class="form-group">
                      <label class="control-label col-md-3 col-sm-3 col-xs-12" for="workDays_to">Work Days To:<span class="required">*</span>
                        </label>
                      <div class="col-md-6 col-sm-6 col-xs-12">
                      <select class="form-control" name="workDays_to" id="workDays_to"value="<?php echo e($users->workDays_to); ?>" >
                            <option>Select day</option>
                                 <option value="saturday">Saturday</option>
                                <option value="sunday"> Sunday</option>
                                <option value="monday"> Monday</option>
                                <option value="tuesday"> Tuesday</option>
                                <option value="wednesday"> Wednesday</option>
                                <option value="thursday"> Thursday</option>
                                <option value="friday"> Friday</option>

                        </select>
                        </div>
                        </div>

                           <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="workTime_from">Work Time From: 
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input type="time" name="workTime_from" id="workTime_from"  value="<?php echo e($users->workTime_from); ?>" id="workTime_from" class="form-control col-md-7 col-xs-12">
                        </div>
                      </div>

                         <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="workTime_to">Work Time To: 
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input type="time" name="workTime_to" id="workTime_to" value="<?php echo e($users->workTime_to); ?>" id="workTime_to" class="form-control col-md-7 col-xs-12">
                        </div>
                      </div>
                      <div class="ln_solid"></div>
                      <div class="form-group">
                        <div class="col-md-6 col-sm-6 col-xs-12 col-md-offset-3">
                          <button class="btn btn-primary" type="button">Cancel</button>
						               <button class="btn btn-primary" type="reset">Reset</button>
                          <button type="submit" class="btn btn-success">edit</button>
                         
                        </div>
                      </div>

                    </form>
                  </div>
                </div>
              </div>
            </div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\wamp\www\firstapp\resources\views/users/edit.blade.php ENDPATH**/ ?>