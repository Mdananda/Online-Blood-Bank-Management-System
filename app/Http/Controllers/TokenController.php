<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Token;

class TokenController extends Controller
{
    public function addToken(Request $req){

    $token = new Token;
        $token->TokenNumber=$req->Token_Number;
        $token->Amount=$req->Amount;
        $token->save();
        
    return redirect()->back()->with('success','Successfully Create A Token');
    }
}
