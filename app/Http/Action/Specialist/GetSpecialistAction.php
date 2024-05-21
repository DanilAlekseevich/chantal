<?php

declare(strict_types=1);

namespace App\Http\Action\Specialist;

use App\Models\Service;
use App\Models\Specialist;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;

final class GetSpecialistAction
{
    public function __invoke(Request $request): JsonResponse
    {
        $specialist = Specialist::find($request->get('id'));

        if (is_null($specialist)) {
            return response()->json('Specialist not found', 404);
        }

        $services = Service::where('specialist_id', $specialist->id)->get();

        $response = [
            'id' => $specialist->id,
            'name' => $specialist->name,
            'phone' => $specialist->phone,
            'services' => $services,
        ];

        return response()->json($response);
    }
}
