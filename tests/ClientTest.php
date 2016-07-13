<?php
use Pokeapi\PokeApi;

class ClientTest extends \PHPUnit_Framework_TestCase
{
    /**
    * @vcr pokedex.json
    */
    public function testPokedex()
    {
        $client = new PokeApi();
        $pokedex = $client->get('pokedex', 'national');
        $body = json_decode($pokedex->getBody()->getContents());
        $this->assertEquals($body->name, 'national');
    }

    /**
    * @vcr pokemon.json
    */
    public function testPokemon()
    {
        $client = new PokeApi();
        $pokemon = $client->get('pokemon', 1);
        $body = json_decode($pokemon->getBody()->getContents());
        $this->assertEquals($body->name, 'bulbasaur');
    }

    /**
    * @vcr type.json
    */
    public function testType()
    {
        $client = new PokeApi();
        $type = $client->get('type', 1);
        $body = json_decode($type->getBody()->getContents());
        $this->assertEquals($body->name, 'normal');
    }

    /**
     * @vcr 404.json
     */
    public function testError()
    {
        $client = new PokeApi();
        $response = $client->get('pokemon', 999);
        $statusCode = json_decode($response->getStatusCode());
        if ($statusCode == 404)
        {
            echo "400-error test passed!";
        }
        else
        {
            echo "400-error test not passed!";
        }
    }
}