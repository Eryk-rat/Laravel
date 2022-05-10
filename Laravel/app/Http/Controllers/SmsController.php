<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Notifications\Vonage;
use Illuminate\Support\Facades\Auth;

class SmsController extends Controller
{
    
    private $test;
    public function index ()
    {   
        setcookie('test',($test = substr(md5(uniqid(rand(), true)), 0, 6)));
        echo $test;
       return view('sms\index');
    }
    

    function sms_send($params, $backup = false)
    {
      
        $token = "pGURYWJhYZzEqxpd3dxhrYI29Ks4RzX4HpAMmu4n"; //https://ssl.smsapi.pl/react/oauth/manage

               
    static $content;

    if ($backup == true) {
        $url = 'https://api2.smsapi.pl/sms.do';
    } else {
        $url = 'https://api.smsapi.pl/sms.do';
    }

    $c = curl_init();
    curl_setopt($c, CURLOPT_URL, $url);
    curl_setopt($c, CURLOPT_POST, true);
    curl_setopt($c, CURLOPT_POSTFIELDS, $params);
    curl_setopt($c, CURLOPT_RETURNTRANSFER, true);
    curl_setopt($c, CURLOPT_HTTPHEADER, array(
        "Authorization: Bearer $token"
    ));

    $content = curl_exec($c);
    $http_status = curl_getinfo($c, CURLINFO_HTTP_CODE);

    if ($http_status != 200 && $backup == false) {
        $backup = true;
        sms_send($params, $token, $backup);
    };

    curl_close($c);


       
    }

    

    public function veryfikation(Request $request,){
        $params = array(
            'to' => Auth::user()->tel, //numery odbiorców rozdzielone przecinkami
            'from' => 'Test', //pole nadawcy stworzone w https://ssl.smsapi.pl/sms_settings/sendernames
            'message' => $_COOKIE['test'], //treść wiadomości
            'format' => 'json'
        );
        $veryfikation = $request["veryfikation"];
        $tel=Auth::user()->tel;
      
        sms_send( $params);
        echo $_COOKIE['test'];
        echo $params['to'];
        if($_COOKIE['test'] ===$veryfikation){
        return view('home');
        }else{
            echo "nie ten kod";
            User::destroy(Auth::user()->id);
            return view('welcome');
        };
    }


    function sms(){
    static $content;

    if ($backup == true) {
        $url = 'https://api2.smsapi.pl/sms.do';
    } else {
        $url = 'https://api.smsapi.pl/sms.do';
    }

    $c = curl_init();
    curl_setopt($c, CURLOPT_URL, $url);
    curl_setopt($c, CURLOPT_POST, true);
    curl_setopt($c, CURLOPT_POSTFIELDS, $params);
    curl_setopt($c, CURLOPT_RETURNTRANSFER, true);
    curl_setopt($c, CURLOPT_HTTPHEADER, array(
        "Authorization: Bearer $token"
    ));

    $content = curl_exec($c);
    $http_status = curl_getinfo($c, CURLINFO_HTTP_CODE);

    if ($http_status != 200 && $backup == false) {
        $backup = true;
        sms_send($params, $token, $backup);
    }

    curl_close($c);
    
    return $content;
    }
}






