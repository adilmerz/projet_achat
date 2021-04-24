<?php

namespace App\Http\Controllers\Administrateur;
use App\Http\Controllers\Controller;

use App\Models\Admin;
use GuzzleHttp\Middleware;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth ;

class AuthController extends Controller
{
    public function adminLogin(){
        if(!session()->has('administrateur')){
            return view('administrateur.login_page');
        }
        else{
            return redirect(route('adminHome'));
        }
    }

    public function logout(){
        session()->put('administrateur',null);
        return redirect(route('adminLogin'));
    }

    public function checkAdmin(Request $request) {

            $admin = DB::table('admins')
                    ->select('nom')
                    ->where('email','=',$request->email)
                    ->where('pw','=',$request->pw)
                    ->get();


        if ($admin->count()>0) {
            $request['nom'] = $admin[0]->nom;
            $request -> session()->put('administrateur',$request->input());
            return redirect()->intended('/admin');
        }
        $message = "Verifier votre information";
        return view('administrateur.login_page')->withErrors(['Verifier votre information']);
    }

    public function changePass(Request $request) {

        $admins = DB::table('admins')
                ->where('pw','=',$request->pw)
                ->where('email','=',$request->email)
                ->get('id_admin');


    if ($admins->count()>0) {
        $admin = Admin::findOrFail($admins[0]->id_admin);
        $admin->update([
            'nom'=>$request->nom,
            'pw'=>$request->new_pw,
            'email'=>$request->new_email,
        ]);

        $request['nom'] = $request->nom;
        $request['pw'] = $request->new_pw;
        $request['email'] = $request->new_email;

        $request -> session()->put('administrateur',$request->input());
        return redirect()->intended('/admin');
    }
    return back()->withInput($request->only('email'));
}


}
