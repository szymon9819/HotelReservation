<?php

declare(strict_types=1);

namespace App\Http\Controllers\V1\Hotel;

use App\Http\Controllers\Controller;
use App\Http\Responses\ApiResourceDeletedSuccessfullyResponse;
use App\Models\Hotel;
use Illuminate\Contracts\Support\Responsable;

final class DeleteController extends Controller
{
    public function __invoke(int $id): Responsable
    {
        $hotel = Hotel::findOrFail($id);
        $hotel->delete();

        return new ApiResourceDeletedSuccessfullyResponse('Hotel');
    }
}
