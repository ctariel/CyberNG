@extends('adminlte::page')

@section('title', __('admin.spaces.title'))

@section('content_header')
      <h1>@lang('admin.spaces.title')</h1>
@endsection


@section('content')
    @include('admin/menu-parametres')
    <div class="row">
        <div class="col-sm-6">
            <div class="box box-solid box-primary">

                <div class="box-header with-border">
                    @if( isset($space) )
                        <h3 class="box-title">@lang('admin.spaces.modify')</h3>
                    @else
                        <h3 class="box-title">@lang('admin.spaces.create')</h3>
                    @endif
                    <div class="box-tools pull-right">
                    </div><!-- /.box-tools -->
                </div><!-- /.box-header -->

                <div class="box-body">
                    <?php //dd($space); ?>
                    @if( isset($space) )
                        {!! Form::model($space, ['method' => 'POST', 'route' => array('spaces.update', $space->id), 'class' => 'form-horizontal']) !!}
                    @else
                        {!! Form::open(['method' => 'POST', 'route' => 'spaces.store', 'class' => 'form-horizontal']) !!}
                    @endif

                    <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
                        {!! Form::label('name', __('admin.spaces.name') . ' *', ['class' => 'col-sm-3 control-label']) !!}
                        <div class="col-sm-9">
                            {!! Form::text('name', old('name'), ['class' => 'form-control', 'required' => 'required']) !!}
                            <small class="text-danger">{{ $errors->first('name') }}</small>
                        </div>
                    </div>

                    <div class="form-group{{ $errors->has('address') ? ' has-error' : '' }}">
                        {!! Form::label('address', __('admin.spaces.address'), ['class' => 'col-sm-3 control-label']) !!}
                        <div class="col-sm-9">
                            {!! Form::textarea('address', old('address'), ['class' => 'form-control', 'rows' => '3']) !!}
                            <small class="text-danger">{{ $errors->first('address') }}</small>
                        </div>
                    </div>

                    <div class="form-group{{ $errors->has('city_id') ? ' has-error' : '' }}">
                        {!! Form::label('city_id', __('admin.spaces.city'), ['class' => 'col-sm-3 control-label']) !!}
                        <div class="col-sm-9">
                            {!! Form::select('city_id', $cities, old('city_id'), ['class' => 'form-control', 'required' => 'required']) !!}
                            <small class="text-danger">{{ $errors->first('city_id') }}</small>
                        </div>
                    </div>

                    <div class="form-group{{ $errors->has('phoneNumber') ? ' has-error' : '' }}">
                        {!! Form::label('phoneNumber', __('admin.spaces.phone'), ['class' => 'col-sm-3 control-label']) !!}
                        <div class="col-sm-9">
                            {!! Form::text('phoneNumber', old('phoneNumber'), ['class' => 'form-control']) !!}
                            <small class="text-danger">{{ $errors->first('phoneNumber') }}</small>
                        </div>
                    </div>

                    <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                        {!! Form::label('email',  __('admin.spaces.mail') . ' *', ['class' =>'col-sm-3 control-label']) !!}
                        <div class="col-sm-9">
                            {!! Form::email('email', old('email'), ['class' => 'form-control', 'required' => 'required', 'placeholder' => 'foo@bar.com']) !!}
                            <small class="text-danger">{{ $errors->first('email') }}</small>
                        </div>
                    </div>
                    @if( isset($space) )
                        {!! Form::submit(__('admin.spaces.modify'), ['class' => 'btn btn-success pull-right']) !!}
                    @else
                        {!! Form::submit(__('admin.spaces.create'), ['class' => 'btn btn-success pull-right']) !!}
                    @endif
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
