<?php

namespace App\Http\Controllers\Utilisateur;

use App\Http\Controllers\Controller;
use App\Models\Appel_offre;
use App\Models\Lot;
use App\Models\Offre;
use App\Models\Visibilite;
use Carbon\Carbon;
use DateTime;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Ramsey\Uuid\Type\Decimal;

class AcheteurController extends Controller
{
    public function __construct()
    {


    }



    public function index(){

        $appel_offres = DB::table('entreprises')
            ->join('appel_offres', 'entreprises.id', '=', 'appel_offres.id_acheteur')
            ->where('appel_offres.id_acheteur',1)
            ->orderByDesc('appel_offres.date_creation')
            ->paginate(2);

        return view('acheteur.index', compact('appel_offres'));

    }

    public function showDetails($id){

        $appel_offres = DB::table('entreprises')
            ->join('appel_offres', 'entreprises.id', '=', 'appel_offres.id_acheteur')
            ->where('appel_offres.id_acheteur',1)
            ->where('appel_offres.id',$id)
            ->get();
        //dd($appel_offres);
        return view('acheteur.reglement', compact('appel_offres'));
    }

    public function showNote(Request $request)
    {
        $note = DB::table('offres')
            ->join('entreprises','entreprises.id','offres.id_fournisseur')
            ->where('offres.id_offre',$request->id)
            ->first();

        return view('acheteur.note',compact('note'));
    }

    public function updateNote(Request $request)
    {
        $note = DB::table('offres')->where('id_offre',$request->id);
        $note->update(['note_admin' => $request->note_admin,'note_fin' => $request->note_fin,
            'note_tech' => $request->note_tech]);

        return redirect(route('acheteur.offres'));
    }
    public function VosOffres(){

        $offres = DB::table('entreprises')
        ->join('offres', 'entreprises.id', '=', 'offres.id_fournisseur')
        ->join('appel_offres', 'offres.id_appel_offre', '=', 'appel_offres.id')
        ->where('appel_offres.id_acheteur',1)
        ->orderByDesc('offres.date_depot')
        ->paginate(3);

    return view('acheteur.offres', compact('offres'));
    }

    public function OffresClotures(){

        $appel_offres = DB::table('entreprises')
            ->join('appel_offres', 'entreprises.id', '=', 'appel_offres.id_acheteur')
            ->get();



    return view('acheteur.offre_cloture', compact('appel_offres'));
    }

    public function delete(Request $request){

       $this->index();
    }

    public function create(Request $request){

        //$appel_offres = Appel_offre::all();

        $appel_offre = new Appel_offre();

            $date_creation = $request->date_creation[0] . ' ' . $request->date_creation[1];
            $date_creation = date('Y-m-d H:i:s', strtotime($date_creation));
            $appel_offre ->  mode_passation = $request->mode_passation;
            $appel_offre -> type_marche = $request->type_marche;
            $appel_offre -> estimation_couts = $request->estimation_couts;
            $appel_offre -> domaines_activite = $request->domaines_activite;
            $appel_offre -> date_creation = $date_creation;
            $appel_offre -> categorie = $request->categorie;
            $appel_offre -> coeff_admin = $request->coeff_admin;
            $appel_offre -> coeff_fin = $request->coeff_fin;
            $appel_offre -> coeff_tech = $request->coeff_tech;
            $appel_offre -> id_acheteur = 1;
            $appel_offre -> reglement = time().'.pdf';
            $appel_offre ->save();
            $request->file('reglement')->storeAs('\\file\\offres\\', time().'.pdf');

           for ($i=0; $i <count($request->lot); $i++) {
            $lots = new Lot();
            $lots ->description = $request->lot[$i];
            $lots->id_appel_offre=$appel_offre->id;
            $lots->save();
           }

           for ($i=0; $i <count($request->idf); $i++) {
            $visibilite = new Visibilite();
            $visibilite ->id_fournisseur = $request->idf[$i];
            $visibilite->id_appel_offre=$appel_offre->id;
            $visibilite->save();
           }

            return view('acheteur.index');

    }
}
