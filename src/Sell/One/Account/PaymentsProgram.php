<?php

namespace Ebay\Sell\One\Account;

use Ebay\Sell\Base\Account\PaymentsProgram as Request;
use Laravie\Codex\Contracts\Response;

class PaymentsProgram extends Request
{
    public function get(string $marketplaceId, string $paymentProgramType): Response
    { /** */
    }
    public function getOnboarding(string $marketplaceId, string $paymentProgramType): Response
    { /** */
    }
}