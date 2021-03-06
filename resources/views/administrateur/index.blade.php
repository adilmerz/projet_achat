@extends('layouts.admin')

@section('services')
<div class="col-lg-12 mt-5 mt-lg-0 col-md-12 text-muted mx-auto border-bottom py-1">
    <nav class="nav-wrapper ">
        <ul class="nav nav-pills nav-fill flex-column flex-md-row " id="tabs-text" >
            <li class="nav-item">
                <a class="nav-link mb-sm-3 mb-md-0 active" id="tabs-text-1-tab"
                    href="{{route('adminHome')}}"><i class="fa fa-users mr-1"></i> Statistiques</a>
            </li>
            <li class="nav-item">
                <a class="nav-link mb-sm-3 mb-md-0" id="tabs-text-1-tab"
                    href="{{route('adminUsers')}}"><i class="fa fa-users mr-1"></i> Gestion des utilisateurs</a>
            </li>
            <li class="nav-item">
                <a class="nav-link mb-sm-3 mb-md-0" id="tabs-text-1-tab"
                    href="{{route('adminRequests')}}"><i class="fa fa-clock-o mr-1"></i> Traitement des demandes</a>
            </li>
        </ul>
    </nav>
</div>
@endsection

@section('Holder')
    {{-- Statistiques --}}
    <section id="icon-section" class="">
        <div class="row ">
            <div class="col-xl-4 col-sm-6 col-12">
                <div class="card ">
                    <div class="card-content">
                        <div class="media align-items-stretch">
                            <div class="p-2 text-center bg-info">
                                {{-- icon --}}
                                <i class="fa fa-building text-white display-4 p-2"></i>
                            </div>
                            <div class="py-1 px-2 media-body">
                                {{-- Name --}}
                                <h5 class="info">Entreprises</h5>
                                {{-- Value --}}
                                <h5 class="text-bold-400">{{$data['users']}}</h5>
                                <div class="progress mt-1 mb-0" style="height: 7px;">
                                    <div class="progress-bar bg-info" role="progressbar" style="width: 80%"
                                        aria-valuenow="80" aria-valuemin="0" aria-valuemax="100"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-4 col-sm-6 col-12">
                <div class="card ">
                    <div class="card-content">
                        <div class="media align-items-stretch">
                            <div class="p-2 text-center bg-warning">
                                {{-- icon --}}
                                <i class="fa fa-cubes text-white display-4 p-2"></i>
                            </div>
                            <div class="py-1 px-2 media-body">
                                {{-- Name --}}
                                <h5 class="warning">Fournisseurs</h5>
                                {{-- Value --}}
                                <h5 class="text-bold-400">{{$data["fournisseurs"]}}</h5>
                                <div class="progress mt-1 mb-0" style="height: 7px;">
                                    <div class="progress-bar bg-warning" role="progressbar" style="width: 80%"
                                        aria-valuenow="80" aria-valuemin="0" aria-valuemax="100"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-4 col-sm-6 col-12">
                <div class="card ">
                    <div class="card-content">
                        <div class="media align-items-stretch">
                            <div class="p-2 text-center bg-success">
                                {{-- icon --}}
                                <i class="fa fa-suitcase text-white display-4 p-2"></i>
                            </div>
                            <div class="py-1 px-2 media-body">
                                {{-- Name --}}
                                <h5 class="success">Acheteurs</h5>
                                {{-- Value --}}
                                <h5 class="text-bold-400">{{$data["acheteurs"]}}</h5>
                                <div class="progress mt-1 mb-0" style="height: 7px;">
                                    <div class="progress-bar bg-success" role="progressbar" style="width: 80%"
                                        aria-valuenow="80" aria-valuemin="0" aria-valuemax="100"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-4 col-sm-6 col-12">
                <div class="card ">
                    <div class="card-content">
                        <div class="media align-items-stretch">
                            <div class="p-2 text-center bg-danger">
                                {{-- icon --}}
                                <i class="fa fa-coffee text-white display-4 p-2"></i>
                            </div>
                            <div class="py-1 px-2 media-body">
                                {{-- Name --}}
                                <h5 class="danger">Offres</h5>
                                {{-- Value --}}
                                <h5 class="text-bold-400">{{$data["offres"]}}</h5>
                                <div class="progress mt-1 mb-0" style="height: 7px;">
                                    <div class="progress-bar bg-danger" role="progressbar" style="width: 80%"
                                        aria-valuenow="80" aria-valuemin="0" aria-valuemax="100"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-4 col-sm-6 col-12">
                <div class="card ">
                    <div class="card-content">
                        <div class="media align-items-stretch">
                            <div class="p-2 text-center bg-dark">
                                {{-- icon --}}
                                <i class="fa fa-handshake-o text-white display-4 p-2"></i>
                            </div>
                            <div class="py-1 px-2 media-body">
                                {{-- Name --}}
                                <h5 class="dark">Appel d'offres</h5>
                                {{-- Value --}}
                                <h5 class="text-bold-400">{{$data["appelOffres"]}}</h5>
                                <div class="progress mt-1 mb-0" style="height: 7px;">
                                    <div class="progress-bar bg-dark" role="progressbar" style="width: 80%"
                                        aria-valuenow="80" aria-valuemin="0" aria-valuemax="100"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-4 col-sm-6 col-12">
                <div class="card ">
                    <div class="card-content">
                        <div class="media align-items-stretch">
                            <div class="p-2 text-center bg-primary">
                                {{-- icon --}}
                                <i class="fa fa-envelope text-white display-4 p-2"></i>
                            </div>
                            <div class="py-1 px-2 media-body">
                                {{-- Name --}}
                                <h5 class="primary">Demandes</h5>
                                {{-- Value --}}
                                <h5 class="text-bold-400">{{$data['demandes']}}</h5>
                                <div class="progress mt-1 mb-0" style="height: 7px;">
                                    <div class="progress-bar bg-primary" role="progressbar" style="width: 80%"
                                        aria-valuenow="80" aria-valuemin="0" aria-valuemax="100"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>

    </section>
@endsection
