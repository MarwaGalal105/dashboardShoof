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
                    <h2>Form Design</h2>
                    <ul class="nav navbar-right panel_toolbox">
                      <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                      </li>
                      
                    </ul>
                    <div class="clearfix"></div>
                  </div>
                  <div class="x_content">
                    <br>
                    <form method="POST" action="<?php echo e(route('users.store')); ?>" data-parsley-validate="" class="form-horizontal form-label-left" novalidate="">

                      <?php echo e(csrf_field()); ?>



                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="name"> Name:<span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input  type="text"  name="name" id="name" value="<?php echo e(old('name')); ?>" class="form-control col-md-7 col-xs-12" required>
                        </div>
                      </div>
                      
                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="email">Email:<span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input type="email" name="email" id="email"  value="<?php echo e(old('email')); ?>" required="required" class="form-control col-md-7 col-xs-12">
                        </div>
                      </div>

                        
                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="password">Password:<span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input type="password" name="password" id="password" required="required" class="form-control col-md-7 col-xs-12">
                        </div>
                      </div>

                      <div class="form-group row">
                        <label for="password-confirm" class="control-label col-md-3 col-sm-3 col-xs-12">Confirm password</label>

                        <div class="col-md-6">
                            <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                        </div>
                    </div>
                      <div  class="form-group">
                      <label class="control-label col-md-3 col-sm-3 col-xs-12" for="permission">Permission:<span class="required">*</span>
                        </label>
                      <div class="col-md-6 col-sm-6 col-xs-12">
                      <select class="form-control" name="permission" >
                            <option>Select permission</option>
                                 <option value="user">User </option>
                                <option value="admin"> Admin</option>
                                <option value="editor"> Editor</option>

                        </select>
                        </div>
                        </div>



                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="website">Website:
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input type="text" name="website"   value="<?php echo e(old('website')); ?>" id="website"  class="form-control col-md-7 col-xs-12">
                        </div>
                      </div>
            
                       <div  class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="status">Status:
                          </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                        <select class="form-control" name="status" >
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
                          <input type="number" name="offersCount"  value="<?php echo e(old('offersCount')); ?>" id="offersCount" class="form-control col-md-7 col-xs-12">
                        </div>
                      </div>

                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="telephone">Telephone: 
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input type="number" name="telephone"  value="<?php echo e(old('telephone')); ?>" id="telephone" class="form-control col-md-7 col-xs-12">
                        </div>
                      </div>

                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="companyName">Company Name: 
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input type="text" name="companyName"  value="<?php echo e(old('companyName')); ?>" id="companyName" class="form-control col-md-7 col-xs-12">
                        </div>
                      </div>

                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="department">Department: 
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input type="text" name="department"  value="<?php echo e(old('department')); ?>" id="department" class="form-control col-md-7 col-xs-12">
                        </div>
                      </div>

                       <div  class="form-group">
                      <label class="control-label col-md-3 col-sm-3 col-xs-12" for="workDays_from">Work Days From:<span class="required">*</span>
                        </label>
                      <div class="col-md-6 col-sm-6 col-xs-12">
                      <select class="form-control" name="workDays_from" >
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
                      <select class="form-control" name="workDays_to" >
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
                          <input type="time" name="workTime_from"  value="<?php echo e(old('workTime_from')); ?>" id="workTime_from" class="form-control col-md-7 col-xs-12">
                        </div>
                      </div>

                         <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="workTime_to">Work Time To: 
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input type="time" name="workTime_to"  value="<?php echo e(old('workTime_to')); ?>" id="workTime_to" class="form-control col-md-7 col-xs-12">
                        </div>
                      </div>
                      <div class="ln_solid"></div>
                      <div class="form-group">
                        <div class="col-md-6 col-sm-6 col-xs-12 col-md-offset-3">
                          <button class="btn btn-primary" type="button"><a href="<?php echo e(url('/')); ?>/users" style="color:white">Cancel</a></button>
						              <button class="btn btn-primary" type="reset">Reset</button>
                          <button type="submit" class="btn btn-success"><a href="<?php echo e(url('/users')); ?>" style="color:white">Create</a></button>
                         
                        </div>
                      </div>

                    </form>
                  </div>
                </div>
              </div>
            </div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\firstapp\resources\views/users/create.blade.php ENDPATH**/ ?>