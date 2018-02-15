@extends('adminlte::page')

@section('title', __('admin.spaces.createSpace'))

@section('content_header')
  <h1>@lang('admin.spaces.createSpace')</h1>
@endsection


@section('content')
    @include('admin/menu-parametres')
    <div class="row">
        <div class="col-sm-6">
            <div class="box box-solid box-primary">

                <div class="box-header with-border">
                    <h3 class="box-title">@lang('admin.spaces.createSpace')</h3>
                    <div class="box-tools pull-right">
                    </div><!-- /.box-tools -->
                </div><!-- /.box-header -->

                <div class="box-body">

                    {!! Form::open(['method' => 'POST', 'route' => 'spaces.store', 'class' => '']) !!}

                    <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
                        {!! Form::label('name', __('admin.spaces.name') . ' *') !!}
                        {!! Form::text('name', null, ['class' => 'form-control', 'required' => 'required']) !!}
                        <small class="text-danger">{{ $errors->first('name') }}</small>
                    </div>

                    <div class="form-group{{ $errors->has('address') ? ' has-error' : '' }}">
                        {!! Form::label('address', __('admin.spaces.address')) !!}
                        {!! Form::textarea('address', null, ['class' => 'form-control', 'required' => 'required', 'rows' => '3']) !!}
                        <small class="text-danger">{{ $errors->first('address') }}</small>
                    </div>

                    <div class="form-group{{ $errors->has('city_id') ? ' has-error' : '' }}">
                        {!! Form::label('city_id', __('admin.spaces.city')) !!}
                        {!! Form::select('city_id', $cities, null, ['class' => 'form-control', 'required' => 'required']) !!}
                        <small class="text-danger">{{ $errors->first('city_id') }}</small>
                    </div>

                    {!! Form::submit(__('admin.spaces.createSpace'), ['class' => 'btn btn-success pull-right']) !!}
                    <a href="/admin/spaces" class="btn btn-warning">@lang('admin.spaces.cancel')</a>
                    {!! Form::close() !!}
                </div><!-- /.box-body -->

                <div class="box-footer">

                </div>
                <!-- box-footer -->

            </div><!-- /.box -->

        </div>
    </div>


@endsection
