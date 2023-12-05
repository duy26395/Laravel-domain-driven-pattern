<?php

namespace App\Domains\Train\UseCase;

use App\Domains\Train\UseCase\Command\UpdateCommand;
use App\Models\Train;

class DeleteInteractor
{
    /**
     * @return Train
     */
    public function handle(Train $train): Train
    {
        $train->delete();

        return $train;
    }
}
