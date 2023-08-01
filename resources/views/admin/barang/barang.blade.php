@extends('app_layout.layout');
@section('title','UAS ERVITA DESI YANA')
@section('page_title','BARANG')
@section('page_name','Barang')
@section('page_subname','barang')
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
                    Data Barang
                </h3>
            </div><!-- /.card-header -->
            <div class="card-body">
            <a href="{{ route('tambahbarang') }}" class="btn btn-sm btn-primary mb-2">Tambah</a>
                <table class="table table-bordered">
                    <thead>
                        <tr>
                        <th style="width: 10px">NO</th>
                        <th>KODE</th>
                        <th>NAMA BARANG</th>
                        <th>MEREK BARANG</th>
                        <th>TAHUN PEMBELIAN</th>
                        <th>KONDISI BARANG</th>
                        <th style="width: 150px">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                    @forelse ($data as $barang)
                        <tr>
                        <td>{{ $loop->iteration }}</td>
                        <td>{{ $barang->kode_barang }}</td>
                        <td>{{ $barang->nama_barang }}</td>
                        <td>{{ $barang->merek_barang }}</td>
                        <td>{{ $barang->tahun_pembelian }}</td>
                        <td>{{ $barang->kondisi_barang }}</td>
                        <td><a href="{{ route('edit_barang',$barang->id) }}" class="btn btn-xs btn-warning">Edit</a> | <a href="{{ route('deletebarang',$barang->id) }}" class="btn btn-danger btn-xs">Delete</a></td>
                        </tr>
                        @empty
                        <tr>
                        <td colspan="7" class="text-center">No data</td>
                        </tr>
                        @endforelse
                    </tbody>
                </table>
            </div><!-- /.card-body -->
        </div>
    </section>
</div>
@endsection