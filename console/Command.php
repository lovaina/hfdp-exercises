<?php


namespace HFDPConsole;


use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;

abstract class Command extends \Symfony\Component\Console\Command\Command
{
    /** @var  OutputInterface */
    protected $output;
    /** @var  InputInterface */
    protected $input;

    abstract public function fire();

    protected function execute(InputInterface $input, OutputInterface $output)
    {
        $this->output = $output;
        $this->input = $input;
        
        $this->fire();
    }
    
    public function info($string)
    {
        $this->output->writeln("<info>$string</info>");
    }

    public function comment($string)
    {
        $this->output->writeln("<comment>$string</comment>");
    }

    public function question($string)
    {
        $this->output->writeln("<question>$string</question>");
    }

    public function error($string)
    {
        $this->output->writeln("<error>$string</error>");
    }

    public function underline($string)
    {
        $this->output->writeln("<options=bold,underscore>".$string."</>");
    }

}