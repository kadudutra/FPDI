<?php

namespace kadudutra\Fpdi\unit\PdfParser\Type;

use PHPUnit\Framework\TestCase;
use kadudutra\Fpdi\PdfParser\Type\PdfName;
use kadudutra\Fpdi\PdfParser\Type\PdfString;
use kadudutra\Fpdi\PdfParser\Type\PdfToken;

class PdfTokenTest extends TestCase
{
    public function testCreate()
    {
        $v = PdfToken::create("Test");
        $this->assertInstanceOf(PdfToken::class, $v);
        $this->assertSame("Test", $v->value);
    }

    /**
     * @expectedException \kadudutra\Fpdi\PdfParser\Type\PdfTypeException
     * @expectedExceptionCode \kadudutra\Fpdi\PdfParser\Type\PdfTypeException::INVALID_DATA_TYPE
     */
    public function testEnsureWithInvlaidArgument1()
    {
        PdfToken::ensure('test');
    }

    /**
     * @expectedException \kadudutra\Fpdi\PdfParser\Type\PdfTypeException
     * @expectedExceptionCode \kadudutra\Fpdi\PdfParser\Type\PdfTypeException::INVALID_DATA_TYPE
     */
    public function testEnsureWithInvlaidArgument2()
    {
        PdfToken::ensure(PdfName::create('test'));
    }

    public function testEnsure()
    {
        $a = PdfToken::create('AToken');
        $b = PdfToken::ensure($a);
        $this->assertSame($a, $b);
    }
}
