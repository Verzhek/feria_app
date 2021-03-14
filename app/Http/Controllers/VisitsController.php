<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Visit;
use Illuminate\Support\Facades\DB;

class VisitsController extends Controller
{
  /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        $result = [];
        $visits = Visit::with("stand","user")->paginate(10);
      /*  foreach($stands as $stand){
           $line="Stand ".$stand->nombre." con id:".$stand->id;
           if(count($stand[1])==count($stand[2])){
                for($i=0;$i<count($stand[1]);$i++){
                    $new_line=$line;
                    $new_line.=" fue visitado por ".$stand[1][$i][2]." en ".$stand[2][$i][2];
                    array_push($result,$new_line);
                }
           }
        }*/

        return view("admin_eyes_only.visits", compact("visits"));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        return view("admin_eyes_only.visits" . ["visits"::findOrFail($id)]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($ind)
    {
        $cont=explode("=",$ind);
        $stand_id=$cont[0];
        $user_id=$cont[1];
        $visit_time=$cont[2];
        DB::table('visits')
            ->where('stand_id', '=',$stand_id)
            ->where("user_id","=",$user_id)
            ->where("visit_time","=",$visit_time)
            ->delete();

        return redirect()->action([StandsController::class, 'index']);
    }

}
