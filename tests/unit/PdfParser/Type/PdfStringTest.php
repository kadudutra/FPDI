<?php

namespace kadudutra\Fpdi\unit\PdfParser\Type;

use PHPUnit\Framework\TestCase;
use kadudutra\Fpdi\PdfParser\Type\PdfName;
use kadudutra\Fpdi\PdfParser\Type\PdfString;

class PdfStringTest extends TestCase
{
    public function testCreate()
    {
        $v = PdfString::create("Test");
        $this->assertInstanceOf(PdfString::class, $v);
        $this->assertSame("Test", $v->value);
    }

    /**
     * @expectedException \kadudutra\Fpdi\PdfParser\Type\PdfTypeException
     * @expectedExceptionCode \kadudutra\Fpdi\PdfParser\Type\PdfTypeException::INVALID_DATA_TYPE
     */
    public function testEnsureWithInvlaidArgument1()
    {
        PdfString::ensure('test');
    }

    /**
     * @expectedException \kadudutra\Fpdi\PdfParser\Type\PdfTypeException
     * @expectedExceptionCode \kadudutra\Fpdi\PdfParser\Type\PdfTypeException::INVALID_DATA_TYPE
     */
    public function testEnsureWithInvlaidArgument2()
    {
        PdfString::ensure(PdfName::create('test'));
    }

    public function testEnsure()
    {
        $a = PdfString::create('Testing is cool');
        $b = PdfString::ensure($a);
        $this->assertSame($a, $b);
    }
}
