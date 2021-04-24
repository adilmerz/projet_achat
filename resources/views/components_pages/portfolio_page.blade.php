<div class="container">
  <div class="jumbotron">
    <div class="row card-body border-bottom ">
        <div class=" col-5">
            <li type="square" class="card-text my-2">
                Mode de passation : <span>{{ $appel_offres[0]->mode_passation }}</span>
            </li>
            <li type="square" class="card-text my-2">
                Type de marché : <span>{{ $appel_offres[0]->type_marche }}</span>
            </li>

            <li type="square" class="card-text my-2">
                Estimation de coûts : <span>{{ $appel_offres[0]->estimation_couts }}.00 DH</span>
            </li>

            <li type="square" class="card-text my-2">
                Domaines d'activité : <span>{{ $appel_offres[0]->domaines_activite }}</span>
            </li>

            <li type="square" class="card-text my-2">
                Categorié : <span>{{ $appel_offres[0]->categorie }}</span>
            </li>


        </div>
        <div class="col-7">

            <li type="square" class="card-text my-2">
                Les Critères :
            <ul class="ml-5 mt-0 title text-small">
                <li >{{ 'Dossier administratif : '.(int)($appel_offres[0]->coeff_admin *100 / ($appel_offres[0]->coeff_admin + $appel_offres[0]->coeff_fin +$appel_offres[0]->coeff_tech)  ).'%'  }}</li>
                <li >Dossier financier&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;{{' : '.(int)($appel_offres[0]->coeff_fin *100 / ($appel_offres[0]->coeff_admin + $appel_offres[0]->coeff_fin +$appel_offres[0]->coeff_tech)  ).'%'  }}</li>
                <li >Dossier technique&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;{{' : '.(int)($appel_offres[0]->coeff_tech *100 / ($appel_offres[0]->coeff_admin + $appel_offres[0]->coeff_fin +$appel_offres[0]->coeff_tech)  ).'%'  }}</li>
            </ul>
        </li>

        <li type="square" class="card-text my-2">
                Lots :
            <ul class=" mt-0 title text-small">
                @foreach ($appel_offres as $ap )
                <li type="1"> {{ $ap->description }}</li>
                @endforeach
            </ul>
        </li>
        </div>
    </div>
    </div>
</div>
<div class="container">
  <iframe src="../../../assets/rapport.pdf" height="1000" width="100%" frameborder="0"></iframe>
</div>
