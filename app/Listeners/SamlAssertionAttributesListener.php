<?php

namespace App\Listeners;

use CodeGreenCreative\SamlIdp\Events\Assertion;
use LightSaml\ClaimTypes;
use LightSaml\Model\Assertion\Attribute;

class SamlAssertionAttributesListener
{
    public function __construct()
    {
    }

    public function handle(Assertion $event): void
    {
        $event->attribute_statement
            ->addAttribute(new Attribute(ClaimTypes::PPID, auth()->user()->uuid))
            ->addAttribute(new Attribute(ClaimTypes::NAME, auth()->user()->name));
    }
}
