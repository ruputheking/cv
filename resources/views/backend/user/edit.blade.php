@extends('layouts.backend.main')

@section('title', 'MyBlog | Edit User')
@section('content')
<div class="content-wrapper">

  <section class="content-header">
    <h1>
      User
      <small>Edit User</small>
    </h1>
    <ol class="breadcrumb">
      <li>
        <a href="{{ route('home') }}"><i class="fa fa-dashboard"></i> Dashboard</a>
      </li>
      <li>
        <a href="{{ route('users.index') }}">Users</a>
      </li>
      <li class="active">Edit User</li>
    </ol>
  </section>

  <!-- Main content -->
  <section class="content">
      <div class="row">
        {!! Form::model($user, [
          'method' => 'PUT',
          'route' => ['users.update', $user->id],
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
