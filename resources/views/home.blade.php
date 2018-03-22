@extends('adminlte::page')

@section('title', 'AdminLTE')

@section('content_header')
    <h1>Accueil</h1>
@stop

@section('content')
    <p>You are logged in!</p>
    @role('admin')
         I am an admin !
         {{ \Auth::user()->getAllPermissions() }}
    @else
        @role('anim')
            I am an anim !
         {{ \Auth::user()->getAllPermissions() }}
        @else
            @role('user')
             I am an user !
            {{ \Auth::user()->getAllPermissions() }}
            @endrole
        @endrole
    @endrole
@stop