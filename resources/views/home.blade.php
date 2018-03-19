@extends('adminlte::page')

@section('title', 'AdminLTE')

@section('content_header')
    <h1>Accueil</h1>
@stop

@section('content')
    <p>You are logged in!</p>
    @role('admin')
         I am an admin!
         {{ \Auth::user()->getAllPermissions() }}
    @else
         I am nothing...
    @endrole
@stop