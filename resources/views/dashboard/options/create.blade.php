@extends('dashboard.layouts.main')

@section('content')
<link rel='stylesheet' href='https://use.fontawesome.com/releases/v5.7.0/css/all.css' integrity='sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ' crossorigin='anonymous'>
<div class="clearfix"></div>
<div class="row">
  <div class="col-md-12 col-sm-12 col-xs-12">
    <div class="x_panel">
      <div class="x_title">
        <h2>Create Option</h2>
        <ul class="nav navbar-right panel_toolbox">
          <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
          </li>
      
        </ul>
        <div class="clearfix"></div>
      </div>
      <div class="x_content">
  <br>
  <form method="POST" action="{{ Route('options.store') }}" data-parsley-validate="" class="form-horizontal form-label-left" novalidate="">

      {{ csrf_field() }}


    <div class="form-group">
      <label class="control-label col-md-3 col-sm-3 col-xs-12" for="key">Key <span class="required">*</span>
      </label>
      <div class="col-md-6 col-sm-6 col-xs-12">
        <input type="text"  name="key" id="key" required="required" class="form-control col-md-7 col-xs-12">
      </div>
    </div>

    <div class="form-group">
      <label class="control-label col-md-3 col-sm-3 col-xs-12" for="value">Value<span class="required">*</span>
      </label>
      <div class="col-md-6 col-sm-6 col-xs-12">
        <input type="text" name="value" id="value" required="required" class="form-control col-md-7 col-xs-12">
      </div>
    </div>

    <div class="form-group">
      <div class="col-md-6 col-sm-6 col-xs-12 col-md-offset-3">
        <button class="btn btn-primary" type="button"><a href="{{url('/')}}/options" style="color:white">Cancel</a></button>
        <button class="btn btn-warning" type="reset">Reset</button>
        <button type="submit" class="btn btn-success"><a href="{{url('/')}}/options" style="color:white">Create</a></button>
       
      </div>
    </div>
        
      </form>
    </div>
  </div>
</div>
</div>
@endsection