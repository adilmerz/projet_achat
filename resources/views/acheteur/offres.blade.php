@extends('layouts.site')

@section('services')
    <div class="col-lg-12 mt-5 mt-lg-0 col-md-12 text-primary mx-auto border-bottom py-1">
        <nav class="nav-wrapper ">
            <ul class="nav nav-pills nav-fill flex-column flex-md-row " id="tabs-text">
                <li class="nav-item">
                    <a class="nav-link mb-sm-3 mb-md-0" id="tabs-text-1-tab" href="{{ route('acheteur.index') }}"><i
                            class="fa fa-users mr-1"></i> Appels d'offres </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link mb-sm-3 mb-md-0 active" id="tabs-text-1-tab" href="{{ route('acheteur.offres') }}"><i
                            class="fa fa-users mr-1"></i> Offres reçues</a>
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

    {{-- Gestion des appel d'offres --}}
    <form class=" " action="" method="get">
        <div>
            <div class="form-inline ml-4">
                <div class="input-group">
                    <input type="text" style="width:100vh" class="form-control" placeholder="Chercher" aria-label="Chercher"
                        aria-describedby="button-cherch">
                </div>
                <button class="btn btn-outline-success rounded-0" type="button" id="button-cherch">Chercher</button>
            </div>
        </div>
    </form>
    <div class="tab-pane fade active show row p-4">

            <table class="table text-center  table-bordered">
            <thead class="thead-light text-capitalize">
                <tr>
                    <th scope="col">Nom de fournisseur</th>
                    <th scope="col">Date de dépot</th>
                    <th scope="col">Nombre Lots répondus</th>
                    <th scope="col">Détails</th>
                    <th scope="col">Note</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($offres as $offre)
                @if ($offre->note_admin == 0 &&  $offre->note_fin ==0  && $offre->note_tech == 0)
                <tr class=" text-red">
                @else
                <tr>
                @endif
                    <td >{{$offre->nom[0]}}<span style="-webkit-text-security:disc;font-size:1.2em;">{{$offre->nom}}</span></td>
                    <td>{{$offre->date_depot}}</td>
                    @php
                    $nb_lots = DB::table('reponse_lots')
                    ->where('id_offre',$offre->id_offre)
                    ->count('id_lot');
                    //dd($offres);
                    @endphp
                    <td>{{$nb_lots}}</td>
                    <td>
                        <a href="{{'fournisseur/document/'.$offre->id_fournisseur}}" class="btn btn-sm btn-outline-info">
                            <i class="fa fa-wpforms"></i></a>
                    </td>
                    <td>
                        <a href="{{route('acheteur.note',$offre->id_offre)}}" class="btn btn-sm btn-outline-primary">
                            <i class="fa fa-edit"></i></a>
                    </td>
                </tr>

                @endforeach

            </tbody>
        </table>
        {{$offres->links()}}
    </div>

@endsection
