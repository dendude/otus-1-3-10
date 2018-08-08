<?php
namespace DenDude;

use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\InputArgument;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;

class DateConvertCommand extends Command
{
    public function configure()
    {
        $this->setName('date:convert')
            ->setDescription('input the valid date')
            ->addArgument('d', InputArgument::REQUIRED);
    }

    public function execute(InputInterface $input, OutputInterface $output)
    {
        $output->writeln(DateHelper::formatDate($input->getArgument('d')));
    }
}