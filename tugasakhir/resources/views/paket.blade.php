@extends('base')
@section('content')
<section class="pricing-tables">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="section-heading">
                    <span>Pricing Tables</span>
                    <h2>Price List</h2>
                </div>
            </div>
        </div>
        <div class="row">
            @foreach($paket as $l)
            <div class="col-md-4">
                <div class="table-item">
                    <div class="top-content">
                        <h4>{{$l->nama_paket}}</h4>
                        <h1></h1>

                        <span>{{$l->harga_paket}}</span>

                    </div>
                    <ul>
                        <li><a href="../portofolio">{{$l->ket}}</a></li>
                    </ul>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</section>
@endsection