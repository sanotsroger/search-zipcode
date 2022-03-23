<?php

namespace SanotsRoger\SearchZipcode;

class Search
{
    public const API_URL = 'https://viacep.com.br/ws';

    public function getAdressByZipcode(string $zipcode): array
    {
        $zipcode_numbers = preg_replace('/[^0-9]/im', '', $zipcode);

        $result = file_get_contents($this::API_URL . '/' . $zipcode_numbers . '/json');

        $adress = json_decode($result, true);

        return $adress;
    }
}
