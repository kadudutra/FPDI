<?php
/**
 * This file is part of FPDI
 *
 * @package   kadudutra\Fpdi
 * @copyright Copyright (c) 2020 Setasign GmbH & Co. KG (https://www.setasign.com)
 * @license   http://opensource.org/licenses/mit-license The MIT License
 */

namespace kadudutra\Fpdi\PdfParser\Filter;

/**
 * Exception for LZW filter class
 *
 * @package kadudutra\Fpdi\PdfParser\Filter
 */
class LzwException extends FilterException
{
    /**
     * @var integer
     */
    const LZW_FLAVOUR_NOT_SUPPORTED = 0x0501;
}
