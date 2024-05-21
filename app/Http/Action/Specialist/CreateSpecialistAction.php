<?php

declare(strict_types=1);

namespace App\Http\Action\Specialist;

use App\Models\Specialist;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;

final class CreateSpecialistAction
{
    public function __invoke(Request $request): JsonResponse
    {
        $specialist = Specialist::create([
            'name' => $request->get('name'),
            'phone' => $request->get('phone'),
        ]);

        return response()->json($specialist, 201);
    }
}
