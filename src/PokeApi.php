<?php
namespace Pokeapi;

use GuzzleHttp\Client;
use GuzzleHttp\Psr7;
use GuzzleHttp\Exception\ClientException;

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
        
        $response = null;
        
        try
        {
            $response = $client->request('GET', $endpoint);
        }
        catch (ClientException $e)
        {
            if ($e->hasResponse())
            {
                $response = $e->getResponse();
            }
        }

        return $response;

    }
}
