<?php
use Pokeapi\Client;

class ClientTest extends \PHPUnit_Framework_TestCase
{
    /**
    * @vcr pokedex.json
    */
    public function testPokedex()
    {
        $client = new Client('v1');
        $pokedex = $client->get('pokedex', 1);
        $body = json_decode($pokedex->getBody()->getContents());
        $this->assertEquals($body->name, 'national');
    }

    /**
    * @vcr pokemon.json
    */
    public function testPokemon()
    {
        $client = new Client('v1');
        $pokemon = $client->get('pokemon', 1);
        $body = json_decode($pokemon->getBody()->getContents());
        $this->assertEquals(strtolower($body->name), 'bulbasaur');
    }

    /**
    * @vcr type.json
    */
    public function testType()
    {
        $client = new Client('v1');
        $type = $client->get('type', 1);
        $body = json_decode($type->getBody()->getContents());
        $this->assertEquals(strtolower($body->name), 'normal');
    }

    /**
    * @vcr berry.json
    */
    public function testBerry()
    {
        $client = new Client();
        $type = $client->get('berry', 1);
        $body = json_decode($type->getBody()->getContents());
        $this->assertEquals(strtolower($body->name), 'cheri');
    }

    /**
    * @vcr berry-flavor.json
    */
    public function testBerryFlavor()
    {
        $client = new Client();
        $type = $client->get('berry-flavor', 1);
        $body = json_decode($type->getBody()->getContents());
        $this->assertEquals(strtolower($body->name), 'spicy');
    }
}