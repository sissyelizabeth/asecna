@extends('layouts.app')

@section('content')

<div class="row" style="margin:0">
    <div class="col-md-2 hidden-xs display-table-cell v-align box" id="navigation"">
        <div class="logo">
            <a hef="home.html">
            <img src="{{ asset('images/logoasecna.png') }}" alt="merkery_logo" class="hidden-xs hidden-sm">
            </a>
        </div>
        <div class="navi">
            <ul>
                <li class="active"><a href="{{ route('plan-de-vol-list') }}"><i class="fa fa-home" aria-hidden="true"></i><span class="hidden-xs hidden-sm">Plan de vol</span></a></li>
                <li><a href="{{ route('facturation-list') }}"><i class="fa fa-tasks" aria-hidden="true"></i><span class="hidden-xs hidden-sm">Facturation</span></a></li>
                <li><a href="{{ route('bip-list') }}"><i class="fa fa-user" aria-hidden="true"></i><span class="hidden-xs hidden-sm">BIP</span></a></li>
                <li class=""><a href="{{ route('dossier-meteo-list') }}"><i class="fa fa-calendar" aria-hidden="true"></i><span class="hidden-xs hidden-sm">Dossier météo</span></a></li>
                <li><a href="{{ route('dossier-de-vol-list') }}"><i class="fa fa-cog" aria-hidden="true"></i><span class="hidden-xs hidden-sm">Dossier de vol</span></a></li>
                <li><a href="{{ route('user-management') }}"><i class="fa fa-cog" aria-hidden="true"></i><span class="hidden-xs hidden-sm">Gestion utilisateurs</span></a></li>
            </ul>
        </div>

            <!-- Sidebar -->

    </div>
    <div class="col-md-10">
        <div class="container py-4">
            <div class="wrapper" style=" background: #fff">
                @yield('content-dashboard')
            </div>
        </div>
    </div>


</div>
@yield('script')
@endsection
