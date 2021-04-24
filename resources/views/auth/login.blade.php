@extends('layouts.empty')

@section('Holder')
<!--form login-->
<div class="row">
    <!--photo login-->
    <div class="col-md-6">
       <img class=" img-responsive col-9 img-circle img-rounded rounded-circle"
           src="https://image.freepik.com/free-vector/illustration-cartoon-female-user-entering-login_241107-682.jpg"
           alt="">
   </div>
   <div class="col-md-6">
       <form method="GET" action="{{route('auth.check.login')}}">
           @csrf
           <input type="hidden" name="nom">
           <div class="form-group">
               <label for="email">Adresse e-mail</label>
               <input id="email" name="email" type="email" class="form-control">
           </div>
           <div class="form-group">
               <label for="password">Mot de passe</label>
               <input id="password" name="password" type="password" class="form-control">
           </div>
           <div class="form-group">
               <label for="role">S'authentifier en tant que</label>
               <select name="role" class="form-control" id="role">
                   <option value="1">Fournisseur</option>
                   <option value="2">Acheteur</option>
               </select>
           </div>
           <div class="form-check form-switch">
               <input class="form-check-input" type="checkbox" id="type_user">
               <label class="form-check-label" for="type_user">Se rappeler de moi</label>
             </div>
             <button type="submit" class="btn btn-primary my-2">Authentifier</button>
             <a  type="button" class="btn btn-sm" data-toggle="modal"
                 href="{{route('auth.register')}}">
                 <u>Créer nouveau compte </u>
             </a>
       </form>

   </div>
</div>
@endsection
