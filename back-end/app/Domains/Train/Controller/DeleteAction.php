<?php

namespace App\Domains\Train\Controller;

use App\Http\Controllers\Controller;
use App\Domains\Train\UseCase\DeleteInteractor;
use App\Models\Train;
use Illuminate\Http\Response;

class DeleteAction extends Controller
{
    protected DeleteInteractor $interactor;
    public function __construct(DeleteInteractor $interactor)
    {
        $this->interactor = $interactor;
    }

    public function __invoke(Train $train)
    {
        $this->interactor->handle($train);

        return response()->json([], Response::HTTP_NO_CONTENT);
    }
}
