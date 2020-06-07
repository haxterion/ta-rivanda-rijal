@extends('base')
@section('content')
<section class="featured-places" id="blog">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="section-heading">
                        <!-- <span>Beberapa Portofolio Kita</span> -->
                        <h2>Beberapa Portofolio Kita</h2>
                    </div>
                </div> 
            </div>
            
            <div class="row">
            @foreach($portofolio as $p) 
                <div class="col-md-4 col-sm-6 col-xs-12">
                    <div class="featured-item">
                        <div class="thumb">
                        <img src="../{{ $p->foto }}" alt="">
                            <div class="overlay-content">
                                <ul>
                                    <li><i class="fa fa-star"></i></li>
                                    <li><i class="fa fa-star"></i></li>
                                    <li><i class="fa fa-star"></i></li>
                                    <li><i class="fa fa-star"></i></li>
                                    <li><i class="fa fa-star"></i></li>
                                </ul>
                            </div>
                        </div>
                        <div class="down-content">
                            <h4>{{ $p->judul }}</h4>
                            <p>{{ $p->ket }}</p>
                            <div class="row">
                            <div class="col-md-12">
                            <div class="text-button">
                                <a href="{{ route('portofolio.show', $p->id_admin) }}"> Lihat portofolio</a>
                            </div>
                            </div>
                            </div>
                        </div>
                    </div>
                </div>
                
            @endforeach
            </div>
        </div>
    </section>
@endsection    