@extends('layouts.admin')

@section('services')
    <div class="col-lg-12 mt-5 mt-lg-0 col-md-12 text-muted mx-auto border-bottom py-1">
    <nav class="nav-wrapper ">
        <ul class="nav nav-pills nav-fill flex-column flex-md-row " id="tabs-text" >
            <li class="nav-item">
                <a class="nav-link mb-sm-3 mb-md-0" id="tabs-text-1-tab"
                    href="{{route('adminHome')}}"><i class="fa fa-users mr-1"></i> Statistiques</a>
            </li>
            <li class="nav-item">
                <a class="nav-link mb-sm-3 mb-md-0 active" id="tabs-text-1-tab"
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
{{-- Gestion des utilisateurs --}}

    <div>
        <div class="form-inline ml-4">
          <div class="input-group">
            <input id="txt_find" type="text" value="" style="width:150vh" class="form-control" placeholder="Chercher" aria-label="Chercher" aria-describedby="button-cherch">
            </div>
            <button class="find_btn btn btn-outline-success rounded-0"  id="button-cherch">Chercher</button>
          </div>
    </div>
    <div class="tab-pane fade active show row p-4">
      <table class="table">
        <thead class="thead-light text-capitalize">
          <tr>
            <th scope="col">Nom</th>
            <th scope="col">Adresse email</th>
            <th scope="col">Mot de passe</th>
            <th scope="col">Role</th>
            <th scope="col">Opération</th>
          </tr>
        </thead>
        <tbody>
            @foreach ($users as $user)
            <tr class="row_{{$user -> id}}">
                <td>{{$user -> nom}}</td>
                <td>{{$user -> email_user}}</td>
                <td id="0" style="-webkit-text-security:disc;font-size:1.2em;" class="pass-{{$user -> id}}">{{$user -> password_user}}</td>
                <td>{{$user ->role==1 ? "Fournisseur" : "Acheteur" }}</td>
                <td>
                  <div>
                    <button  class="btn btn-sm btn-outline-success" name="pass-{{$user -> id}}" onclick="showPass(this.name)" ><i id="pass-{{$user -> id}}" class="fa fa-eye"></i></button>
                    <button  name="{{$user -> id}}" class="delete_btn btn btn-sm btn-outline-danger" ><i class="fa fa-remove"></i></button>
                    <div>
                </td>
              </tr>
            @endforeach
        </tbody>
      </table>
     {{--  {{$users->links()}} --}}
    </div>

@endsection

