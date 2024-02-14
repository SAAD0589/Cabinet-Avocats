<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Seance;
use App\Models\Dossier;
use App\Models\Procedure;
use App\Models\Attachment;
use App\Models\Report;
use App\Models\Implementation;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class AjaxController extends Controller
{
    public function getUsers(Request $request){
        $type=$request->type_client;
     
        if($type == 'clt1'){
            $user =User::where('type_clt','=' ,'clt1')
            ->where('isDeleted',0)
            ->get();
        //    dd($user->name);
        }else if($type === 'clt2'){
            $user =User::where('type_clt', 'clt2')
            ->where('isDeleted',0)
            ->get();
        }

        return response()->json($user);
    }
    public function getSeans(Request $request){
     
        
            $attachment =Attachment::where('seance_id',$request->attachment)
            ->where('isDeleted', 0)
            ->get();
        //    dd($attachment);
   
        return response()->json($attachment);

    }
    public function findSeans(Request $request){
        $seance=Seance::find($request->seance);
        $dossiers=Dossier::where('reference',$seance->dossier_id)->first();

        $response = [
            'seance' => $seance,
            'dossiers' => $dossiers
        ];
        return response()->json($response);

    }
    public function findAtt(Request $request){
        $attachment=Attachment::find($request->attachment);
        // $seances=Seance::find($attachment->seance_id);

        $response = [
            'attachment' => $attachment,
        ];
        // dd($attachment);
        return response()->json($response);

    }
    public function fetchAtt(Request $request){
        // dd($request->seanceId);
        // $seanceIds=$request->seanceId;
        $seanceIds= DB::table('attachments')
        ->select('attachments.seance_id', DB::raw('count(*) as total'))
        ->groupBy('seance_id')
        ->get();
        // dd($seanceIds);
        return response()->json(['seanceIds' => $seanceIds]);

    }
    public function switchStatus(Request $request){
        $seance=Seance::find($request->seanceid);
        if($seance->status == 'fait'){
            $seance->status = 'populaire';
        }else{
            $seance->status = 'fait';
        }
        $seance->save();

        $response = [
            'seance' => $seance
        ];
        // dd($seance->status);
        return response()->json($response);

       
    }
    public function switchStatusProcedure(Request $request){
        $procedure=Procedure::find($request->procedure);
        if($procedure->status == 'done'){
            $procedure->status = 'not_done';
        }else{
            $procedure->status = 'done';
        }
        $procedure->save();

        $response = [
            'procedure' => $procedure
        ];
        // dd($procedure);
        return response()->json($response);

       
    }
    public function findProcedure(Request $request){
        $procedure=Procedure::find($request->procedure);
        $response = [
            'procedure' => $procedure,
        ];
        // dd($attachment);
        return response()->json($response);
    }
    public function FindUsersFormReport(Request $request){
        $triblinaldossier= DB::table('dossiers')
        ->select('tribunals_dossiers.id','dossiers.reference', 'tribunal_types.type_nom')
        ->join('tribunals_dossiers','dossiers.id','=','tribunals_dossiers.dossier_id')
        ->join('tribunal_types','tribunals_dossiers.type_tribunal','=','tribunal_types.id')
        ->where('dossiers.type_clt',$request->type_client)
        ->get();
        return response()->json($triblinaldossier);
        // dd($triblinaldossier);
    }
    public function switchStatusReport(Request $request){
        // dd('hola');
        $report=Report::find($request->reportSwitch);
        if($report->status == 'done'){
            $report->status = 'not_done';
        }else{
            $report->status = 'done';
        }
        $report->save();

        $response = [
            'report' => $report
        ];
        // dd($report);
        return response()->json($response);

       
    }
    public function switchStatusImp(Request $request){
        // dd('hola');
        $implementation=Implementation::find($request->ImpSwitch);
        if($implementation->status == 'done'){
            $implementation->status = 'not_done';
        }else{
            $implementation->status = 'done';
        }
        $implementation->save();

        $response = [
            'implementation' => $implementation
        ];
        // dd($report);
        return response()->json($response);

       
    }
    public function switchStatusItemImp(Request $request){
        // dd('hola');
        $implementation=Implementation::find($request->itemSwitchImp);
        if($implementation->status == 'done'){
            $implementation->status = 'not_done';
        }else{
            $implementation->status = 'done';
        }
        $implementation->save();

        $response = [
            'implementation' => $implementation
        ];
        // dd($report);
        return response()->json($response);

       
    }
    public function switchStatusItemRep(Request $request){
        // dd('hola');
        $report=Report::find($request->itemSwitchRep);
        if($report->status == 'done'){
            $report->status = 'not_done';
        }else{
            $report->status = 'done';
        }
        $report->save();

        $response = [
            'report' => $report
        ];
        // dd($report);
        return response()->json($response);

       
    }
    public function GetUsersDoc(Request $request){
        $users=User::where('type_clt',$request->type_client)->get();
        return response()->json($users);

    }
}
