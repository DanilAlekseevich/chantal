<?php

declare(strict_types=1);

namespace App\Http\Action\Service;

use App\Models\Service;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;

final class GetServiceAction
{
    public function __invoke(Request $request): JsonResponse
    {
        $service = Service::find($request->id);

        if (is_null($service)) {
            return response()->json('Service not found', 404);
        }

        return response()->json($service);
    }
}
