<?php $__env->startSection('content'); ?>


<div class="row">
  <div class="col-md-12 col-sm-12 col-xs-12">
    <div class="x_panel">
     
      <div class="x_content">
        <br />
<div class="row">
  <div class="col-sm-12 col-md-5 col-md-offset-3">
    <div class="booking_form_style1 text-center">
      <form id="booking_form" class="booking_form text-center" name="booking_form" action="<?php echo e(Route('lostchild.store')); ?>" method="POST"  enctype="multipart/form-data"  accept-charset="utf-8">
        <?php echo csrf_field(); ?>
          <div class="messages"></div>
        <div class="row">
            <div class="col-sm-12">
              <h3>اضف بيانات الطفل المفقود</h3>
            </div>
            <div class="col-sm-12">
                <div class="form-group">
        <input id="name" name="name" value="<?php echo e(old('name')); ?>" class="form-control form_control" placeholder="الاسم" required="required" data-error="Name is required." type="text">
        <div class="help-block with-errors"></div>
        </div>
            </div>
            <div class="col-sm-12">
                <div class="form-group">
                  <input id="address" name="address" class="form-control form_control required email" placeholder="العنوان" required="required" data-error="Email is required." type="text">
        <div class="help-block with-errors"></div>
                </div>
            </div>
            <div class="col-sm-6">
                <div class="form-group">
                    <select  class="form-control form_control required datepicker hasDatepicker" id="exampleFormControlSelect1" name="city" >
                        <?php $__currentLoopData = $cities; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $city): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <option value="<?php echo e($city->name); ?>"><?php echo e($city->name); ?></option>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                      </select>
        <div class="help-block with-errors"></div>
        </div>
            </div>
            <div class="col-sm-6">
                <div class="form-group">
                  <input id="age" name="age" class="form-control form_control required datepicker hasDatepicker" placeholder="العمر" required="required" data-error="Schedule Time is required." type="number">
                  <div class="help-block with-errors"></div>
                </div>
            </div>
        
            <div class="col-sm-6">
                <div class="form-group">
                  <input id="date" name="date" class="form-control form_control required datepicker hasDatepicker" placeholder="التاريخ" required="required" data-error="Schedule Time is required." type="date">
                  <div class="help-block with-errors"></div>
                </div>
            </div>
        
            <div class="col-sm-6">
                <div class="form-group">
                       <select class="form-control form_control required datepicker hasDatepicker" name="gender" placeholder="الجنس">
                          <option value="male" selected>ذكر </option>
                        <option value="female">انثي</option>
                    </select>
                 <div class="help-block with-errors"></div>
                </div>
            </div>
        
            <div class="col-sm-12">
              <div class="form-group">
                <input id="telephone" name="telephone" class="form-control form_control required datepicker hasDatepicker" placeholder="رقم التليفون" required="required" data-error="Schedule Time is required." type="number">
                 <div class="help-block with-errors"></div>
                 </div>
              </div>
        
                <div class="col-sm-12">
                        <div class="form-group">
                                <textarea name="notes" id="notes" required="required" class="form-control form_control required datepicker hasDatepicker" placeholder="ملاحظات"></textarea>
                <div class="help-block with-errors"></div>
                </div>
                    </div>
        
                    <div class="col-sm-12">
                            <div class="form-group">
                                    <input type="file" name="image" id="image" class="form-control form_control required datepicker hasDatepicker" placeholder="صوره"> </div>
                    <div class="help-block with-errors"></div>
                    </div>
                        
                        <div class="col-sm-6">
                                <div class="form-group">
                                        <input type="hidden" id="status" name="status" value="0" >
                        <div class="help-block with-errors"></div>
                        </div>
                            </div>
                            <div class="col-sm-6">
                                    <div class="form-group">
                                            <input type="hidden" id="type" name="type" value="lost" >
                            <div class="help-block with-errors"></div>
                            </div>
                                </div>
          
            <div class="col-sm-12">
                <div class="form-group">
                  <input name="form-botcheck" class="form-control" type="hidden" value="">
                  <button type="submit" class="btn btn-lg ulockd-btn-thm2 btn-block ">اضافه</button>
                </div>
            </div>
          </div>
        </form>
    </div>
  </div>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('front.layouts.main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\wamp\www\ShoofToday\resources\views/front/lost/create.blade.php ENDPATH**/ ?>