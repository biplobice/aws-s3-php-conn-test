# AWS S3 Connection Test By AWS SDK

A simple PHP application to check s3 connection test using aws php sdk.

## Basic Configuration

You need to set up your AWS security credentials before the sample code is able
to connect to AWS. You can do this by changing and saving the following lines in the file index.php:

	'key'     => 'YOUR-AWS-KEY',
	'secret'  => 'YOUR-AWS-SECRET-CODE',
	'region'  => 'YOUR-REGION',
	'version' => 'latest',  // you may use latest if you don't know your s3 version

See the [Security Credentials](http://aws.amazon.com/security-credentials) page
for more information on getting your keys. You can also set your credentials in
a couple of other ways. See the [AWS SDK for PHP documentation](http://docs.aws.amazon.com/aws-sdk-php/v3/guide/guide/credentials.html)
for more information.

## Running the S3 connection test

If you are using IAM security credentials, the user account must have the Full S3 Access policy attached.
Also there is a sample-policy.json file available on this git.

So all you need to do is run the
code:

    php index.php

The S3 documentation has a good overview of the [restrictions for bucket names](http://docs.aws.amazon.com/AmazonS3/latest/dev/BucketRestrictions.html)
for when you start making your own buckets.


## Screenshots
![Screen1](https://raw.githubusercontent.com/biplobice/aws-s3-php-conn-test/master/screenshots/screen-1.png)