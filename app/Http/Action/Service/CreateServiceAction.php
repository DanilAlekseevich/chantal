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
        $service = Service::create();

        return response()->json();
    }
}
