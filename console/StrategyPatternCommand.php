<?php


namespace HFDPConsole;

use HFDP\strategy\DuckMallard;
use HFDP\strategy\DuckModel;
use HFDP\strategy\FlayNoWay;
use HFDP\strategy\QuackSqueak;


class StrategyPatternCommand extends \HFDPConsole\Command
{
    protected function configure()
    {
        $this
            ->setName('hfdp:strategy-pattern')
            ->setDescription('Duck Example')
            ->setHelp('Strategy Pattern: Duck example');
    }

    public function fire()
    {
        $this->info('Strategy Pattern');
        $this->output->writeln('');
        $this->duckModel();
        $this->output->writeln('');
        $this->duckMallard();
    }
    
    protected function duckModel(){
        $duckModel = new DuckModel();
        $this->comment($duckModel->display());
        $this->output->writeln($duckModel->performFly());
        $this->output->writeln($duckModel->performQuack());
    }

    protected function duckMallard()
    {
        $mallardDuck = new DuckMallard();
        $this->comment($mallardDuck->display());
        $this->output->writeln($mallardDuck->performFly());
        $this->output->writeln($mallardDuck->performQuack());
        $this->underline('Alterando comportamiento');
        $mallardDuck->setFlyBehavior(new FlayNoWay());
        $this->output->writeln($mallardDuck->performFly());
        $mallardDuck->setQuackBehavior(new QuackSqueak());
        $this->output->writeln($mallardDuck->performQuack());

    }


}