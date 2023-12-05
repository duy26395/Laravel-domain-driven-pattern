<?php

namespace App\Domains\Train\UseCase;

use App\Domains\Train\UseCase\Command\UpdateCommand;
use App\Models\Train;

class UpdateInteractor
{
    /**
     * @param UpdateCommand $command
     * @return Train
     */
    public function handle(UpdateCommand $command, Train $train): Train
    {
        if ($command->getName() !== null) {
            $train->name = $command->getName();
        }

        if ($command->gettimeStart() !== null) {
            $train->time_start = $command->gettimeStart();
        }

        $train->save();

        return $train;
    }
}
