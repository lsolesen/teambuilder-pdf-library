<?php
namespace Teambuilder\Activity;

interface ActivityInterface
{
    public function getTitle();

    public function getCues();

    public function getIntroduction();

    public function getDescription();

    public function getUrl();

    /**
     * return array with ImageInterface[]
     */
    public function getImages();

    public function getBarCode();
}
