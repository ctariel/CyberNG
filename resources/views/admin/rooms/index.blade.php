@extends('adminlte::page')

@section('title', __('admin.rooms.title'))

@section('content_header')
  <h1>@lang('admin.rooms.title')</h1>
@endsection

@section('content')
    @include('admin/menu-parametres')

@endsection
