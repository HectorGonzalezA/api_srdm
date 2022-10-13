<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;



class SrdmController extends Controller
{
    public function getResumenGestante(Request $request, $rut){
    
        if ($request->isJson()) {
            $token = $request->header('Authorization');

            $curl = curl_init();

            curl_setopt_array($curl, array(
                CURLOPT_URL => "http://localhost/srdm/api/getResumenesGestante/$rut",
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
          
    }

    public function getResumenNino(Request $request, $rut){
        
        if ($request->isJson()) {
            $token = $request->header('Authorization');

            $curl = curl_init();

            curl_setopt_array($curl, array(
                CURLOPT_URL => "http://localhost/srdm/api/getResumenesNino/$rut",
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
          
    }

    public function insertLogData(Request $request){
       
        if ($request->isJson()) {
            $token = $request->header('Authorization');

            $curl = curl_init();

            curl_setopt_array($curl, array(
                CURLOPT_URL => "http://localhost/srdm/api/import/data",
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

}