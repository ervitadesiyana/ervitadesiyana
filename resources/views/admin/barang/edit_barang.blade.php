@extends('app_layout.layout');
@section('title','UAS ERVITA DESI YANA')
@section('page_title','BARANG')
@section('page_name','Barang')
@section('page_subname','Edit')
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
                    Edit Barang
                </h3>
            </div><!-- /.card-header -->
            <div class="card-body">
            <form action="{{ route('update_barang') }}" method="POST">
                @csrf
                @method('PATCH')
                <div class="card-body">
                  <div class="form-group">
                    <label for="exampleInputEmail1">KODE BARANG</label>
                    <input value="{{ $barang->id}}" name="id_data" type="hidden">
                    <input value="{{ $barang->kode_barang }}" name="kode" type="text" class="form-control" id="exampleInputEmail1" placeholder="Enter KODE">
                  </div>

                  <div class="form-group">
                    <label for="exampleInputEmail1">NAMA BARANG</label>
                    <input value="{{ $barang->nama_barang }}" name="nama" type="text" class="form-control" id="exampleInputEmail1" placeholder="Enter NAMA BARANG">
                  </div>

                  <div class="form-group">
                    <label for="exampleInputEmail1">MEREK BARANG</label>
                    <input value="{{ $barang->merek_barang }}" name="merek" type="text" class="form-control" id="exampleInputEmail1" placeholder="Enter MEREK BARANG">
                  </div>

                  <div class="form-group">
                    <label for="exampleInputEmail1">JENIS BARANG</label>
                    <select name="j_barang" id="" class="form-control">
                        <option value="{{ $barang->j_barang_id }}" selected>{{ App\Http\Controllers\BarangController::get_jbarang($barang->j_barang_id) }}</option>
                        @foreach ($jns_barang as $jns)
                            <option value="{{ $jns->id }}">{{ $jns->nama_jenis }}</option>
                        @endforeach
                    </select>
                  </div>

                  <div class="form-group">
                    <label for="exampleInputEmail1">TAHUN PEMBELIAN</label>
                    <input value="{{ $barang->tahun_pembelian }}" name="tahun" type="text" class="form-control" id="exampleInputEmail1" placeholder="Enter TAHUN PEMBELIAN">
                  </div>

                  <div class="form-group">
                    <label for="exampleInputEmail1">KONDISI BARANG</label>
                    <input value="{{ $barang->kondisi_barang }}" name="kondisi" type="text" class="form-control" id="exampleInputEmail1" placeholder="Enter KONDISI BARANG">
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