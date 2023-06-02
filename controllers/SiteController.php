<?php

namespace app\controllers;

use Yii;
use yii\web\Controller;
use yii\web\Response;
use linslin\yii2\curl;

class SiteController extends Controller
{


    public function actionInvoices($accountNumber = '')
    {   

        //Init curl
        $curl = new curl\Curl();

        $authorization = ["Authorization: Bearer TinkoffOpenApiSandboxSecretToken"];

        $response = $curl->setOption(CURLOPT_HTTPHEADER, $authorization)->get('https://business.tinkoff.ru/openapi/sandbox/api/v3/bank-accounts?accountNumber=' . $accountNumber);
        
        print "<pre>";
        var_dump(json_decode($response, true));
        print "<pre>";


    }

    public function actionTransactions($accountNumber = '')
    {

        $curl = new curl\Curl();

        $authorization = ["Authorization: Bearer TinkoffOpenApiSandboxSecretToken"];

        $response = $curl->setOption(CURLOPT_HTTPHEADER, $authorization)->get('https://business.tinkoff.ru/openapi/sandbox/api/v1/statement?accountNumber=' .$accountNumber. '&from=2021-01-01T14:00:00Z');
        print "<pre>";
        var_dump(json_decode($response, true));
        print "<pre>";
    }


}
