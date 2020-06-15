<?php

namespace kadudutra\Fpdi\unit\PdfParser\Type;

use PHPUnit\Framework\TestCase;
use kadudutra\Fpdi\PdfParser\Type\PdfName;
use kadudutra\Fpdi\PdfParser\Type\PdfString;

class PdfNameTest extends TestCase
{
    public function testCreate()
    {
        $v = PdfName::create('Test');
        $this->assertInstanceOf(PdfName::class, $v);
        $this->assertSame('Test', $v->value);
    }

    /**
     * @expectedException \kadudutra\Fpdi\PdfParser\Type\PdfTypeException
     * @expectedExceptionCode \kadudutra\Fpdi\PdfParser\Type\PdfTypeException::INVALID_DATA_TYPE
     */
    public function testEnsureWithInvlaidArgument1()
    {
        PdfName::ensure('test');
    }

    /**
     * @expectedException \kadudutra\Fpdi\PdfParser\Type\PdfTypeException
     * @expectedExceptionCode \kadudutra\Fpdi\PdfParser\Type\PdfTypeException::INVALID_DATA_TYPE
     */
    public function testEnsureWithInvlaidArgument2()
    {
        PdfName::ensure(PdfString::create('test'));
    }

    public function testEnsure()
    {
        $a = PdfName::create('F6F6F6');
        $b = PdfName::ensure($a);
        $this->assertSame($a, $b);
    }

    public function unescapeProvider()
    {
        return [
            ['1.5'                , '1#2E5'],
            ['#Test'              , '#23Test'],
            ['Adobe Green'        , 'Adobe#20Green'],
            ['PANTONE 5757 CV'    , 'PANTONE#205757#20CV'],
            ['paired()parentheses', 'paired#28#29parentheses'],
            ['Abc'                , 'Abc']
        ];
    }

    /**
     * @param $expectedResult
     * @param $escaped
     * @dataProvider unescapeProvider
     */
    public function testUnescape($expectedResult, $escaped)
    {
        $this->assertEquals($expectedResult, PdfName::unescape($escaped));
    }
}
