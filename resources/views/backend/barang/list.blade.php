@extends('backend.layouts.app')

@section('content')

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Halaman Barang</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Barang</a></li>
              <li class="breadcrumb-item active">Barang</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <!-- Small boxes (Stat box) -->
        @include('_message')
        <a href="{{ url('admin/barang/add')}}" class="btn btn-primary">Tambah Barang</a>
        <div class="row">
          <section class="col-lg-12">
            <div class="card">
              <div class="card-header">
                <table class="table table-bordered table-hover">
                  <thead>
                    <tr>
                      <th>ID</th>
                      <th>Kode Barang</th>
                      <th>Nama Barang</th>
                      <th>Satuan</th>
                      <th>Harga Satuan</th>
                      <th>Stok</th>
                    </tr>
                  </thead>
                  <tbody>
                    @foreach ($barangRecord as $value)
                        
                    <tr>
                      <td>{{ $value->id }}</td>
                      <td>{{ $value->kode_barang }}</td>
                      <td>{{ $value->nama_barang }}</td>
                      <td>{{ $value->satuan }}</td>
                      <td>{{ $value->harga_satuan }}</td>
                      <td>{{ $value->stok }}</td>
                      <td>
                        <a href="{{ url('admin/barang/edit/'.$value->id)}}" class="btn btn-primary">Edit</a>
                        <a onclick="return confirm('Are you sure want to delete?')"  href="{{ url('admin/barang/delete/'.$value->id )}}" class="btn btn-danger">Delete</a>
                      </td>
                    </tr>
                    @endforeach
                  </tbody>
                </table>
              </div>
            </div>
          </section>

        </div>
        <!-- /.row -->
        <!-- Main row -->

        <!-- /.row (main row) -->
      </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  </div>

@endsection