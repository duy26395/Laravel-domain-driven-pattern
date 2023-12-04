<?php
namespace App\Domains\Train\Usecase;

use Illuminate\Contracts\Pagination\LengthAwarePaginator;
use App\Models\Train;

class IndexInteractor {

    public function handle(): LengthAwarePaginator 
    {
        return Train::paginate(Train::PER_PAGE);
    }
}