@extends('layouts.site_off')

@section('services')

@endsection

@section('Holder')
    <div class="container jumbotron py-4">

        <form class="" action="" method="get">
            <div>
                <div class="form-inline">
                    <div class="input-group">
                        <input type="text" style="width:100vh" class="form-control" placeholder="Chercher"
                            aria-label="Chercher" aria-describedby="button-cherch">
                        <select class=" custom-select" name="" id="">
                            <option value="">Nom de l'entreprise</option>
                            <option value="">Date de lancement</option>
                            <option value="">Date d'expiration</option>
                        </select>
                    </div>
                    <button class="btn btn-outline-success rounded-0" type="button" id="button-cherch">Chercher</button>
                </div>
            </div>
        </form>
            <div class="container"> <a href="{{route('acheteur.create')}}" class="btn btn-outline-info btn-sm text-decoration-none"><i class="fa fa-plus"></i> Nouvelle appel
                d'offre</a></div>
        {{-- Liste Des Offres --}}
        <div class=" container p-4">

            <div class="row justify-content-center" style="border-top:solid 3px #009966">
                @php
                    use Carbon\Carbon;
                @endphp
                @foreach ($appel_offres as $appel_offre )

                <div class="card col-12 mx-2 p-1 rounded">

                    <div class="card-body bg-light m-0">
                        <div class="btn btn-block text-left text-blues title" style="border-bottom:solid 1px #009966">
                            <h4>Appel d'offre de : <a target="_blank" href="{{'../portfolio/'.$appel_offre->id_acheteur}}"
                                    class=" text-uppercase text-blues h5">{{ $appel_offre->nom }}</a>
                                <small class=" float-right"> Date de publication :
                                    <span>{{ $appel_offre->date_creation }}</span></small>
                            </h4>
                        </div>
                        <div class="row card-body border-bottom text-blues2 ">
                            <div class=" col-5 ">
                                <li type="square" class="card-text my-2 border-bottom border-top">
                                    Mode de passation : <span>{{ $appel_offre->mode_passation }}</span>
                                </li>
                                <li type="square" class="card-text my-2 border-bottom">
                                    Type de marché : <span>{{ $appel_offre->type_marche}}</span>
                                </li>
                                @php
                                $estimation_couts = number_format($appel_offre->estimation_couts, 2);
                             @endphp
                                <li type="square" class="card-text my-2 border-bottom">
                                    Estimation de coûts : <span>{{ $estimation_couts}} DH</span>
                                </li>

                                <li type="square" class="card-text my-2 border-bottom">
                                    Domaines d'activité : <span>{{ $appel_offre->domaines_activite }}</span>
                                </li>

                                <li type="square" class="card-text my-2 border-bottom">
                                    Categorié : <span>{{ $appel_offre->categorie }}</span>
                                </li>
                                @php


                                $date_fin = Carbon::parse($appel_offre->date_creation)->addDays(14);

                                @endphp
                                <li type="square" class="card-text my-2 border-bottom">
                                    Date d'expiration : <span class=" text-danger">{{ $date_fin }}</span>
                                </li>

                            </div>
                            <div class="col-7">

                                <li type="square" class="card-text my-2 border-top  border-bottom">
                                    Les Critères :
                                <ul class="ml-5 mt-0 title text-small">
                                    <li >{{ 'Dossier administratif : '.(int)($appel_offre->coeff_admin *100 / ($appel_offre->coeff_admin + $appel_offre->coeff_fin +$appel_offre->coeff_tech)  ).'%'  }}</li>
                                    <li >Dossier financier&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;{{' : '.(int)($appel_offre->coeff_fin *100 / ($appel_offre->coeff_admin + $appel_offre->coeff_fin +$appel_offre->coeff_tech)  ).'%'  }}</li>
                                    <li >Dossier technique&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;{{' : '.(int)($appel_offre->coeff_tech *100 / ($appel_offre->coeff_admin + $appel_offre->coeff_fin +$appel_offre->coeff_tech)  ).'%'  }}</li>
                                </ul>
                            </li>
                                @php
                                    $lots = DB::table('lots')->where('id_appel_offre',$appel_offre->id)->get();
                                @endphp
                            <li type="square" class="card-text my-2">
                                    Lots :
                                <ul class=" mt-0 title text-small">
                                    @foreach ($lots as $lot )
                                    <li type="1"> {{ $lot->description }}</li>
                                    @endforeach
                                </ul>
                            </li>
                            </div>
                        </div>
                        <p class="card-text float-left my-2 text-blues2 ">
                            Phase de traitement : <span class="text-red"> Initiale</span>
                        </p>
                        <div class="float-right pt-2">

                            <a target="_blank" href="{{'acheteur/reglement/'.$appel_offre->id}}" class=" btn btn-sm  btn-outline-primary text-decoration-none "><i
                                    class="fa fa-wpforms mr-2"></i>Voir détails</a>


                        </div>
                    </div>
                </div>

                @endforeach

            </div>
            {{$appel_offres->links()}}
        </div>
    </div>

@endsection
