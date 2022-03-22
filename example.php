<?php

require 'vendor/autoload.php';

use Sanotsroger\SearchZipcode\Search;

$search = new Search();

print_r($search->getAdressbyZipcode('01001000'));
