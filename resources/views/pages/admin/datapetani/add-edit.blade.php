@extends('layouts.default', ['topMenu' => true, 'sidebarHide' => true])

@section('title', isset($data) ? 'Edit DataPetani' : 'Create DataPetani' )

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
<form action="{{ isset($data) ? route('admin.datapetani.update', $data->id) : route('admin.datapetani.store') }}" id="form" name="form" method="POST" data-parsley-validate="true">
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
        <label for="name">No.kk</label>
        <input type="text" id="no_kk" name="no_kk" class="form-control" autofocus data-parsley-required="true" value="{{{ $data->no_kk ?? old('no_kk') }}}">
        <label for="name">NIK</label>
        <input type="text" id="nik" name="nik" class="form-control" autofocus data-parsley-required="true" value="{{{ $data->nik ?? old('nik') }}}">
        <label for="name">Nama</label>
        <input type="text" id="nama" name="nama" class="form-control" autofocus data-parsley-required="true" value="{{{ $data->nama ?? old('nama') }}}">
        <label for="name">Tempat Lahir</label>
        <input type="text" id="tempat_lahir" name="tempat_lahir" class="form-control" autofocus data-parsley-required="true" value="{{{ $data->tempat_lahir ?? old('tempatlahir') }}}">
        <label for="name">Tanggal Lahir</label>
        <input type="text" id="tanggal_lahir" name="tanggal_lahir" class="form-control" autofocus data-parsley-required="true" value="{{{ $data->tanggal_lahir ?? old('tanggallahir') }}}">
        <label for="name">Jenis Kelamin</label>
        <input type="text" id="jenis_kelamin" name="jenis_kelamin" class="form-control" autofocus data-parsley-required="true" value="{{{ $data->jenis_kelamin ?? old('jeniskelamin') }}}">
        <label for="name">Alamat</label>
        <input type="text" id="alamat" name="alamat" class="form-control" autofocus data-parsley-required="true" value="{{{ $data->alamat ?? old('alamat') }}}">
        <label for="name">Foto</label>
        <input type="text" id="foto" name="foto" class="form-control" autofocus data-parsley-required="true" value="{{{ $data->foto ?? old('foto') }}}">
      
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