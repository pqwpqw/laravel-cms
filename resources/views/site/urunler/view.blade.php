@extends('layouts.site')
@section('seo')
<meta name="description" content="{{$data[0]['aciklama']}}">
<meta name="keywords" content="{{$data[0]['anahtar_kelime']}}">
<title>{{$data[0]['baslik']}}</title>
@endsection 
@section('content')
    
<div class="about-inner bg-grey bd-bottom padding">
    <div class="container">
        <div class="row about-inner-wrap">
            <div class="col-md-6 xs-padding">
                <div class="about-inner-content">
                    @foreach ($data as $key => $value)
                    <h2>{{$value['baslik']}}</h2>
                    <!--<h2>{{$value['fiyat']}} ₺</h2>-->
                    <p>{!!$value['aciklama']!!}</p>
                <a href="{{route('site.offer.index')}}" class="default-btn">Kayıt Ol</a>
                    @endforeach
                </div>
            </div>
            <div class="col-md-6 xs-padding">
                <div class="about-inner-bg">
                    <img src="{{asset(\App\Helper\mHelper::largeImage($value['image']))}}" alt="img">
                </div>
            </div>
        </div>
    </div>
</div><!-- /About Section -->
@endsection