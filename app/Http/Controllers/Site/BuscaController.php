<?php

namespace App\Http\Controllers\Site;


use GuzzleHttp\Client;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class BuscaController extends Controller
{
    public function Busca(Request $request)
    {
        $client = new Client();
        $response = $client->request('GET', 'https://maps.googleapis.com/maps/api/geocode/json?address=' . $request->cidade . $request->endereco . '&key=AIzaSyA3Zx3jQUscuIh77m-0xmAneFX3qCu6IN4');
        $body = $response->getBody();
        $content = $body->getContents();
        $array = json_decode($content, TRUE);
        if ($array['status'] == 'OK') {
            $map = collect($array['results'][0]['geometry']['location'])->all();
            return view('site.index', compact('map'));
        }
        return redirect()->back()->with('zero_results', 'Não foi possível localizar');
    }
}
