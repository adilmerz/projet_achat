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
                <a class="nav-link mb-sm-3 mb-md-0" id="tabs-text-1-tab"
                    href="{{route('adminUsers')}}"><i class="fa fa-users mr-1"></i> Gestion des utilisateurs</a>
            </li>
            <li class="nav-item">
                <a class="nav-link mb-sm-3 mb-md-0 active" id="tabs-text-1-tab"
                    href="{{route('adminRequests')}}"><i class="fa fa-clock-o mr-1"></i> Traitement des demandes</a>
            </li>
        </ul>
    </nav>
</div>
@endsection

@section('Holder')
{{-- Validé des demandes inscriptions --}}
<div class="tab-pane fade active show row p-4">
    <table class="table">
      <thead class="thead-light text-capitalize">
        <tr>
            <th scope="col">Nom</th>
            <th scope="col">Adresse email</th>
            <th scope="col">Telephone</th>
            <th scope="col">Role</th>
            <th scope="col">Opération</th>
          </tr>
        </thead>
        <tbody>
            @foreach ($users as $user)
            <tr class="row_{{$user -> id}}">
                <td><a class="btn-link" href="{{'../../portfolio/'.$user->id}}" target="_blank"> {{$user -> nom}}</a></td>
                <td>{{$user -> email_pro}}</td>
                <td>{{$user -> tel}}</td>
                <td>{{$user ->role==1 ? "Fournisseur" : "Acheteur" }}</td>
                <td>
                <div>
              <a  href="{{route('user_accept').'/'.$user -> id}}" name="{{$user -> id}}" class=" text-decoration-none btn btn-sm btn-outline-success" ><i class="fa fa-check"></i> Accepté</a>
              <button name="{{$user -> id}}" class="delete_btn btn btn-sm btn-outline-danger" ><i class="fa fa-times"></i> Refusé</button>
                <div>
          </td>
        </tr>
        @endforeach
      </tbody>
    </table>
  </div>
@endsection
