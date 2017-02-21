<?php


namespace HFDPConsole;

use HFDP\strategy\DuckMallard;
use HFDP\strategy\DuckModel;
use HFDP\strategy\FlayNoWay;
use HFDP\strategy\QuackSqueak;
use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Formatter\OutputFormatterStyle;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;

class StrategyPatternCommand extends Command
{
    protected function configure()
    {
        $this
            ->setName('hfdp:strategy-pattern')
            ->setDescription('Duck Example')
            ->setHelp('Strategy Pattern: Duck example');
    }

    protected function execute(InputInterface $input, OutputInterface $output)
    {
       $output->writeln('<info>Strategy Pattern</info>');
       $output->writeln('');
        $this->duckModel($output);
        $output->writeln('');
        $this->duckMallard($output);


    }
    
    protected function duckModel(OutputInterface $output){
        $duckModel = new DuckModel();
        $output->writeln('<comment>'.$duckModel->display().'</comment>');
        $output->writeln($duckModel->performFly());
        $output->writeln($duckModel->performQuack());
    }

    protected function duckMallard(OutputInterface $output)
    {
        $mallardDuck = new DuckMallard();

        $output->writeln('<comment>'.$mallardDuck->display().'</comment>');
        $output->writeln($mallardDuck->performFly());
        $output->writeln($mallardDuck->performQuack());
        $output->writeln('<options=bold,underscore>Alterando comportamiento</>');
        $mallardDuck->setFlyBehavior(new FlayNoWay());
        $output->writeln($mallardDuck->performFly());
        $mallardDuck->setQuackBehavior(new QuackSqueak());
        $output->writeln($mallardDuck->performQuack());

    }
}