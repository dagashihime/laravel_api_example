<?php

namespace App\Http\Controllers;

use App\Http\Requests\CitizenGetRequest;
use App\Models\Citizen;
use Illuminate\Http\JsonResponse;

class CitizenController extends Controller
{
    public function get(CitizenGetRequest $request): JsonResponse
    {
        $citizens = Citizen::select('*')
            ->where(function ($q) use ($request) {
                if (isset($request['firstname']))
                    $q->where('firstname', $request['firstname']);
            })
            ->get();

        return response()->json($citizens);
    }

    public function resetBudget(): string
    {
        $totalUpdated = Citizen::where('budget_active', 1)
            ->update(['budget' => 250]);

        return "Reset $totalUpdated citizens budget!";
    }
}
