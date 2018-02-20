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
              <a href="/admin/spaces/create" class="btn btn-primary btn-sm" data-toggle="tooltip" title="" data-original-title="@lang('admin.spaces.create')"><i class="fa fa-plus"></i></a>
            </div>
          </div>
          <div class="box-body">
              @if (count($spaces))
                  @foreach ($spaces as $space)
                      <div class="row">
                          <div class="col-md-12">
                              <div class="box box-primary">
                                  <div class="box-header ">
                                      <h3 class="box-title">{{ $space->name }} </h3>
                                      <p>{{ $space->address }} - {{ $space->city->name }}
                                          <br>{{ Html::mailto($space->email) }}
                                      </p>
                                      <div class="box-tools pull-right"><a href="/admin/spaces/{{ $space->id }}/edit" class="btn btn-success btn-sm"  data-toggle='tooltip'  title="@lang('admin.spaces.modify')"><i class="fa fa-pencil-square-o"></i></a></div>
                                  </div>

                                  <div class="box-body">
                                      <ul class="timeline">
                                          <li class="time-label"><span class="bg-blue">Liste des salles</span></li>
                                          @foreach ($space->rooms as $room)
                                              <li class="">
                                                  <i class="fa  fa-caret-square-o-right bg-aqua"></i>
                                                  <div class="timeline-item">
                                                      <div class="box box-solid box-info">
                                                          <div class="box-header ">
                                                              <h3 class="box-title">{{ $room->name }}</h3>
                                                              <div class="box-tools pull-right"><a href="/admin/rooms/{{ $room->id }}/edit" class="btn btn-success btn-sm"  data-toggle='tooltip'  title="@lang('admin.rooms.modify')"><i class="fa fa-pencil-square-o"></i></a></div>
                                                          </div>
                                                          <div class="box-body">
                                                              {{ $room->comment }}
                                                          </div>
                                                      </div>
                                                  </div>
                                              </li>
                                          @endforeach
                                          <li>
                                              <a href="/admin/rooms/{{ $space->id }}/create" class="fa bg-blue"><i class="fa fa-plus"></i></a>
                                              <div class="timeline-item">
                                                  <h3 class="timeline-header"><a href="/admin/rooms/{{ $space->id }}/create">Ajouter une salle</a></h3>
                                              </div>
                                          </li>
                                      </ul>
                                  </div>
                              </div>
                          </div>
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
