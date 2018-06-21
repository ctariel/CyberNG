@extends('adminlte::page')

@section('title', __('admin.spaces.title'))

@section('content_header')
  <h1>@lang('admin.spaces.title')</h1>
@endsection

@section('content')

    <div class="row">
      <div class="col-sm-9">
          @if (count($spaces))
              @foreach ($spaces as $space)
                  <div class="row">
                      <div class="col-md-12">
                          <div class="box box-primary collapsed-box">
                              <div class="box-header ">
                                  <h3 class="box-title">{{ $space->name }} </h3>
                                  <p>
                                      {{ $space->address }} - {{ $space->city->name }}
                                      <br>{{ Html::mailto($space->email) }}
                                  </p>
                                  <div class="box-tools pull-right">
                                      <a href="/admin/spaces/{{ $space->id }}/edit" class="btn btn-success btn-sm"  data-toggle='tooltip'  title="@lang('admin.spaces.modify')"><i class="fa fa-pencil-square-o"></i></a>
                                      <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-plus"></i></button>
                                  </div>
                              </div>

                              <div class="box-body">
                                  <ul class="timeline">
                                      <li class="time-label"><span class="bg-blue">@lang('admin.rooms.list')</span></li>
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
                                                          @if (count($room->hardwares))
                                                          <table class="table">
                                                              <thead><tr>
                                                                      <th>Nom</th><th>OS</th><th>Salle</th><th>Commentaires</th><th>&nbsp;</th><th>&nbsp;</th>
                                                                  </tr></thead>
                                                              <tbody>
                                                                  @foreach ($room->hardwares as $hardware)
                                                                      <tr>
                                                                          <td></td>
                                                                          <td></td>
                                                                          <td></td>
                                                                          <td></td>
                                                                          <td><a href=""><button class="btn btn-success btn-sm"  type="submit" value="@lang('admin.hardware.modify')">@lang('admin.hardware.modify')</button></a></td>
                                                                          <td><a href=""><button type="button" class="btn btn-danger"><i class="fa fa-trash-o"></i></button></a></td>
                                                                      </tr>
                                                                  @endforeach
                                                              </tbody>
                                                          </table>
                                                          @else
                                                          <p>@lang('admin.hardware.noHardwareYet')</p>
                                                          @endif
                                                      </div>

                                                      <div class="box-footer">
                                                        <a href="/admin/rooms/{{ $room->id }}/hardware/create" class="btn btn-app bg-blue">
                                                            <i class="fa fa-desktop"></i> @lang('admin.hardware.add')
                                                        </a>
                                                      </div>
                                                  </div>
                                              </div>
                                          </li>
                                      @endforeach
                                      <li>
                                          <a href="/admin/rooms/{{ $space->id }}/create" class="fa bg-blue"><i class="fa fa-plus"></i></a>
                                          <div class="timeline-item">
                                              <h3 class="timeline-header"><a href="/admin/rooms/{{ $space->id }}/create">@lang('admin.rooms.add')</a></h3>
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
        <div class="col-sm-3">
            <div class="small-box bg-light-blue">
                <div class="inner"><h3>&nbsp;</h3><p>&nbsp;</p></div>
                <div class="icon"><i class="ion ion-wand"></i></div>
                <a href="/admin/spaces/create" class="small-box-footer" data-toggle="tooltip" title="" data-original-title="@lang('admin.spaces.create')">@lang('admin.spaces.create') <i class="fa fa-arrow-circle-right"></i></a>
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
