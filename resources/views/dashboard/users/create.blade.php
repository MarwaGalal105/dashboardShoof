@extends('dashboard.layouts.main')
@section('content')
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
        <h2>Create User</h2>
        <ul class="nav navbar-right panel_toolbox">
          <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
          </li>
          
          </ul>
        <div class="clearfix"></div>
    </div>
<div class="x_content">
  <br>
  <form method="POST" action="{{ Route('users.store') }}" data-parsley-validate="" class="form-horizontal form-label-left" novalidate="">

    {{ csrf_field() }}


  <div class="form-group">
    <label class="control-label col-md-3 col-sm-3 col-xs-12" for="name">Commertioal Name: <span class="required">*</span>
    </label>
    <div class="col-md-6 col-sm-6 col-xs-12">
      <input  type="text"  name="name" id="name" value="{{old('name')}}" class="form-control col-md-7 col-xs-12" required>
    </div>
  </div>
  
  <div class="form-group">
    <label class="control-label col-md-3 col-sm-3 col-xs-12" for="email">Email:<span class="required">*</span>
    </label>
    <div class="col-md-6 col-sm-6 col-xs-12">
      <input type="email" name="email" id="email"  value="{{old('email')}}" required="required" class="form-control col-md-7 col-xs-12">
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
    <label for="password-confirm" class="control-label col-md-3 col-sm-3 col-xs-12">Confirm password:<span class="required">*</span></label>

    <div class="col-md-6">
        <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
    </div>
</div>
  <div  class="form-group">
  <label class="control-label col-md-3 col-sm-3 col-xs-12" for="permission">Permission:<span class="required">*</span>
    </label>
  <div class="col-md-6 col-sm-6 col-xs-12">
  <select class="form-control" name="permission" >
             <option value="user" selected>User </option>
            <option value="editor"> Editor</option>
            <option value="admin">Admin</option>

    </select>
    </div>
    </div>



  <div class="form-group">
    <label class="control-label col-md-3 col-sm-3 col-xs-12" for="website">Website:
    </label>
    <div class="col-md-6 col-sm-6 col-xs-12">
      <input type="text" name="website"   value="{{old('website')}}" id="website"  class="form-control col-md-7 col-xs-12">
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
    <label class="control-label col-md-3 col-sm-3 col-xs-12" for="telephone">Telephone: 
    </label>
    <div class="col-md-6 col-sm-6 col-xs-12">
      <input type="number" name="telephone"  value="{{old('telephone')}}" id="telephone" class="form-control col-md-7 col-xs-12">
    </div>
  </div>

  <div class="form-group">
    <label class="control-label col-md-3 col-sm-3 col-xs-12" for="department">Department: 
    </label>
    <div class="col-md-6 col-sm-6 col-xs-12">
      <select  class="form-control" id="exampleFormControlSelect1" name="department">
        @foreach ($categories as $category)
            <option value="{{ $category->id }}">{{ $category->name }}</option>
        @endforeach
      </select>
    </div>

  </div>

 
  
  <div class="ln_solid"></div>
  <div class="form-group">
    <div class="col-md-6 col-sm-6 col-xs-12 col-md-offset-3">
      <button class="btn btn-primary" type="button"><a href="{{url('/')}}/users" style="color:white">Cancel</a></button>
      <button class="btn btn-primary" type="reset">Reset</button>
      <button type="submit" class="btn btn-success"><a href="{{url('/users')}}" style="color:white">Create</a></button>
     
    </div>
  </div>

    </form>
  </div>
</div>
  </div>
</div>
@endsection