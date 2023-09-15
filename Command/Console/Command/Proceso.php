<?php
/**
 * Copyright © Devsarrollo All rights reserved.
 * See COPYING.txt for license details.
 */
declare(strict_types=1);

namespace Devsarrollo\Command\Console\Command;

use Magento\Framework\Exception\LocalizedException;
use Symfony\Component\Console\Command\Command as CommandCore;
use Symfony\Component\Console\Input\InputArgument;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Input\InputOption;
use Symfony\Component\Console\Output\OutputInterface;

class Proceso extends CommandCore
{
    private const PARAM = 'parametro';

    protected function configure(): void
    {
        $this->setName('devsarrollo_command:proceso');
        $this->setDescription('Descripción del proceso. {--parametro}');
        $this->addOption(
            self::PARAM,
            null,
            InputOption::VALUE_REQUIRED,
            'Parametro'
        );

        parent::configure();
    }

    /**
     * Execute the command
     *
     * @param InputInterface $input
     * @param OutputInterface $output
     *
     * @return int
     */
    protected function execute(InputInterface $input, OutputInterface $output): int
    {
        $exitCode = 0;
        
        if ($param = $input->getOption(self::PARAM)) {
            $output->writeln('<info>Parámetro pasado: `' . $param . '`</info>');
        }

        $output->writeln('<info>Ejecutado correctamente.</info>');
        $output->writeln('<comment>Comentario.</comment>');

        try {
            if (rand(0, 1)) {
               throw new LocalizedException(__('Ha ocurrido algún error.'));
            }
        } catch (LocalizedException $e) {
            $output->writeln(sprintf(
                '<error>%s</error>',
                $e->getMessage()
            ));
            $exitCode = 1;
        }
        
        return $exitCode;
    }
}

