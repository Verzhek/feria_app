<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\DB;
class UsersController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        $users = User::with("visits","stands")->paginate(1);
        return view("admin_eyes_only.users", compact("users"));
    }
    public function destroy($id)
    {
        DB::table('users')->where('id', '=', $id)->delete();
        return redirect()->action([UsersController::class, 'index']);
    }
}
