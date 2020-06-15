<?php
/**
 * This file is part of FPDI
 *
 * @package   kadudutra\Fpdi
 * @copyright Copyright (c) 2020 Setasign GmbH & Co. KG (https://www.setasign.com)
 * @license   http://opensource.org/licenses/mit-license The MIT License
 */

namespace kadudutra\Fpdi\Tfpdf;

use kadudutra\Fpdi\FpdfTplTrait;

/**
 * Class FpdfTpl
 *
 * We need to change some access levels and implement the setPageFormat() method to bring back compatibility to tFPDF.
 *
 * @package kadudutra\Fpdi\Tfpdf
 */
class FpdfTpl extends \tFPDF
{
    use FpdfTplTrait;
}
