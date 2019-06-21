@extends('backend.admin.app')

@section('title', 'MyCV | Experience')

@section('content')
  <div class="content-wrapper">

    <section class="content-header">
      <h1>
        Blog
        <small>Display All blog posts</small>
      </h1>
      <ol class="breadcrumb">
        <li>
          <a href="{{ route('index') }}"><i class="fa fa-dashboard"></i> Dashboard</a>
        </li>
        <li>
          <a href="{{ route('personal.index') }}">Blog</a>
        </li>
        <li class="active">All Posts</li>
      </ol>
    </section>

    <!-- Main content -->
    <!-- Main content -->
    <section class="content">
        <div class="row">
          <div class="col-xs-12">
            <div class="box">
              <div class="box-header clearfix">
                  <div class="pull-left">
                      <a href="{{ route('experience.create') }}" class="btn btn-success"><i class="fa fa-plus"></i> Add New</a>
                  </div>
                  <div class="pull-right">
                  </div>
              </div>
              <!-- /.box-header -->
              @include('backend.experience.table')
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
