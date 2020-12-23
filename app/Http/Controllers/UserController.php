<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Traits\ApiResponse;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\DB;

Class UserController extends Controller{
    use ApiResponse;

    private $request;
    public function __construct(Request $request)
    {
        $this->request = $request;
    }


// ============== CRUD PART  ============
    public function getUsers()
    {
    $users = User::all();
    return response()->json($users, 200);

}



}
?>
