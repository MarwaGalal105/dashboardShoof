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
        <h2>Edit User</h2>
        <ul class="nav navbar-right panel_toolbox">
          <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
          </li>
          
  </ul>
  <div class="clearfix"></div>
</div>
<div class="x_content">
  <br>
  <form method="POST" action="{{ url('dashboard/users/'.$users->id) }}" data-parsley-validate="" class="form-horizontal form-label-left" novalidate="">
  
  <input name="_method" type="hidden" value="PUT">
      {{ csrf_field() }}


    <div class="form-group">
      <label class="control-label col-md-3 col-sm-3 col-xs-12" for="name">Commertioal Name: <span class="required">*</span>
      </label>
      <div class="col-md-6 col-sm-6 col-xs-12">
        <input type="text"  name="name" value="{{$users->name}}" id="name" required="required" class="form-control col-md-7 col-xs-12">
      </div>
    </div>
    
<div class="form-group">
    <label class="control-label col-md-3 col-sm-3 col-xs-12" for="email">Email<span class="required">*</span>
    </label>
    <div class="col-md-6 col-sm-6 col-xs-12">
      <input type="email" id="email" name="email" value="{{$users->email}}" required class="form-control col-md-7 col-xs-12">
  </div>
</div>

<div  class="form-group">
  <label class="control-label col-md-3 col-sm-3 col-xs-12" for="permission">Permission:<span class="required">*</span>
    </label>
  <div class="col-md-6 col-sm-6 col-xs-12">
  <select class="form-control" name="permission"  value="{{$users->permission}}">
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
    <input type="text" name="website" id="website" value="{{$users->website}}" class="form-control col-md-7 col-xs-12">
  </div>
</div>


<div  class="form-group">
  <label class="control-label col-md-3 col-sm-3 col-xs-12" for="status">Status:
    </label>
  <div class="col-md-6 col-sm-6 col-xs-12">
  <select class="form-control" name="status" value="{{ $users->status }}">
        <option>Select status</option>
             <option value="1">Active </option>
            <option value="0">Inactive</option>

    </select>
    </div>
    </div>


<div class="form-group">
  <label class="control-label col-md-3 col-sm-3 col-xs-12" for="telephone">Telephone:
  </label>
  <div class="col-md-6 col-sm-6 col-xs-12">
    <input type="text" name="telephone" id="telephone" value="{{$users->telephone}}"  class="form-control col-md-7 col-xs-12">
  </div>
</div>


<div class="form-group">
    <label class="control-label col-md-3 col-sm-3 col-xs-12" for="department">Department: 
    </label>
    <div class="col-md-6 col-sm-6 col-xs-12">
      <select  class="form-control" name="department" >
        @foreach ($categories as $category)
            <option value="{{ $category->id }}">{{ $category->name }}</option>
        @endforeach
      </select>
    </div>
  </div>

<div class="ln_solid"></div>
<div class="form-group">
  <div class="col-md-6 col-sm-6 col-xs-12 col-md-offset-3">
    <button class="btn btn-primary" type="button"><a href="{{url('/')}}/dashboard/users" style="color:white">Cancel</a></button>
     <button class="btn btn-primary" type="reset">Reset</button>
    <button type="submit" class="btn btn-success">edit</button>
   
  </div>
</div>

 </form>
    </div>
  </div>
</div>
</div>
@endsection