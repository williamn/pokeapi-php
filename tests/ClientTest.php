<?php
use Pokeapi\Client;

class ClientTest extends \PHPUnit_Framework_TestCase
{
    /**
    * @vcr pokedex.json
    */
    public function testPokedex()
    {
        $client = new Client();
        $pokedex = $client->get('pokedex', 'national');
        $body = json_decode($pokedex->getBody()->getContents());
        $this->assertEquals($body->name, 'national');
    }

    /**
    * @vcr pokemon.json
    */
    public function testPokemon()
    {
        $client = new Client();
        $pokemon = $client->get('pokemon', 1);
        $body = json_decode($pokemon->getBody()->getContents());
        $this->assertEquals($body->name, 'bulbasaur');
    }

    /**
    * @vcr type.json
    */
    public function testType()
    {
        $client = new Client();
        $type = $client->get('type', 1);
        $body = json_decode($type->getBody()->getContents());
        $this->assertEquals($body->name, 'normal');
    }
}