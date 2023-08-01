@extends('app_layout.layout');
@section('title','UAS ERVITA DESI YANA')
@section('page_title','BARANG')
@section('page_name','Barang')
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
                    <i class="fas fa-layer-group"></i>
                    Tambah Barang
                </h3>
            </div><!-- /.card-header -->
            <div class="card-body">
            <form action="{{ route('simpan_barang') }}" method="POST">
                @csrf
                @method('PUT')
                <div class="card-body">
                  <div class="form-group">
                    <label for="exampleInputEmail1">KODE BARANG</label>
                    <input name="kode" type="text" class="form-control" id="exampleInputEmail1" placeholder="Enter KODE">
                  </div>

                  <div class="form-group">
                    <label for="exampleInputEmail1">NAMA BARANG</label>
                    <input name="nama" type="text" class="form-control" id="exampleInputEmail1" placeholder="Enter NAMA BARANG">
                  </div>

                  <div class="form-group">
                    <label for="exampleInputEmail1">MEREK BARANG</label>
                    <input name="merek" type="text" class="form-control" id="exampleInputEmail1" placeholder="Enter MEREK BARANG">
                  </div>

                  <div class="form-group">
                    <label for="exampleInputEmail1">JENIS BARANG</label>
                    <select name="j_barang" id="" class="form-control">
                        @foreach ($jns_barang as $jns)
                            <option value="{{ $jns->id }}">{{ $jns->nama_jenis }}</option>
                        @endforeach
                    </select>
                  </div>

                  <div class="form-group">
                    <label for="exampleInputEmail1">TAHUN PEMBELIAN</label>
                    <input name="tahun" type="text" class="form-control" id="exampleInputEmail1" placeholder="Enter TAHUN PEMBELIAN">
                  </div>

                  <div class="form-group">
                    <label for="exampleInputEmail1">KONDISI BARANG</label>
                    <input name="kondisi" type="text" class="form-control" id="exampleInputEmail1" placeholder="Enter KONDISI BARANG">
                  </div>


                </div>
                <!-- /.card-body -->

                <div class="card-footer">
                  <button type="submit" class="btn btn-success">Simpan</button>
                </div>
              </form>
            </div><!-- /.card-body -->
        </div>
    </section>
</div>

@endsection