<?php
namespace Pokeapi;

use GuzzleHttp\Client;
use GuzzleHttp\Psr7\Request;

class PokeApi
{
    protected $base_uri;

    function __construct($base_uri = 'http://pokeapi.co/api/v2/')
    {
        $this->base_uri = $base_uri;
    }

    public function get($resource, $id = null)
    {
        $endpoint = $resource;

        if (!empty($id)) {
            $endpoint .= "/{$id}";
        }

        $client = new Client(['base_uri' => $this->base_uri]);

        $response = $client->request('GET', $endpoint);

        return $response;
    }
}
