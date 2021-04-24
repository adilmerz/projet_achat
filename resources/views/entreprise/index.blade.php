@extends('layouts.site')

@section('services')
    <div class="col-lg-12 mt-5 mt-lg-0 col-md-12 text-muted mx-auto border-bottom py-1">
        <nav class="nav-wrapper ">
            <ul class="nav nav-pills nav-fill flex-column flex-md-row " id="tabs-text">
                <li class="nav-item">
                    <a class="nav-link mb-sm-3 mb-md-0 " id="tabs-text-1-tab" href="{{ route('acheteur.index') }}"><i
                            class="fa fa-users mr-1"></i> Appels d'offres </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link mb-sm-3 mb-md-0" id="tabs-text-1-tab" href="{{ route('acheteur.offres') }}"><i
                            class="fa fa-users mr-1"></i> Offres Recu</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link mb-sm-3 mb-md-0" id="tabs-text-1-tab" href="{{ route('acheteur.offre_cloture') }}"><i
                            class="fa fa-clock-o mr-1"></i> Offres cloturés </a>
                </li>
            </ul>
        </nav>
    </div>
@endsection


@section('Holder')
    @include("components_pages.marchés_page")
@endsection
