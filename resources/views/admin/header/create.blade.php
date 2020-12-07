@extends('layouts.app')
@section('content')        
                <div id="mainContent">
                    <div class="row gap-20 masonry pos-r">
                        <div class="masonry-sizer col-md-6"></div>
                        <div class="masonry-item col-md-12">
                            <div class="bgc-white p-20 bd">
                                <h4 class="c-grey-900 mB-20">Header Ekle</h4>
                                @if(session("status"))
                                    <div class="alert alert-primary">{{session("status")}}</div>
                                @endif
                                <div class="mT-30">
                                    <form  action="{{route('admin.header.store')}}" method="POST">
                                        @csrf    
                                    <div class="row">
                                        <div class="col-md-3">
                                            <div class="form-group">
                                                <label for="">Anasayfa Başlık</label>
                                                <input  type="text" class="form-control" id="" name="anasayfa_baslik">
                                            </div>                                         
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-3">
                                            <div class="form-group">
                                                <label for="">Email</label>
                                                <input  type="text" class="form-control" id="" name="email">
                                            </div>                                         
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-3">
                                            <div class="form-group">
                                                <label for="">Telefon</label>
                                                <input  type="text" class="form-control" id="" name="telefon">
                                            </div>                                         
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-3">
                                            <div class="form-group">
                                                <label for="">Başlık</label>
                                                <input  type="text" class="form-control" id="" name="baslik">
                                            </div>                                         
                                        </div>
                                    </div>
                                        <button type="submit" class="btn btn-primary">Ekle</button>
                                    </form>
                                </div>
                            </div>
                        </div>      
                    </div>
                </div>
@endsection
            
