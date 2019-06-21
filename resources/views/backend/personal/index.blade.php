@extends('backend.admin.app')

@section('title', 'MyBlog | index')

@section('content')
<div class="content-wrapper">

  <section class="content-header">
    <h1>
      Blog
      <small>Display All blog posts</small>
    </h1>
    <ol class="breadcrumb">
      <li>
        <a href="{{ route('home') }}"><i class="fa fa-dashboard"></i> Dashboard</a>
      </li>
      <li>
        <a href="{{ route('personal.index') }}">Blog</a>
      </li>
      <li class="active">All Posts</li>
    </ol>
  </section>

  <!-- Main content -->

  <!-- /.content -->
</div>
<!-- /.content-wrapper -->
@endsection

@section('script')
  <script type="text/javascript">
      $('ul.pagination').addClass('no-margin pagination-sm');
  </script>
@endsection
