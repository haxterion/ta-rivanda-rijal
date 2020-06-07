@extends('base')
@section('content')
<section class="featured-places" id="blog">
    <div class="container">


        <div class="row">
            @foreach($portofolio as $p)
            <div class="col-md-12">
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
                        @endforeach
                        <div class="row">
                            <div class="col-md-12">
                                @guest
                                <div class="text-button">
                                    <h4>Login To add comment</h4>
                                </div>
                                @else
                                <div class="text-button">
                                    <h4>Add comment</h4>
                                </div>
                                @foreach($portofolio as $p)
                                <form method="post" action="{{ route('portofolio.add') }}">
                                    @csrf
                                    <div class="form-group">
                                        <fieldset>
                                            <textarea name="isi_komen" rows="12" class="form-control" id="message" placeholder="Your message..." required=""></textarea>
                                        </fieldset>

                                        <input type="hidden" name="id_admin" value="{{ $p->id_admin }}" />
                                        <input type="hidden" name="id_user" value="{{ Auth::user()->id }}" />
                                    </div>
                                    <div class="form-group">
                                        <input type="submit" class="btn btn-warning" value="Add Comment" />
                                    </div>
                                </form>
                                @endforeach
                                @endguest
                                @foreach($komen as $k)
                                <div class="table-item">
                                        <h5><b>{{$k->name}}</b></h5><p>{{$k->isi_komen}}</p>
                                    
                                    @endforeach
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection