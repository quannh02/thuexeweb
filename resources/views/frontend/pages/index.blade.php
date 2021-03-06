@extends('frontend.master')
@section('description', 'Đây là trang chủ')
@section('content')
			<div class="col-xs-12 col-md-9-5">
				<div class="row_car_hot_group">
				<div class="title_car_hot"><i class="fa fa-car"></i><a href="" class="title_b_car">Xe du lịch 45 chỗ</a></div>
        			<div class="row">
						@foreach($car_bonlam as $car)
                        <div class="box_car_hot col-md-4 col-xs-12 col-sm-6 clearfix">
                            <div class="div_name_car_hot">
                                <a href="{{ url('chitiet', $car->xe_id ) }}"><img class="img_car_list img img-responsive" src="{{ url('public/user/images', $car->url_hinhxe) }}"></a>
                                <div class="a_name_car_hot">
                                    <a href="{{ url('chitiet', $car->xe_id ) }}">Thuê xe du lịch {{ $car->ten_xe }}</a>
                                </div>
			                <div class="clearfix">
			                  
                               <div class="b_car_information">
			                        <div class="tbold">Hiệu: {{ App\Models\Brand::find($car->hang_id)->hang_name }}</div>
			                        <div>Số chỗ: <span class="tbold">{{ $car->socho_xe }} chỗ</span></div>
			                    </div>
			                </div>
                            <div class="div_book_car pull-right">
                                        <a href="{{ url('chitiet', $car->xe_id) }}" class="a_book_car">Xem chi tiết</a>
                            </div>
                            </div>
						</div>
                        @endforeach	
			        </div>
				</div> 
				<!-- end row-car-hot-group -->
				<div class="row_car_hot_group">
				<div class="title_car_hot"><i class="fa fa-car"></i><a href="" class="title_b_car">Xe du lịch 35 chỗ</a></div>
        			<div class="row">
                        @foreach($car_balam as $car)
						<div class="box_car_hot col-md-4 col-xs-12 col-sm-6">
                            <div class="div_name_car_hot">
                                <a href="{{ url('chitiet', $car->xe_id ) }}"><img class="img_car_list img img-responsive" src="{{ url('public/user/images', $car->url_hinhxe) }}"></a>
                                <div class="a_name_car_hot">
                                    <a href="{{ url('chitiet', $car->xe_id ) }}">Thuê xe du lịch {{ $car->hang_xe }} {{ $car->ten_xe }}</a>
                                </div>
                            <div class="clearfix">
                              
                               <div class="b_car_information">
                                    <div class="tbold">Hiệu: {{ App\Models\Brand::find($car->hang_id)->hang_name }}</div>
                                    <div>Số chỗ: <span class="tbold">{{ $car->socho_xe }} chỗ</span></div>

                                </div>
                            </div>
                            <div class="div_book_car pull-right">
                                        <a href="{{ url('chitiet', $car->xe_id) }}" class="a_book_car">Xem chi tiết</a>
                            </div>
                            </div>
                        </div>
                        @endforeach
                       
			        </div>
				</div> 

                <div class="row_car_hot_group">
                <div class="title_car_hot"><i class="fa fa-car"></i><a href="" class="title_b_car">Xe du lịch 29 chỗ</a></div>
                    <div class="row">
                        @foreach($car_haichin as $car)
                        <div class="box_car_hot col-md-4 col-xs-12 col-sm-6">
                            <div class="div_name_car_hot">
                                <a href="{{ url('chitiet', $car->xe_id ) }}"><img class="img_car_list img img-responsive" src="{{ url('public/user/images', $car->url_hinhxe) }}"></a>
                                <div class="a_name_car_hot">
                                    <a href="{{ url('chitiet', $car->xe_id ) }}">Thuê xe du lịch {{ $car->ten_xe }}</a>
                                </div>
                            <div class="clearfix">
                              
                               <div class="b_car_information">
                                    <div class="tbold">Hiệu: {{ App\Models\Brand::find($car->hang_id)->hang_name }}</div>
                                    <div>Số chỗ: <span class="tbold">{{ $car->socho_xe }} chỗ</span></div>
                                </div>
                            </div>
                            <div class="div_book_car pull-right">
                                        <a href="{{ url('chitiet', $car->xe_id) }}" class="a_book_car">Xem chi tiết</a>
                            </div>
                            </div>
                        </div>
                        @endforeach
                        
                    </div>
                </div> 

                <div class="row_car_hot_group">
                <div class="title_car_hot"><i class="fa fa-car"></i><a href="" class="title_b_car">Xe du lịch 16 chỗ</a></div>
                    <div class="row">
                        @foreach($car_muoisau as $car)
                        <div class="box_car_hot col-md-4 col-sm-4 col-sm-6 col-xs-12">
                            <div class="div_name_car_hot">
                                <a href="{{ url('chitiet', $car->xe_id ) }}"><img class="img_car_list img img-responsive" src="{{ url('public/user/images', $car->url_hinhxe) }}"></a>
                                <div class="a_name_car_hot">
                                    <a href="{{ url('chitiet', $car->xe_id ) }}">Thuê xe du lịch {{ $car->ten_xe }}</a>
                                </div>
                            <div class="clearfix">
                              
                               <div class="b_car_information">
                                    <div class="tbold">Hiệu: {{ App\Models\Brand::find($car->hang_id)->hang_name }}</div>
                                    <div>Số chỗ: <span class="tbold">{{ $car->socho_xe }} chỗ</span></div>

                                </div>
                            </div>
                            <div class="div_book_car pull-right">
                                        <a href="{{ url('chitiet', $car->xe_id) }}" class="a_book_car">Xem chi tiết</a>
                            </div>
                            </div>
                        </div>
                        @endforeach
                        
                    </div>
                </div> 

                 <div class="row_car_hot_group">
                <div class="title_car_hot"><i class="fa fa-car"></i><a href="" class="title_b_car">Xe du lịch 7 chỗ</a></div>
                    <div class="row">
                        @foreach($car_bay as $car)
                        <div class="box_car_hot col-md-4 col-sm-6 col-xs-12">
                            <div class="div_name_car_hot">
                                <a href="{{ url('chitiet', $car->xe_id ) }}"><img class="img_car_list img img-responsive" src="{{ url('public/user/images', $car->url_hinhxe) }}"></a>
                                <div class="a_name_car_hot">
                                    <a href="{{ url('chitiet', $car->xe_id ) }}">Thuê xe du lịch {{ $car->ten_xe }}</a>
                                </div>
                            <div class="clearfix">
                              
                               <div class="b_car_information">
                                    <div class="tbold">Hiệu: {{ App\Models\Brand::find($car->hang_id)->hang_name }}</div>
                                    <div>Số chỗ: <span class="tbold">{{ $car->socho_xe }} chỗ</span></div>
                                </div>
                            </div>
                            <div class="div_book_car pull-right">
                                        <a href="{{ url('chitiet', $car->xe_id) }}" class="a_book_car">Xem chi tiết</a>
                            </div>
                            </div>
                        </div>
                        @endforeach
                        
                    </div>
                </div> 

                 <div class="row_car_hot_group">
                <div class="title_car_hot"><i class="fa fa-car"></i><a href="" class="title_b_car">Xe du lịch 4 chỗ</a></div>
                    <div class="row">
                        @foreach($car_bon as $car)
                        <div class="box_car_hot col-md-4 col-sm-6 col-xs-12">
                            <div class="div_name_car_hot">
                                <a href="{{ url('chitiet', $car->xe_id ) }}"><img class="img_car_list img img-responsive" src="{{ url('public/user/images', $car->url_hinhxe) }}"></a>
                                <div class="a_name_car_hot">
                                    <a href="{{ url('chitiet', $car->xe_id ) }}">Thuê xe du lịch {{ $car->ten_xe }}</a>
                                </div>
                            <div class="clearfix">
                              
                               <div class="b_car_information">
                                    <div class="tbold">Hiệu: {{ App\Models\Brand::find($car->hang_id)->hang_name }}</div>
                                    <div>Số chỗ: <span class="tbold">{{ $car->socho_xe }} chỗ</span></div>
                                </div>
                            </div>
                            <div class="div_book_car pull-right">
                                        <a href="{{ url('chitiet', $car->xe_id) }}" class="a_book_car">Xem chi tiết</a>
                            </div>
                            </div>
                        </div>
                        @endforeach
                        
                    </div>
                </div> 
				<!-- end row-car-hot-group -->
			</div> <!-- end col-xs-7 -->	
@endsection