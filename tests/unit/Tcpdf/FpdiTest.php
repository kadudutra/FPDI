<?php

namespace kadudutra\Fpdi\unit\Tcpdf;

use kadudutra\Fpdi\Tcpdf\Fpdi;
use kadudutra\Fpdi\unit\FpdiTraitTest;

class FpdiTest extends FpdiTraitTest
{
    public function getInstance()
    {
        return new Fpdi();
    }
}
