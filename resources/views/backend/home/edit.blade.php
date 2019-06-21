@extends('layouts.backend.main')

@section('title', 'MyBlog | Edit Account')
@section('content')
<div class="content-wrapper">

  <section class="content-header">
    <h1>
      Account
      <small>Edit Account</small>
    </h1>
    <ol class="breadcrumb">
      <li>
        <a href="{{ route('home') }}"><i class="fa fa-dashboard"></i> Dashboard</a>
      </li>
      <li class="active">Edit Account</li>
    </ol>
  </section>

  <!-- Main content -->
  <section class="content">
      <div class="row">
        @include('backend.partial.message')

        {!! Form::model($user, [
          'method' => 'PUT',
          'route' => 'edit-account',
          'id' => 'user-form'
        ])!!}

        @include('backend.user.form', ['hideRoleDropdown' => true])

        {!! Form::close() !!}
      </div>
    <!-- ./row -->
  </section>
  <!-- /.content -->
</div>
<!-- /.content-wrapper -->
@endsection
