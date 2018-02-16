@extends('adminlte::page')

@section('title', __('admin.spaces.title'))

@section('content_header')
  <h1>@lang('admin.spaces.title')</h1>
@endsection

@section('content')


    @include('admin/menu-parametres')
    <div class="row">
      <div class="col-sm-10">
        <div class="box box-solid box-warning">
          <div class="box-header">
            <h3 class="box-title">@lang('admin.spaces.listTitle')</h3>
            <div class="box-tools pull-right">
              <a href="/admin/spaces/create" class="btn btn-primary btn-sm" data-toggle="tooltip" title="" data-original-title="@lang('admin.spaces.createSpace')"><i class="fa fa-plus"></i></a>
            </div>
          </div>
          <div class="box-body">
                @if (count($spaces))
                <table class="table">
                  <thead>
                      <tr>
                          <th>@lang('admin.spaces.name')</th>
                          <th>@lang('admin.spaces.address')</th>
                          <th>@lang('admin.spaces.city')</th>
                          <th>@lang('admin.spaces.mail')</th>
                          <th>&nbsp;</th>
                      </tr>
                    </thead>
                    <tbody>

                        @foreach ($spaces as $space)
                        <tr>
                            <td>{{ $space->name }}</td>
                            <td>{{ $space->address }}</td>
                            <td>{{ $space->city->name }}</td>
                            <td>{{ $space->email }}</td>
                            <td><a href="/admin/spaces/{{ $space->id }}/edit" class="btn btn-success btn-sm"  data-toggle='tooltip'  title="@lang('admin.spaces.modify')"><i class="fa fa-pencil-square-o"></i></a></td>
                        </tr>
                        @endforeach

                    </tbody>
                </table>
            @else
                <div class="alert alert-info alert-dismissable">
                  <i class="fa fa-info"></i><button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>&nbsp;<b>@lang('admin.spaces.noSpacesYet')</b>
                </div>
            @endif
            </div>
        </div>
      </div>
    </div>
@endsection

@section('js')
<script>
    $(document).ready(function(){
        $('[data-toggle="tooltip"]').tooltip();
    });
</script>

@endsection
