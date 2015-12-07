<?php
namespace Pokeapi;

class Client
{
    protected $base_uri;

    function __construct($base_uri = 'http://pokeapi.co/api/v1/')
    {
        $this->base_uri = $base_uri;
    }

    public function get($resource, $id = null)
    {
        $endpoint = $resource;

        if (!empty($id)) {
            $endpoint .= "/{$id}";
        }

        $client = new \GuzzleHttp\Client(['base_uri' => $this->base_uri]);

        $response = $client->request('GET', $endpoint);

        return $response;
    }
}
