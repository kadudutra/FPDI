<?php

namespace kadudutra\Fpdi\unit\PdfParser\Type;

use PHPUnit\Framework\TestCase;
use kadudutra\Fpdi\PdfParser\Type\PdfArray;
use kadudutra\Fpdi\PdfParser\Type\PdfName;
use kadudutra\Fpdi\PdfParser\Type\PdfNumeric;
use kadudutra\Fpdi\PdfParser\Type\PdfString;

class PdfArrayTest extends TestCase
{
    public function testCreate()
    {
        $values = [
            'A' => PdfNumeric::create(123),
            'B' => PdfString::create('Test')
        ];

        $dict = PdfArray::create($values);
        $this->assertInstanceOf(PdfArray::class, $dict);

        $this->assertSame($values, $dict->value);
    }

    /**
     * @expectedException \kadudutra\Fpdi\PdfParser\Type\PdfTypeException
     * @expectedExceptionCode \kadudutra\Fpdi\PdfParser\Type\PdfTypeException::INVALID_DATA_TYPE
     */
    public function testEnsureWithInvlaidArgument1()
    {
        PdfArray::ensure('test');
    }

    /**
     * @expectedException \kadudutra\Fpdi\PdfParser\Type\PdfTypeException
     * @expectedExceptionCode \kadudutra\Fpdi\PdfParser\Type\PdfTypeException::INVALID_DATA_TYPE
     */
    public function testEnsureWithInvlaidArgument2()
    {
        PdfArray::ensure(PdfName::create('test'));
    }

    public function testEnsure()
    {
        $a = PdfArray::create([]);
        $b = PdfArray::ensure($a);
        $this->assertSame($a, $b);
    }

    public function testEnsureWithCount()
    {
        $a = PdfArray::create([PdfNumeric::create(1)]);
        $b = PdfArray::ensure($a, 1);
        $this->assertSame($a, $b);
    }

    /**
     * @expectedException \kadudutra\Fpdi\PdfParser\Type\PdfTypeException
     * @expectedExceptionCode \kadudutra\Fpdi\PdfParser\Type\PdfTypeException::INVALID_DATA_SIZE
     */
    public function testEnsureWithCountWithInvalidArgument()
    {
        $a = PdfArray::create([PdfNumeric::create(1)]);
        $b = PdfArray::ensure($a, 2);
        $this->assertSame($a, $b);
    }
}
