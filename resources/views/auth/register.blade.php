@extends('layouts.site_off')

@section('Holder')
<div class=" mx-auto border-info border">
    <div class=" bg-transparent">
        <h5 class="card-header alert alert-info">Inscription De L'entreprise</h5>
        <div class="card-body">
            <form method="GET" >
                <div class="row form-group mb-3">
                    <div class="col-sm-4">
                        <p style="border-bottom: 2px solid #d2d2d2;">Votre entreprise</p>
                    </div>
                </div>
                <div class="row form-group mb-5">
                   <div class="col-sm-1 offset-sm-2">
                        <label for="nameCompany"><i aria-hidden="true" style="color: red;">*&nbsp;</i>Nom</label>
                   </div>
                   <div class="col-sm-6">
                        <input id="nameCompany" name="nameCompany" type="text"  class="form-control" required />
                   </div>
                </div>
                <div class="row form-group offset-sm-1 mb-5">
                   <div class="col-sm-1">
                        <label for="Type"><i aria-hidden="true" style="color: red;">*&nbsp;</i>Type</label>
                   </div>
                   <div class="col-sm-4">
                        <select name="Type" class="form-control" id="Type" required>
                            <option value="">Fournisseur</option>
                            <option value="">Acheteur</option>
                        </select>
                   </div>
                   <div class="col-sm-1 offset-sm-1">
                       <label for="ICE"><i aria-hidden="true" style="color: red;">*&nbsp;</i>ICE</label>
                   </div>
                   <div class="col-sm-4">
                        <input id="ICE" name="ICE" type="text" class="form-control" required>
                   </div>
                </div>
                <div class="row form-group mb-3">
                    <div class="col-sm-4">
                        <p style="border-bottom: 2px solid #d2d2d2;">Contact de votre entreprise</p>
                    </div>
                </div>
                <div class="row form-group justify-content-center mb-5">
                   <div class="col-sm-1" style="margin-right: 1em;">
                        <label for="emailAddress"><i aria-hidden="true" style="color: red;">*&nbsp;</i>Email</label>
                   </div>
                   <div class="col-sm-4">
                        <input id="emailAddress" name="emailAddress" type="email" class="form-control" required>
                   </div>
                   <div class="col-sm-2 offset-sm-1">
                       <label for="phoneNumber"><i aria-hidden="true" style="color: red;">*&nbsp;</i>Téléphone</label>
                   </div>
                   <div class="col-sm-3">
                        <input id="phoneNumber" name="phoneNumber" type="text" class="form-control" required>
                   </div>
                </div>
                <div class="row form-group mb-3">
                    <div class="col-sm-4">
                        <p style="border-bottom: 2px solid #d2d2d2;">Adresse de votre entreprise</p>
                    </div>
                </div>
                <div class="row form-group justify-content-center mb-5">
                   <div class="col-sm-1">
                        <label for="address"><i aria-hidden="true" style="color: red;">*&nbsp;</i>Ville</label>
                   </div>
                   <div class="col-sm-4">
                        <input id="address" name="address[]" type="text" class="form-control" required>
                   </div>
                   <div class="col-sm-2">
                       <label for="address"><i aria-hidden="true" style="color: red;">*&nbsp;</i>Province</label>
                   </div>
                   <div class="col-sm-3" >
                        <input id="address" name="address[]" type="text" class="form-control" required>
                   </div>
                </div>
                <div class="row form-group justify-content-center mb-5">
                   <div class="col-sm-2" >
                        <label for="address"><i aria-hidden="true" style="color: red;">*&nbsp;</i>Adresse</label>
                   </div>
                   <div class="col-sm-4">
                        <input id="address" name="address[]" type="text" class="form-control" required>
                   </div>
                   <div class="col-sm-2">
                       <label for="address">Code Postal</label>
                   </div>
                   <div class="col-sm-2">
                        <input id="address" name="address[]" type="text" class="form-control" required>
                   </div>
                </div>
                <div class="row form-group mb-3">
                    <div class="col-sm-4">
                        <p style="border-bottom: 2px solid #d2d2d2;">Votre compte</p>
                    </div>
                </div>
                <div class="row form-group justify-content-center mb-5">
                   <div class="col-sm-1" style="margin-right: 1em;">
                        <label for="email"><i aria-hidden="true" style="color: red;">*&nbsp;</i>Email</label>
                   </div>
                   <div class="col-sm-4">
                        <input id="email" name="email" type="text" class="form-control" required>
                   </div>
                   <div class="col-sm-3" >
                       <label for="password"><i aria-hidden="true" style="color: red;">*&nbsp;</i>Mot de passe</label>
                   </div>
                   <div class="col-sm-3">
                        <input id="password" name="password" type="password" class="form-control" required>
                   </div>
                </div>
                <div class="row form-group mb-3">
                    <div class="col-sm-4">
                        <p style="border-bottom: 2px solid #d2d2d2;">Votre Portefeuille</p>
                    </div>
                </div>
                <div class="row form-group justify-content-center mb-5">
                   <div class="col-sm-4" >
                        <label for="doc"><i aria-hidden="true" style="color: red;">*&nbsp;</i>Déposer le document (PDF)</label>
                   </div>
                   <div class="col-sm-7">
                       <input type="file" id="doc" name="doc" class="form-control p-1" required>
                   </div>
                </div>
                <div class="row justify-content-center form-group mb-5">
                    <div class="col-md-4">
                        <button type="submit" style="width: 15em;" class="btn btn-primary my-2">Je m'inscris</button>
                        <div class="affiche_erreur" bis_skin_checked="1">
                            <span class="indication-form float-left" style="color: red;">*Les champs sont obligatoires</span>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>

@endsection
