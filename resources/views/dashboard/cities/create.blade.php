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
        <h2>Add City</h2>
        <ul class="nav navbar-right panel_toolbox">
          <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a></li>
        </ul>
        <div class="clearfix"></div>
      </div>
      <div class="x_content">
        <br />
      <form action="{{ Route('cities.store') }}" method="POST" data-parsley-validate class="form-horizontal form-label-left" data-parsley-validate="" novalidate="">
        @csrf

        <div class="form-group">
            <label class="control-label col-md-3 col-sm-3 col-xs-12" for="name">Name<span class="required">*</span>
            </label>
            <div class="col-md-6 col-sm-6 col-xs-12">
              <input type="text" id="name" name="name" value="{{ old('name') }}" required class="form-control col-md-7 col-xs-12">
            </div>
          </div>

       
          
          <div class="form-group">
            <div class="col-md-6 col-sm-6 col-xs-12 col-md-offset-3" style="margin-top:20px">
              <button class="btn btn-primary" type="button"><a href="{{url('/')}}/cities" style="color:white">Cancel</a></button>
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