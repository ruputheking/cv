@extends('backend.admin.app')

@section('title', 'MyCV | Edit Personal')

@section('content')
<div class="content-wrapper">

  <section class="content-header">
    <h1>
      Blog
      <small>Update post</small>
    </h1>
    <ol class="breadcrumb">
      <li>
        <a href="{{ route('index') }}"><i class="fa fa-dashboard"></i> Dashboard</a>
      </li>
      <li>
        <a href="{{ route('personal.index') }}">Blog</a>
      </li>
      <li class="active">Add new</li>
    </ol>
  </section>

  <!-- Main content -->
  <section class="content">
      <div class="row">
        {!! Form::model($user, [
          'method' => 'PUT',
          'route' => ['personal.update', $user->id],
          'files' => TRUE,
          'id' => 'post-form'
        ])!!}

        @include('backend.personal.form')

        {!! Form::close() !!}
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

      $('#title').on('blur', function() {
        var theTitle = this.value.toLowerCase().trim(),
            slugInput = $('#slug'),
            theSlug = theTitle.replace(/&/g, '-and-')
                              .replace(/[^a-z0-9]+/g, '-')
                              .replace(/\-\-+/g, '-')
                              .replace(/^-+|-+$/g, '');

            slugInput.val(theSlug);
      });
      var simplemde1 = new SimpleMDE({ element: $("#excerpt")[0] });
      var simplemde2 = new SimpleMDE({ element: $("#body")[0] });

      $('#datetimepicker1').datetimepicker({
        format: 'YYYY-MM-DD HH:mm:ss',
        showClear: true
      });

      $('#draft-btn').click(function(e) {
        e.preventDefault();
        $('#published_at').val("");
        $('#post-form').submit();
      });
  </script>
@endsection
