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
 * Exception for flate filter class
 *
 * @package kadudutra\Fpdi\PdfParser\Filter
 */
class FlateException extends FilterException
{
    /**
     * @var integer
     */
    const NO_ZLIB = 0x0401;

    /**
     * @var integer
     */
    const DECOMPRESS_ERROR = 0x0402;
}
