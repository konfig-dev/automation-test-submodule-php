<?php

namespace AutomationTestWithSubmodules;

class Client
{
    
    public readonly \AutomationTestWithSubmodules\Api\GreetingsApi $greetings;

    /**
     * Constructor
     */
    public function __construct(
        string $apiKey = null,
        bool $verifySsl = null,
        string $host = 'http://google.com',
        \AutomationTestWithSubmodules\Configuration $config = null
    )
    {
        if ($config == null) {
            $config = new \AutomationTestWithSubmodules\Configuration(
                apiKey: $apiKey,
            );
            if ($host !== null) $config->setHost($host);
            if ($verifySsl !== null) $config->setVerifySsl($verifySsl);
        }
        $this->greetings = new \AutomationTestWithSubmodules\Api\GreetingsApi($config);
    }
}
