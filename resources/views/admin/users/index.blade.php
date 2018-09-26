@extends('adminlte::page')

@section('title', __('admin.users.title'))

@section('content_header')
  <h1>@lang('admin.users.title')</h1>
@endsection

@section('content')

    <div class="row">
        <div class="col-sm-12">
            <table class="table table-bordered table-striped">
                <thead>
                    <tr>
                        <th>&nbsp;</th>
                        <th>Nom</th>
                        <th>Prénom</th>
                        <th>Nom d'utilisateur</th>
                        <th>Age</th>
                        <th>Derniere visite (résa)</th>
                        <th>Adhésion <span class="badge bg-primary" data-toggle="tooltip" title="Vert = en cours, Jaune = adhésion à renouveller dans la semaine"><i class="fa fa-info"></i></span></th>
                        <th>Forfait temps</th>
                    </tr>
                </thead>
            </table>
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
