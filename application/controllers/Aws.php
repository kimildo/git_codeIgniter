<?php
    /**
     * Created by PhpStorm.
     * User: Kimildo
     * Date: 2017-02-07
     * Time: 오후 7:25
     */

    if ( ! defined('BASEPATH')) exit('No direct script access allowed');

    require 'vendor/autoload.php';

    use Aws\Sqs\SqsClient;
    use Aws\Exception\AwsException;
    use Aws\S3\Exception\S3Exception;

    class Aws extends CI_Controller
    {
        function Aws()
        {
            parent::__construct();

        }

        function index()
        {
            $sdk = new Aws\Sdk(['profile' => 'my_profile', 'region' => 'us-east-1', 'version' => 'latest', 'DynamoDb' => ['region' => 'us-west-2',],]);
            $sqs = $sdk->createSqs();
            echo "<pre>";
            var_dump($sqs);
            echo "</pre>";
        }
    }