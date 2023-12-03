@extends('navbar.navbar')
@section('content')
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>HOME</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.css"/>
	<link rel="stylesheet" href="{{asset('css/home.css')}}">
</head>
<body>
    <div class="content">
        <!-- Slider tipo swiper -->
        <div class="swiper">
            <!-- clase q controla todo el slide -->
            <div class="swiper-wrapper">
            <!-- Slides -->
            @forelse ($carousel as $item)
                <div class="swiper-slide">
                    <img src="img/carousel/{{$item->urlphoto}}" class="d-block w-100">
                    <div class="text-overlay left">
                        <h5>{{$item->description}}</h5>
                        <a href="{{$item->link}}" class="btn btn-danger"> Ver mas</a>
                    </div>
                </div>
            @empty
            @endforelse
        </div>
        <!-- clase slide paginacion -->
        <div class="swiper-pagination"></div>

        <!-- botones previo y siguiente del slide -->
        <div class="swiper-button-prev"></div>
        <div class="swiper-button-next"></div>
    </div>
</div>
  <script src="https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.js"></script>
  <script type="text/javascript" src="{{asset('js/home.js')}}"></script>
  @include('subscriber.subscriber_registration')
</body>
</html>
@endsection




