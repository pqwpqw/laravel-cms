@extends('layouts.site')
@section('seo')
<title>Teklif Al</title>
@endsection

@section('content')
<section class="request-section padding bd-bottom">
        <div class="container">
            <div class="row request-wrap">
                <div class="col-md-6">
                    <div class="request-heading mb-40">
                       <h2>Kayıt Ol</h2>
                       <p></p>
                    </div>
                    <form action="{{route('site.offer.teklif')}}" method="post"  class="form-horizontal request-form">
                        @csrf
                        <div class="form-group colum-row row">
                            <div class="col-sm-6">
                                <input type="text" id="name" name="name" class="form-control" placeholder="Name" required>
                            </div>
                            <div class="col-sm-6">
                                <input type="email" id="email" name="email" class="form-control" placeholder="Email" required>
                            </div>
                        </div>
                        <div class="form-group row">
                            <div class="col-md-12">
                                <input type="text" id="subject" name="telefon" class="form-control" placeholder="Telefon" required>
                            </div>
                        </div>
                        <div class="form-group row">
                            <div class="col-md-12">
                                <input type="text" id="subject" name="kampadi" class="form-control" placeholder="Kamp Adı" required>
                            </div>
                        </div>
                        <div class="form-group row">
                            <div class="col-md-12">
                                <input type="text" id="subject" name="kangrubu" class="form-control" placeholder="Kan grubu" required>
                            </div>
                        </div>
                        <div class="form-group row">
                            <div class="col-md-12">
                                <textarea id="message" name="mesaj" cols="30" rows="5" class="form-control message" placeholder="Mesaj" required></textarea>
                            </div>
                        </div>
                        <div class="form-group row">
                            <div class="col-md-12">
                                <button id="submit" class="default-btn" type="submit">Kayıt Ol</button>
                            </div>
                        </div>
                        
                    </form>
                </div>
            </div>
        </div>
        <div style="background-image:url(../site/img/camping.jpg); background-repeat: no-repeat;
    background-position: top right;
    background-size: cover;
    position: absolute;
    width: 50%;
    height: 100%;
    right: 0;
    top: 0;"> </div>
    </section><!-- Request Section -->
@endsection
@section('footer')
@if(session("swal"))
    <script>swal("{{session("swal")}}");</script>
@endif
@endsection
