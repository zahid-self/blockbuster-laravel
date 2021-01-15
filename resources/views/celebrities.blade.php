@extends('layouts.main')

@section('content')
<div class="hero common-hero">
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<div class="hero-ct">
					<h1>Popular Actors</h1>
					<ul class="breadcumb">
						<li class="active"><a href="#">Home</a></li>
						<li> <span class="ion-ios-arrow-right"></span> Popular Actors</li>
					</ul>
				</div>
			</div>
		</div>
	</div>
</div>
<!-- celebrity grid v2 section-->
<div class="page-single">
	<div class="container">
		<div class="row ipad-width2">
			<div class="col-md-9 col-sm-12 col-xs-12">
				<div class="row">
                    @foreach ($celebrities as $celebraty)
                        <div class="col-md-4">
                            <div class="ceb-item-style-2">
                                <img src="{{ 'https://image.tmdb.org/t/p/w300/'.$celebraty['profile_path'] }}" alt="poster" style="max-height: 180px; max-width:200px;">
                                <div class="ceb-infor">
                                    <h2><a href="{{ route('celebraty',$celebraty['id']) }}">{{ $celebraty['name'] }}</a></h2>
                                    <span>{{ $celebraty['known_for_department'] }}</span>
                                </div>
                            </div>
                        </div>
                    @endforeach
				</div>
			</div>
			<div class="col-md-3 col-xs-12 col-sm-12">
				<div class="sidebar">
					<div class="ads">
						<img src="images/uploads/ads1.png" alt="">
					</div>
					<div class="celebrities">
						<h4 class="sb-title">featured celebrity</h4>
						<div class="celeb-item">
							<a href="#"><img src="images/uploads/ava1.jpg" alt=""></a>
							<div class="celeb-author">
								<h6><a href="#">Samuel N. Jack</a></h6>
								<span>Actor</span>
							</div>
						</div>
						<div class="celeb-item">
							<a href="#"><img src="images/uploads/ava2.jpg" alt=""></a>
							<div class="celeb-author">
								<h6><a href="#">Benjamin Carroll</a></h6>
								<span>Actor</span>
							</div>
						</div>
						<div class="celeb-item">
							<a href="#"><img src="images/uploads/ava3.jpg" alt=""></a>
							<div class="celeb-author">
								<h6><a href="#">Beverly Griffin</a></h6>
								<span>Actor</span>
							</div>
						</div>
						<div class="celeb-item">
							<a href="#"><img src="images/uploads/ava4.jpg" alt=""></a>
							<div class="celeb-author">
								<h6><a href="#">Justin Weaver</a></h6>
								<span>Actor</span>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
@endsection