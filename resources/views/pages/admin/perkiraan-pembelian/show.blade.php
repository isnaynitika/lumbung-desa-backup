@extends('layouts.default', ['topMenu' => true, 'sidebarHide' => true])

@section('title', 'Detail Data Perkiraan Pembelian' )

@push('css')
<link href="{{ asset('/assets/plugins/smartwizard/dist/css/smart_wizard.css') }}" rel="stylesheet" />
@endpush

@section('content')
<!-- begin breadcrumb -->
<ol class="breadcrumb float-xl-right">
  <li class="breadcrumb-item"><a href="javascript:;">Home</a></li>
  <li class="breadcrumb-item"><a href="javascript:;">Master Data</a></li>
  <li class="breadcrumb-item active">@yield('title')</li>
</ol>
<!-- end breadcrumb -->
<!-- begin page-header -->
<h1 class="page-header">Master Data<small> @yield('title')</small></h1>
<!-- end page-header -->


<!-- begin panel -->
<form action="{{ isset($data) ? route('admin.pembelian.perkiraan-pembelian.update', $data->id) : route('admin.pembelian.perkiraan-pembelian.store') }}" id="form" name="form" method="POST" data-parsley-validate="true">
  @csrf
  @if(isset($data))
  {{ method_field('PUT') }}
  @endif

  <div class="panel panel-inverse">
    <!-- begin panel-heading -->
    <div class="panel-heading">
      <h4 class="panel-title">Form @yield('title')</h4>
      <div class="panel-heading-btn">
        <a href="javascript:;" class="btn btn-xs btn-icon btn-circle btn-default" data-click="panel-expand"><i class="fa fa-expand"></i></a>
        <a href="javascript:;" class="btn btn-xs btn-icon btn-circle btn-warning" data-click="panel-collapse"><i class="fa fa-minus"></i></a>
      </div>
    </div>
    <!-- end panel-heading -->
    <!-- begin panel-body -->
    <div class="panel-body">
        <div class="form-group">
            <div class="row">
                <div class="col-md-1 my-auto">
                    <label for="name"><strong>Musim</strong></label>
                </div>
                <div class="col-md-11">
                    <x-form.Dropdown disabled name="musim_id" :options="$musim" selected="{{{ old('musim_id') ?? ($data['musim_id'] ?? null) }}}" required />
                </div>
            </div>
        </div>
        <div class="form-group">
            <div class="row">
                <div class="col-md-1 my-auto">
                    <label for="name"><strong>Petani</strong></label>
                </div>
                <div class="col-md-5">
                    <input disabled class="form-control" value="{{ $data->petani_id }}">
                </div>
                <div class="col-md-1 my-auto">
                    <label for="name"><strong>Tanaman</strong></label>
                </div>
                <div class="col-md-5">
                    <x-form.Dropdown disabled name="tanaman_id" :options="$tanaman" selected="{{{ old('tanaman_id') ?? ($data['tanaman_id'] ?? null) }}}" required />
                </div>
            </div>
          </div>
        <div class="form-group">
            <div class="row">
                <div class="col-md-1 my-auto">
                    <label for="name"><strong>Lahan</strong></label>
                </div>
                <div class="col-md-5">
                    <input disabled class="form-control" value="{{ $data->lahan_id }}">
                </div>
                <div class="col-md-1">
                    <label for="name"><strong>Luas Tanam</strong></label>
                </div>
                <div class="col-md-5">
                    <input disabled class="form-control" value="{{ $data->luas_lahan }}">
                </div>
            </div>
        </div>
        <div class="form-group">
            <div class="row">
                <div class="col-md-1 my-auto">
                  <label for="name"><strong>Jumlah Pembelian</strong></label>
                </div>
                <div class="col-md-4">
                  <input disabled class="form-control" value="{{ $data->jumlah }}">
                </div>
                <div class="col-md-1">
                  <x-form.Dropdown disabled name="satuan_id" :options="$satuan" selected="{{{ old('satuan_id') ?? ($data['satuan_id'] ?? null) }}}" required />
                </div>
                <div class="col-md-1 my-auto">
                  <label for="name"><strong>Kondisi</strong></label>
                </div>
                <div class="col-md-5">
                  <x-form.Dropdown disabled name="kondisi_id" :options="$kondisi" selected="{{{ old('kondisi_id') ?? ($data['kondisi_id'] ?? null) }}}" required />
                </div>
            </div>
        </div>
        <div class="form-group">
            <div class="row">
                <div class="col-md-1 my-auto">
                    <label for="name"><strong>Harga</strong></label>
                </div>
                <div class="col-md-5">
                    <input disabled class="form-control" value="{{ $data->harga }}">
                </div>
                <div class="col-md-1 my-auto">
                    <label for="name"><strong>Total</strong></label>
                </div>
                <div class="col-md-5">
                    <input disabled class="form-control"value="{{ $data->total }}">
                </div>
            </div>
        </div>
    </div>
    <!-- end panel-body -->
  </div>
  <!-- end panel -->
</form>
<a href="javascript:history.back(-1);" class="btn btn-success">
  <i class="fa fa-arrow-circle-left"></i> Kembali
</a>

@endsection

@push('scripts')
<script src="{{ asset('/assets/plugins/parsleyjs/dist/parsley.js') }}"></script>
@endpush