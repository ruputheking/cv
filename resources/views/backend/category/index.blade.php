@extends('layouts.backend.main')

@section('title', 'MyBlog | Category')
@section('content')
<div class="content-wrapper">

  <section class="content-header">
    <h1>
      Categories
      <small>Display All categories</small>
    </h1>
    <ol class="breadcrumb">
      <li>
        <a href="{{ route('home') }}"><i class="fa fa-dashboard"></i> Dashboard</a>
      </li>
      <li>
        <a href="{{ route('categories.index') }}">Categories</a>
      </li>
      <li class="active">All Categories</li>
    </ol>
  </section>

  <!-- Main content -->
  <section class="content">
      <div class="row">
        <div class="col-xs-12">
          <div class="box">
            <div class="box-header clearfix">
                <div class="pull-left">
                    <a href="{{ route('categories.create') }}" class="btn btn-success"><i class="fa fa-plus"></i> Add New</a>
                </div>
                <div class="pull-right">
                </div>
            </div>
            <!-- /.box-header -->
            @if (! $categories->count())
                <div class="alert alert-danger">
                    <strong>No record found</strong>
                </div>
            @else
                    @include('backend.category.table')
            @endif
            <!-- /.box-body -->
            <div class="box-footer clearfix">
              <div class="pull-left">
                {{ $categories->appends( Request::query())->render() }}
              </div>
              <div class="pull-right">
                <small>{{ $categoriesCount }} {{ str_plural('item', $categoriesCount) }}</small>
              </div>
            </div>

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

@section('script')
  <script type="text/javascript">
      $('ul.pagination').addClass('no-margin pagination-sm');
  </script>
@endsection
