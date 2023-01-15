<?php
namespace Maree\Whatsapp;

use Illuminate\Support\Facades\Http;

class Whatsapp {

    public static function sendTextMessage($to_phone = '',$message=''){
        $data = [
          'messaging_product' => 'whatsapp',
          'to'                => $to_phone,
          'type'              => 'Text',
          'text'              => json_encode(['body' => $message]);
        ];

        $url = 'https://graph.facebook.com/v15.0/'.config('whatsapp.phone_number_id').'/messages';
        $response = Http::withHeaders([
            'Accept'        => 'application/json',
            'Content-Type'  => 'application/json',
            'Authorization' => 'Bearer ' . config('whatsapp.access_token')
        ])->post($url, $data);

        $responseResult = json_decode($response->getBody()->getContents(), true);
        return json_encode($responseResult);
    }


}