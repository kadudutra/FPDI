<?php

namespace kadudutra\Fpdi\unit\PdfParser\Type;

use PHPUnit\Framework\TestCase;
use kadudutra\Fpdi\PdfParser\Type\PdfBoolean;
use kadudutra\Fpdi\PdfParser\Type\PdfName;

class PdfBooleanTest extends TestCase
{
    public function testCreate()
    {
        $v = PdfBoolean::create(true);
        $this->assertInstanceOf(PdfBoolean::class, $v);
        $this->assertSame(true, $v->value);

        $v = PdfBoolean::create(false);
        $this->assertInstanceOf(PdfBoolean::class, $v);
        $this->assertSame(false, $v->value);
    }

    /**
     * @expectedException \kadudutra\Fpdi\PdfParser\Type\PdfTypeException
     * @expectedExceptionCode \kadudutra\Fpdi\PdfParser\Type\PdfTypeException::INVALID_DATA_TYPE
     */
    public function testEnsureWithInvlaidArgument1()
    {
        PdfBoolean::ensure('test');
    }

    /**
     * @expectedException \kadudutra\Fpdi\PdfParser\Type\PdfTypeException
     * @expectedExceptionCode \kadudutra\Fpdi\PdfParser\Type\PdfTypeException::INVALID_DATA_TYPE
     */
    public function testEnsureWithInvlaidArgument2()
    {
        PdfBoolean::ensure([PdfName::class, 'test']);
    }

    public function testEnsure()
    {
        $a = PdfBoolean::create(true);
        $b = PdfBoolean::ensure($a);
        $this->assertSame($a, $b);
    }
}
