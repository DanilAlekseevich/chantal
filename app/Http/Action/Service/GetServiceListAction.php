<?php

declare(strict_types=1);

namespace App\Http\Action\Service;

use App\Models\Service;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;

final class GetServiceListAction
{
    public function __invoke(Request $request): JsonResponse
    {
        $service = Service::all();

        return response()->json($service);
    }
}
