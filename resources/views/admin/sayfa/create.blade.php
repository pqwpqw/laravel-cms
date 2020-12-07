@extends('layouts.app')
@section('content')        
                <div id="mainContent">
                    <div class="row gap-20 masonry pos-r">
                        <div class="masonry-sizer col-md-6"></div>
                        <div class="masonry-item col-md-12">
                            <div class="bgc-white p-20 bd">
                                <h4 class="c-grey-900 mB-20">Sayfa Ekle</h4>
                                @if(session("status"))
                                    <div class="alert alert-primary">{{session("status")}}</div>
                                @endif
                                <div class="mT-30">
                                    <form  enctype="multipart/form-data" action="{{route('admin.sayfa.store')}}" method="POST">
                                        @csrf    
                                    
                                    <div class="row">
                                        <div class="col-md-3">
                                            <div class="form-group">
                                                <label >Sayfa Resmi</label>
                                                <input  type="file" name="image">
                                            </div>                                         
                                        </div>
                                    </div>    
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="">Sayfa Adı</label>
                                                <input  type="text" class="form-control" id="" name="name">
                                            </div>                                         
                                        </div>
                                    </div>
                                    <div class="row">
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label for="">Sayfa URL</label>
                                                    <input  type="text" class="form-control" id="" name="link">
                                                </div>                                         
                                            </div>
                                        </div>
                                    <div class="row">
                                        <div class="col-md-3">
                                            <div class="form-group">
                                                <label for="exampleInputPassword1">Sayfa Başlığı</label>
                                                <input  type="text" class="form-control" id="exampleInputPassword1" name="baslik">
                                            </div>                                         
                                        </div>
                                    </div>
                                    <div class="row">
                                            <div class="col-md-3">
                                                <div class="form-group">
                                                    <label for="exampleInputPassword1">Açıklama</label>
                                                    <input  type="text" class="form-control" id="exampleInputPassword1" name="aciklama">
                                                </div>                                         
                                            </div>
                                    </div>
                                    <div class="row">
                                            <div class="col-md-3">
                                                <div class="form-group">
                                                    <label for="exampleInputPassword1">Anahtar Kelime</label>
                                                    <input  type="text" class="form-control" id="exampleInputPassword1" name="anahtar_kelime">
                                                </div>                                         
                                            </div>
                                    </div>
                                    <div class="row">
                                            <div class="col-md-12">
                                                <div class="form-group">
                                                    <label for="">İçerik</label>
                                                    <textarea name="icerik" id="" cols="30" rows="10" class="ckeditor"></textarea>
                                                </div>                                         
                                            </div>
                                    </div>
                                    <div class="row">
                                            <div class="col-md-3">
                                                <div class="form-group">
                                                    <label for="">Anasayfa Gösterim</label>
                                                    <select name="gosterim" id="">
                                                        <option value="1">Aktif</option>
                                                        <option value="0">Pasif</option>
                                                        
                                                    </select>
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
            
