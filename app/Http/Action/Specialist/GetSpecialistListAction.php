<?php

declare(strict_types=1);

namespace App\Http\Action\Specialist;

use App\Models\Service;
use App\Models\Specialist;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;

final class GetSpecialistListAction
{
    public function __invoke(Request $request): JsonResponse
    {
        $specialist = Specialist::all();

        return response()->json($specialist);
    }
}
