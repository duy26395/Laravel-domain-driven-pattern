<?php

namespace App\Domains\Train\Controller;

use App\Http\Controllers\Controller;
use App\Domains\Train\Controller\Resources\DataResource;
use App\Domains\Train\Controller\Request\TrainsUpdateRequest;
use App\Domains\Train\UseCase\Command\UpdateCommand;
use App\Domains\Train\UseCase\UpdateInteractor;
use App\Models\Train;

class UpdateAction extends Controller
{
    protected UpdateInteractor $interactor;
    public function __construct(UpdateInteractor $interactor)
    {
        $this->interactor = $interactor;
    }

    public function __invoke(TrainsUpdateRequest $request, Train $train): DataResource
    {
        $command = new UpdateCommand($request->name, $request->time_start);

        return new DataResource(
            $this->interactor->handle($command, $train)
        );
    }
}
