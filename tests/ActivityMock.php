<?php
namespace Teambuilder\Tests;

use Teambuilder\Activity\ActivityInterface;

class ActivityMock implements ActivityInterface
{
    public function getTitle()
    {
        return 'My Title';
    }

    public function getCues()
    {
        return 'My cues';
    }

    public function getIntroduction()
    {
        return 'My introduction';
    }

    public function getDescription()
    {
        return 'My description';
    }

    public function getUrl()
    {
        return 'http://motionsplan.dk';
    }

    /**
     * return array with ImageInterface[]
     */
    public function getImages()
    {
        return array(
            new ActivityImageMock(),
            new ActivityImageMock()
        );
    }

    public function getBarCode()
    {
        return null;
    }
}
