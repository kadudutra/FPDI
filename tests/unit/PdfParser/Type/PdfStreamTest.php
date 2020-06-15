<?php

namespace kadudutra\Fpdi\unit\PdfParser\Type;

use PHPUnit\Framework\TestCase;
use kadudutra\Fpdi\PdfParser\Type\PdfDictionary;
use kadudutra\Fpdi\PdfParser\Type\PdfNumeric;
use kadudutra\Fpdi\PdfParser\Type\PdfStream;
use kadudutra\Fpdi\PdfParser\Type\PdfString;

class PdfStreamTest extends TestCase
{
    public function testCreate()
    {
        $dict = PdfDictionary::create(['A' => PdfNumeric::create(123)]);
        $v = PdfStream::create($dict, 'stream conent');
        $this->assertInstanceOf(PdfStream::class, $v);
        $this->assertSame('stream conent', $v->getStream());
        $this->assertSame($dict, $v->value);
    }

    /**
     * @expectedException \kadudutra\Fpdi\PdfParser\Type\PdfTypeException
     * @expectedExceptionCode \kadudutra\Fpdi\PdfParser\Type\PdfTypeException::INVALID_DATA_TYPE
     */
    public function testEnsureWithInvlaidArgument1()
    {
        PdfStream::ensure('test');
    }

    /**
     * @expectedException \kadudutra\Fpdi\PdfParser\Type\PdfTypeException
     * @expectedExceptionCode \kadudutra\Fpdi\PdfParser\Type\PdfTypeException::INVALID_DATA_TYPE
     */
    public function testEnsureWithInvlaidArgument2()
    {
        PdfStream::ensure(PdfString::create('test'));
    }

    public function testEnsure()
    {
        $a = PdfStream::create(PdfDictionary::create([]), '');
        $b = PdfStream::ensure($a);
        $this->assertSame($a, $b);
    }
}
