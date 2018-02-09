@extends('adminlte::page')

@section('title', 'Gestion des villes')

@section('content_header')
  <h1>Gestion des villes</h1>
@endsection

@section('content')
    @include('admin/menu-parametres')
    <div class="row">
        <div class="col-sm-10">
            <div class="box box-solid box-warning">
              <div class="box-header"><h3 class="box-title">@lang('admin.cities.add')</h3></div>
              <div class="box-body">
                <h4>@lang('admin.cities.saveNewCity')</h4>
                {!! Form::open(['method' => 'POST', 'route' => 'cities.store', 'class' => 'form-vertical']) !!}
                {{ csrf_field() }}
                <div class="form-group{{ $errors->has('newName') ? ' has-error' : '' }} col-sm-5">
                  {!! Form::text('newName', null, ['class' => 'form-control', 'required' => 'required', 'placeholder' => 'Nom']) !!}
                  <small class="text-danger">{{ $errors->first('newName') }}</small>
                </div>
                <div class="form-group{{ $errors->has('newZipCode') ? ' has-error' : '' }} col-sm-2">
                  {!! Form::text('newZipCode', null, ['class' => 'form-control', 'required' => 'required', 'placeholder' => 'Code postal']) !!}
                  <small class="text-danger">{{ $errors->first('newZipCode') }}</small>
                </div>
                <div class="form-group{{ $errors->has('newCountry') ? ' has-error' : '' }} col-sm-3">
                  {!! Form::text('newCountry', null, ['class' => 'form-control', 'required' => 'required', 'placeholder' => 'Pays']) !!}
                  <small class="text-danger">{{ $errors->first('newCountry') }}</small>
                </div>

                <div class="form-group">
                    {!! Form::button('<i class="fa fa-plus"></i>', ['type' => 'submit', 'class' => 'btn btn-success', 'data-toggle' => 'tooltip',  'title' => 'Ajouter la ville']) !!}
                </div>
                {!! Form::close() !!}
              </div>
            </div>

            <div class="box box-solid box-primary">
                <div class="box-header"><h3 class="box-title">Les villes de vos EPN</h3></div>
                <div class="box-body">
                    @if (count($cities))


                    <h4>Liste des villes</h4>
                    @foreach ($cities as $city)
                        {!! Form::open(['method' => 'POST', 'route' => ['cities.update', $city->id], 'class' => 'form-vertical']) !!}
                        {!! Form::hidden('id',$city->id, ['required' => 'required']) !!}
                        <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }} col-sm-5">
                            {!! Form::text('name',$city->name, ['class' => 'form-control', 'required' => 'required']) !!}
                            <small class="text-danger">{{ $errors->first('name') }}</small>
                        </div>
                        <div class="form-group{{ $errors->has('zipCode') ? ' has-error' : '' }} col-sm-2">
                            {!! Form::text('zipCode',$city->zipCode, ['class' => 'form-control', 'required' => 'required']) !!}
                            <small class="text-danger">{{ $errors->first('zipCode') }}</small>
                        </div>
                        <div class="form-group{{ $errors->has('country') ? ' has-error' : '' }} col-sm-3">
                            {!! Form::text('country',$city->country, ['class' => 'form-control', 'required' => 'required']) !!}
                            <small class="text-danger">{{ $errors->first('country') }}</small>
                        </div>
                        <div class="form-group">
                            {!! Form::button('<i class="fa fa-edit"></i>', ['type' => 'submit', 'class' => 'btn btn-success', 'data-toggle' => 'tooltip',  'title' => 'Modifier la ville']) !!}
                            <a href='/admin/cities/{{ $city->id }}/destroy' class='btn btn-danger' data-toggle='tooltip',  title='Supprimer la ville'><i class="fa fa-trash"></i></a>
                        </div>
                        {!! Form::close() !!}
                    @endforeach
                @else
                    <div class="alert alert-info alert-dismissable">
                      <i class="fa fa-info"></i><button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>&nbsp;<b>Pas de villes encore !</b>
                    </div>
                @endif
                </div>
            </div>
        </div>
    </div>
@endsection

@section('en attente')
<?php
// if ($act == 4) {
//         $utilisateurs = Utilisateur::getUtilisateursByVille($idcity);
//
//         if (false == $utilisateurs) {
//             echo getError(0);
//         } else {
//             $arraystatus = array(1 => "Actif", 2 => "Inactif");
//             $arraycolor = array(1 => "bg-light-blue", 2 => "bg-yellow"); ?>
<div class="box box-primary">
  <div class="box-header">
    <h3 class="box-title">Liste des adh&eacute;rents inscrits dans la commune</h3>
  </div>
  <div class="box-body no-padding">
    <table class="table">
      <thead><tr><th>Nom</th><th>Pr&eacute;nom</th><th></th><th>Voir</th></tr></thead>
      <?php
      // foreach ($utilisateurs as $utilisateur) {
      ?>
      <tr>
        <td><?php //echo htmlentities($utilisateur->getNom()); ?></td>
        <td><?php //echo htmlentities($utilisateur->getPrenom()); ?></td>
        <td><span class="badge <?php //echo htmlentities($arraycolor[$utilisateur->getStatut()]); ?>"><?php //echo htmlentities($arraystatus[$utilisateur->getStatut()]); ?></span></td>
        <td><a href="index.php?a=1&b=2&iduser=<?php //echo htmlentities($utilisateur->getId()); ?>">Voir</a></td>
      </tr>
      <?php
      // } ?>
    </table>
  </div>
</div>
<?php
//     }
// }?>
@endsection

@section('js')
<script>
    $(document).ready(function(){
        $('[data-toggle="tooltip"]').tooltip();
    });
</script>

@endsection
