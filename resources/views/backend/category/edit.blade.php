@extends('layouts.backend.main')

@section('title', 'MyBlog | Edit Category')
@section('content')
<div class="content-wrapper">

  <section class="content-header">
    <h1>
      Category
      <small>Edit Category</small>
    </h1>
    <ol class="breadcrumb">
      <li>
        <a href="{{ route('home') }}"><i class="fa fa-dashboard"></i> Dashboard</a>
      </li>
      <li>
        <a href="{{ route('categories.index') }}">Categories</a>
      </li>
      <li class="active">Edit Category</li>
    </ol>
  </section>

  <!-- Main content -->
  <section class="content">
      <div class="row">
        {!! Form::model($category, [
          'method' => 'PUT',
          'route' => ['categories.update', $category->id],
          'files' => TRUE,
          'id' => 'post-form'
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
