<?php
/**
 * This file is part of FPDI
 *
 * @package   kadudutra\Fpdi
 * @copyright Copyright (c) 2020 Setasign GmbH & Co. KG (https://www.setasign.com)
 * @license   http://opensource.org/licenses/mit-license The MIT License
 */

namespace kadudutra\Fpdi;

/**
 * Class FpdfTpl
 *
 * This class adds a templating feature to FPDF.
 *
 * @package kadudutra\Fpdi
 */
class FpdfTpl extends \FPDF
{
    use FpdfTplTrait;
}
