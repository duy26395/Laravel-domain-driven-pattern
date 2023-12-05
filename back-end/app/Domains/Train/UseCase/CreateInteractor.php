<?php

namespace App\Domains\Train\UseCase;

use App\Domains\Train\UseCase\Command\CreateCommand;
use App\Models\Train;

class CreateInteractor
{
    /**
     * @param CreateCommand $command
     * @return Train
     */
    public function handle(CreateCommand $command): Train
    {
        return Train::create([
            'name' => $command->getName(),
            'time_start' => $command->gettimeStart(),
        ]);
    }
}
