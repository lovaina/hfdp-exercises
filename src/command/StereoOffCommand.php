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

    public function undo()
    {
        $data[] = $this->stero->off();
        $data[] = $this->stero->setCd();
        $data[] = $this->stero->setVolume(11);

        return $data;
    }
}