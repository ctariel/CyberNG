@extends('adminlte::page')

@section('title', __('admin.hardware.title'))

@section('content_header')
  <h1>@lang('admin.hardware.title')</h1>
@endsection

@section('content')
    <div class="row">
        <div class="col-sm-10">
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
