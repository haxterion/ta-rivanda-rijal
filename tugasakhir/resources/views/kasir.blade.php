@extends('ksr')
@section('content')
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>DataTables</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">DataTables</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="row">
        <div class="col-12">
          <div class="card">
            <div class="card-header">
              <h3 class="card-title">DataTable with minimal features & hover style</h3>
            </div>
            <div class="card-body">
              <table id="example1" class="table table-bordered table-striped">
                <thead>
                <tr>
                  <th>Nomor</th>
                  <th>Pelanggan</th>
                  <th>Acara</th>
                  <th>Tanggal</th>
                  <th>Paket</th>
                  <th>Lokasi</th>
                  <th>Catatan</th>
                  <th>Status</th>
                </tr>
                </thead>
                <tbody>
                <?php $i = 0;?>
                    @foreach($kasir as $p)
                    <?php $i++ ;?>
                <tr>
                    
                  <td>{{ $i }}</td>
                  <td>{{ $p->name}}</td>
                  <td>{{ $p->acara}}</td>
                  <td>{{ $p->tanggal}}</td>
                  <td>{{ $p->nama_paket}}</td>
                  <td>{{ $p->nama_kota}}</td>
                  <td>{{ $p->catatan}}</td>
                  <?php $k=$p->konfirmasi; ?>
                  @if($k == 0)
                  <td><a href="/kasir/edit/{{ $p->id }}"><button type="button" class="btn btn-block btn-danger">Belum Dibayar</button></a></td>
                  @else
                  <td><button type="button" class="btn btn-block btn-success">Sudah Dibayar</button></td>
                  @endif
                </tr>
                @endforeach
                </tbody>
                </table>
</div>
            </div> 
</div>
        </section>
</div>
@endsection
