@extends('layouts.empty')

@section('Holder')
<div class="container">
    <div class="jumbotron">
        <div class="row ">
          <div class="col-md-6">
            <p><span>Nom de l'entreprise : <span>{{$user->nom}}</p>
              <p><span>ICE : <span>{{$user->ice}}</p>
              <p><span>Role : <span>{{$user->role==1?"Fournisseur":"Acheteur"}}</p>
          </div>
          <div class="col-md-6">
            <p><span>Adresse éléctronique : <span>{{$user->email_pro}}</p>
              <p><span>Numéro téléphone : <span>{{$user->tel}}</p>
              <p><span>Adresse : <span>{{$user->adresse}}</span></p>
          </div>
        </div>
      </div>
  </div>
  <div class="container">
    <iframe src="{{'../../assets/file/'.$user->portefeuille}}" height="1000" width="100%" frameborder="0"></iframe>
  </div>
@endsection
