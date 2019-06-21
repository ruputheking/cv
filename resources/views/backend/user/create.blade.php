@extends('layouts.backend.main')

@section('title', 'MyBlog | Add New User')
@section('content')
<div class="content-wrapper">

  <section class="content-header">
    <h1>
      User
      <small>Add new user</small>
    </h1>
    <ol class="breadcrumb">
      <li>
        <a href="{{ route('home') }}"><i class="fa fa-dashboard"></i> Dashboard</a>
      </li>
      <li>
        <a href="{{ route('users.index') }}">User</a>
      </li>
      <li class="active">Add new</li>
    </ol>
  </section>

  <!-- Main content -->
  <section class="content">
      <div class="row">
        {!! Form::model($user, [
          'method' => 'POST',
          'route' => 'users.store',
          'files' => TRUE,
          'id' => 'user-form'
        ])!!}

        @include('backend.user.form')

        {!! Form::close() !!}
      </div>
    <!-- ./row -->
  </section>
  <!-- /.content -->
</div>
<!-- /.content-wrapper -->
@endsection

@section('script')
    @include('backend.user.script')
@endsection
