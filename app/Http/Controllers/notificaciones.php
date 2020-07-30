<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Flash;
use App\Models\T_evento;

class notificaciones extends Controller
{
   public function notificarEvento(Request $r){

    $evento = T_evento::find($r->evento);
   // dd($evento->nombre_conferencista);
                // $fields['include_player_ids'] = ['xxxxxxxx-xxxx-xxx-xxxx-yyyyyyyyy'];
                $fields['included_segments'] = ["Active Users", "Inactive Users"];
                $fields['data'] = array(
                    "ruta" => "show-event/".$evento->id
                );
                $fields['headings'] = array(
                    "en" => $evento->nombre_conferencista
                );
                $fields['contents'] = array(
                                 "en" => $evento->nombre_evento." esta iniciando"
                             );
                \OneSignal::sendPush($fields);
                Flash::success('Desplegando notificaciones');
                return redirect()->back();
    }
}
