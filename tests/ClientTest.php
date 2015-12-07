<?php
use Pokeapi\Client;

class ClientTest extends \PHPUnit_Framework_TestCase
{
    public function testPokedex()
    {
        $client = new Client();
        $pokedex = $client->get('pokedex');
        $this->assertEquals($pokedex->body->objects[0]->name, 'national');
    }

    public function testPokemon()
    {
        $client = new Client();
        $pokemon = $client->get('pokemon', 1);
        $this->assertEquals($pokemon->body->name, 'Bulbasaur');
    }

    public function testType()
    {
        $client = new Client();
        $type = $client->get('type', 1);
        $this->assertEquals($type->body->name, 'Normal');
    }
}