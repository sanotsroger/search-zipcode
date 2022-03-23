<?php

use PHPUnit\Framework\TestCase;
use SanotsRoger\SearchZipcode\Search;

class SearchTest extends TestCase
{
    /**
     * @dataProvider adressTestCase
     */
    public function testGetAdressByZipcode(string $zipcode, array $adress_expected)
    {
        $search = new Search();
        $adress = $search->getAdressByZipcode($zipcode);
        $this->assertEquals($adress_expected, $adress);
    }

    public function adressTestCase()
    {
        return [
            'Endereço Pradópolis' => [
                '14850-000',
                [
                    'cep' => '14850-000',
                    'logradouro' => '',
                    'complemento' => '',
                    'bairro' => '',
                    'localidade' => 'Pradópolis',
                    'uf' => 'SP',
                    'ibge' => '3540903',
                    'gia' => '5575',
                    'ddd' => '16',
                    'siafi' => '6919',
                ],
            ],
            'Endereço Praça da Sé' => [
                '01001-000',
                [
                    'cep' => '01001-000',
                    'logradouro' => 'Praça da Sé',
                    'complemento' => 'lado ímpar',
                    'bairro' => 'Sé',
                    'localidade' => 'São Paulo',
                    'uf' => 'SP',
                    'ibge' => '3550308',
                    'gia' => '1004',
                    'ddd' => '11',
                    'siafi' => '7107',
                ],
            ],
        ];
    }
}
