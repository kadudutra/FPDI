<?php

namespace kadudutra\Fpdi\unit\Tfpdf;

use kadudutra\Fpdi\Tfpdf\Fpdi;
use kadudutra\Fpdi\unit\FpdiTraitTest;

class FpdiTest extends FpdiTraitTest
{
    public function getInstance()
    {
        return new Fpdi();
    }
}
