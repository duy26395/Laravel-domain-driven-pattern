<?php

namespace App\Domains\Train\Controller;

use App\Http\Controllers\Controller;
use App\Domains\Train\Controller\Resources\DataResource;
use App\Domains\Train\UseCase\IndexInteractor;

class IndexAction extends Controller
{
    protected IndexInteractor $interactor;
    public function __construct(IndexInteractor $interactor)
    {
        $this->interactor = $interactor;
    }

    public function __invoke(): DataResource
    {
        $res = $this->interactor->handle();

        return new DataResource($res);
    }
}
