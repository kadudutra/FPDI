<?php

namespace kadudutra\Fpdi\visual\Tfpdf;

use kadudutra\Fpdi\Tfpdf\FpdfTpl;

class FpdfTplTest extends \kadudutra\Fpdi\visual\FpdfTplTest
{
    /**
     * Should return __FILE__
     *
     * @return string
     */
    public function getClassFile()
    {
        return __FILE__;
    }

    public function getInstance()
    {
        return new FpdfTpl('P', 'pt');
    }
}
