@extends('layouts.site')
@section('seo')
<meta name="description" content="">
@foreach (\App\Header::where('id',1)->get()  as $item)
<title>{{$item->anasayfa_baslik}}</title>
@endforeach
@endsection 
@section('content')
 <section class="slider-section">
    <div class="slider-wrapper">
        <div id="main-slider" class="nivoSlider">
            @foreach ($slider as $key=>$value)
            <img src="{{asset(\App\Helper\mHelper::largeImage($value['image']))}}" alt="" title="#slider-caption-{{$value['id']}}"/>
            @endforeach
        </div><!-- /#main-slider -->
        @foreach ($slider as $key=>$value)
        <div id="slider-caption-{{$value['id']}}" class="nivo-html-caption slider-caption">
            <div class="display-table">
                <div class="table-cell">
                    <div class="container">
                       <div class="slider-text">
                            <h1 class="wow cssanimation fadeInTop" data-wow-delay="1s" data-wow-duration="800ms">{{$value['baslik']}}</h1>
                            <p class="wow cssanimation fadeInBottom" data-wow-delay="1s">{{$value['icerik']}}</p>
                            <?php /*<a href="{{asset(\App\Helper\mHelper::largeImage($value['image']))}}" class="default-btn wow cssanimation fadeInBottom" data-wow-delay="0.8s">Resime git</a>*/ ?>
                        </div>
                   </div>
                </div>
            </div>
        </div> <!-- /#slider-caption-1 -->
        @endforeach
    </div>
</section><!-- /#slider-Section -->


<section class="project-section bg-grey bd-bottom padding">
    <div class="container">
        <div class="section-heading mb-40 text-center">
           <h4>Etkinliklerimiz</h4>
           <h2>Neler Yapıyoruz?</h2>
        </div>
        @foreach ($services as $key => $value)
        <div id="project-carousel" class="project-carousel owl-carousel">
            <div class="project-item">
                <div class="project-thumb">
                    <img src="{{asset(\App\Helper\mHelper::largeImage($value['image']))}}" alt="img" >
                </div>
                <div class="project-content">
                    <h3>{{$value['name']}}</a></h3>
                    <!--<span class="date">15 January 2018</span>-->
                    <p>{{$value['aciklama']}}</p>
                    <a href="{{route('site.services.index',['link'=>$value['link']])}}" class="project-btn">Etkinliğe git</a>
                </div>
            </div> <!-- Item 1 -->
            @endforeach
        </div>
    </div>
</section><!-- Project Section -->


<section class="blog-section bd-bottom bg-grey padding">
        <div class="container">
            <div class="section-heading mb-40 text-center">
               <h4>Blog</h4>
               <h2>Rasgele Gönderiler</h2>
            </div>
            <div class="row">
            @foreach(\App\Blog::inRandomOrder('id')->get() as $key => $value)
                <div class="col-md-4 col-sm-6 xs-padding">
                    <div class="blog-post">
                        <img src="{{asset(\App\Helper\mHelper::largeImage($value['image']))}}" alt="blog post">
                        <div class="blog-content">
                            <span class="date"><i class="fa fa-clock-o"></i>{{$value['tarih']}}</span>
                            <h3><a href="{{route('site.blog.view',['link'=>$value['link']])}}">{{$value['baslik']}}</a></h3>
                            <p>{!!\App\Helper\mHelper::split($value['icerik'],200)!!}</p>
                            <a href="{{route('site.blog.view',['link'=>$value['link']])}} "class="post-meta">Daha fazlası</a>
                        </div>
                    </div>
                </div><!-- Post 1 -->
            @endforeach    
            </div><!-- Blog Posts -->
        </div>
    </section><!-- Blog Section -->
    
<section class="pricing-section bg-grey bd-bottom padding">
    <div class="container">
        <div class="section-heading mb-40 text-center">
           <h2>Kamplar</h2>
        </div>
        <div class="row pricing-wrap">
            @foreach (\App\Urunler::orderBy('id','asc')->get() as $key => $value)
            <div class="col-md-4 col-sm-6 xs-padding">
                <div class="blog-post">
                    <div class="blog-content">
                        <img src="{{asset(\App\Helper\mHelper::largeImage($value['image']))}}" alt="img" height="300px" width="300px">
                        <h3>{{$value['baslik']}}</h3>
                       <!-- <h2>{{$value['fiyat']}} ₺</h2>-->
                    </div>
                    <p>{!!\App\Helper\mHelper::split($value['aciklama'],200)!!}</p>
                    <div class="pricing-footer">
                        <a href="{{route('site.urunler.view',['link'=>$value['link']])}}" class="default-btn">Başlayın</a>
                    </div>
                </div>
            </div><!-- Pricing 1 -->
            @endforeach
        </div>
        
    </div>
</section><!-- Pricing Section -->




@endsection
@section('footer')
    @if(session("swal"))
        <script>swal("{{session("swal")}}");</script>
    @endif
@endsection