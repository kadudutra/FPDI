<?php

namespace kadudutra\Fpdi\unit;

use kadudutra\Fpdi\Fpdi;

require_once __DIR__ . '/FpdiTraitTest.php';

class FpdiTest extends FpdiTraitTest
{
    public function getInstance()
    {
        return new Fpdi();
    }
}
