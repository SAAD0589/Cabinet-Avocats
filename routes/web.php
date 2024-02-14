<?php
use App\Http\Controllers\Auth\AuthenticatedSessionController;

use App\Models\Dossier;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AjaxController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\AvocatController;
use App\Http\Controllers\ArchiveController;
use App\Http\Controllers\DossierController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\DossiersController;
use App\Http\Controllers\RemarqueController;
use App\Http\Controllers\ProcedureController;
use App\Http\Controllers\BibliothequesController;
use App\Http\Controllers\ReportController;
use App\Http\Controllers\ImplementationController;
use App\Http\Controllers\FormTribunalDocController;
use App\Http\Controllers\RecuperationController;
use App\Http\Controllers\AssuranceController;
use App\Http\Controllers\RendezVousController;
use App\Http\Controllers\AnnuaireTelephoniqueController;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
Route::view('/','auth.login');
Route::post('/clients',[ProfileController::class,'store'])->name('store');

Route::view('/ss','welcome');

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');




Route::middleware('auth')->group(function () {
    Route::post('/logout', [AuthenticatedSessionController::class,'destroy'])
    ->name('logout');

    
    Route::get('/home', [ProfileController::class, 'index'])->name('home');

    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
    Route::resource('/clients', AdminController::class);
    //Ajax Delete Client
    Route::post('/clients/Delete', [AdminController::class,'DeleteClt'])->name('DeleteClt');

    Route::get('Succes_Client',[AdminController::class,'Succes_Client'])->name('Succes_Client');


    Route::resource('/avocats', AvocatController::class);
    Route::get('SuccesAvocat',[AvocatController::class,'Succes_Avocat'])->name('Succes_Avocat');

    //Ajax Delete Avocat
    Route::post('/avocats/Delete', [AvocatController::class,'DeleteAvocat'])->name('DeletedAvo');
    Route::get('Succes_Avocat',[AvocatController::class,'Succes_Avocat'])->name('Succes_Avocat');

    Route::resource('/users', UserController::class);
    Route::get('Succes_User',[UserController::class,'Succes_User'])->name('Succes_User');

    //Ajax Delete User
    Route::post('/users/Delete', [UserController::class,'DeleteUser'])->name('DeleteUser');

    Route::get('/affichageDos', [DossiersController::class,'Affichage'])->name('affichageDos');
    Route::resource('dossier', DossiersController::class);
    Route::resource('remarque', RemarqueController::class);
    Route::resource('procedure', ProcedureController::class);
    Route::resource('bibliotheques', BibliothequesController::class);

    Route::resource('reports', ReportController::class);
    //Delete Report 
    Route::post('reports/Delete', [ReportController::class,'deleteRep'])->name('DeleteReport');

    Route::resource('implementations', ImplementationController::class);
    //Delete Implementation 
    Route::post('Implementation/Delete', [ImplementationController::class,'deleteImp'])->name('DeleteImp');


    Route::resource('FormTribunalDoc', FormTribunalDocController::class);


    Route::post('bibliothequesDelete', [BibliothequesController::class,'delete'])->name('bibliotheques-delete');
    Route::get('/export-bibliotheques', [BibliothequesController::class,'exportUsers'])->name('expBib');
    Route::get('/export-Dossiers/{id}', [DossiersController::class,'exportDossier'])->name('expDoc');
    Route::get('/export-All', [DossiersController::class,'exportAllDoc'])->name('allDoc');
    Route::post('/deleteDoc', [DossiersController::class,'deleteDoc'])->name('deleteDoc');

    Route::post('remarque/{id}', [RemarqueController::class,'addSeance'])->name('addSeance');
    Route::get('archive/{id}', [ArchiveController::class,'saveArchive'])->name('saveArchive');
    Route::get('archive', [ArchiveController::class,'index'])->name('Archive.index');
    Route::post('Deletearchive', [ArchiveController::class,'Delete'])->name('DeleteArchive');
   
    //Route Delete From Archive
    Route::post('DeleteFormArchive', [ArchiveController::class,'DeleteArchive'])->name('FromArchiveDelete');
    //End Route Delete From Archive

    // Start Route Recuperation
    Route::resource('recuperations', RecuperationController::class);
    Route::get('Create/recuperations', [RecuperationController::class,'create1'])->name('Form1');
    Route::post('recuperations', [RecuperationController::class,'store1'])->name('store1');
    Route::get('recuperations/Show1/{recuperation}', [RecuperationController::class,'show1'])->name('show1');

    Route::post('recuperations2/{id}', [RecuperationController::class,'store2'])->name('store2');
    Route::get('recuperations/Show2/{recuperation}', [RecuperationController::class,'show2'])->name('show2');
    Route::post('recuperations3/{id}', [RecuperationController::class,'store3'])->name('store3');

    Route::get('recuperations/Show3/{recuperation}', [RecuperationController::class,'show3'])->name('show3');

    Route::post('recuperations4/{id}', [RecuperationController::class,'store4'])->name('store4');
    //Update Form 1 Recuperation
    Route::post('recuperations/Update1/{id}', [RecuperationController::class,'UpdateForm1'])->name('RecuperationUpdate1');
    Route::post('recuperations/Update2/{id}', [RecuperationController::class,'UpdateForm2'])->name('RecuperationUpdate2');

    //End Route Recuperation


    //Start Routes Assurances
    Route::resource('assurances', AssuranceController::class);
    Route::post('assuranceForm1', [AssuranceController::class,'store1'])->name('assuranceForm1');
    Route::post('assuranceUpdate/{id}', [AssuranceController::class,'assuranceUpdate'])->name('assuranceUpdate');

    Route::get('assuranceshow1/{assurance}', [AssuranceController::class,'show1'])->name('show1');
    Route::post('store2/{id}', [AssuranceController::class,'store2'])->name('store2');
    Route::get('Succes_Assurance/{id}',[AssuranceController::class,'Succes_Assurance'])->name('Succes_Assurance');
    Route::get('RoutageDossier/{id}',[AssuranceController::class,'RoutageDossier'])->name('RoutageDossier');
    Route::post('storeRoutageDossier',[AssuranceController::class,'storeRoutageDossier'])->name('storeRoutageDossier');

    
    //End Routes Assurances
    //Start Routes Assurances
    Route::resource('RendezVous', RendezVousController::class);
    Route::get('Succes_RendezVous',[RendezVousController::class,'Succes_RendezVous'])->name('Succes_RendezVous');
    Route::post('DeleteRendezVous',[RendezVousController::class,'delete'])->name('DeleteRendezVous');

    //End Routes Assurances

    //Start Routes AnnuaireTelephonique
    Route::resource('AnnuaireTelephonique', AnnuaireTelephoniqueController::class);
    Route::get('Succes_AnnuaireTelephonique',[AnnuaireTelephoniqueController::class,'Succes_AnnuaireTelephonique'])->name('Succes_AnnuaireTelephonique');
    Route::post('DeleteAnnuaireTelephonique',[AnnuaireTelephoniqueController::class,'delete'])->name('DeleteAnnuaireTelephonique');

    //End Routes AnnuaireTelephonique


//Update Seance and Attachment
Route::post('Upseanse', [RemarqueController::class,'Updateseanse'])->name('Upseanse');
Route::post('Updateatt',[RemarqueController::class,'Updateatt'])->name('Updateatt');
Route::post('deleteSeance',[RemarqueController::class,'deleteSeance'])->name('deleteSeance');
Route::post('deleteAtt',[RemarqueController::class,'deleteAtt'])->name('deleteAtt');




//Ajax request
Route::get('get-ville',[DossierController::class,'villeSelect'])->name('get-ville');
Route::get('get-users',[AjaxController::class,'getUsers'])->name('get-users');
Route::get('get-seans',[AjaxController::class,'getSeans'])->name('get-seans');
Route::get('find-seans',[AjaxController::class,'findSeans'])->name('find-seans');
Route::get('find-att',[AjaxController::class,'findAtt'])->name('find-att');
Route::get('fetch-att',[AjaxController::class,'fetchAtt'])->name('fetch-att');
Route::get('switch-status',[AjaxController::class,'switchStatus'])->name('switch-status');
Route::get('switchStatusProcedure',[AjaxController::class,'switchStatusProcedure'])->name('switch-status-Pro');
Route::get('find-procedure',[AjaxController::class,'findProcedure'])->name('find-procedure');
Route::get('FindUsersFormReport',[AjaxController::class,'FindUsersFormReport'])->name('get-usersFormReport');
Route::get('switchStatusReport',[AjaxController::class,'switchStatusReport'])->name('switch-status-Report');
Route::get('switchStatusImp',[AjaxController::class,'switchStatusImp'])->name('switch-status-Imp');
Route::get('switchStatusItemImp',[AjaxController::class,'switchStatusItemImp'])->name('switch-status-Item-Imp');
Route::get('switchStatusItemRep',[AjaxController::class,'switchStatusItemRep'])->name('switch-status-Item-Rep');
Route::get('GetUsersDoc',[AjaxController::class,'GetUsersDoc'])->name('get-users_Doc');


//Update DossierController
Route::post('UpdateForm1/{id}', [DossiersController::class,'UpdateForm1'])->name('UpdateForm1');
Route::get('primary/{id}', [DossiersController::class,'Createprimary'])->name('primary');
Route::get('apel/{id}', [DossiersController::class,'Createapel'])->name('apel');
Route::get('cas/{id}', [DossiersController::class,'Createcas'])->name('cas');
Route::get('observation', [DossiersController::class,'Updateobservation'])->name('observation');


// Update Form 1 Reclamations Diverses
Route::get('UpdateReclamationsDiverses/{id}', [DossiersController::class,'UpdateReclamationsDiverses'])->name('UpdateReclamationsDiverses');
//In Page Plus Update Form1 Reclamations Diverses
Route::post('UpdateReclamationsDiversesForm1/{id}', [DossiersController::class,'UpdateReclamationsDiversesForm1'])->name('UpdateReclamationsDiversesForm1');
// In the Form 2 Update Reclamations Diverses
Route::post('UpdateReclamationsDiversesPrimary/{id}', [DossiersController::class,'UpdateReclamationsDiversesPrimary'])->name('UpdateReclamationsDiversesPrimary');
Route::post('UpdateReclamationsDiversesApel/{id}', [DossiersController::class,'UpdateReclamationsDiversesApel'])->name('UpdateReclamationsDiversesApel');
Route::post('UpdateReclamationsDiversesCas/{id}', [DossiersController::class,'UpdateReclamationsDiversesCas'])->name('UpdateReclamationsDiversesCas');
Route::post('UpdateReclamationsDiversesObservation/{id}', [DossiersController::class,'UpdateReclamationsDiversesObservation'])->name('UpdateReclamationsDiversesObservation');



//Start Page succes
Route::get('Succes Dossier', [DossiersController::class,'Succes_Dossier'])->name('Succes_Dossier');
//End  Page succes

Route::get('/plus/{id}',[DossiersController::class,'PlusDoc'])->name('plus');
Route::get('DossiersProcedure', [DossiersController::class,'DossiersProcedure'])->name('all_doc');
Route::post('add_att', [RemarqueController::class,'AddAttachement'])->name('AddAttachement');
Route::post('updatePro', [ProcedureController::class,'UpdateProcedure'])->name('updatePro');
Route::post('DeletePro', [ProcedureController::class,'DeletePro'])->name('procedure_delete');



});

Route::get('lang/{locale}', function ($locale) {
    session(['locale' => $locale]);
    return redirect()->back();
})->name('lang.switch');

require __DIR__.'/auth.php';
