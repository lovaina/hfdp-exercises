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
    protected $stero;

    public function __construct(Stereo $stereo)
    {
        $this->stero = $stereo;
    }
    public function execute()
    {
      $data[] = $this->stero->off();
      $data[] = $this->stero->setCd();
      $data[] = $this->stero->setVolume(11);

        return $data;
    }
}