<?php

namespace App\Http\Controllers;

use App\Http\Requests\RideCreateRequest;
use App\Http\Requests\RideGetRequest;
use App\Models\Ride;
use Illuminate\Http\JsonResponse;

class RideController extends Controller
{
    public function get(RideGetRequest $request): JsonResponse
    {
        $rides = Ride::select('*')
            ->where('company_id', $request['company_id'])
            ->get();

        return response()->json($rides);
    }

    public function create(RideCreateRequest $request): JsonResponse
    {
        $ride = new Ride;
        $ride->citizen_id = $request['citizen_id'];
        $ride->company_id = $request['company_id'];
        $ride->length = $request['length'];
        $ride->save();

        return response()->json($ride);
    }
}
