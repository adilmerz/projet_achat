   <!-- Modal -->
   <div class="modal fade small" id="ModalProfil" tabindex="-1" role="dialog"
   aria-labelledby="ModalProfilTitle" aria-hidden="true">
   <div class="modal-dialog modal-dialog-centered" role="document">
       <div class="modal-content">
           <div class="modal-header">
               <h5 class="modal-title" id="ModalProfilTitle">Profile de compte</h5>
               <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                   <span aria-hidden="true">&times;</span>
               </button>
           </div>
           <div class="modal-body form-group">
            <form method="GET" action="{{route('admin_profil')}}">
                <div class="form-group">
                    <label for="email">Nom de compte :</label>
                    <input id="nom" name="nom" type="text" value="{{session('online')['nom']}}" class="form-control" required>
                </div>
                <div class="form-group">
                    <label for="email">Adresse e-mail</label>
                    <input id="email" name="email" type="email" value="{{session('online')['email']}}" class="form-control" readonly>
                </div>
                <div class="form-group">
                    <label for="email">Nouveau Adresse e-mail</label>
                    <input id="email" name="new_email" type="email" value="" class="form-control" required>
                </div>
                <div class="form-group">
                    <label for="password">Ancien mot de passe</label>
                    <input id="password" name="pw" type="password" class="form-control" required>
                </div>
                <div class="form-group">
                    <label for="password">Nouveau mot de passe</label>
                    <input id="newpassword1" name="new_pw" type="password" class="form-control" required>
                </div>
                <div class="form-group">
                    <label for="password">Confirmation</label>
                    <input id="newpassword2"  type="password" class="form-control">
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Fermer</button>
                    <button type="submit" class="btn btn-primary" onclick="return verifyPass()">Enregistrer</button>
                </div>
            </form>
           </div>
            @section('scripts')
            <script>
                function verifyPass(){
                   let pass1 = $('#newpassword1').val();
                   let pass2 = $('#newpassword2').val();

                   if(pass1!=pass2){
                       alert('Les mots de passe doit étre identique');
                       return false;
                   }
                   return true;
                }

            </script>
            @endsection
       </div>
</div>
</div>
