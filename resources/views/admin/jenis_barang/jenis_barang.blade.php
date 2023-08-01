@extends('app_layout.layout');
@section('title','UAS ERVITA DESI YANA')
@section('page_title','JENIS BARANG')
@section('page_name','Jenis Barang')
@section('page_subname','jenis barang')
@section('app_name','Inventaris Barang')
@section('user_name','ERVITA DESI YANA')
@section('konten')
<div class="row">
    <!-- Custom tabs (Charts with tabs)-->
    <section class="col-lg-12 connectedSortable">
        <div class="card">
            <div class="card-header">
                <h3 class="card-title">
                    <i class="fas fa-th"></i>
                    Jenis Barang
                </h3>
            </div><!-- /.card-header -->
            <div class="card-body">
            <a href="{{ route('tambah_jenisbarang') }}" class="btn btn-sm btn-primary mb-2">Tambah</a>
                <table class="table table-bordered">
                    <thead>
                        <tr>
                        <th style="width: 10px">NO</th>
                        <th>JENIS</th>
                        <th style="width: 150px">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                    @forelse ($data as $jenis)
                        <tr>
                        <td>{{ $loop->iteration }}</td>
                        <td>{{ $jenis->nama_jenis }}</td>
                        <td><a href="{{ route('edit_jbarang',$jenis->id) }}" class="btn btn-xs btn-warning">Edit</a> | <a href="{{ route('delete_jbarang',$jenis->id) }}" class="btn btn-danger btn-xs">Delete</a></td>
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