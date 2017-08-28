<?php

namespace ArvPayoneApi\Mocks\Request\Invoice;

use ArvPayoneApi\Mocks\Request\DataAbstract;
use ArvPayoneApi\Mocks\Request\RequestContract;

/**
 * Class PreauthorizationData
 */
class PreauthorizationData extends DataAbstract implements RequestContract
{
    /**
     * @return array
     */
    public function getRequestData()
    {
        return [
            'request' => 'preauthorization', // create account receivable
            'clearingtype' => 'rec',
            'reference' => uniqid(), // a unique reference, e.g. order number
            'amount' => 10000, // amount in smallest currency unit, i.e. cents
            'currency' => 'EUR',
        ];
    }
}