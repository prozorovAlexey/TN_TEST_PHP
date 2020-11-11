<?php

namespace App\Commands;

use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\InputArgument;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;

class UserCommand extends Command
{
    const ClassesNamespace = 'App\Classes\\';

    protected function configure()
    {
        $this->setName('user')
            ->setDescription('Displays user capabilities')
            ->addArgument('role', InputArgument::REQUIRED, 'Pass the userrole. 
            Possible roles: developer, tester, designer, manager.');
    }

    protected function execute(InputInterface $input, OutputInterface $output)
    {
        $role = self::ClassesNamespace.ucfirst($input->getArgument('role'));
        if (!class_exists($role)) {
            $output->writeln('Wrong role input! Please, use "help user" for more info!');
        } else {
            $interfaces = class_implements($role);
            foreach ($interfaces as $interface) {
                $interfaceShortName = substr(strrchr($interface, '\\'), 1);
                $output->writeln(constant($interfaceShortName));
            }
        }

        return 1;
    }
}
