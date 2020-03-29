<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Validator;
class FranchiseModelController extends Controller
{
    //
    public function index(){
        return view('franchise.add');
    }
    public function create(Request $request){
        $data = $request->all();
        $validator = Validator::make(
            ['name' => 'required']
         
        );  
        if ($validator->fails())
        {
          echo "fail";
        }
        // dd($data);
                return 0;
    }
}
