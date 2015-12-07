<?php
namespace Pokeapi;

use Unirest;

class Client
{
    protected $baseURL;

    function __construct($baseURL = 'http://pokeapi.co/api/v1')
    {
        $this->baseURL = $baseURL;
    }

    public function get($resource, $id = null)
    {
        $endpoint = "{$this->baseURL}/{$resource}";

        if (empty($id)) {
            $endpoint .= "/{$id}";
        }

        $response = Unirest\Request::get("{$this->baseURL}/{$resource}/{$id}");

        return $response;
    }
}
