<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Mail\pruebavisor;

class MailController extends Controller
{
   public function send(){
       $objDemo= new \stdClass();
       $objDemo->demo_one = 'Demo One Value';
       $objDemo->demo_two = 'Demo Two Value';
       $objDemo->sender = 'Equipo Visor 360';
       $objDemo->receiver = 'Usuario visor: Carlos Hoyos';

       Mail::to("emilianohoyos10@hotmail.com")->send(new pruebavisor($objDemo));
   } 
}
