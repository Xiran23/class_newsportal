<?php



namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;



class usercontroller extends Controller
{
    //
    public function Demo(Request $request)
    {

        <!-- dd($request); -->
        $validator = validator::make($request->all(),[
            'name'=> "required|string|max:255",
            'branch_id'=>'required|exists:branches,id'
            'email'=>'required|email|max:255|unique:users",
            'password'=>'required|string|min:8|confirm'
            ])
    }
}