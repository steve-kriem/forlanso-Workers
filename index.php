<?php 

use Symfony\Component\Console\Output\ConsoleOutput;
$output = new ConsoleOutput();

while (true){
    $output->writeln('Converting');
    sleep(1);
}