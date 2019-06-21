@php
  $current = Auth::user()->id;
@endphp
@if ($current == $info->user_id)
  <div class="col-xs-9">
    <div class="box">
        <div class="box-body">
          <div class="form-group {{ $errors->has('office') ? 'has-error' : '' }}">
              {!! Form::label('office') !!}
              {!! Form::text('office', null, ['class' => 'form-control']) !!}
              @if($errors->has('office'))
                  <span class="help-block">{{ $errors->first('office') }}</span>
              @endif
          </div>
          <div class="form-group {{ $errors->has('slug') ? 'has-error' : '' }}">
              {!! Form::label('slug') !!}
              {!! Form::text('slug', null, ['class' => 'form-control']) !!}
              @if($errors->has('slug'))
                  <span class="help-block">{{ $errors->first('slug') }}</span>
              @endif
          </div>
          <div class="form-group {{ $errors->has('email') ? 'has-error' : '' }}">
              {!! Form::label('email') !!}
              {!! Form::text('email', null, ['class' => 'form-control']) !!}
              @if($errors->has('email'))
                  <span class="help-block">{{ $errors->first('email') }}</span>
              @endif
          </div>
          <div class="form-group {{ $errors->has('phone') ? 'has-error' : '' }}">
              {!! Form::label('phone') !!}
              {!! Form::text('phone', null, ['class' => 'form-control']) !!}
              @if($errors->has('phone'))
                  <span class="help-block">{{ $errors->first('phone') }}</span>
              @endif
          </div>
          <div class="form-group {{ $errors->has('address') ? 'has-error' : '' }}">
              {!! Form::label('address') !!}
              {!! Form::text('address', null, ['class' => 'form-control']) !!}
              @if($errors->has('address'))
                  <span class="help-block">{{ $errors->first('address') }}</span>
              @endif
          </div>
          <div class="form-group {{ $errors->has('knowledge') ? 'has-error' : '' }}">
              {!! Form::label('knowledge') !!}
              {!! Form::text('knowledge', null, ['class' => 'form-control']) !!}
              @if($errors->has('knowledge'))
                  <span class="help-block">{{ $errors->first('knowledge') }}</span>
              @endif
          </div>
        </div>
    </div>
    <!-- /.box -->
  </div>

  <div class="col-xs-3">
      <div class="box">
          <div class="box-header with-border">
              <h3 class="box-title">Publish Date</h3>
          </div>
          <div class="box-body">
            <div class="form-group {{ $errors->has('published_at') ? 'has-error' : '' }}">
                <div class='input-group date' id='datetimepicker1'>
                    {!! Form::text('published_at', null, ['class' => 'form-control', 'placeholder' => 'Y-m-d H:i:s']) !!}
                    <span class="input-group-addon">
                        <span class="glyphicon glyphicon-calendar"></span>
                    </span>
                </div>

                @if($errors->has('published_at'))
                    <span class="help-block">{{ $errors->first('published_at') }}</span>
                @endif
            </div>

          </div>
          <div class="box-footer clearfix">
            <div class="pull-left">
                <a id="draft-btn" class="btn btn-default">Save Draft</a>
            </div>
            <div class="pull-right">
                {!! Form::submit('Publish', ['class' => 'btn btn-primary']) !!}
            </div>
          </div>
      </div>

      <div class="box">
          <div class="box-header with-border">
              <h3 class="box-title">Feature Image</h3>
          </div>
          <div class="box-body text-center">
            <div class="form-group {{ $errors->has('image') ? 'has-error' : '' }}">
                <br>
                <div class="fileinput fileinput-new" data-provides="fileinput">
                  <div class="fileinput-new img-thumbnail" style="width: 200px; height: 150px;">
                    <img src="/detail/avatar_hat.jpg" style="width:180px; height:140px;"  alt="...">
                  </div>
                  <div class="fileinput-preview fileinput-exists img-thumbnail" style="max-width: 200px; max-height: 150px;"></div>
                  <div>
                    <span class="btn btn-outline-secondary btn-file"><span class="fileinput-new">Select image</span><span class="fileinput-exists">Change</span>{!! Form::file('image') !!}</span>
                    <a href="#" class="btn btn-outline-secondary fileinput-exists" data-dismiss="fileinput">Remove</a>
                  </div>
                </div>
                @if($errors->has('image'))
                    <span class="help-block">{{ $errors->first('image') }}</span>
                @endif
            </div>
          </div>
      </div>

  </div>

@else
  <div class="col-xs-9">
    <div class="box">
        <div class="box-body">
          <h4>You are finding Water in desert :)</h4>
        </div>
    </div>
  </div>
@endif
