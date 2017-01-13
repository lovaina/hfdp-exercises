<?php


namespace HFDP\command;


class StereoOffCommand implements CommandInterface
{
    /** @var  Stereo */
    protected $stero;

    public function __construct(Stereo $stereo)
    {
        $this->stero = $stereo;
    }
    public function execute()
    {
        return $this->stero->off();
    }
}