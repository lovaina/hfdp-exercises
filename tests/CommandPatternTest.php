<?php

namespace tests;


use HFDP\command\GarageDoor;
use HFDP\command\GarageDoorCloseCommand;
use HFDP\command\GarageDoorOpenCommand;
use HFDP\command\Light;
use HFDP\command\LightOffCommand;
use HFDP\command\LightOnCommand;
use HFDP\command\RemoteControl;
use HFDP\command\RemoteControlWithUndo;
use HFDP\command\SimpleRemoteControl;
use HFDP\command\Stereo;
use HFDP\command\StereoOffCommand;
use HFDP\command\StereoOnCommand;

class CommandPatternTest extends \PHPUnit_Framework_TestCase
{

    public function test_LightCommand()
    {
        $remote = new SimpleRemoteControl();
        $light = new Light();
        $lightCommand = new LightOnCommand($light);
        
        $message = $remote->setCommand($lightCommand)
            ->buttonWasPressed();
        
        $this->assertEquals('Light is ON', $message);
    }

    public function test_GarageDoorCommand()
    {
        $remote = new SimpleRemoteControl();
        $light = new Light();
        $garageDoor = new GarageDoor();
        $lightCommand = new LightOnCommand($light);
        $garageCommand = new GarageDoorOpenCommand($garageDoor);

        $message = $remote->setCommand($lightCommand)
            ->buttonWasPressed();
        $this->assertEquals('Light is ON', $message);

        $message = $remote->setCommand($garageCommand)
            ->buttonWasPressed();
        $this->assertEquals('Garage Door is OPENED', $message);
    }

    public function test_RemoteControler()
    {
        $remote = new RemoteControl();

        $kitchenLight = new Light('Kitchen');
        $livingRoomLight = new Light('Living Room');
        $stereo = new Stereo();
        $garageDoor = new GarageDoor();

        $kitchenLightOnCommand = new LightOnCommand($kitchenLight);
        $kitchenLightOffCommand = new LightOffCommand($kitchenLight);
        $livingRoomLightOnCommand = new LightOnCommand($livingRoomLight);
        $livingRoomLightOffCommand = new LightOffCommand($livingRoomLight);
        $stereoOnCommand = new StereoOnCommand($stereo);
        $stereoOffCommand = new StereoOffCommand($stereo);
        $garageDoorOnCommand = new GarageDoorOpenCommand($garageDoor);
        $garageDoorOffCommand = new GarageDoorCloseCommand($garageDoor);

        $remote->setCommand(0, $kitchenLightOnCommand, $kitchenLightOffCommand);
        $remote->setCommand(1, $livingRoomLightOnCommand, $livingRoomLightOffCommand);
        $remote->setCommand(2, $stereoOnCommand, $stereoOffCommand);
        $remote->setCommand(3, $garageDoorOnCommand, $garageDoorOffCommand);


        $message = $remote->onButtonWasPushed(0);
        $this->assertEquals('Kitchen Light is ON', $message);

        $message = $remote->onButtonWasPushed(2);
        $this->assertInternalType('array', $message);

    }

    public function test_UndoButton()
    {
        $remote = new RemoteControlWithUndo();
        $garageDoor = new GarageDoor();
        $garageDoorOnCommand = new GarageDoorOpenCommand($garageDoor);
        $garageDoorOffCommand = new GarageDoorCloseCommand($garageDoor);

        $remote->setCommand(3, $garageDoorOnCommand, $garageDoorOffCommand);

        $message = $remote->onButtonWasPushed(3);
        $this->assertEquals('Garage Door is OPENED', $message);

        $message = $remote->undoButtonWasPushed();
        $this->assertEquals('Garage Door is CLOSED', $message);


    }
}
