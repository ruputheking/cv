@extends('backend.admin.app')

@section('style')
<link rel="stylesheet" href="/detail/w3.css">
<link rel="stylesheet" href="/detail/css">
<link rel="stylesheet" href="/detail/font-awesome.min.css">
@endsection

@section('title', 'MyBlog | Dashboard')
@section('content')
@php
  $info = Auth::user();
@endphp

<div class="content-wrapper">

  <section class="content-header">
    <h1>
      Dasbhboard
    </h1>
    <ol class="breadcrumb">
      <li class="active"><i class="fa fa-dashboard"></i> Dashboard</li>
    </ol>
  </section>

  <!-- Main content -->
  <section class="content">
      <div class="row">
        <div class="col-xs-12">
          <div class="box">
            <!-- /.box-header -->
            <!-- Page Container -->
            @include('cv.info')
            <!-- /.box-body -->
          </div>
          <!-- /.box -->
        </div>
      </div>
    <!-- ./row -->
  </section>
  <!-- /.content -->
</div>
<!-- /.content-wrapper -->
@endsection
