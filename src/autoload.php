<?php
/**
 * This file is part of FPDI
 *
 * @package   kadudutra\Fpdi
 * @copyright Copyright (c) 2020 Setasign GmbH & Co. KG (https://www.setasign.com)
 * @license   http://opensource.org/licenses/mit-license The MIT License
 */

spl_autoload_register(function ($class) {
    if (strpos($class, 'kadudutra\Fpdi\\') === 0) {
        $filename = str_replace('\\', DIRECTORY_SEPARATOR, substr($class, 14)) . '.php';
        $fullpath = __DIR__ . DIRECTORY_SEPARATOR . $filename;

        if (file_exists($fullpath)) {
            /** @noinspection PhpIncludeInspection */
            require_once $fullpath;
        }
    }
});
