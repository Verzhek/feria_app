<?php

namespace App\Http\Controllers;

use App\Models\Stand;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class StandsController extends Controller
{

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        $result = [];
        $stands = Stand::with("users","visits")->paginate(1);
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

        return view("admin_eyes_only.stands", compact("stands"));
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
        $stand = new Stand;

        $stand->nombre = $stand->nombre;

        return redirect()->action([StandController::class, 'index']);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        return view("admin_eyes_only.stands" . ["stands"::findOrFail($id)]);
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
    public function destroy($id)
    {
        DB::table('stands')->where('id', '=', $id)->delete();
        return redirect()->action([StandsController::class, 'index']);
    }
}
