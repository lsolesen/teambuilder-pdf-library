<?php
namespace Teambuilder\Tests;

use Teambuilder\Activity\ActivityImageInterface;

class ActivityImageMock implements ActivityImageInterface
{
    public function getPath()
    {
        return __DIR__ . '/support/pic-800x600.png';
    }

    public function getOrientation()
    {
        return 'portrait';
    }
}
