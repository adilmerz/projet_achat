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


    <div class="container mx-auto mt-5" style="width: 90vw;">
        <div class="card border border-info">
            <h5 class="card-header text-capitalize alert alert-info">Modifier les notes </h5>
            <div class="card-body">
                <form method="GET" action="{{route('acheteur.store.note')}}" enctype="multipart/form-data"  >
                    @csrf
                    <input type="hidden" name="id" value="{{$note->id_offre}}">
                    <div class="row form-group mb-3">
                        <div class="col-sm-10">
                            Nom de fournisseur :
                            <a target="_blank" href="{{'../../../portfolio/'.$note->id_fournisseur}}"
                                class=" text-uppercase text-blues">{{$note->nom}}</a>
                                <a href="{{ route('acheteur.offres') }}" class="btn btn-sm btn-link float-right btn-outline-info mr-3">
                                    <i class="fa fa-undo"></i> {{__('Retour vers liste')}}</a>
                            </div>
                    </div>
                    {{-- start --}}
                    <div class="row col-12 my-4">
                        <div class="row form-inline col-10 my-2">
                            <div class="col-sm-6">
                                <label for="note_admin"><i style="color: red;">*&nbsp;</i>Dossier administratif :</label>
                            </div>
                            <div class="col-sm-6 input-group-append">
                                <input id="note_admin" value="{{$note->note_admin}}" name="note_admin" type="number" step="0.01" class="form-control"
                                    required />
                                    <button class="form-control bg-light" disabled="disabled">/ 10</button>
                            </div>

                        </div>
                        <div class="row form-inline col-10 my-2">
                            <div class="col-sm-6">
                                <label for="note_fin"><i style="color: red;">*&nbsp;</i>Dossier financiére :</label>
                            </div>
                            <div class="col-sm-6 input-group-append">
                                <input id="note_fin" value="{{$note->note_fin}}" name="note_fin" type="number" step="0.01" class="form-control"
                                    required />
                                <button class="form-control bg-light" disabled="disabled">/ 10</button>
                            </div>

                        </div>
                        <div class="row form-inline col-10 my-2">
                            <div class="col-sm-6">
                                <label for="note_tech"><i style="color: red;">*&nbsp;</i>Dossier technique :</label>
                            </div>
                            <div class="col-sm-6 input-group-append">
                                <input id="note_tech" value="{{$note->note_tech}}" name="note_tech" type="number" step="0.01" class="form-control"
                                    required />
                                <button class="form-control bg-light" disabled="disabled">/ 10</button>
                            </div>

                        </div>
                    </div>
                    {{-- -------------------- --}}

                    <div class="row  justify-content-center form-group mb-2">
                        <div class=" ">
                            <button type="submit" style="width: 15em;" class="btn btn-sm   btn-outline-success my-2"><i class="fa fa-check-circle"></i> Confirmer</button>
                            <div class="affiche_erreur" bis_skin_checked="1">

                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>

@endsection
