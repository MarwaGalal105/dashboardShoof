@extends('dashboard.layouts.main')
@section('content')

<div class="page-title">

<div class="clearfix"></div>
<div class="row">
  <div class="col-md-12 col-sm-12 col-xs-12">
    <div class="x_panel">
      <div class="x_title">
        <h2>categories</h2>
        <ul class="nav navbar-right panel_toolbox">
          <li><a href="{{ url('dashboard/categories/create') }}"><i class="fa fa-plus"></i> New</a></li>
          <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a></li>
        </ul>
        <div class="clearfix"></div>
      </div>
      <div class="x_content">
        <br />
       
                    
  <table class="table table-hover">
      <thead>
        <tr>
          <th>#</th>
          <th>Title</th>
          <th style="width:15%">Control</th>
        </tr>
      </thead>
      <tbody>
          @foreach ( $categories as $i=>$category )
        <tr>
          <th scope="row">{{++$i}}</th>
          <td>{{$category->name}}</td>
          <td>
              <a href="{{url('/dashboard/categories/'.$category['id'].'/edit')}}" class="btn btn-success" >
              <span class="glyphicon glyphicon-edit"></span> 
               </a>

               <form method="POST" onclick="return confirm('Are you sure?')" action="{{ url('dashboard/categories/'.$category->id) }}"  style="display:inline" >
              
              <button name="_method" type="hidden" value="DELETE" class="btn btn-default btn-sm">
              <span class="glyphicon glyphicon-remove"></span>
              </button>
              <input type="hidden" name="_token" value="{{ csrf_token() }}">
              </form>

             </td>
        </tr>
        @endforeach
      </tbody>
    </table>


      </div>
    </div>
  </div>
</div>

@endsection