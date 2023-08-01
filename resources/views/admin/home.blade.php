@extends('app_layout.layout');
@section('title','UAS ERVITA DESI YANA')
@section('page_title','Home')
@section('page_name','Home')
@section('page_subname','home')
@section('app_name','PInventaris Barang')
@section('user_name','VITA DESI YANA')
@section('konten')
<div class="row">
    <div class="col-lg-4 col-6">
        <!-- small box -->
        <div class="small-box bg-info">
            <div class="inner">
            <h3>0</h3>

            <p>Total Barang</p>
            </div>
            <div class="icon">
            <i class="fa fa-book"></i>
            </div>
            <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
        </div>
    </div>
    <!-- ./col -->
    <div class="col-lg-4 col-6">
        <!-- small box -->
        <div class="small-box bg-success">
            <div class="inner">
            <h3>0</h3>

            <p>Barang Rusak Ringan</p>
            </div>
            <div class="icon">
            <i class="fa fa-users"></i>
            </div>
            <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
        </div>
    </div>
<!-- ./col -->
    <div class="col-lg-4 col-6">
    <!-- small box -->
        <div class="small-box bg-danger">
            <div class="inner">
            <h3>0</h3>

            <p>Barang Rusak Berat</p>
            </div>
            <div class="icon">
            <i class="fa fa-upload"></i>
            </div>
            <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
        </div>
    </div>
<!-- ./col -->
</div>
@endsection