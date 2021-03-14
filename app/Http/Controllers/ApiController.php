<?php
namespace App\Http\Controllers;

use App\Http\Resources\VistaResource;
use App\Models\Visit;
use App\Models\User;
use Illuminate\Http\Request;
use App\Models\Stand;
use App\Http\Controllers\UsersController;
use App\Http\Controllers\VisitsController;
use App\Http\Controllers\StandsController;
class ApiController extends Controller
{
    public function api_add_visit(Request $request)
    {
        $visit = new Visit;
        $visit->user_id = $request->user_id;
        $visit->stand_id = $request->stand_id;
        $visit->visit_time = $request->visit_time;
        $visit->save();

        //En lugar de devolver una vista, devuelvo si se ha realizado la acción
        return response(['producto' => new VistaResource($visit),
                             'message' => 'Created successfully'], 201);
    }
    public function api_delete_visit(Visit $visit)
    {
                $this->authorize('delete', $visit);
                $visit->delete();
                return response(['message' => 'Deleted successfully'], 201);

    }



}
