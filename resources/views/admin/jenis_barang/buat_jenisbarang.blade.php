@extends('app_layout.layout');
@section('title','UAS ERVITA DESI YANA')
@section('page_title','JENIS BARANG')
@section('page_name','Jenis Barang')
@section('page_subname','Tambah')
@section('app_name','Inventaris Barang')
@section('user_name','ERVITA DESI YANA')
@section('konten')

<div class="row">
    <!-- Custom tabs (Charts with tabs)-->
    <section class="col-lg-12 connectedSortable">
        <div class="card">
            <div class="card-header">
                <h3 class="card-title">
                    <i class="fas fa-users"></i>
                    Tambah Jenis Barang
                </h3>
            </div><!-- /.card-header -->
            <div class="card-body">
            <form action="{{ route('simpan_jbarang') }}" method="POST">
                @csrf
                @method('PUT')
                <div class="card-body">
                  <div class="form-group">
                    <label for="exampleInputEmail1">NAMA JENIS</label>
                    <input name="nama" type="text" class="form-control" id="exampleInputEmail1" placeholder="Enter JENIS">
                  </div>

                </div>
                <!-- /.card-body -->

                <div class="card-footer">
                  <button type="submit" class="btn btn-primary">Simpan</button>
                </div>
              </form>
            </div><!-- /.card-body -->
        </div>
    </section>
</div>

@endsection