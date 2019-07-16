@extends('dashboard.layouts.main')

@section('content')
<div class="container">
  <div class="row justify-content-center">
    
      <div class="card">
        
        <div class="card-body">
          @if (session('status'))
            <div class="alert alert-success" role="alert">
              {{ session('status') }}
          </div>
      @endif

  </div>
  <div class="row tile_count" style='margin-bottom: 20px;margin-top: 20px;'>                  
  <div class="col-md-6 col-sm-4 col-xs-6 tile_stats_count" style='border-bottom:1px solid #D9DEE4;border-left:1px solid #D9DEE4'>
      <span class="count_top"><i class="fa fa-user"></i> Total Users</span>
      <div class="count green">{{ $countUsers }}</div>
      
  </div>
  <div class="col-md-6 col-sm-4 col-xs-6 tile_stats_count" style='border-bottom:1px solid #D9DEE4;border-left:1px solid #D9DEE4''>
      <span class="count_top"><i class="fa fa-user"></i> Total Categories</span>
      <div class="count green">{{ $countCategories }}</div>
      
  </div>

<div class="col-md-6 col-sm-12 col-xs-12">
    <div class="x_panel">
      <div class="x_title">
      
        <h2> Categories </h2>
        <ul class="nav navbar-right panel_toolbox">
        
          <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
          </li>
         </ul>
        <div class="clearfix"></div>
      </div>
      <div class="x_content">
  
          <div class="">
            <ul class="to_do">
                @foreach($categories as $category)
              <li>
                  {{ $category->name }}
             </li>
              @endforeach
            </ul>
          </div>
        </div>
    </div>
  </div>



  <div class="col-md-6 col-sm-12 col-xs-12">
      <div class="x_panel">
        <div class="x_title">
        
          <h2> Users </h2>
          <ul class="nav navbar-right panel_toolbox">
          
            <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
            </li>
           </ul>
          <div class="clearfix"></div>
        </div>
        <div class="x_content">
    
            <div class="">
              <ul class="to_do">
                  @foreach($users as $user)
                <li>
                    {{ $user->name }}
               </li>
                @endforeach
              </ul>
            </div>
          </div>
      </div>
    </div>
  


@endsection
