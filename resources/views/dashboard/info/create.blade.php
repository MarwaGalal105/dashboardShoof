@extends('dashboard.layouts.main')
@section('content')
<script src="https://cdn.tiny.cloud/1/qobme9jymvqrcvzh7jfqenmhs791t8t7um4liezy38tgrbk7/tinymce/5/tinymce.min.js"></script>
<div class="clearfix"></div>
@if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif


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
      <form action="{{ Route('info.store') }}" method="POST"  enctype="multipart/form-data" data-parsley-validate class="form-horizontal form-label-left" data-parsley-validate="" novalidate="">
        @csrf

        <div class="form-group">
            <label class="control-label col-md-3 col-sm-3 col-xs-12" for="name">Name<span class="required">*</span>
            </label>
            <div class="col-md-6 col-sm-6 col-xs-12">
              <input type="text" id="name" name="name" value="{{ old('name') }}" required class="form-control col-md-7 col-xs-12">
            </div>
          </div>


          <div class="form-group">
            <label class="control-label col-md-3 col-sm-3 col-xs-12" for="address">Address<span class="required">*</span>
            </label>
            <div class="col-md-6 col-sm-6 col-xs-12">
              <input type="text" id="address" name="address" value="{{ old('address') }}" required class="form-control col-md-7 col-xs-12">
            </div>
          </div>

         <div class="form-group">
              <label class="control-label col-md-3 col-sm-3 col-xs-12" for="city">City: 
              </label>
              <div class="col-md-6 col-sm-6 col-xs-12">
                <select  class="form-control" id="exampleFormControlSelect1" name="city">
                  @foreach ($cities as $city)
                      <option value="{{ $city->id }}">{{ $city->name }}</option>
                  @endforeach
                </select>
              </div>
        </div>


          <div class="form-group">
            <label class="control-label col-md-3 col-sm-3 col-xs-12" for="age">Age<span class="required">*</span>
            </label>
            <div class="col-md-6 col-sm-6 col-xs-12">
              <input type="number" id="age" name="age" value="{{ old('age') }}" required class="form-control col-md-7 col-xs-12">
            </div>
          </div>

          <div class="form-group">
            <label class="control-label col-md-3 col-sm-3 col-xs-12" for="date">Date<span class="required">*</span>
            </label>
            <div class="col-md-6 col-sm-6 col-xs-12">
              <input type="date" id="date" name="date" value="{{ old('date') }}" required class="form-control col-md-7 col-xs-12">
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
              <input type="number" id="telephone" name="telephone" value="{{ old('telephone') }}" required class="form-control col-md-7 col-xs-12">
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
                @foreach ($categories as $category)
                  <option value="{{$category->id}}">{{$category->name}}</option>
                @endforeach 
              </select>
            </div>
        </div>
          <div class="form-group">
            <div class="col-md-6 col-sm-6 col-xs-12 col-md-offset-3" style="margin-top:20px">
              <button class="btn btn-primary" type="button"><a href="{{url('/')}}/info" style="color:white">Cancel</a></button>
              <button class="btn btn-warning" type="reset">Reset</button>
              <button type="submit" class="btn btn-success">Create</button>
            </div>
          </div>
      </form>
      </div>
    </div>
  </div>
</div>

@endsection