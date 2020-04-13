<?php

use PHPUnit\Framework\TestCase;

final class ResearchSquareTest extends TestCase
{
    private ResearchSquare $researchSquare;
    
    public function testClass()
    {
        $this->assertInstanceOf(
            ResearchSquare::class,
            $this->researchSquare
        );
    }
    
    public function testExecOf1to1()
    {
        $this->researchSquare->setRangeStart(1);
        $this->researchSquare->setRangeStop(1);
        $results = $this->researchSquare->exec();
        
        $expectedResults = ['1'];
        $this->assertEquals($expectedResults, $results);
        
    }
    
    public function testExecOf1to2()
    {
        $this->researchSquare->setRangeStart(1);
        $this->researchSquare->setRangeStop(2);
        $results = $this->researchSquare->exec();
        
        $expectedResults = ['1', '2'];
        $this->assertEquals($expectedResults, $results);
        
    }
    
    public function testExecOf1to3()
    {
        $this->researchSquare->setRangeStart(1);
        $this->researchSquare->setRangeStop(3);
        $results = $this->researchSquare->exec();
        
        $expectedResults = ['1', '2', 'Research'];
        $this->assertEquals($expectedResults, $results);
        
    }
    
    public function testExecOf1to4()
    {
        $this->researchSquare->setRangeStart(1);
        $this->researchSquare->setRangeStop(4);
        $results = $this->researchSquare->exec();
        
        $expectedResults = ['1', '2', 'Research', '4'];
        $this->assertEquals($expectedResults, $results);
        
    }
    
    public function testExecOf1to6()
    {
        $this->researchSquare->setRangeStart(1);
        $this->researchSquare->setRangeStop(6);
        $results = $this->researchSquare->exec();
        
        $expectedResults = ['1', '2', 'Research', '4', 'Square', 'Research'];
        $this->assertEquals($expectedResults, $results);
        
    }
    
    public function testExecOf1to7()
    {
        
        $this->researchSquare->setRangeStart(1);
        $this->researchSquare->setRangeStop(7);
        $results = $this->researchSquare->exec();
        
        $expectedResults = ['1', '2', 'Research', '4', 'Square', 'Research', '7'];
        $this->assertEquals($expectedResults, $results);
        
    }
    
    public function testExecOf1to15()
    {
        
        $this->researchSquare->setRangeStart(1);
        $this->researchSquare->setRangeStop(15);
        $results = $this->researchSquare->exec();
        
        $expectedResults = [
            '1', '2', 'Research', '4', 'Square', 'Research', '7', '8', 'Research', 'Square', '11',
            'Research', '13', '14', 'Research Square'
        ];
        $this->assertEquals($expectedResults, $results);
        
    }
    
    public function testExecOf1to30()
    {
        
        $this->researchSquare->setRangeStart(1);
        $this->researchSquare->setRangeStop(30);
        $results = $this->researchSquare->exec();
        
        $expectedResults = [
            '1', '2', 'Research', '4', 'Square', 'Research', '7', '8', 'Research', 'Square', '11',
            'Research', '13', '14', 'Research Square', '16', '17', 'Research', '19', 'Square',
            'Research', '22', '23', 'Research', 'Square', '26', 'Research', '28', '29', 'Research Square',
        ];
        $this->assertEquals($expectedResults, $results);
        
    }
    
    public function testExecOf1to100()
    {
        
        $this->researchSquare->setRangeStart(1);
        $this->researchSquare->setRangeStop(100);
        $results = $this->researchSquare->exec();
        
        $expectedResults = [
            '1', '2', 'Research', '4', 'Square', 'Research', '7', '8', 'Research', 'Square', '11', 'Research', '13',
            '14', 'Research Square', '16', '17', 'Research', '19', 'Square', 'Research', '22', '23', 'Research',
            'Square', '26', 'Research', '28', '29', 'Research Square', '31', '32', 'Research', '34', 'Square',
            'Research', '37', '38', 'Research', 'Square', '41', 'Research', '43', '44', 'Research Square',
            '46', '47', 'Research', '49', 'Square', 'Research', '52', '53', 'Research', 'Square', '56', 'Research',
            '58', '59', 'Research Square', '61', '62', 'Research', '64', 'Square', 'Research', '67', '68', 'Research',
            'Square', '71', 'Research', '73', '74', 'Research Square', '76', '77', 'Research', '79', 'Square',
            'Research', '82', '83', 'Research', 'Square', '86', 'Research', '88', '89', 'Research Square', '91', '92',
            'Research', '94', 'Square', 'Research', '97', '98', 'Research', 'Square'
        ];
        $this->assertEquals($expectedResults, $results);
        
    }
    
    protected function setUp(): void
    {
        $this->researchSquare = new ResearchSquare();
        $this->researchSquare->setSubstitutions([3 => 'Research', 5 => 'Square']);
    }
}
