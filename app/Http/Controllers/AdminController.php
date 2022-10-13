<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Str;
use Throwable;

class AdminController extends Controller
{
    public function getTokenUsers(Request $request){
    
        try {
            if ($request->isJson()) {
                $token = $request->header('Authorization');

                $curl = curl_init();

                curl_setopt_array($curl, array(
                    CURLOPT_URL => "http://localhost/srdm/api/users/auth",
                    CURLOPT_RETURNTRANSFER => true,
                    CURLOPT_ENCODING => "",
                    CURLOPT_MAXREDIRS => 10,
                    CURLOPT_TIMEOUT => 0,
                    CURLOPT_FOLLOWLOCATION => true,
                    CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
                    CURLOPT_CUSTOMREQUEST => "POST",
                    CURLOPT_POSTFIELDS => $request->getContent(),
                    CURLOPT_HTTPHEADER => array(
                    "Content-Type: application/json",
                    "Authorization: $token",
                    
                ),
                ));
                
                $response = curl_exec($curl);
                
                return $response;

                curl_close($curl);
            }
            return response()->json([
                'state' => false, 
                'message' => 'Debe enviar Content-Type tipo Json'
            ], 401);
        } catch (Throwable $th) {
            dd($th);
        }
       /*  if ($request->isJson()) {
            $user = User::where('client_id', $request->client_id)->first();

            if (!is_null($user) && Hash::check($request->secret_id, $user->secret_id)) {
                return response()->json([
                    'state' => true,
                    'token' => $user->api_token,
                ], 200);
            }else{
                return response()->json([
                    'state' => false,
                    'message' => 'Datos incorrectos'
                ], 401);
            }
        }
        return response()->json([
            'state' => false, 
            'message' => 'Debe enviar Content-Type tipo Json'
        ], 401); */
    }

    public function showUsers(Request $request){
        
        try
        {
            if ($request->isJson()) {
                $token = $request->header('Authorization');

                $curl = curl_init();

                curl_setopt_array($curl, array(
                    CURLOPT_URL => "http://localhost/srdm/api/showUsers",
                    CURLOPT_RETURNTRANSFER => true,
                    CURLOPT_ENCODING => "",
                    CURLOPT_MAXREDIRS => 10,
                    CURLOPT_TIMEOUT => 0,
                    CURLOPT_FOLLOWLOCATION => true,
                    CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
                    CURLOPT_CUSTOMREQUEST => "GET",
                    CURLOPT_HTTPHEADER => array(
                    "Content-Type: application/json",
                    "Authorization: $token",
                    
                ),
                ));
                
                $response = curl_exec($curl);
                
                return $response;

                curl_close($curl);
            }
            return response()->json([
                'state' => false, 
                'message' => 'Debe enviar Content-Type tipo Json'
            ], 401);
        }catch (Throwable $t)
        {
            dd($t);
        }    

    }

    public function createUsers(Request $request){
        
        try
        { 
            if ($request->isJson()) {
                $token = $request->header('Authorization');

                $curl = curl_init();

                curl_setopt_array($curl, array(
                    CURLOPT_URL => "http://localhost/srdm/api/createUsers",
                    CURLOPT_RETURNTRANSFER => true,
                    CURLOPT_ENCODING => "",
                    CURLOPT_MAXREDIRS => 10,
                    CURLOPT_TIMEOUT => 0,
                    CURLOPT_FOLLOWLOCATION => true,
                    CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
                    CURLOPT_CUSTOMREQUEST => "POST",
                    CURLOPT_POSTFIELDS => $request->getContent(),
                    CURLOPT_HTTPHEADER => array(
                    "Content-Type: application/json",
                    "Authorization: $token",
                    
                ),
                ));
                
                $response = curl_exec($curl);
                
                return $response;

                curl_close($curl);
            }
            return response()->json([
                'state' => false, 
                'message' => 'Debe enviar Content-Type tipo Json'
            ], 401);
        }
        catch (Throwable $t)
        {
            dd($t);
        }     
    }

    public function getTokenClients(Request $request){
    
        try {
            if ($request->isJson()) {
                $token = $request->header('Authorization');

                $curl = curl_init();

                curl_setopt_array($curl, array(
                    CURLOPT_URL => "http://localhost/srdm/api/clients/auth",
                    CURLOPT_RETURNTRANSFER => true,
                    CURLOPT_ENCODING => "",
                    CURLOPT_MAXREDIRS => 10,
                    CURLOPT_TIMEOUT => 0,
                    CURLOPT_FOLLOWLOCATION => true,
                    CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
                    CURLOPT_CUSTOMREQUEST => "POST",
                    CURLOPT_POSTFIELDS => $request->getContent(),
                    CURLOPT_HTTPHEADER => array(
                    "Content-Type: application/json",
                    "Authorization: $token",
                    
                ),
                ));
                
                $response = curl_exec($curl);
                
                return $response;

                curl_close($curl);
            }
            return response()->json([
                'state' => false, 
                'message' => 'Debe enviar Content-Type tipo Json'
            ], 401);
        } catch (Throwable $th) {
            dd($th);
        }
       /*  if ($request->isJson()) {
            $user = User::where('client_id', $request->client_id)->first();

            if (!is_null($user) && Hash::check($request->secret_id, $user->secret_id)) {
                return response()->json([
                    'state' => true,
                    'token' => $user->api_token,
                ], 200);
            }else{
                return response()->json([
                    'state' => false,
                    'message' => 'Datos incorrectos'
                ], 401);
            }
        }
        return response()->json([
            'state' => false, 
            'message' => 'Debe enviar Content-Type tipo Json'
        ], 401); */
    }

    public function showClients(Request $request){

        try{
            if ($request->isJson()) {
                $token = $request->header('Authorization');

                $curl = curl_init();

                curl_setopt_array($curl, array(
                    CURLOPT_URL => "http://localhost/srdm/api/showClients",
                    CURLOPT_RETURNTRANSFER => true,
                    CURLOPT_ENCODING => "",
                    CURLOPT_MAXREDIRS => 10,
                    CURLOPT_TIMEOUT => 0,
                    CURLOPT_FOLLOWLOCATION => true,
                    CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
                    CURLOPT_CUSTOMREQUEST => "GET",
                    CURLOPT_HTTPHEADER => array(
                    "Content-Type: application/json",
                    "Authorization: $token",
                    
                ),
                ));
                
                $response = curl_exec($curl);
                
                return $response;

                curl_close($curl);
            }
            return response()->json([
                'state' => false, 
                'message' => 'Debe enviar Content-Type tipo Json'
            ], 401);
        }catch (Throwable $t)
        {
            dd($t);
        }    

    }

    public function createClients(Request $request){
        
        try
        { 
            if ($request->isJson()) {
                $token = $request->header('Authorization');

                $curl = curl_init();

                curl_setopt_array($curl, array(
                    CURLOPT_URL => "http://localhost/srdm/api/createClients",
                    CURLOPT_RETURNTRANSFER => true,
                    CURLOPT_ENCODING => "",
                    CURLOPT_MAXREDIRS => 10,
                    CURLOPT_TIMEOUT => 0,
                    CURLOPT_FOLLOWLOCATION => true,
                    CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
                    CURLOPT_CUSTOMREQUEST => "POST",
                    CURLOPT_POSTFIELDS => $request->getContent(),
                    CURLOPT_HTTPHEADER => array(
                    "Content-Type: application/json",
                    "Authorization: $token",
                    
                ),
                ));
                
                $response = curl_exec($curl);
                
                return $response;

                curl_close($curl);
            }
            return response()->json([
                'state' => false, 
                'message' => 'Debe enviar Content-Type tipo Json'
            ], 401);
        }
        catch (Throwable $t)
        {
            dd($t);
        }     
    }

}
