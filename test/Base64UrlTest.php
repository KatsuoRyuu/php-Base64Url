<?php

namespace KryuuCommon\Base64UrlTest;

use PHPUnit\Framework\TestCase;
use KryuuCommon\Base64Url\Base64Url;

class Base64UrlTest extends TestCase
{    
    /**
     * @dataProvider encodingsProvider
     */
    public function testEncode($string, $encoded)
    {
        $this->assertSame($encoded, Base64Url::encode($string));
    }

    /**
     * @dataProvider encodingsProvider
     */
    public function testDecode($string, $encoded)
    {
        $this->assertSame($string, Base64Url::decode($encoded));
    }

    public function encodingsProvider()
    {
        $tests = array(
            [ '', ''],
            ['1', 'MQ'],
            ['a', 'YQ'],
            ['bbb', 'YmJi'],
            ['ccc', 'Y2Nj'],
            ['hello!', 'aGVsbG8h'],
            ['Hello World', 'SGVsbG8gV29ybGQ'],
            ['this is a test', 'dGhpcyBpcyBhIHRlc3Q'],
            ['the quick brown fox', 'dGhlIHF1aWNrIGJyb3duIGZveA'],
            ['THE QUICK BROWN FOX', 'VEhFIFFVSUNLIEJST1dOIEZPWA'],
            ['simply a long string', 'c2ltcGx5IGEgbG9uZyBzdHJpbmc'],
            ["\x00\x61", 'AGE'],
            ["\x00", 'AA'],
            ["\x00\x00", 'AAA'],
            ['0248ac9d3652ccd8350412b83cb08509e7e4bd41', 'MDI0OGFjOWQzNjUyY2NkODM1MDQxMmI4M2NiMDg1MDllN2U0YmQ0MQ'],
            ['¹º»¼½¾¿À - causing special chars!', 'wrnCusK7wrzCvcK-wr_DgCAtIGNhdXNpbmcgc3BlY2lhbCBjaGFycyE']
        );
        
        return $tests;
    }
}
