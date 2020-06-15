<?php

namespace kadudutra\Fpdi\unit\PdfParser\Type;

use PHPUnit\Framework\TestCase;
use kadudutra\Fpdi\PdfParser\Type\PdfHexString;
use kadudutra\Fpdi\PdfParser\Type\PdfName;

class PdfHexStringTest extends TestCase
{
    public function testCreate()
    {
        $v = PdfHexString::create('F6F6');
        $this->assertInstanceOf(PdfHexString::class, $v);
        $this->assertSame('F6F6', $v->value);
    }

    /**
     * @expectedException \kadudutra\Fpdi\PdfParser\Type\PdfTypeException
     * @expectedExceptionCode \kadudutra\Fpdi\PdfParser\Type\PdfTypeException::INVALID_DATA_TYPE
     */
    public function testEnsureWithInvlaidArgument1()
    {
        PdfHexString::ensure('test');
    }

    /**
     * @expectedException \kadudutra\Fpdi\PdfParser\Type\PdfTypeException
     * @expectedExceptionCode \kadudutra\Fpdi\PdfParser\Type\PdfTypeException::INVALID_DATA_TYPE
     */
    public function testEnsureWithInvlaidArgument2()
    {
        PdfHexString::ensure(PdfName::create('test'));
    }

    public function testEnsure()
    {
        $a = PdfHexString::create('F6F6F6');
        $b = PdfHexString::ensure($a);
        $this->assertSame($a, $b);
    }
}
