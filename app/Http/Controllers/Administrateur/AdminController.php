<?php

namespace App\Http\Controllers\Administrateur;

use App\Http\Controllers\Controller;
use App\Models\Entreprise;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class AdminController extends Controller
{
    public function __construct()
    {
        if(session()->has('admin')){
            return view('administrateur.login_page');
        }
        else{
            return redirect(route('adminHome'));
        }
    }


    public function getUsers()
    {
        $users = DB::table('entreprises')
            ->select('id', 'nom', 'email_user', 'password_user', 'role')
            ->where('valide', '=', 1)
            ->orderBy('id')
            ->get();

        return view('administrateur.utilisateurs', compact('users'));
    }

    public function delete(Request $request)
    {
        $user = Entreprise::findOrFail($request->id);
        $user->delete();
        return response()->json(['success' => 'Ce utilisateur est supprimer avec succés']);
    }

    public function search(Request $request)
    {

        $name = $request->name;

        $users = DB::table('entreprises')
            ->select('id', 'nom', 'email_user', 'password_user', 'role')
            ->where('nom', 'like', '%' . $name . '%')
            ->where('valide', '=', 1)
            ->orderBy('id')
            ->get();

        $data = "";

        foreach ($users as $key => $user) {

            $data .= '<tr class="row_' . $user->id . '" >' . '<td>' . $user->nom . '</td>';
            $data .= '<td>' . $user->email_user . '</td>' . '<td id="0" style="-webkit-text-security:disc;font-size:1.2em;" class="pass-' . $user->id . '">' . $user->password_user . '</td>';
            $data .= '<td>' . $user->role == 1 ? "Fournisseur" : "Acheteur" . '</td>';
            $data .= '<td><div><button  class="btn btn-sm btn-outline-success" name="pass-' . $user->id . '" onclick="showPass(this.name)" ><i id="pass-' . $user->id . '" class="fa fa-eye"></i></button>';
            $data .= '<button  name="' . $user->id . '" class="delete_btn btn btn-sm btn-outline-danger" ><i class="fa fa-remove"></i></button>';
            $data .= '</div></td>' . '</tr>';
        }

        return Response($data);
    }

    public function getRequest()
    {
        $users = DB::table('entreprises')
            ->select('id', 'nom', 'email_pro', 'tel', 'role')
            ->where('valide', '=', 0)
            ->orderBy('id')
            ->paginate(4);

        return view('administrateur.demandes', compact('users'));
    }


    public function acceptUser(Request $request)
    {
        $user = Entreprise::findOrFail($request->id);
        $user->update([
            'valide'=>1,
        ]);
       return redirect()->back();
    }

    public function showStatistics(){
        $data =["users"=>0,"fournisseurs"=>0,"acheteurs"=>0,"offres"=>0,"appelOffres"=>0,"demandes"=>0];
        $data["users"] = DB::table('entreprises')->count();
        $data["fournisseurs"] = DB::table('entreprises')->where('role','=',1)->count();
        $data["acheteurs"] = DB::table('entreprises')->where('role','=',2)->count();
        $data["offres"] = DB::table('offres')->count();
        $data["appelOffres"] = DB::table('appel_offres')->count();
        $data['demandes'] = DB::table('entreprises')->where('valide','=',0)->count();

        return view('administrateur.index',compact('data'));
    }

    public function portfolio(Request $request){

        $user = Entreprise::findOrFail($request->id);

        return  view('entreprise.portfolio',compact('user'));
    }

}
