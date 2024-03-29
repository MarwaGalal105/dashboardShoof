@extends('dashboard.layouts.main')

@section('content')

<div class="col-md-12 col-sm-12 col-xs-12">
<div class="x_panel">
<div class="x_title">

  <h2> Users </h2>
  <ul class="nav navbar-right panel_toolbox">
    <li> <a href="{{ url('dashboard/users/create') }}"> <i class="fa fa-plus"></i> New</a></li>


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
      <th>Name</th> 
      <th>email</th>
      <th>control</th>
      
    </tr>
  </thead>
  <tbody>
  @foreach($users as $i=>$user)
    <tr>  
        <th scope="row">{{++$i}}</th>                      
        <td>{{$user['name']}}</td>
        <td>{{$user['email']}}</td>    

        <td>
        <a href="{{url('dashboard/users/'.$user['id'].'dashboard/edit')}}" class="btn btn-success" >
        <span class="glyphicon glyphicon-edit"></span> 
         </a>

         <form method="POST" onclick="return confirm('Are you sure?')" action="{{ url('dashboard/users/'.$user->id) }}"  style="display:inline" >
        
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

@endsection