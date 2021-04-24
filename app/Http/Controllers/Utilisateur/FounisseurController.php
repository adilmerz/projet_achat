<?php

namespace App\Http\Controllers\Utilisateur;

use App\Http\Controllers\Controller;
use App\Models\Lot;
use App\Models\Offre;
use App\Models\Reponse_lot;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class FounisseurController extends Controller
{
        public function index()
        {

            $appel_offres = DB::table('entreprises')
            ->join('appel_offres', 'entreprises.id', '=', 'appel_offres.id_acheteur')
            ->where('appel_offres.id_acheteur',1)
            ->orderByDesc('appel_offres.date_creation')
            ->paginate(2);

        return view('fournisseur.index', compact('appel_offres'));
        }

        public function create(Request $request)
        {
            $lots = DB::table('lots')
            ->where('id_appel_offre',$request->id)
            ->get();

            return view('fournisseur.create',compact('lots'));
        }

        public function marche()
        {
            $appel_offres = DB::table('entreprises')
            ->join('appel_offres', 'entreprises.id', '=', 'appel_offres.id_acheteur')
            ->get();


                    return view('fournisseur.marche', compact('appel_offres'));
        }

        public function abondonne($id)
        {
            $note = DB::table('offres')->where('id_appel_offre',$id);
            $note->update(['note_admin' => -1,'note_fin' => -1,
                'note_tech' => -1]);

            return redirect(route('fournisseur.index'));
        }

        public function store(Request $request)
        {
            $offre = new Offre();
            $offre->date_depot = date('Y m d H:i:s');
            $offre->save();
            for ($i=0; $i < count($request->lot_rep); $i++) {
                $lot_rep = new Reponse_lot();
                $lot_rep->id_offre = $offre->id_offre;
                $lot_rep ->reponse = $request->lot_rep[$i];
                $lot_rep->save();
            }

            return redirect(route('fournisseur.index'));
        }
}
