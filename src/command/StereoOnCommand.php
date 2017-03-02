<?php
/**
 * Created by PhpStorm.
 * User: Usuario
 * Date: 13/01/2017
 * Time: 10:37
 */

namespace HFDP\command;


class StereoOnCommand implements CommandInterface
{

    /** @var  Stereo */
    protected $stereo;

    public function __construct(Stereo $stereo)
    {
        $this->stereo = $stereo;
    }
    public function execute()
    {
      $data[] = $this->stereo->on();
      $data[] = $this->stereo->setCd();
      $data[] = $this->stereo->setVolume(11);

        return $data;
    }

    public function undo()
    {
        return $this->stereo->off();
    }
}