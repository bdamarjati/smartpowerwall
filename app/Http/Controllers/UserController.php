<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use App\Models\User;

class UserController extends Controller
{
    //
    public function getUser(){
        $user = User::select('id','name','email')->get();
        return ['data' => $user];
    }

    public function storeUser(Request $request){
        //
        $data = new User;
        $data->name = $request->name;
        $data->email = $request->email;
        $data->password = Hash::make($request->password);
        $data->save();

        return redirect()->back();
    }

    public function showUser($id){
        $user = User::select('id','name','email')->where('id',$id)->get();
        return response()->json($user[0]);
    }

    public function updateUser(Request $request){
        //
        $id = $request->get('id');
        $name = $request->get('name');
        $email = $request->get('email');

        $data = User::where('id',$id)->update(array(
        'name' => $name,
        'email' => $email
        ));

        return redirect()->back();
    }

    public function delete($id){
		$data = User::findorfail($id);
		$data->delete();
	}
}
