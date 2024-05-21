<?php

declare(strict_types=1);

namespace App\Http\Action\Specialist;

use App\Models\Service;
use App\Models\Specialist;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;

final class AddServiceToSpecialistAction
{
    public function __invoke(Request $request): JsonResponse
    {
        $serviceId = $request->get('id');
        $specialistId = $request->get('specialist_id');

        $service = Service::find($serviceId);
        if (is_null($service)) {
            return response()->json(['message' => 'Service not found'], 404);
        }

        /** @var Specialist $specialist */
        $specialist = Specialist::find($specialistId);
        if (is_null($specialist)) {
            return response()->json(['message' => 'Specialist not found'], 404);
        }

        $specialist->addService($service);

        $specialist->save();

        return response()->json($specialist);
    }
}
