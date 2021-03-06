<?php

namespace Ebay\Sell\Base;

use Ebay\Request;
use Ebay\Sell\Traits\SellTrait;

class Account extends Request
{
    use SellTrait;
    
    protected $apiPath = 'account';

    protected $version = 'v1';

    public function fulfillmentPolicy()
    {
        return $this->client->uses('Sell.Account.FulfillmentPolicy', $this->getVersion());
    }

    public function paymentPolicy()
    {
        return $this->client->uses('Sell.Account.PaymentPolicy', $this->getVersion());
    }

    public function returnPolicy()
    {
        return $this->client->uses('Sell.Account.ReturnPolicy', $this->getVersion());
    }

    public function paymentsProgram()
    {
        return $this->client->uses('Sell.Account.PaymentsProgram', $this->getVersion());
    }

    public function privilege()
    {
        return $this->client->uses('Sell.Account.Privilege', $this->getVersion());
    }

    public function program()
    {
        return $this->client->uses('Sell.Account.Program', $this->getVersion());
    }

    public function rateTable()
    {
        return $this->client->uses('Sell.Account.RateTable', $this->getVersion());
    }

    public function salesTax()
    {
        return $this->client->uses('Sell.Account.SalesTax', $this->getVersion());
    }

    public function kyc()
    {
        return $this->client->uses('Sell.Account.KYC', $this->getVersion());
    }
}
