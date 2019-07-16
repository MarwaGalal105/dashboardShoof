@extends('front.layouts.main')
@section('content')
<div class="ulockd-inner-home">
    <div class="container text-center">
        <div class="row">
            <div class="ulockd-inner-conraimer-details">
                <div class="col-md-12">
                    <h1 class="text-uppercase">مفقودين</h1>
                </div>
                <div class="col-md-12">
                    <div class="ulockd-icd-layer">
                        <ul class="list-inline ulockd-icd-sub-menu">
                            <li><a href="{{ url('home') }}"> الرئيسيه </a></li>
                            <li><a href="#"> > </a></li>
                            <li> <a href="{{ url('lostchild') }}">مفقودين </a> </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<section class="ulockd-shop">
    <div class="container">
        <div class="row">
          
        </div>
        <div class="row">
            <div class="col-md-8 col-lg-9">
                <div class="row ulockd-mrgn1260 ulockd-shop-menubar ulockd-mrgb35">
                    {{-- <div class="col-lg-7">
                        <ul class="list-inline">
                            <li><span class="flaticon-four-black-squares text-thm"></span></li>
                            <li><p>Showing 1-4 of 28 results</p></li>
                        </ul>
                    </div> --}}
                    <form action="{{ route('search')}}">
                        
                        <div class="col-lg-5">
                            <div class="input-group ulockd-product-searchbar">
                                <input type="text" class="form-control" name="search" placeholder="ابحث بالاسم او رقم التليفون">
                                <span class="input-group-btn">
                                    <button class="btn btn-default" type="submit">Search</button>
                                </span>
                            </div>
                        </div>
                    </form>
                </div>
                <div class="row ulockd-mrgn1260">
                    @foreach ($info as $data)
                    @if($data->type=='lost')
                    <div class="col-sm-6 col-md-6 col-lg-4 clearfix">
                        <div class="ulockd-shop-item">
                            <div class="ulockd-product-img">
                                <img class="img-responsive img-whp" src="{{asset('public/uploads/'.$data->image)}}" alt="1.jpg">
                                <div class="price-tag">{{ $data->type }}</div>
                            </div>
                            <div class="ulockd-product-details">
                                {{-- <h4 class="ulockd-product-price">Price: <span class="text-thm">$14.99</span></h4>
                                <ul class="list-inline"> 
                                    <li><span class="fa fa-star text-thm"></span></li>
                                    <li><span class="fa fa-star text-thm"></span></li>
                                    <li><span class="fa fa-star text-thm"></span></li>
                                    <li><span class="fa fa-star text-thm"></span></li>
                                    <li><span class="fa fa-star text-thm"></span></li>
                                </ul> --}}
                                <h3>{{ $data->name }}</h3>
                                <p>{{ $data->notes }}</p>
                                <a class="btn btn-lg ulockd-btn-styledark hvr-bounce-to-right" href="{{ url('lostchild/'.$data->id) }}">قراءه المزيد</a>
                            </div>
                        </div>
                    </div>
                    @endif                        
                    @endforeach
                  
                    
                   
                </div>
            </div>
        <div class="col-md-4 col-lg-3 ulockd-pad-zero pad15-xs">
         
            <h3 class="ulockd-bb-dashed"><span class="flaticon-calendar text-thm"></span>مفقودين</h3>
            <div class="ulockd-lp">
                <div class="ulockd-latest-post">
                    @if (isset($item))
                        @foreach ($item as $data)
                            <div class="ulockd-latest-post">
                                <div class="media">
                                    <div class="media-right pull-right">
                                        <a href="#">
                                              <img class="media-object thumbnail" src="{{asset('public/uploads/'.$data->image)}}" height="65" width="90" alt="1.jpg">
                                        </a>
                                    </div>
                                    <div class="media-body">
                                        <h4 class="media-heading">{{ $data->name }}</h4>
                                       {{$data->notes}} <a href="{{ url('lostchild/'.$data->id) }}"> <strong class="text-thm"> المزيد... </strong> </a>
                                       
                                    </div>
                                </div>
                            </div>
                           @endforeach
                           @endif
                   
                </div>
            </div>
            <div class="ulockd-ip-tag">
                <div class="ulockd-tag-list-title">
                    <h3 class="ulockd-bb-dashed"><span class="flaticon-mark text-thm"></span> Search by Tags</h3>
                </div>
                <ul class="list-inline ulockd-tag-list-details">
                    <li><a href="#">Photoshop</a></li>
                    <li><a href="#">Design</a></li>
                    <li><a href="#">Tutorial</a></li>
                    <li><a href="#">Corses</a></li>
                    <li><a href="#">Primum</a></li>
                    <li><a href="#">Designtuto</a></li>
                    <li><a href="#">Autocad</a></li>
                    <li><a href="#">Development</a></li>
                </ul>
            </div>
            <div class="ulockd-ip-flickr">
                <div class="ulockd-flickr-list-title">
                    <h3 class="ulockd-bb-dashed"><span class="flaticon-flickr text-thm"></span> Flickr Feed</h3>
                    <div class="flickr-photo"></div>
                </div>
            </div>
            <div class="ulockd-ip-flickr">
                <div class="ulockd-flickr-list-title">
                    <h3 class="ulockd-bb-dashed"><span class="flaticon-twitter-logo-on-black-background text-thm"></span> Twitter Feed</h3>
                    <div class="twitter"></div>
                </div>
            </div>
        </div>
            <div class="col-lg-12">
                <nav class="ulockd-shop-pagination" aria-label="Page navigation">
                  <ul class="pagination">
                    <li>
                      <a href="#" aria-label="Previous">
                        <span aria-hidden="true">&laquo;</span>
                      </a>
                    </li>
                    <li><a href="#">1</a></li>
                    <li><a href="#">2</a></li>
                    <li><a href="#">3</a></li>
                    <li><a href="#">4</a></li>
                    <li><a href="#">5</a></li>
                    <li>
                      <a href="#" aria-label="Next">
                        <span aria-hidden="true">&raquo;</span>
                      </a>
                    </li>
                  </ul>
                </nav>
            </div>
        </div>
    </div>
</section>
@endsection