<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;


class AddressController extends Controller
{
    public function create(){
        return view('address.create');
    }





    // public function request(Request $request){
    //     $word =$request->postalcode;

    //     $api_key=env('POSTCODE_API_KEY');

    //     $base="https://apis.postcode-jp.com/api/v4/postcodes/";  

    //     $curl =$base.$word;
        

    //     $params =array("apikey"=>$api_key,);
    //     $curl=$curl.'?'.http_build_query($params);
        
    //     dd($curl);
    //     $curl =curl_init();
        

    //     curl_setopt($curl,CURLOPT_CUSTOMREQUEST,'GET');
    //     curl_setopt($curl, CURLOPT_POSTFIELDS, $params);
    //     curl_setopt($curl, CURLOPT_POSTFIELDS, json_encode($curl));
    //     curl_setopt($curl,CURLOPT_SSL_VERIFYPEER,false);
    //     curl_setopt($curl,CURLOPT_RETURNTRANSFER,true);

    //     $response= curl_exec($curl);
      
    //     curl_close($curl);
        
    //     return view('address.index');
    // }
}
