# pokephp-php

[![Build Status](https://travis-ci.org/williamn/pokeapi-php.svg?branch=master)](https://travis-ci.org/williamn/pokeapi-php)

Pokéapi PHP wrapper

## Installation

    $ composer install

## Usage

    require 'vendor/autoload.php';

    use Pokeapi\Client;

    $client = new Client();
    $pokemon = $client->get('pokemon', 1);

## Contributing

1. Fork it!
2. Create your feature branch: `git checkout -b my-new-feature`
3. Commit your changes. Please write good commit messages. Here is [a guide](http://codeinthehole.com/writing/a-useful-template-for-commit-messages/).
4. Push to the branch: `git push origin my-new-feature`
5. Submit a pull request :D

## History

TODO: Write history

## Credits

TODO: Write credits

## License

See LICENSE
