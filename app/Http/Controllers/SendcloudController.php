<?php

namespace App\Http\Controllers;

use GuzzleHttp\Client;
use Illuminate\Http\Request;
use Illuminate\Pagination\Paginator;

class SendcloudController extends Controller
{
    protected $client;

    public function __construct()
    {
        $this->client = new Client([
            'base_uri' => 'https://panel.sendcloud.sc/api/v2/',
        ]);
    }

    public function getParcel(Request $request)
    {
        // Envoie de la requête à l'API SendCloud
        $response = $this->client->get('parcels', array_merge([
            'query' => [
                'limit' => $request->query('limit', 10),
                'offset' => $request->query('offset', 0),
            ],
            'auth' => [
                config('services.sendcloud.public_key'),
                config('services.sendcloud.secret_key'),
            ],
            'headers' => [
                'Content-Type' => 'application/json',

            ],
        ]));

        // Vérification du code statut de la réponse
        if ($response->getStatusCode() === 200) {
            $responseData = json_decode($response->getBody(), true);
            $parcels = $responseData['parcels'] ?? [];

            // Pagination
            $page = $request->input('page', 1);
            $perPage = $request->input('per_page', 10);

            $paginator = new Paginator($parcels, $perPage, $page, [
                'path' => route('parcel'),
                'query' => $request->except('page'),
            ]);

            $message = empty($parcels) ? "Aucun colis trouvé." : null;

            return view('parcel', ['parcels' => $paginator, 'message' => $message]);
        }
    }


    public function getAdresses(Request $request)
    {
        // Envoie de la requête à l'API SendCloud
        $response = $this->client->get('user/addresses/sender', array_merge([
            'query' => [
                'limit' => $request->query('limit', 10),
                'offset' => $request->query('offset', 0),
            ],
            'auth' => [
                config('services.sendcloud.public_key'),
                config('services.sendcloud.secret_key'),
            ],
            'headers' => [
                'Content-Type' => 'application/json',
            ],
        ]));

        // Vérification du code statut de la réponse
        if ($response->getStatusCode() === 200) {
            $responseData = json_decode($response->getBody(), true);
            $adresses = $responseData['sender_addresses'] ?? [];

            // Pagination
            $page = $request->input('page', 1);
            $perPage = $request->input('per_page', 10);

            $paginate = new Paginator($adresses, $perPage, $page, [
                'path' => route('adresse'),
                'query' => $request->except('page'),
            ]);

            $message = empty($adresses) ? "Aucune adresse trouvée." : null;

            return view('adresses', ['adresses' => $paginate, 'message' => $message]);
        }
    }



    public function getShipping(Request $request)
    {
        // Envoie de la requête à l'API SendCloud
        $response = $this->client->get('shipping_methods', array_merge([
            'query' => [
                'limit' => $request->query('limit', 10),
                'offset' => $request->query('offset', 0),
            ],
            'auth' => [
                config('services.sendcloud.public_key'),
                config('services.sendcloud.secret_key'),
            ],
            'headers' => [
                'Content-Type' => 'application/json',
            ],
        ]));

        // Vérification du code statut de la réponse
        if ($response->getStatusCode() === 200) {
            $responseData = json_decode($response->getBody(), true);
            $shippings = $responseData['shipping_methods'] ?? [];

            $message = empty($shippings) ? "Pas de donnés." : null;

            // Pagination
            $page = $request->input('page', 1);
            $perPage = $request->input('per_page', 10);

            $paginator = new Paginator($shippings, $perPage, $page, [
                'path' => route('shipping'),
                'query' => $request->except('page'),
            ]);

            return view('shipping_methods', ['shippings' => $paginator, 'message' => $message]);
        }
    }
}
