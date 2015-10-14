<?php

require __DIR__ . '/vendor/autoload.php';

$client = new \Phpoaipmh\Client('http://www.doaj.org/oai.article');
$harvester = new \Phpoaipmh\Endpoint($client);

//print_r($harvester->listMetadataFormats());

$records = $harvester->listRecords('oai_dc');

foreach($records as $rec) {
    print_r($rec);
}

?>
