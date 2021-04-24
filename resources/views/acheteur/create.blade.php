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
            <h5 class="card-header text-capitalize alert alert-info">Nouvelle appel offre</h5>
            <div class="card-body">
                <form method="POST" action="{{route('acheteur.store')}}" enctype="multipart/form-data"  >
                    @csrf
                    <div class="row form-group mb-3">
                        <div class="col-sm-4">
                            <p style="border-bottom: 2px solid #d2d2d2;">Informations d'appel offre</p>
                        </div>
                    </div>
                    {{-- start --}}
                    <div class="row col-12 my-4">
                        <div class="row form-inline col-6">
                            <div class="col-sm-6">
                                <label for="mode_passation"><i style="color: red;">*&nbsp;</i>Mode de passation :</label>
                            </div>
                            <div class="col-sm-6">
                                <input id="mode_passation" name="mode_passation" type="text" class="form-control"
                                    required />
                            </div>

                        </div>
                        <div class="row form-inline col-6">
                            <div class="col-sm-6 ">
                                <label for="type_marche"><i style="color: red;">*&nbsp;</i>Type de marché :</label>
                            </div>
                            <div class="col-sm-6">
                                <input id="type_marche" name="type_marche" type="text" class="form-control" required />
                            </div>
                        </div>
                    </div>
                    {{-- -------------------- --}}
                    {{-- start --}}
                    <div class="row col-12 my-4">
                        <div class="row form-inline col-6">
                            <div class="col-sm-6">
                                <label for="estimation_couts"><i style="color: red;">*&nbsp;</i>Estimation de coûts
                                    :</label>
                            </div>
                            <div class="col-sm-6">
                                <input id="estimation_couts" name="estimation_couts" type="text" class="form-control"
                                    required />
                            </div>

                        </div>
                        <div class="row form-inline col-6">
                            <div class="col-sm-6 ">
                                <label for="domaines_activite"><i style="color: red;">*&nbsp;</i>Domaines d'activité
                                    :</label>
                            </div>
                            <div class="col-sm-6">
                                <input id="domaines_activite" name="domaines_activite" type="text" class="form-control"
                                    required />
                            </div>
                        </div>
                    </div>
                    {{-- -------------------- --}}
                    {{-- start --}}
                    <div class="row col-12 my-4">
                        <div class="row form-inline col-7">
                            <div class="col-sm-5">
                                <label for="date_creation"><i style="color: red;">*&nbsp;</i>Date de publication :</label>
                            </div>
                            <div class="col-sm-7 input-group">
                                <input id="date_creation" name="date_creation[]" type="date" class="form-control col-8" required />
                                <input id="date_creation" name="date_creation[]" type="time" class="form-control col-4" required />
                            </div>

                        </div>
                        <div class="row form-inline col-5">
                            <div class="col-sm-6">
                                <label for="categorie" class=" text-left"><i style="color: red;">*&nbsp;</i>Categorié
                                    :</label>
                            </div>
                            <div class="col-sm-6">
                                <input id="categorie" name="categorie" type="text" class="form-control" required />
                            </div>
                        </div>
                    </div>
                    {{-- -------------------- --}}
                    <div class="row form-group mb-3">
                        <div class="col-sm-4">
                            <p style="border-bottom: 2px solid #d2d2d2;">Critères d'évaluation</p>
                        </div>
                    </div>
                    <div class="row form-group mb-5">
                        <div class="col-sm-3 offset-sm-2">
                            <label for="coeff_admin"><i style="color: red;">*&nbsp;</i>Dossier administratif :</label>
                        </div>
                        <div class="col-sm-2">
                            <input id="coeff_admin" name="coeff_admin" placeholder="Coeficient" type="number"
                                class="form-control" required />
                        </div>
                    </div>
                    <div class="row form-group mb-5">
                        <div class="col-sm-3 offset-sm-2">
                            <label for="coeff_fin"><i style="color: red;">*&nbsp;</i>Dossier financier :</label>
                        </div>
                        <div class="col-sm-2">
                            <input id="coeff_fin" name="coeff_fin" placeholder="Coeficient" type="number"
                                class="form-control" required />
                        </div>
                    </div>
                    <div class="row form-group mb-5">
                        <div class="col-sm-3 offset-sm-2">
                            <label for="coeff_tech"><i style="color: red;">*&nbsp;</i>Dossier technique :</label>
                        </div>
                        <div class="col-sm-2">
                            <input id="coeff_tech" name="coeff_tech" placeholder="Coeficient" type="number"
                                class="form-control" required />
                        </div>
                    </div>
                    <div class="row form-group mb-3">
                        <div class="col-sm-4">
                            <p style="border-bottom: 2px solid #d2d2d2;">Allotissement des services</p>
                        </div>
                    </div>
                    <button class=" btn btn-sm btn-success float-right mr-5" onclick="addLot()"><i
                            class="fa fa-plus"></i></button>
                    <div id="lots" class="row form-group justify-content-center mb-5">

                        <div class="col-sm-10 mb-2" style="margin-right: 1em;">
                            <label><i aria-hidden="true" style="color: red;">*&nbsp;</i>Lot N° <span
                                    class="nLot">1</span> : </label>
                            <textarea name="lot[]" class="form-control mx-2" required></textarea>
                        </div>

                    </div>

                    <script>
                        function addLot() {
                            let num = $('.nLot');
                            let text =
                                '<div class="col-sm-10 mb-2" style="margin-right: 1em;"><label for=""><i aria-hidden="true" style="color: white;">*&nbsp;</i>Lot N° <span class="nLot">' +
                                (num.length + 1) +
                                '</span> : </label><textarea name="lot[]" class="form-control mx-2" ></textarea></div>'
                            $('#lots').append(text)

                        }

                    </script>
                    <div class="row form-group mb-3">
                        <div class="col-sm-4">
                            <p style="border-bottom: 2px solid #d2d2d2;">Posté le réglement</p>
                        </div>
                    </div>
                    <div class="row form-group justify-content-center mb-5">
                        <div class="col-sm-4">
                            <label for="doc"><i aria-hidden="true" style="color: red;">*&nbsp;</i>Poster votre réglement
                                (PDF) : </label>
                        </div>
                        <div class="col-sm-7 ">
                            <input type="file" id="reglement" name="reglement" class="form-control p-1" required>
                        </div>
                    </div>
                    <div class="row form-group mb-3">
                        <div class="col-sm-4">
                            <p style="border-bottom: 2px solid #d2d2d2;">Identifiez vos fournisseurs cibles</p>
                        </div>
                    </div>
                        <script>
                                function checkAll(e){
                                  if(e.checked){
                                        let chkbox = document.getElementsByClassName('custom-control-input');
                                        for (let index = 0; index < chkbox.length; index++) {
                                             chkbox[index].checked=true;
                                        }
                                    }
                                    else{
                                        let chkbox = document.getElementsByClassName('custom-control-input');
                                        for (let index = 0; index < chkbox.length; index++) {
                                             chkbox[index].checked=false;
                                        }
                                    }
                                }
                                function checkAny(e){
                                    let test = true;
                                    let chkbox = document.getElementsByClassName('custom-control-input');
                                        for (let index = 0; index < chkbox.length; index++) {
                                             if(!chkbox[index].checked){
                                                test = false;
                                             }
                                        }
                                        for (let index = 0; index < chkbox.length; index++) {
                                             if(chkbox[index].checked){
                                                test = true;
                                             }
                                        }
                                        document.getElementById('customCheck0').checked=test;

                                }

                        </script>

                    <div class="row form-group justify-content-center mb-5">
                        <div class="col-sm-7 ">
                            <div class="container">
                                <div class="row">
                                  <div class="col-12">
                                    <table class="table table-bordered">
                                      <thead>
                                        <tr>
                                          <th scope="col">
                                              <div class="custom-control custom-checkbox">
                                            <input type="checkbox" class="custom-control-input" onclick="checkAll(this)" id="customCheck0" checked>
                                            <label class="custom-control-label" for="customCheck0"></label>

                                        </div>
                                    </th>
                                          <th scope="col">Nom de fournisseur</th>
                                          <th scope="col">ICE</th>
                                          <th scope="col">Portefeuille</th>
                                        </tr>
                                      </thead>
                                      @php
                                      use Illuminate\Support\Facades\DB;
                                          $fournisseurs = DB::table('entreprises')
                                                        ->where('role',1)
                                                        ->get();
                                      @endphp
                                      <tbody>
                                          @foreach ($fournisseurs as $f )

                                        <tr>
                                          <td>
                                            <div class="custom-control custom-checkbox">
                                                <input type="checkbox" name="idf[]" onclick="checkAny(this)" value="{{$f->id}}" class="custom-control-input" id="customCheck{{$f->id}}" checked>
                                                <label class="custom-control-label" for="customCheck{{$f->id}}"></label>
                                            </div>
                                          </td>
                                          <td>{{$f->nom}}</td>
                                          <td>{{$f->ice}}</td>
                                          <td><a href="../../portfolio/{{$f->id}}" class="btn btn-link btn-sm text-decoration-none" target="_blank">Détails</a></td>
                                        </tr>
                                        @endforeach
                                      </tbody>
                                    </table>
                                  </div>
                                </div>
                              </div>
                        </div>
                    </div>
                    <div class="row justify-content-center form-group mb-5">
                        <div class="col-md-4">
                            <button type="submit" style="width: 15em;" class="btn btn-primary my-2">Enregistrer</button>
                            <div class="affiche_erreur" bis_skin_checked="1">
                                <span class="indication-form float-left" style="color: red;">*Les champs sont
                                    obligatoires</span>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>

@endsection
