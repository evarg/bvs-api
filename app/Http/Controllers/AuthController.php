<?php

namespace App\Http\Controllers;

use App\Http\Requests\AuthStoreRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Symfony\Component\HttpFoundation\JsonResponse;

class AuthController extends Controller
{

    public function store(AuthStoreRequest $request){
        $credencials = [
            'email' => $request->email,
            'password' => $request->password
        ];

        $isLogin = Auth::attempt($credencials);

        if(!$isLogin){
            return new JsonResponse('Zły login lub hasło', 401);
        }

        return new JsonResponse('Zły login lub hasło', 201);
    }

    public function destroy(Request $request){

    }

}
