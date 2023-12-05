<?php

namespace App\Domains\Train\Controller;

use App\Http\Controllers\Controller;
use App\Domains\Train\Controller\Resources\DataResource;
use App\Domains\Train\UseCase\CreateInteractor;
use App\Domains\Train\Controller\Request\TrainsCreateRequest;
use App\Domains\Train\UseCase\Command\CreateCommand;


class CreateAction extends Controller
{
    protected CreateInteractor $interactor;
    public function __construct(CreateInteractor $interactor)
    {
        $this->interactor = $interactor;
    }

    public function __invoke(TrainsCreateRequest $request): DataResource
    {
        $command = new CreateCommand($request->name, $request->time_start);

        return new DataResource(
            $this->interactor->handle($command)
        );
    }
}
