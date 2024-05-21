<?php

declare(strict_types=1);

namespace App\Http\Action\Service;

use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use App\Models\Service;

final class CreateServiceAction
{
    public function __invoke(Request $request): JsonResponse
    {
        $service = Service::create([
            'name' => $request->get('name'),
            'description' => $request->get('description'),
            'price' => $request->get('price'),
            'date' => $request->get('date'),
            'time' => $request->get('time'),
        ]);

        return response()->json($service, 201);
    }
}
