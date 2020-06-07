@extends('base')
@section('content')
<div class="modal-content">

  <div class="row">
    <div class="col-md-8">
      <div class="left-content">
        <div class="row">
          <div class="col-md-12">
            <div class="section-heading">
              <span>Talk To Us</span>
              <h2>Let's have a discussion</h2>
            </div>
          </div>
          <form action="/pesan/tambah" method="post">
            {{ csrf_field() }}
            <div class="col-md-6">
              <fieldset>
                <input name="id_user" value="{{ Auth::user()->id }}" class="hidden" hidden="">
                <input name="acara" type="text" class="form-control" placeholder="Acara" required="">
              </fieldset>
            </div>
            <div class="col-md-6">
              <div class="input-group date" data-provide="datepicker">
                <input name="tanggal" type="text" class="form-control" placeholder="tanggal">
              </div>
            </div>
            <div class="col-md-6">

              <select name="id_paket" class="form-control">
                <option value="" class="form-control">== Select Paket ==</option>
                @foreach ($paket as $p )
                <option value="{{ $p->id }}" class="form-control">{{ $p->nama_paket }}</option>
                @endforeach
              </select>

            </div>
            <div class="col-md-6">
              <select name="id_kota" class="form-control">
                <option value="" class="form-control">== Select Kota ==</option>
                <option value="Kediri" class="form-control">Kediri</option>
                <option value="Pare" class="form-control">Nganjuk</option>
                <option value="Blitar" class="form-control">Blitar</option>
                <option value="Tulungagung" class="form-control">Tulungagung</option>
              </select>
            </div>
            <div class="col-md-12">
              <fieldset>
                <textarea name="alamat" rows="6" class="form-control" id="catatan" placeholder="Alamat" required=""></textarea>
              </fieldset>
            </div>
            <div class="col-md-12">
              <fieldset>
                <textarea name="catatan" rows="6" class="form-control" id="catatan" placeholder="Catatan" required=""></textarea>
              </fieldset>
            </div>
            <div class="col-md-12">
              <fieldset>
                <button type="submit" id="form-submit" class="btn">Send Message</button>
              </fieldset>
            </div>
          </form>
        </div>
      </div>
    </div>
    <div class="col-md-4">
      <div class="right-content">
        <div class="row">
          <div class="col-md-12">
            <div class="content">
              <div class="section-heading">
                <span>More About Us</span>
                <h2>Venue Company</h2>
              </div>
              <p>Etiam viverra nibh at lorem hendrerit porta non nec ligula. Donec hendrerit porttitor pretium. Suspendisse fermentum nec risus eu bibendum.</p>
              <ul>
                <li><span>Phone:</span><a href="#">010-050-0550</a></li>
                <li><span>Email:</span><a href="#">hi@company.co</a></li>
                <li><span>Address:</span><a href="#">company.co</a></li>
              </ul>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
@endsection