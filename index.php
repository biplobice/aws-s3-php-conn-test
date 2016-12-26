<?php
echo "<h1>AWS S3 Connection Test </h1>";

require 'vendor/autoload.php';
use Aws\S3\S3Client;

$settings = [
    'key'     => 'YOUR-AWS-KEY',
    'secret'  => 'YOUR-AWS-SECRET-CODE',
    'region'  => 'YOUR-REGION',
	'version' => 'latest',
	'debug'   => true
];
echo "AWS Settings: <pre>" . print_r($settings, true) . "</pre>";


$client = S3Client::factory($settings);

try {
    // Fetch bucket list
    $buckets = $client->listBuckets();

    // Fetch object list in a bucket
//	$result = $client->listObjects([
//		'Bucket' => 'YOUR-BUCKET-NAME'
//	]);

} catch (Aws\S3\Exception\S3Exception $e) {
    echo "<pre>";
    echo $e->getMessage() . "\n";
    echo $e->getTraceAsString();
    echo "</pre>";
    exit();
}

if ($buckets) {
    echo "<h2>Connection Successful.</h2>";
}

echo "<pre>" . print_r($buckets, true) . "</pre>";