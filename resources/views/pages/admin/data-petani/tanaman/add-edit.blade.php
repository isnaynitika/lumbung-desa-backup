@extends('layouts.default', ['topMenu' => true, 'sidebarHide' => true])

@section('title', isset($data) ? 'Edit Tanaman' : 'Create Tanaman' )

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
<form action="{{ isset($data) ? route('admin.data-petani.tanaman.update', $data->id) : route('admin.data-petani.tanaman.store') }}" id="form" name="form" method="POST" data-parsley-validate="true">
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
                    <label for="name">Jenis Tanaman Id</label>
                </div>
                <div class="col-md-5">
                    <x-form.Dropdown name="jenis_tanaman_id" :options="$jenistanaman" selected="{{{ old('jenis_tanaman_id') ?? ($data['jenis_tanaman_id'] ?? null) }}}" required />
                </div>
                <div class="col-md-1 my-auto">
                    <label for="name">Nama</label>
                </div>
                <div class="col-md-5 my-auto">
                    <input type="text" id="nama" name="nama" class="form-control" autofocus data-parsley-required="true" value="{{{ $data->nama ?? old('nama') }}}">
                </div>
            </div>
        </div>
        <div class="form-group">
            <div class="row">
                <div class="col-md-1 my-auto">
                    <label for="name">Musim Tanam</label>
                </div>
                <div class="col-md-5">
                    <x-form.Dropdown name="musim_tanam_id" :options="$musimtanam" selected="{{{ old('musim_tanam_id') ?? ($data['musim_tanam_id'] ?? null) }}}" required />
                </div>
                <div class="col-md-1 my-auto">
                    <label for="name">Waktu Tanam</label>
                </div>
                <div class="col-md-5">
                    <input type="text" id="waktu_tanam" name="waktu_tanam" class="form-control" autofocus data-parsley-required="true" value="{{{ $data->waktu_tanam ?? old('waktu_tanam') }}}">
                </div>
            </div>
        </div>
        <div class="form-group">
            <div class="row">
                <div class="col-md-1 my-auto">
                    <label for="name">Pupuk</label>
                </div>
                <div class="col-md-5">
                    <x-form.Dropdown name="jenis_pupuk_id" :options="$pupuk" selected="{{{ old('jenis_pupuk_id') ?? ($data['jenis_pupuk_id'] ?? null) }}}" required />
                </div>
                <div class="col-md-1 my-auto">
                    <label for="name">Keterangan</label>
                </div>
                <div class="col-md-5">
                    <input type="text" id="keterangan" name="keterangan" class="form-control" autofocus data-parsley-required="true" value="{{{ $data->nama ?? old('keterangan') }}}">
                </div>
            </div>
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
