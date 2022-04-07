@extends('layouts.default', ['topMenu' => true, 'sidebarHide' => true])

@section('title', isset($data) ? 'Edit Data Gudang Lumbung' : 'Create Data Gudang Lumbung' )

@push('css')
<link href="{{ asset('/assets/plugins/smartwizard/dist/css/smart_wizard.css') }}" rel="stylesheet" />
@endpush

@section('content')
<!-- begin breadcrumb -->
<ol class="breadcrumb float-xl-right">
  <li class="breadcrumb-item"><a href="javascript:;">Home</a></li>
  <li class="breadcrumb-item"><a href="javascript:;">Gudang Lumbung</a></li>
  <li class="breadcrumb-item active">@yield('title')</li>
</ol>
<!-- end breadcrumb -->
<!-- begin page-header -->
<h1 class="page-header">Gudang Lumbung<small> @yield('title')</small></h1>
<!-- end page-header -->


<!-- begin panel -->
<form action="{{ isset($data) ? route('admin.gudang-lumbung.update', $data->id) : route('admin.gudang-lumbung.store') }}" id="form" name="form" method="POST" data-parsley-validate="true">
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
          <label for="name">Jenis Tanaman</label>
          <x-form.Dropdown name="jenis_tanaman_id" :options="$jenistanaman" selected="{{{ old('jenis_tanaman_id') ?? ($data['jenis_tanaman_id'] ?? null) }}}" required />
        </div>
      <div class="form-group">
        <label for="name">Tanaman</label>
        <x-form.Dropdown name="nama_tanaman_id" :options="$tanaman" selected="{{{ old('nama_tanaman_id') ?? ($data['nama_tanaman_id'] ?? null) }}}" required />
    </div>
      <div class="form-group">
        <label for="name">Stok</label>
        <input type="text" id="stok" name="stok" class="form-control" autofocus data-parsley-required="true" value="{{{ $data->stok ?? old('stok') }}}">
      </div>
      <div class="form-group">
        <label for="name">Satuan</label>
        <input type="text" id="satuan" name="satuan" class="form-control" autofocus data-parsley-required="true" value="{{{ $data->satuan ?? old('satuan') }}}">
      </div>
      <div class="form-group">
        <label for="name">Kondisi</label>
        <input type="text" id="kondisi_id" name="kondisi_id" class="form-control" autofocus data-parsley-required="true" value="{{{ $data->kondisi_id ?? old('kondisi_id') }}}">
      </div>
    </div>
    <!-- end panel-body -->
    <!-- begin panel-footer -->
    <div class="panel-footer">
      <button type="submit" class="btn btn-primary">Simpan</button>
      <button type="reset" class="btn btn-default">Reset</button>
    </div>
    <!-- end panel-footer -->
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