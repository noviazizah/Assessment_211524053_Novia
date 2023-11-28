@extends('backend.layouts.app')

@section('content')

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Edit Halaman Barang</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Edit Barang</a></li>
              <li class="breadcrumb-item active">Edit Barang</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">

        @include('_message')
        <!-- Small boxes (Stat box) -->
        <div class="row">
          <div class="col-md-12">
            <div class="card card-info">
              <div class="card-header">
                <h3 class="card-title">Edit Halaman Barang</h3>
              </div>

              <form class="form-horizontal" method="POST" action="{{ url('admin/barang/edit/' . $barangRecord->id) }}" enctype="multipart/form-data">
                {{ csrf_field() }}
                <div class="card-body">
                  <div class="form-group row">
                    <label class="col-sm-2 col-form-lable">
                      Kode Barang
                      <span style="color: red;"> *</span>
                    </label>
                    <div class="col-sm-10">
                      <input type="text" name="kode_barang" class="form-control" placeholder="Masukkan Kode Barang" required value="{{ $barangRecord->kode_barang }}">
       
                    </div>
                  </div>

                    <div class="form-group row">
                        <label class="col-sm-2 col-form-lable">
                          Nama Barang
                          <span style="color: red;"> *</span>
                        </label>
                        <div class="col-sm-10">
                          <input type="text" name="nama_barang" class="form-control" placeholder="Masukkan Nama Barang" required value="{{ $barangRecord->nama_barang }}">
           
                        </div>
                    </div>
    
                    <div class="form-group row">
                    <label class="col-sm-2 col-form-lable">
                            Satuan
                            <span style="color: red;"> *</span>
                            </label>
                            <div class="col-sm-10">
                            <input type="text" name="satuan" class="form-control" placeholder="Masukkan Satuan" required value="{{ $barangRecord->satuan }}">
            
                            </div>
                    </div>

                    <div class="form-group row">
                        <label class="col-sm-2 col-form-lable">
                            Harga Satuan
                            <span style="color: red;"> *</span>
                            </label>
                            <div class="col-sm-10">
                            <input type="text" name="harga_satuan" class="form-control" placeholder="Masukkan Harga Satuan" required value="{{ $barangRecord->harga_satuan }}">
                            </div>
                    </div>

                    <div class="form-group row">
                        <label class="col-sm-2 col-form-lable">
                            Stok
                            <span style="color: red;"> *</span>
                            </label>
                            <div class="col-sm-10">
                            <input type="text" name="stok" class="form-control" placeholder="Masukkan Jumlah Stok" required value="{{ $barangRecord->stok }}">
                            </div>
                    </div>

                    

                  <div class="card-footer">
                    <button type="submit" class="btn btn-primary">Edit</button>
                    <a href="{{ url('admin/barang') }}" class="btn btn-default float-right">Cancel</a>
                  </div>

                </div>
              </form>
            </div>
            
          </div>

          <!-- ./col -->
        </div>
        <!-- /.row -->
        <!-- Main row -->

        <!-- /.row (main row) -->
      </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  </div>

@endsection