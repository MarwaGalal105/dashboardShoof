@extends('front.layouts.main')
@section('content')


<div class="ulockd-inner-home">
		<div class="container text-center">
			<div class="row">
				<div class="ulockd-inner-conraimer-details">
					<div class="col-md-12">
						<h1 class="text-uppercase">تفاصيل عن الطفل المفقود</h1>
					</div>
					<div class="col-md-12">
						<div class="ulockd-icd-layer">
							<ul class="list-inline ulockd-icd-sub-menu"> 
                                <li><a href="{{ url('home') }}"> الرئيسيه </a></li>
                                <li><a href="#"> > </a></li>
                                <li> <a href="{{ url('lostchild') }}">مفقودين </a> </li>
                                <li><a href="#"> > </a></li>
                                <li> <a href="{{ url('lostchild/'.$info->id) }}">تفاصيل</a> </li>
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
                    {{-- <div class="col-md-6 col-md-offset-3 text-center">
                        <h2>تفاصيل عن الطفل المفقود</h2>
                    </div> --}}
                </div>
                <div class="row">
                    <div class="col-md-8 col-lg-9">
                        <div class="row ulockd-mrgn1260">
                            <div class="col-sm-6 col-md-6 col-lg-5 clearfix">
                                <div class="ulockd-product-details-img">
                                    <img class="img-responsive img-whp" src="{{asset('public/uploads/'.$info->image)}}"  alt="1.jpg">
                                </div>
                            </div>
                            <div class="col-sm-6 col-md-6 col-lg-7 clearfix">
                                <div class="ulockd-product-details">
                                    <h3 class="product-name">الاسم: <strong class="text-thm"> {{ $info->name }} </strong> </h3>
                                    <ul class="list-inline product-quantity">
                                        <li><h4 class="product-quantity">العمر:<strong class="text-thm"> {{ $info->age }} </strong></h4></li>
                                    </ul>
                                    <h3 class="product-name">المحافظه: <strong class="text-thm"> {{ $info->city }} </strong> </h3>
                                    @if($info->gender=='male')
                                    <h3 class="product-name">الجنس: <strong class="text-thm"> ذكر </strong> </h3>
                                    @else 
                                    <h3 class="product-name">الجنس: <strong class="text-thm"> انثي </strong> </h3>
                                    @endif
                                    <h3 class="product-name">رقم التليفون: <strong class="text-thm"> {{ $info->telephone }} </strong> </h3>
                                    <a class="btn btn-lg ulockd-btn-styledark hvr-bounce-to-right" href="#">Add To Cart</a>
                                </div>
                            </div>
                            <div class="col-lg-12 ulockd-mrgn1260">
                                <div class="ulockd-pd-tab bs-example bs-example-tabs" data-example-id="togglable-tabs"> 
                                    <ul class="nav nav-tabs" id="myTabs" role="tablist"> 
                                        <li role="presentation" class="active">
                                            <a href="#description" id="description-tab" role="tab" data-toggle="tab" aria-controls="description" aria-expanded="true">ملاحظات</a>
                                        </li> 
                                        {{-- <li role="presentation" class="">
                                            <a href="#specification" role="tab" id="specification-tab" data-toggle="tab" aria-controls="specification" aria-expanded="false">Specification</a>
                                        </li> 
                                        <li role="presentation" class="">
                                            <a href="#shipping" role="tab" id="shipping-tab" data-toggle="tab" aria-controls="shipping" aria-expanded="false">Shipping</a>
                                        </li>
                                        <li role="presentation" class="">
                                            <a href="#review" role="tab" id="review-tab" data-toggle="tab" aria-controls="review" aria-expanded="false">Review</a>
                                        </li> --}}
                                    </ul> 
                                    <div class="tab-content" id="myTabContent"> 
                                        <div class="tab-pane fade active in" role="tabpanel" id="description" aria-labelledby="description-tab">
                                            <p class="ulockd-mrgn1225">{{ $info->notes }}</p>
                                           
                                        </div>
                                        {{-- <div class="tab-pane fade" role="tabpanel" id="specification" aria-labelledby="specification-tab">
                                            <p class="ulockd-mrgn1225">Food truck fixie locavore, accusamus mcsweeney's marfa nulla single-origin coffee squid. Exercitation +1 labore velit, blog sartorial PBR leggings next level wes anderson artisan four loko farm-to-table craft beer twee. Qui photo booth letterpress, commodo enim craft beer mlkshk aliquip jean shorts ullamco ad vinyl cillum PBR. Homo nostrud organic, assumenda labore aesthetic magna delectus mollit. Keytar helvetica VHS salvia yr, vero magna velit sapiente labore stumptown. Vegan fanny pack odio cillum wes anderson 8-bit, sustainable jean shorts beard ut DIY ethical culpa terry richardson biodiesel. Art party scenester stumptown, tumblr butcher vero sint qui sapiente accusamus tattooed echo park.</p>
                                            <p class="ulockd-mrgn1225">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Enim, officiis aut necessitatibus assumenda eaque doloremque tempora consectetur magnam animi aperiam! Odio, nostrum, a?</p>
                                        </div>
                                        <div class="tab-pane fade" role="tabpanel" id="shipping" aria-labelledby="shipping-tab">
                                            <p class="ulockd-mrgn1225">Food truck fixie locavore, accusamus mcsweeney's marfa nulla single-origin coffee squid. Exercitation +1 labore velit, blog sartorial PBR leggings next level wes anderson artisan four loko farm-to-table craft beer twee. Qui photo booth letterpress, commodo enim craft beer mlkshk aliquip jean shorts ullamco ad vinyl cillum PBR. Homo nostrud organic, assumenda labore aesthetic magna delectus mollit. Keytar helvetica VHS salvia yr, vero magna velit sapiente labore stumptown. Vegan fanny pack odio cillum wes anderson 8-bit, sustainable jean shorts beard ut DIY ethical culpa terry richardson biodiesel. Art party scenester stumptown, tumblr butcher vero sint qui sapiente accusamus tattooed echo park.</p>
                                            <p class="ulockd-mrgn1225">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aliquid error impedit quia tenetur, natus laborum necessitatibus sit, aspernatur. Nihil, culpa debitis assumenda minus!</p>
                                        </div>
                                        <div class="tab-pane fade" role="tabpanel" id="review" aria-labelledby="review-tab">
                                            <p class="ulockd-mrgn1225">Food truck fixie locavore, accusamus mcsweeney's marfa nulla single-origin coffee squid. Exercitation +1 labore velit, blog sartorial PBR leggings next level wes anderson artisan four loko farm-to-table craft beer twee. Qui photo booth letterpress, commodo enim craft beer mlkshk aliquip jean shorts ullamco ad vinyl cillum PBR. Homo nostrud organic, assumenda labore aesthetic magna delectus mollit. Keytar helvetica VHS salvia yr, vero magna velit sapiente labore stumptown. Vegan fanny pack odio cillum wes anderson 8-bit, sustainable jean shorts beard ut DIY ethical culpa terry richardson biodiesel. Art party scenester stumptown, tumblr butcher vero sint qui sapiente accusamus tattooed echo park.</p>
                                            <p class="ulockd-mrgn1225">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Repudiandae placeat delectus similique nesciunt eos. Impedit numquam ducimus, nulla rem animi accusamus minima tempore!</p>
                                        </div> --}}
                                    </div> 
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 col-lg-3 ulockd-pad-zero pad15-xs">
                        <h3 class="ulockd-bb-dashed"><span class="flaticon-calendar text-thm"></span> مفقودين</h3>
                        <div class="ulockd-lp">
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
                           
                        </div>
                        <h3 class="ulockd-bb-dashed"><span class="flaticon-straight-quotes text-thm"></span> Testimonial</h3>
                        <div class="ulockd-inr-testimonials">
                            <p>pain was born and I will give you a complete accounf the system, and expound the actuteachings of the grea</p>
                            <div class="ulockd-tm-client-details">
                            <h4 class="text-thm">Gary Watson - <small> Seo</small></h4>
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
                    </div>
                </div>
                <div class="row ">
                    @foreach ($item as $data)
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
                    @endforeach
                    
                </div>
            </div>
        </section>
    
@endsection