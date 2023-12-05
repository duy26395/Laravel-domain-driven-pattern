<?php

namespace App\Domains\Train\Controller;

use App\Http\Controllers\Controller;
use App\Domains\Train\Controller\Resources\DataResource;
use App\Models\Train;

class ViewAction extends Controller
{
    public function __invoke(Train $train): DataResource
    {
        return new DataResource($train);
    }
}
