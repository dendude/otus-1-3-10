<?php
namespace DenDude;

use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\InputArgument;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;

class SumCommand extends Command
{
    public function configure()
    {
        $this->setName('math:sum')
            ->setDescription('sum two numbers')
            ->addArgument('a', InputArgument::REQUIRED)
            ->addArgument('b', InputArgument::REQUIRED);
    }

    public function execute(InputInterface $input, OutputInterface $output)
    {
        $output->writeln($this->sum($input->getArgument('a'), $input->getArgument('b')));
    }

    protected function sum($a, $b): string
    {
        return self::saySum($a, $b);
    }

    protected static function saySum(int $a, int $b)
    {
        return sprintf("%d + %d = %d", $a, $b, ($a + $b));
    }
}