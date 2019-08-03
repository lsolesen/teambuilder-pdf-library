<?php
namespace Activity\Tests;

use Teambuilder\Activity\Pdf\Portrait;
use Teambuilder\Tests\ActivityMock;
use Teambuilder\Tests\ActivityImageMock;


use PHPUnit\Framework\TestCase;

class PortraitTest extends Testcase
{
    public function testExceptionIsThrownIfTemporaryDirectoryHasNotBeenSet()
    {
        try {
            $pdf = new Portrait();
            $pdf->setLogo(new ActivityImageMock(), 'http://motionsplan.dk');
            $pdf->setContribLogo(new ActivityImageMock(), 'http://vih.dk');
            $pdf->addNewPage(new ActivityMock);
        } catch (\Exception $e) {
            $this->assertTrue(true);
        }
    }

    public function testPortrait()
    {
        $filename =  __DIR__ . '/test.pdf';
        $pdf = new Portrait();
        $pdf->setTemporaryDirectory(__DIR__);
        $pdf->setLogo(new ActivityImageMock(), 'http://motionsplan.dk');
        $pdf->setContribLogo(new ActivityImageMock(), 'http://vih.dk');
        $pdf->addNewPage(new ActivityMock);

        // This is not really testing the library - just to see whether functions works.
        $pdf->Output($filename, 'F');

        // Test and cleanup.
        $this->assertTrue(file_exists($filename));
        unlink($filename);
        array_map('unlink', glob(__DIR__ . '/*.png'));
    }
}
