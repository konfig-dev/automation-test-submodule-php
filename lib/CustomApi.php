<?php

namespace AutomationTestWithSubmodules;

class CustomApi
{

    public function beforeSendHook(
        \GuzzleHttp\Psr7\Request &$request,
        \AutomationTestWithSubmodules\RequestOptions $requestOptions,
        \AutomationTestWithSubmodules\Configuration $configuration,
        $body = null
    ) {
    }

    public function beforeCreateRequestHook(
        string &$method,
        string &$resourcePath,
        array &$queryParams,
        array &$headers,
        &$httpBody
    ) {
    }
}
