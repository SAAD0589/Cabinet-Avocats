<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class FolderRecuperation extends Model
{
    use HasFactory;
    protected $fillable = [
        'Lettre_transmission_dossier',
        'Contrat_credit',
        'Releve_compte',
        'Tableau_damortissement',
        'Copie_CIN',      
        'PV_vente_vehicule',
        'Reconnaissance_dette',
        'Acte_davalCautionnement_solidaire',
        'Registre_commerce',
        'Attestation_salaireAttestationTravail',
        'Ordre_Prelevement_PermanentIrrevocable',      
        'Contra_dhypotheque_cautionnement_hypothecaire',
        'Copie_statuts',
        'PV_AGE',
        'Facture_tel_Electricite',
        'Certificat_residence',
        'Protocole_daccord',      
        'Contrat_subrogation_contrat_LOA_Contrat_Mourabaha',
        'Nantissement_fond_commerce',
        'Recepisse_depot_declaration_mise_circulation_provisoire',
        'Certificat_propriete',
        'Contrat_bail',
        'Specimen_cheque',      
        'RIB',
        'Autres_1',
        'Autres_2',
        'id_rec'
 ];
}
