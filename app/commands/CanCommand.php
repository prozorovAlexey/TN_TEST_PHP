<?php

namespace App\Commands;

use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;
use Symfony\Component\Console\Input\InputArgument;

class CanCommand extends Command
{
    const ClassesNamespace = 'App\Classes\\';

    protected function configure()
    {
        $this->setName('can')
            ->setDescription('Output what user can')
//            ->setHelp('Demonstration of custom commands created by Symfony Console component.')
            ->addArgument('role', InputArgument::REQUIRED, 'Pass the userrole. 
            Possible roles: developer, tester, designer, manager.')
            ->addArgument('action', InputArgument::REQUIRED, 'Pass the action. 
            Possible actions: writeCode, testCode, draw, taskPlanning, communicate');
    }

    protected function execute(InputInterface $input, OutputInterface $output)
    {
        $role = self::ClassesNamespace . ucfirst($input->getArgument('role'));
        $action = self::ClassesNamespace . lcfirst($input->getArgument('action'));
        if (!class_exists($role)) {
            $output->writeln('Wrong role input! Please, use "help can" for more info!');
        } else if (!interface_exists($action)) {
            $output->writeln('Wrong action input! Please, use "help can" for more info!');
        } else {
            $output->writeln(in_array($action,
                class_implements($role)) ? 'true' : 'false');
        }
        return 1;
    }
}