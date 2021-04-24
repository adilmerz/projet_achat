<?php

namespace App\Http\Controllers\Utilisateur;

use App\Http\Controllers\Controller;
use Illuminate\Contracts\Session\Session;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class AutentificationController extends Controller
{
    public function userLogin()
    {

            return view('auth.login');

    }

    public function index(){
        $appel_offres = DB::table('entreprises')
        ->join('appel_offres', 'entreprises.id', '=', 'appel_offres.id_acheteur')
        ->where('appel_offres.id_acheteur',1)
        ->orderByDesc('appel_offres.date_creation')
        ->paginate(2);

        return view('home_off', compact('appel_offres'));
    }

    public function checkLogin(Request $request)
    {
        $user = DB::table('entreprises')
                    ->select('nom','role')
                    ->where('email_user','=',$request->email)
                    ->where('password_user','=',$request->password)
                    ->where('role','=',$request->role)
                    ->get();


        if ($user->count()>0) {
            $request['nom'] = $user[0]->nom;
            $request['role'] = $user[0]->role;
            $request -> session()->put('user',$request->input());

            $session = session('user');
            if($user[0]->role==1)
            return redirect(route('fournisseur.index'));
            else
            return redirect(route('acheteur.offres'));
        }
        $message = "Verifier votre information";
        return view('auth.login')->withErrors(['Verifier votre information']);
    }

    public function userLogout()
    {
        session()->put('user',null);
        return redirect(route('auth.login'));
    }

}
