@extends('backend.layouts.app')

@section('content')

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Edit Halaman Kasir</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Edit Kasir</a></li>
              <li class="breadcrumb-item active">Edit Kasir</li>
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
                <h3 class="card-title">Edit Halaman Kasir</h3>
              </div>

              <form class="form-horizontal" method="POST" action="{{ url('admin/kasir/edit/' . $kasirRecord->id) }}" enctype="multipart/form-data">
                {{ csrf_field() }}
                <div class="card-body">
                    <div class="form-group row">
                        <label class="col-sm-2 col-form-lable">
                          Kode Kasir
                          <span style="color: red;"> *</span>
                        </label>
                        <div class="col-sm-10">
                          <input type="text" name="kode_kasir" class="form-control" placeholder="Kode Kasir" required value="{{ $kasirRecord->kode_kasir }}">
           
                        </div>
                    </div>
    
                  <div class="form-group row">
                  <label class="col-sm-2 col-form-lable">
                          Nama Kasir
                          <span style="color: red;"> *</span>
                        </label>
                        <div class="col-sm-10">
                          <input type="text" name="nama_kasir" class="form-control" placeholder="Nama Kasir" required value="{{ $kasirRecord->nama_kasir }}">
           
                        </div>
                  </div>

                  <div class="form-group row">
                    <label class="col-sm-2 col-form-lable">
                            Nomor HP
                            <span style="color: red;"> *</span>
                          </label>
                          <div class="col-sm-10">
                            <input type="text" name="nomor_hp" class="form-control" placeholder="Nomor HP" required value="{{ $kasirRecord->nomor_hp }}">
             
                          </div>
                    </div>


                </div>
                  <div class="card-footer">
                    <button type="submit" class="btn btn-primary">Edit</button>
                    <a href="{{ url('admin/kasir') }}" class="btn btn-default float-right">Cancel</a>
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