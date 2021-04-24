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


    <div class="container mx-auto mt-5">
        <div class="card border border-info">
            <h5 class="card-header text-capitalize alert alert-info">Nouvelle Offre</h5>
            <div class="card-body">
                <form action="fournisseur.store" method="GET">

                    @csrf


                    {{-- start --}}
                    <div class="row form-group mb-3">
                        <div class="col-sm-4">
                            <p style="border-bottom: 2px solid #d2d2d2;">Tapez votre réponses</p>
                        </div>
                    </div>
                    @foreach ($lots as $lot )

                    <div class="row col-12 my-4">
                        <div class="row form-inline  col-12 my-2">
                            <div class="col-sm-6 text-left">
                                <label for="">{{$lot->description}}</label>
                            </div>
                            <div class="col-sm-6" >
                                <textarea id=""  name="lot_rep[]" class="form-control" style="width: 90%">

                                </textarea>
                            </div>

                        </div>

                    </div>

                    @endforeach
                    <div class="row form-group mb-3">
                        <div class="col-sm-4">
                            <p style="border-bottom: 2px solid #d2d2d2;">Posté le document de réponse</p>
                        </div>
                    </div>
                    <div class="row form-group justify-content-center mb-5">
                        <div class="col-sm-4">
                            <label for="doc"><i aria-hidden="true" style="color: red;">*&nbsp;</i>Poster votre document
                                (PDF) : </label>
                        </div>
                        <div class="col-sm-7 ">
                            <input type="file" id="reglement" name="reglement" class="form-control p-1" required>
                        </div>
                    </div>
                    <div class=" row align-items-center ">
                        <div class="col-4"></div>
                        <button type="submit" class="btn form-control m-1 col-2 btn-outline-success "><i class="fa fa-check"></i> Confirmer</button>
                        <a href="{{route('fournisseur.abondonne',$lots[0]->id)}}" class="btn form-control m-1 col-2 btn-outline-danger "><i class="fa fa-close"></i> Abondonne</a>
                    </div>

                </form>
            </div>
        </div>
    </div>

@endsection
