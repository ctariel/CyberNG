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
                      <tr>
                        <td>Médiathèque de la Guerche de Bretagne</td>
                        <td>Place Charles de Gaulle</td>
                        <td>la Guerche de Bretagne</td>
                        <td>mediatheque@laguerchedebretagne.fr</td>
                        <td><a href="index.php?a=43&amp;b=2&amp;idespace=1"><button class="btn btn-success btn-sm" type="submit" value="modifier"><i class="fa fa-pencil-square-o"></i></button></a></td>
                      </tr>
                    </tbody></table>
            

                <h4>@lang('admin.spaces.list')</h4>
                @foreach ($spaces as $space)
                    {!! Form::hidden('id',$space->id, ['required' => 'required']) !!}
                    <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }} col-sm-5">
                        {!! Form::text('name',$space->name, ['class' => 'form-control', 'required' => 'required']) !!}
                        <small class="text-danger">{{ $errors->first('name') }}</small>
                    </div>
                    <div class="form-group{{ $errors->has('zipCode') ? ' has-error' : '' }} col-sm-2">
                        {!! Form::text('zipCode',$space->zipCode, ['class' => 'form-control', 'required' => 'required']) !!}
                        <small class="text-danger">{{ $errors->first('zipCode') }}</small>
                    </div>
                    <div class="form-group{{ $errors->has('country') ? ' has-error' : '' }} col-sm-3">
                        {!! Form::text('country',$space->country, ['class' => 'form-control', 'required' => 'required']) !!}
                        <small class="text-danger">{{ $errors->first('country') }}</small>
                    </div>
                    <div class="form-group">
                        {!! Form::button('<i class="fa fa-edit"></i>', ['type' => 'submit', 'class' => 'btn btn-success', 'data-toggle' => 'tooltip',  'title' => __('admin.cities.modifyCity')]) !!}
                        <a href='/admin/spaces/{{ $space->id }}/destroy' class='btn btn-danger' data-toggle='tooltip',  title='@lang('admin.cities.deleteCity')'><i class="fa fa-trash"></i></a>
                    </div>
                @endforeach
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