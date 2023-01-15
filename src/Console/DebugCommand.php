<?php

namespace App\Console;

use JoliCode\Elastically\Client;
use Symfony\Component\Console\Attribute\AsCommand;
use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;
use Symfony\Component\Console\Style\SymfonyStyle;

#[AsCommand('app:debug')]
class DebugCommand extends Command
{
    public function __construct(
        private readonly Client $client,
    ) {
        parent::__construct();
    }

    public function execute(InputInterface $input, OutputInterface $output): int
    {
        dump($this->client->getConnection());

        return Command::SUCCESS;
    }
}
