@extends('ksr')
@section('content')
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Edit Pesanan</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Edit Pesanan</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>
    <section class="content">
      <div class="container-fluid">
        <!-- SELECT2 EXAMPLE -->
        <div class="card card-default">
          <div class="card-header">
            <h3 class="card-title">Select2 (Default Theme)</h3>

            <div class="card-tools">
              <button type="button" class="btn btn-tool" data-card-widget="collapse"><i class="fas fa-minus"></i></button>
              <button type="button" class="btn btn-tool" data-card-widget="remove"><i class="fas fa-times"></i></button>
            </div>
          </div>
          <!-- /.card-header -->
          @foreach($kasir as $k)
          <form role="form" action="/kasir/update" method="post">
          {{ csrf_field() }}
                <div class="card-body">
                  <div class="form-group">
                    <label for="exampleInputEmail1">Nama Pelanggan</label>
                    <input type="hidden" name="id" value="{{ $k->id }}"> 
                    <input type="hidden" name="id_user" value="{{ $k->id_user }}">
                    <input type="hidden" name="id_paket" value="{{ $k->id_paket }}">
                    <input type="id_user"  class="form-control" id="exampleInputEmail1" value="{{ $k->name }}" readonly="">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputPassword1">Acara</label>
                    <input type="name" name="acara" class="form-control" id="exampleInputPassword1" value="{{ $k->acara }}" readonly="">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputPassword1">Tanggal</label>
                    <input type="date" name="tanggal" class="form-control" id="exampleInputPassword1" value="{{ $k->tanggal }}" readonly="">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputPassword1">Nama Paket</label>
                    <input type="name" class="form-control" id="exampleInputPassword1" value="{{ $k->nama_paket }}" readonly="">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputPassword1">Lokasi</label>
                    <input type="name" class="form-control" id="exampleInputPassword1"  value="{{ $k->nama_kota }}" readonly="">
                    <input type="name" class="form-control" id="exampleInputPassword1"  name="id_kota" value="{{ $k->id_kota }}" hidden="">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputPassword1">Catatan</label>
                    <input type="name" class="form-control" id="exampleInputPassword1" name="catatan" value="{{ $k->catatan }}" readonly="">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputPassword1">Konfirmasi</label>
                    <div class="form-group clearfix">
                    <select name="konfirmasi" class="form-control select2" style="width: 100%;">
                    <option value="0" selected="selected">Belum Dibayar</option>
                    <option value="1"  >Sudah Dibayar</option>
                  </select>
                    </div>
                  </div>
                </div>
                <!-- /.card-body -->

                <div class="card-footer">
                  <button type="submit" class="btn btn-primary">Submit</button>
                </div>
              </form>
              @endforeach
        </div>
</section>
    </div>
@endsection