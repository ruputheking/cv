<div class="box-body ">
      <table class="table table-bordered">
        <thead>
          <tr>
            <td width="80">Action</td>
            <td>School</td>
            <td>Level</td>
            <td>start_date</td>
            <td>end_date</td>
          </tr>
        </thead>
        <tbody>
          @forelse(Auth::user()->experience as $info)
              <tr>
                <td>
                  {!! Form::open(['method' => 'DELETE', 'route' => ['experience.destroy', Auth::user()->id]]) !!}
                          <a href="{{ route('experience.edit', $info->id) }}" class="btn btn-xs btn-default">
                            <i class="fa fa-edit"></i>
                          </a>
                          <button type="submit" class="btn btn-xs btn-danger">
                            <i class="fa fa-trash"></i>
                          </button>
                  {!! Form::close() !!}
                </td>
                <td>{{ $info->office }}</td>
                <td>{{ $info->excerpt }}</td>
                <td>{{ $info->start_date }}</td>
                <td>{{ $info->end_date }}</td>
              </tr>
          @empty
            <h4>No Experience Record</h4>
          @endforelse
        </tbody>
      </table>
</div>
