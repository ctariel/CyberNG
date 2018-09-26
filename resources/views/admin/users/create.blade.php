@extends('adminlte::page')

@section('title', __('admin.users.title'))

@section('content_header')
      <h1>@lang('admin.users.create')</h1>
@endsection


@section('content')
{!! Form::open(['method' => 'POST', 'route' => 'users.store', 'class' => 'form-vertical']) !!}

    <div class="row">
        <!--Colonne gauche-->
        <div class="col-md-8">
            <div class="box box-primary">
                <div class="box-header">
                    <h3 class="box-title">@lang('admin.users.file')</h3>
                </div><!-- .box-header -->
                <div class="box-body">
                    <div class="row">
                        <div class="col-sm-6">
                            <div class="row">
                                <div class="col-sm-4">
                                    {{ Html::image('img/default.png', 'default avatar') }}
                                </div>
                                <div class="col-sm-8">
                                    <div class="form-group">
                                        {!! Form::label('surname', __('admin.users.surname') . ' * :', ['class' => 'control-label']) !!}
                                        {!! Form::text('surname', old('surname'), ['class' => 'form-control', 'required' => 'required']) !!}
                                        <small class="text-danger">{{ $errors->first('surname') }}</small>
                                    </div>

                                    <div class="form-group">
                                        {!! Form::label('forename', __('admin.users.forename') . ' * :', ['class' => 'control-label']) !!}
                                        {!! Form::text('forename', old('forename'), ['class' => 'form-control', 'required' => 'required']) !!}
                                    </div>

                                    <div class="form-group">
                                        {!! Form::label('gender', __('admin.users.gender') . ' * :', ['class' => 'control-label']) !!}

                                        {!! Form::radio('gender', 'M', true, ['id' => 'Male']) !!} @lang('admin.users.male')
                                        {!! Form::radio('gender', 'F', null, ['id' => 'Female']) !!} @lang('admin.users.female')

                                        <small class="text-danger">{{ $errors->first('gender') }}</small>
                                    </div>
                                </div>
                            </div>
                            <label>Date de Naissance *:</label>
                            <div class="form-row">
                                <div class="form-group col-md-3">
                                    <select name="jour" tabindex="1" class="form-control">
                                        <option value="1">1</option><option value="2">2</option><option value="3">3</option><option value="4">4</option><option value="5">5</option><option value="6">6</option><option value="7">7</option><option value="8">8</option><option value="9">9</option><option value="10">10</option><option value="11">11</option><option value="12">12</option><option value="13">13</option><option value="14">14</option><option value="15">15</option><option value="16">16</option><option value="17">17</option><option value="18">18</option><option value="19">19</option><option value="20">20</option><option value="21">21</option><option value="22">22</option><option value="23">23</option><option value="24">24</option><option value="25">25</option><option value="26">26</option><option value="27">27</option><option value="28">28</option><option value="29">29</option><option value="30">30</option><option value="31">31</option>
                                    </select>
                                </div>
                                <div class="form-group col-md-6">
                                    <select name="mois" tabindex="2" class="form-control">
                                        <option value="1">Janvier</option><option value="2">F&eacute;vrier</option><option value="3">Mars</option><option value="4">Avril</option><option value="5">Mai</option><option value="6">Juin</option><option value="7">Juillet</option><option value="8">Aout</option><option value="9">Septembre</option><option value="10">Octobre</option><option value="11">Novembre</option><option value="12">D&eacute;cembre</option>
                                    </select>
                                </div>
                                <div class="form-group col-md-3">
                                    <input type="text" name="annee" tabindex="3" maxlength="4" value="" size="2" class="form-control">
                                </div>
                            </div><!-- form group-->

                        </div>
                        <div class="col-sm-6">
                            <div class="form-group">
                                <label>Adresse *:</label>
                                <textarea name="adresse" class="form-control" tabindex="4"></textarea>
                            </div>

                            <div class="form-group">
                                <label>Ville *:</label>
                                <select name="ville" class="form-control" tabindex="5">
                                    <option value="56">aaaaa</option><option value="49">Angers</option><option value="63">Anthupt</option><option value="39">Arbrissel</option><option value="34">Argentr&eacute;-du-Plessis</option><option value="7">Availles sur Seiche</option><option value="16">Bais</option><option value="30">Ballots</option><option value="53">Beaurainville</option><option value="22">Boistrudan</option><option value="50">Bourgbarr&eacute;</option><option value="8">Brains sur les marches</option><option value="42">Brest</option><option value="68">Chalette sur Loing</option><option value="47">Chanc&eacute;</option><option value="57">Chateaubourg</option><option value="48">Chateaugiron</option><option value="46">Chateaugiron</option><option value="14">Chelun</option><option value="64">Clamart</option><option value="17">Coesmes</option><option value="25">Cuill&eacute;</option><option value="6">Domalain</option><option value="3">Drouges</option><option value="32">Eanc&eacute;</option><option value="41">Endoufielle</option><option value="20">Ess&eacute;</option><option value="60">Evron</option><option value="28">Fontaine Couverte</option><option value="13">Forges la For&ecirc;t</option><option value="43">Fresnay</option><option value="26">Gastines</option><option value="24">Gennes sur Seiche</option><option value="21">Janz&eacute;</option><option value="1">la Guerche de Bretagne</option><option value="29">La Ro&euml;</option><option value="59">La Rouaudi&egrave;re</option><option value="5">La Selle-Guerchaise</option><option value="27">Laubri&egrave;res</option><option value="18">Le Theil de Bretagne</option><option value="55">Lomme</option><option value="23">Marcill&eacute;-Robert</option><option value="54">Marseille</option><option value="15">Martign&eacute;-Ferchaud</option><option value="62">Meral</option><option value="69">Meriel</option><option value="58">Meslay du maine</option><option value="45">Montjean</option><option value="10">Moulins</option><option value="12">Mouss&eacute;</option><option value="9">Moutiers</option><option value="66">Nantes</option><option value="36">Paris</option><option value="67">Pir&eacute;-sur-seiche</option><option value="2">Rann&eacute;e</option><option value="37">Rennes</option><option value="11">Retiers</option><option value="61">Roanne</option><option value="38">Saint Aignan sur Ro&euml;</option><option value="35">Saint Germain du Pinel</option><option value="52">Saint Hilaire du maine</option><option value="31">Saint Michel de la Ro&euml;</option><option value="51">Saint Pierre des Landes</option><option value="19">Sainte Colombe</option><option value="65">Thorign&eacute;-Fouillard</option><option value="44">Troissy</option><option value="4">Visseiche</option><option value="33">Vitr&eacute;</option>                                    </select>
                            </div>

                            <div class="input-group">
                                <span class="input-group-addon" tabindex="6"><i class="fa fa-phone"></i></span>
                                <input type="tel" name="tel" value="" pattern="^((\+\d{1,3}(-| )?\(?\d\)?(-| )?\d{1,5})|(\(?\d{2,6}\)?))(-| )?(\d{3,4})(-| )?(\d{4})(( x| ext)\d{1,5}){0,1}$" class="form-control" placeholder="01549875631" maxlength="10"/>
                            </div>
                            <br>

                            <div class="input-group">
                                <span class="input-group-addon" tabindex="7"><i class="fa fa-envelope"></i></span>
                                <input type="email" name="mail" value="" class="form-control">
                            </div>
                        </div>
                    </div>
                </div><!-- .box-body -->
            </div> <!--box -->
            <!-- div 1 : /vie-->


            <!-- div 3 : donnees base-->    
            <div class="box box-primary">
                <div class="box-header"><h3 class="box-title">Donn&eacute;es pour la base</h3></div>
                <div class="box-body no-padding">
                    <table class="table table-condensed">
                        <tr>
                            <td width="45%">
                                <div class="form-group">
                                    <label for="exampleInputEmail1" tabindex="8">Login *</label>
                                    <input type="text" name="login" value="" class="form-control">
                                </div>

                                <div class="form-group">
                                    <label for="exampleInputPassword1" tabindex="9">Mot de passe *</label>
                                    <input type="text" name="passw" value="" class="form-control">
                                </div>

                                <div class="row">
                                    <div class="col-xs-5">
                                        <div class="form-group">
                                            <label>Date de 1&egrave;re d'inscription</label>
                                            <input type="text" name="inscription" value="2018-09-26" class="form-control" >
                                        </div>
                                    </div>
                                                                    </div><!-- .row -->

                                <div class="form-group">
                                    <label>Tarif de la consultation internet
                                        &nbsp;&nbsp;&nbsp;&nbsp;<small class="badge bg-blue" data-toggle="tooltip" title="Pour modifier le tarif de la consultation, passez par les abonnements."><i class="fa fa-info"></i></small></label>
                                                                        <select name="temps" class="form-control"  >
                                        <option value="1">adulte - 2h (0 €)</option><option value="2">Internet  - 8h (0 €)</option><option value="3">Enfant - 1h (0 €)</option>                                    </select>
                                </div>

                                <div class="form-group">
                                    <label>Tarif de l'adh&eacute;sion
                                        &nbsp;&nbsp;&nbsp;&nbsp;<small class="badge bg-blue" data-toggle="tooltip" title="Pour modifier le tarif de l'adh&eacute;sion, passez par les abonnements."><i class="fa fa-info"></i></small></label>
                                                                            <select name="tarif" class="form-control"  >
                                        <option value="3">Adh&eacute;sion gratuite (0.00 €)</option>                                    </select>
                                </div>

                            </td>
                            <td></td> <!-- ????? -->
                            <td width="50%">

                                <div class="form-group">
                                    <label>Epn d'inscription </label>
                                    <select name="epn" class="form-control" >
                                        <option value="1">M&eacute;diath&egrave;que de la Guerche de Bretagne</option>                                    </select>
                                </div>

                                <div class="form-group">
                                    <label>Statut </label>
                                    <select name="status"  class="form-control">
                                        <option value="1">Actif</option><option value="2">Inactif</option><option value="6">Archiv&eacute; (statistique)</option>                                    </select>
                                </div>

                                <div class="form-group">
                                    <label>Cat&eacute;gorie Socio-professionnelle</label>
                                    <select name="csp" class="form-control">
                                        <option value="10">Agriculteur</option><option value="8">Artisans/Prof. Lib</option><option value="17">Cadres </option><option value="13">Coll&eacute;gien</option><option value="4">Demandeur d'emploi</option><option value="12">Divers</option><option value="2">Employ&eacute;</option><option value="7">Etudiant</option><option value="11">Fonctionnaires</option><option value="9">Instituteurs</option><option value="6">Lyc&eacute;en</option><option value="5">M&egrave;re/P&egrave;re au foyer</option><option value="14" selected>Non renseign&eacute;e</option><option value="16">Ouvrier</option><option value="15">Professions interm&eacute;diaires</option><option value="1">Retrait&eacute;</option><option value="3">Scolaire</option>                                    </select>
                                </div>

                                <div class="form-group">
                                    <label>Notes</label>
                                    <textarea  class="form-control" rows="3" name="info"></textarea>
                                </div>

                                <div class="checkbox">
                                    <label>
 <input type="checkbox" name="newsletter" value="1" />                                        <b>Newsletter</b></label>
                                </div>
                            </td>
                        </tr>
                    </table>
                </div><!-- .box-body -->
                <!-- div 2 : /adresse-->


                <div class="box-footer">

                    <input type="submit" value="Cr&eacute;er l'adh&eacute;rent" name="submit" class="btn btn-success">
                    <!-- Bouton annuler revient aux resas direct--><!-- pourquoi ?? on revient plutot à la liste des adherents -->
                    <a href="index.php?a=1" class="btn btn-default">Annuler</a>
                </div><!-- .box-footer -->

            </div><!-- .box -->
        </div><!-- .col-md-8 -->
        <!-- colonne droite -->
        <div class='col-md-4'>
                    

            <!-- div 4 : infos diverses-->  
            <div class="box box-primary">
                <div class="box-header"><h3 class="box-title">Informations compl&eacute;mentaires</h3></div>
                <div class="box-body">
                    <div class="form-group">
                        <label>&Eacute;quipement personnel&nbsp;</label>
                        <div class="checkbox">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="checkbox" name="equipement[]" value=0   >&nbsp;Aucun &eacute;quipement</div><div class="checkbox">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="checkbox" name="equipement[]" value=1   >&nbsp;Ordinateur</div><div class="checkbox">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="checkbox" name="equipement[]" value=2   >&nbsp;Tablette</div><div class="checkbox">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="checkbox" name="equipement[]" value=3   >&nbsp;Smartphone</div><div class="checkbox">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="checkbox" name="equipement[]" value=4   >&nbsp;T&eacute;l&eacute;vision connect&eacute;e</div>                    </div>
                    <div class="form-group">
                        <label>Connexion internet</label>
                        <div class="checkbox">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="checkbox" name="equipement[]" value=5  >&nbsp; Internet &agrave; la maison (ADSL, satellite ou fibre)</div><div class="checkbox">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="checkbox" name="equipement[]" value=6  >&nbsp; Internet mobile (3G, 4G)</div><div class="checkbox">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="checkbox" name="equipement[]" value=7  >&nbsp;Pas de connexion Internet</div>                    </div>

                    <div class="form-group">
                        <label>Lieu d'utilisation d'internet</label>
                        <div class="radio"><label><input type="radio" name="utilisation" value=0 class="minimal">&nbsp;Aucun Lieu </label></div> <div class="radio"><label><input type="radio" name="utilisation" value=1 class="minimal">&nbsp;A la maison </label></div> <div class="radio"><label><input type="radio" name="utilisation" value=2 class="minimal">&nbsp;Au bureau ou &agrave; l'&eacute;cole </label></div> <div class="radio"><label><input type="radio" name="utilisation" value=3 class="minimal">&nbsp;A la maison et au bureau ou &agrave; l'&eacute;cole </label></div> <div class="radio"><label><input type="radio" name="utilisation" value=4 class="minimal">&nbsp;En mobilit&eacute; </label></div>                     </div>
                    <div class="form-group">
                        <label>Le niveau en informatique</label>
                        <div class="radio"><label><input type="radio" name="connaissance" value=0>&nbsp;D&eacute;butant</label></div><div class="radio"><label><input type="radio" name="connaissance" value=1>&nbsp;Interm&eacute;diaire</label></div><div class="radio"><label><input type="radio" name="connaissance" value=2>&nbsp;Confirm&eacute;</label></div>                    </div>
                </div><!-- .box-body -->
            </div><!-- .box -->
        </div><!-- ./col -->
    </div>
</form>
@endsection
