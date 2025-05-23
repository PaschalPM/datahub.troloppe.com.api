<?php

namespace App\Http\Controllers\PropertyData;

use App\Http\Controllers\Controller;
use App\Services\PropertyDataService;
use Illuminate\Http\Request;

class InitialController extends Controller
{
    public function __construct(private readonly PropertyDataService $propertyDataService) {}

    public function getInitialData()
    {
        return response()->json($this->propertyDataService->getInitialData());
    }
}
