@extends('layouts.site')

@section('services')
<div class="col-lg-12 mt-5 mt-lg-0 col-md-12 text-primary mx-auto border-bottom py-1">
    <nav class="nav-wrapper ">
        <ul class="nav nav-pills nav-fill flex-column flex-md-row " id="tabs-text">
            <li class="nav-item">
                <a class="nav-link mb-sm-3 mb-md-0 active" id="tabs-text-1-tab" href="{{ route('fournisseur.index') }}"><i
                        class="fa fa-users mr-1"></i> Appels d'offres </a>
            </li>

            <li class="nav-item">
                <a class="nav-link mb-sm-3 mb-md-0" id="tabs-text-1-tab" href="{{ route('fournisseur.marche') }}"><i
                        class="fa fa-users mr-1"></i> Marchés gagnants</a>
            </li>
        </ul>
    </nav>
</div>
@endsection

@section('Holder')

    <div class="card p-5">
        <div class=" container ">
            <div class=" small">

                @foreach ($appel_offres as $appel_offre)
                    <div class=" jumbotron ">
                        <div class="py-5 border-bottom" style="border-top:green solid 5px">
                            <div class="text-left text-blues title" >
                                <p >Appel d'offre de : <a target="_blank"
                                        href="{{ '../portfolio/' . $appel_offre->id_acheteur }}"
                                        class=" text-uppercase text-blues">{{ $appel_offre->nom }}</a>
                                    <small class=" float-right"> Date de publication :
                                        <span>{{ $appel_offre->date_creation }}</span></small>
                                    </p>
                                <button class="btn btn-success btn-sm float-right"  data-toggle="collapse" href="{{'#collapse'.$appel_offre->id}}"
                                    role="button" data-target="#collapse{{$appel_offre->id}}" aria-expanded="false" aria-controls="{{$appel_offre->id}}"><i class="fa fa-angle-double-down"></i></button>
                            </div>
                            <div class="row card-body text-blues2 collapse" id="collapse{{$appel_offre->id}}">

                                <div class=" col-5">
                                    <li type="square" class="card-text my-2">
                                        Mode de passation : <span>{{ $appel_offre->mode_passation }}</span>
                                    </li>
                                    <li type="square" class="card-text my-2">
                                        Type de marché : <span>{{ $appel_offre->type_marche }}</span>
                                    </li>
                                    @php
                                        $estimation_couts = number_format($appel_offre->estimation_couts, 2);
                                    @endphp
                                    <li type="square" class="card-text my-2">
                                        Estimation de coûts : <span>{{ $estimation_couts }} DH</span>
                                    </li>

                                    <li type="square" class="card-text my-2">
                                        Domaines d'activité : <span>{{ $appel_offre->domaines_activite }}</span>
                                    </li>

                                    <li type="square" class="card-text my-2">
                                        Categorié : <span>{{ $appel_offre->categorie }}</span>
                                    </li>


                                </div>
                                <div class="col-7">

                                    <li type="square" class="card-text my-2">
                                        Les Critères :
                                        <ul class="ml-5 mt-0 title text-small">
                                            <li>{{ 'Dossier administratif : ' . (int) (($appel_offre->coeff_admin * 100) / ($appel_offre->coeff_admin + $appel_offre->coeff_fin + $appel_offre->coeff_tech)) . '%' }}
                                            </li>
                                            <li>Dossier
                                                financier&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;{{ ' : ' . (int) (($appel_offre->coeff_fin * 100) / ($appel_offre->coeff_admin + $appel_offre->coeff_fin + $appel_offre->coeff_tech)) . '%' }}
                                            </li>
                                            <li>Dossier
                                                technique&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;{{ ' : ' . (int) (($appel_offre->coeff_tech * 100) / ($appel_offre->coeff_admin + $appel_offre->coeff_fin + $appel_offre->coeff_tech)) . '%' }}
                                            </li>
                                        </ul>
                                    </li>
                                </div>
                            </div>

                        </div>
                        {{-- fornisseur gagné --}}
                        @php
                             $appel_offrex = DB::table('entreprises')
                             ->join('offres', 'entreprises.id', '=', 'offres.id_fournisseur')
                                ->orderbyDesc('note_fin')
                                ->orderbyDesc('note_admin')
                                ->orderbyDesc('note_tech')
                             ->first();
                        @endphp
                        <div class="py-5" style="border-bottom:green solid 5px">
                            <div class="text-left text-blues title " >
                                <p >L'offre de : <a target="_blank"
                                        href="{{ '../portfolio/' . $appel_offrex->id_fournisseur }}"
                                        class=" text-uppercase text-blues">{{ $appel_offrex->nom }}</a>
                                    <small class=" float-right"> Date de dépot :
                                        <span>{{ $appel_offrex->date_depot}}</span></small>
                                    </p>
                                <button class="btn btn-success btn-sm float-right"  data-toggle="collapse" href="{{'#collapse'.$appel_offre->nom}}"
                                    role="button" data-target="#collapse{{$appel_offre->nom}}" aria-expanded="false" aria-controls="{{$appel_offre->nom}}"><i class="fa fa-angle-double-down"></i></button>
                            </div>
                            <div class="row card-body text-blues2 collapse" id="collapse{{$appel_offre->nom}}">

                                <div class=" col-5">
                                    <li type="square" class="card-text my-2">
                                        Mode de passation : <span>{{ $appel_offre->mode_passation }}</span>
                                    </li>
                                    <li type="square" class="card-text my-2">
                                        Type de marché : <span>{{ $appel_offre->type_marche }}</span>
                                    </li>



                                </div>
                                <div class="col-7">
                                    @php
                                    $estimation_couts = number_format($appel_offre->estimation_couts, 2);
                                @endphp
                                <li type="square" class="card-text my-2">
                                    Estimation de coûts : <span>{{ $estimation_couts }} DH</span>
                                </li>

                                <li type="square" class="card-text my-2">
                                    Domaines d'activité : <span>{{ $appel_offre->domaines_activite }}</span>
                                </li>

                                <li type="square" class="card-text my-2">
                                    Categorié : <span>{{ $appel_offre->categorie }}</span>
                                </li>

                                </div>
                            </div>

                        </div>
                    </div>


                @endforeach
            </div>
        </div>
    </div>

@endsection
