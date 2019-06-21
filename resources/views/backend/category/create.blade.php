@extends('layouts.backend.main')

@section('title', 'MyBlog | Add New Category')
@section('content')
<div class="content-wrapper">

  <section class="content-header">
    <h1>
      Category
      <small>Add new category</small>
    </h1>
    <ol class="breadcrumb">
      <li>
        <a href="{{ route('home') }}"><i class="fa fa-dashboard"></i> Dashboard</a>
      </li>
      <li>
        <a href="{{ route('categories.index') }}">Category</a>
      </li>
      <li class="active">Add new</li>
    </ol>
  </section>

  <!-- Main content -->
  <section class="content">
      <div class="row">
        {!! Form::model($category, [
          'method' => 'POST',
          'route' => 'categories.store',
          'files' => TRUE,
          'id' => 'category-form'
        ])!!}

        @include('backend.category.form')

        {!! Form::close() !!}
      </div>
    <!-- ./row -->
  </section>
  <!-- /.content -->
</div>
<!-- /.content-wrapper -->
@endsection

@section('script')
    @include('backend.category.script')
@endsection
