<!-- DIV acces direct aux autres parametres-->
<div class="row">
    <div class="col-md-12">
        <div class="box">
            <div class="box-header ">
                <h3 class="box-title">@lang('admin.menu.configuration')</h3>
                <div class="box-tools pull-right"><button class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i></button> </div>
            </div>

            <div class="box-body">

                <a class="btn btn-app @if (Route::currentRouteName() == 'cities.index') disabled @endif" href="/admin/cities"><i class="fa fa-cloud"></i> {{strtoupper (__('admin.cities.cities')) }}</a>
                <a class="btn btn-app @if (Route::currentRouteName() == 'spaces.index' || Route::currentRouteName() == 'spaces.create') disabled @endif" href="/admin/spaces"><i class="fa fa-home"></i> {{strtoupper (__('admin.spaces.spaces')) }}</a>
                <a class="btn btn-app @if (Route::currentRouteName() == 'cities.index') disabled @endif" href="index.php?a=44"><i class="fa fa-square"></i> SALLES</a>
                <a class="btn btn-app @if (Route::currentRouteName() == 'cities.index') disabled @endif" href="index.php?a=42"><i class="fa fa-clock-o"></i> HORAIRES</a>
                <a class="btn btn-app @if (Route::currentRouteName() == 'cities.index') disabled @endif" href="index.php?a=47"><i class="fa fa-eur"></i> TARIFS</a>
                <a class="btn btn-app @if (Route::currentRouteName() == 'cities.index') disabled @endif" href="index.php?a=2"><i class="fa fa-desktop"></i> MATERIEL</a>
                <a class="btn btn-app @if (Route::currentRouteName() == 'cities.index') disabled @endif" href="index.php?a=48"><i class="fa fa-user-md"></i> USAGES</a>
                <a class="btn btn-app @if (Route::currentRouteName() == 'cities.index') disabled @endif" href="index.php?a=46"><i class="fa fa-caret-square-o-up"></i> USAGES POSTES</a>
                <a class="btn btn-app @if (Route::currentRouteName() == 'cities.index') disabled @endif" href="index.php?a=23"><i class="fa fa-users"></i> ADMIN/ANIM</a>
                <a class="btn btn-app @if (Route::currentRouteName() == 'cities.index') disabled @endif" href="index.php?a=49"><i class="fa fa-database"></i> BDD</a>
                <a class="btn btn-app @if (Route::currentRouteName() == 'cities.index') disabled @endif" href="index.php?a=25"><i class="fa fa-unlock-alt"></i> EPN-CONNECT</a>
                <a class="btn btn-app @if (Route::currentRouteName() == 'cities.index') disabled @endif" href="index.php?a=53"><i class="fa fa-user-plus"></i> INSCRIPTIONS</a>
            </div><!-- /.box-body -->
        </div><!-- /.box -->

    </div><!-- /.col-md-12 -->
</div>
