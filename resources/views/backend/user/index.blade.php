@extends('layouts.backend.main')

@section('title', 'MyBlog | Users')
@section('content')
<div class="content-wrapper">

  <section class="content-header">
    <h1>
      Users
      <small>Display All users</small>
    </h1>
    <ol class="breadcrumb">
      <li>
        <a href="{{ route('home') }}"><i class="fa fa-dashboard"></i> Dashboard</a>
      </li>
      <li>
        <a href="{{ route('users.index') }}">Users</a>
      </li>
      <li class="active">All Users</li>
    </ol>
  </section>

  <!-- Main content -->
  <section class="content">
      <div class="row">
        <div class="col-xs-12">
          <div class="box">
            <div class="box-header clearfix">
                <div class="pull-left">
                    <a href="{{ route('users.create') }}" class="btn btn-success"><i class="fa fa-plus"></i> Add New</a>
                </div>
                <div class="pull-right">
                </div>
            </div>
            <!-- /.box-header -->
            @if (! $users->count())
                <div class="alert alert-danger">
                    <strong>No record found</strong>
                </div>
            @else
                    @include('backend.user.table')
            @endif
            <!-- /.box-body -->
            <div class="box-footer clearfix">
              <div class="pull-left">
                {{ $users->appends( Request::query())->render() }}
              </div>
              <div class="pull-right">
                <small>{{ $usersCount }} {{ str_plural('item', $usersCount) }}</small>
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
