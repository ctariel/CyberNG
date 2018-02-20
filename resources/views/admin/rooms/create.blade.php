@extends('adminlte::page')

@section('title', __('admin.rooms.title'))

@section('content_header')
      <h1>@lang('admin.rooms.title')</h1>
@endsection


@section('content')
    @include('admin/menu-parametres')
    <div class="row">
        <div class="col-sm-6">
            <div class="box box-solid box-primary">

                <div class="box-header with-border">
                    @if( isset($room) )
                        <h3 class="box-title">@lang('admin.rooms.modify')</h3>
                    @else
                        <h3 class="box-title">@lang('admin.rooms.create')</h3>
                    @endif
                    <div class="box-tools pull-right">
                    </div><!-- /.box-tools -->
                </div><!-- /.box-header -->

                <div class="box-body">
                    <?php //dd($space); ?>
                    @if( isset($room) )
                        {!! Form::model($room, ['method' => 'POST', 'route' => array('rooms.update', $room->id), 'class' => 'form-horizontal']) !!}
                    @else
                        {!! Form::open(['method' => 'POST', 'route' => 'rooms.store', 'class' => 'form-horizontal']) !!}
                    @endif
                    {!! Form::hidden('space_id', $space->id) !!}
                    <div class="form-group">
                        {!! Form::label('space', __('admin.rooms.space') . ' *', ['class' => 'col-sm-3 control-label']) !!}
                        <div class="col-sm-9">
                            {!! Form::text('space', $space->name, ['class' => 'form-control', 'disabled' => 'disabled']) !!}
                            <small class="text-danger"></small>
                        </div>
                    </div>

                    <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
                        {!! Form::label('name', __('admin.rooms.name') . ' *', ['class' => 'col-sm-3 control-label']) !!}
                        <div class="col-sm-9">
                            {!! Form::text('name', old('name'), ['class' => 'form-control', 'required' => 'required']) !!}
                            <small class="text-danger">{{ $errors->first('name') }}</small>
                        </div>
                    </div>

                    <div class="form-group{{ $errors->has('comment') ? ' has-error' : '' }}">
                        {!! Form::label('comment', __('admin.rooms.comment'), ['class' => 'col-sm-3 control-label']) !!}
                        <div class="col-sm-9">
                            {!! Form::textarea('comment', old('comment'), ['class' => 'form-control', 'rows' => '3']) !!}
                            <small class="text-danger">{{ $errors->first('comment') }}</small>
                        </div>
                    </div>

                    @if( isset($room) )
                        {!! Form::submit(__('admin.rooms.modify'), ['class' => 'btn btn-success pull-right']) !!}
                    @else
                        {!! Form::submit(__('admin.rooms.create'), ['class' => 'btn btn-success pull-right']) !!}
                    @endif
                    <a href="/admin/spaces" class="btn btn-warning">@lang('admin.rooms.cancel')</a>

                    {!! Form::close() !!}
                </div><!-- /.box-body -->

                <div class="box-footer">

                </div>
                <!-- box-footer -->

            </div><!-- /.box -->

        </div>
    </div>


@endsection
