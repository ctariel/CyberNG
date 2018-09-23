@extends('adminlte::page')

@section('title', __('admin.hardware.title'))

@section('content_header')
      <h1>@lang('admin.hardware.title')</h1>
@endsection


@section('content')
    {{-- @include('admin/menu-parametres') --}}
    <div class="row">
        <div class="col-sm-6">
            <div class="box box-solid box-primary">

                <div class="box-header with-border">
                    @if( isset($hardware) )
                        <h3 class="box-title">@lang('admin.hardware.modify')</h3>
                    @else
                        <h3 class="box-title">@lang('admin.hardware.create')</h3>
                    @endif
                    <div class="box-tools pull-right">
                    </div><!-- /.box-tools -->
                </div><!-- /.box-header -->

                <div class="box-body">
                    <?php //dd($space); ?>
                    @if( isset($hardware) )
                        {!! Form::model($hardware, ['method' => 'POST', 'route' => array('hardware.update', $room->id, $hardware->id), 'class' => 'form-horizontal']) !!}
                    @else
                        {!! Form::open(['method' => 'POST', 'route' => array('hardware.store', $room->id), 'class' => 'form-horizontal']) !!}
                    @endif
                    {!! Form::hidden('room_id', $room->id) !!}
                    <div class="form-group">
                        {!! Form::label('space', __('admin.hardware.room') . ' *', ['class' => 'col-sm-3 control-label']) !!}
                        <div class="col-sm-9">
                            {!! Form::text('room', $room->space->name . " / " . $room->name, ['class' => 'form-control', 'disabled' => 'disabled']) !!}
                            <small class="text-danger"></small>
                        </div>
                    </div>

                    <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
                        {!! Form::label('name', __('admin.hardware.name') . ' *', ['class' => 'col-sm-3 control-label']) !!}
                        <div class="col-sm-9">
                            {!! Form::text('name', old('name'), ['class' => 'form-control', 'required' => 'required']) !!}
                            <small class="text-danger">{{ $errors->first('name') }}</small>
                        </div>
                    </div>

                    <div class="form-group{{ $errors->has('IPAddress') ? ' has-error' : '' }}">
                        {!! Form::label('IPAddress', __('admin.hardware.IPAddress'), ['class' => 'col-sm-3 control-label']) !!}
                        <div class="col-sm-9">
                            {!! Form::text('IPAddress', old('IPAddress'), ['class' => 'form-control']) !!}
                            <small class="text-danger">{{ $errors->first('IPAddress') }}</small>
                        </div>
                    </div>

                    <div class="form-group{{ $errors->has('MACAddress') ? ' has-error' : '' }}">
                        {!! Form::label('MACAddress', __('admin.hardware.MACAddress'), ['class' => 'col-sm-3 control-label']) !!}
                        <div class="col-sm-9">
                            {!! Form::text('MACAddress', old('MACAddress'), ['class' => 'form-control']) !!}
                            <small class="text-danger">{{ $errors->first('MACAddress') }}</small>
                        </div>
                    </div>

                    <div class="form-group{{ $errors->has('comment') ? ' has-error' : '' }}">
                        {!! Form::label('comment', __('admin.hardware.comment'), ['class' => 'col-sm-3 control-label']) !!}
                        <div class="col-sm-9">
                            {!! Form::textarea('comment', old('comment'), ['class' => 'form-control', 'rows' => '3']) !!}
                            <small class="text-danger">{{ $errors->first('comment') }}</small>
                        </div>
                    </div>

                    @if( isset($hardware) )
                        {!! Form::submit(__('admin.hardware.modify'), ['class' => 'btn btn-success pull-right']) !!}
                    @else
                        {!! Form::submit(__('admin.hardware.create'), ['class' => 'btn btn-success pull-right']) !!}
                    @endif
                    <a href="/admin/spaces" class="btn btn-warning">@lang('admin.hardware.cancel')</a>

                    {!! Form::close() !!}
                </div><!-- /.box-body -->

                <div class="box-footer">

                </div>
                <!-- box-footer -->

            </div><!-- /.box -->

        </div>
    </div>


@endsection
