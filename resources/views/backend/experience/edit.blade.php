@extends('backend.admin.app')

@section('title', 'MyCV | Edit Experience')

@section('content')
<div class="content-wrapper">

  <section class="content-header">
    <h1>
      CV
      <small>Update Experience</small>
    </h1>
    <ol class="breadcrumb">
      <li>
        <a href="{{ route('index') }}"><i class="fa fa-dashboard"></i> Dashboard</a>
      </li>
      <li>
        <a href="{{ route('experience.index') }}">Experience Detail</a>
      </li>
      <li class="active">Update Experience</li>
    </ol>
  </section>

  <!-- Main content -->
  <section class="content">
      <div class="row">
        {!! Form::model($info, [
          'method' => 'PUT',
          'route' => ['experience.update', $info->id],
          'files' => TRUE,
          'id' => 'post-form'
        ])!!}

        @include('backend.experience.form')

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
