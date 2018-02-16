@extends('adminlte::page')

@section('title', __('admin.cities.title'))

@section('content_header')
  <h1>@lang('admin.cities.title')</h1>
@endsection

@section('content')
    @include('admin/menu-parametres')
    <div class="row">
        <div class="col-sm-10">
            <div class="box box-solid box-primary">
              <div class="box-header"><h3 class="box-title">@lang('admin.cities.addCity')</h3></div>
              <div class="box-body">
                <h4>@lang('admin.cities.saveNewCity')</h4>
                {!! Form::open(['method' => 'POST', 'route' => 'cities.store', 'class' => 'form-vertical']) !!}
                <div class="form-group{{ $errors->has('newName') ? ' has-error' : '' }} col-sm-5">
                  {!! Form::text('newName', null, ['class' => 'form-control', 'required' => 'required', 'placeholder' => __('admin.cities.name')]) !!}
                  <small class="text-danger">{{ $errors->first('newName') }}</small>
                </div>
                <div class="form-group{{ $errors->has('newZipCode') ? ' has-error' : '' }} col-sm-2">
                  {!! Form::text('newZipCode', null, ['class' => 'form-control', 'required' => 'required', 'placeholder' => __('admin.cities.zipCode')]) !!}
                  <small class="text-danger">{{ $errors->first('newZipCode') }}</small>
                </div>
                <div class="form-group{{ $errors->has('newCountry') ? ' has-error' : '' }} col-sm-3">
                  {!! Form::text('newCountry', null, ['class' => 'form-control', 'required' => 'required', 'placeholder' => __('admin.cities.country')]) !!}
                  <small class="text-danger">{{ $errors->first('newCountry') }}</small>
                </div>

                <div class="form-group">
                    {!! Form::button('<i class="fa fa-plus"></i>', ['type' => 'submit', 'class' => 'btn btn-success', 'data-toggle' => 'tooltip',  'title' => __('admin.cities.addCity')]) !!}
                </div>
                {!! Form::close() !!}
              </div>
            </div>

            <div class="box box-solid box-warning">
                <div class="box-header"><h3 class="box-title">@lang('admin.cities.listTitle')</h3></div>
                <div class="box-body">
                    @if (count($cities))


                    <h4>@lang('admin.cities.list')</h4>
                    @foreach ($cities as $city)
                        {!! Form::open(['method' => 'POST', 'route' => ['cities.update', $city->id], 'class' => 'form-vertical']) !!}
                        {!! Form::hidden('id',$city->id, ['required' => 'required']) !!}
                        <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }} col-sm-5">
                            {!! Form::text('name',$city->name, ['class' => 'form-control', 'required' => 'required']) !!}
                            <small class="text-danger">{{ $errors->first('name') }}</small>
                        </div>
                        <div class="form-group{{ $errors->has('zipCode') ? ' has-error' : '' }} col-sm-2">
                            {!! Form::text('zipCode',$city->zipCode, ['class' => 'form-control', 'required' => 'required']) !!}
                            <small class="text-danger">{{ $errors->first('zipCode') }}</small>
                        </div>
                        <div class="form-group{{ $errors->has('country') ? ' has-error' : '' }} col-sm-3">
                            {!! Form::text('country',$city->country, ['class' => 'form-control', 'required' => 'required']) !!}
                            <small class="text-danger">{{ $errors->first('country') }}</small>
                        </div>
                        <div class="form-group">
                            {!! Form::button('<i class="fa fa-edit"></i>', ['type' => 'submit', 'class' => 'btn btn-success', 'data-toggle' => 'tooltip',  'title' => __('admin.cities.modifyCity')]) !!}
                            <a href='/admin/cities/{{ $city->id }}/destroy' class='btn btn-danger' data-toggle='tooltip',  title='@lang('admin.cities.deleteCity')'><i class="fa fa-trash"></i></a>
                        </div>
                        {!! Form::close() !!}
                    @endforeach
                  @else
                    <div class="alert alert-info alert-dismissable">
                      <i class="fa fa-info"></i><button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>&nbsp;<b>@lang('admin.cities.noCitiesYet')</b>
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
