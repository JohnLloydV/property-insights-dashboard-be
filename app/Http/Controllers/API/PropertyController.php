<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Property;

class PropertyController extends Controller
{
    public function index(Request $request)
    {
        $query = Property::query();
        $perPage = $request->get('per_page', 6);

        // Filters
        if ($request->filled('address')) {
            $query->where('address', 'LIKE', '%' . $request->address . '%');
        }
        if ($request->filled('state') && $request->state != 'all') {
            $query->where('state', 'LIKE', '%' . $request->state . '%');
        }
        if ($request->filled('bedrooms')) {
            $query->where('bedrooms', '>', $request->bedrooms);
        }
        if ($request->filled('min_price')) {
            $query->where('price', '>=', $request->min_price);
        }
        if ($request->filled('max_price')) {
            $query->where('price', '<=', $request->max_price);
        }

        return response()->json($query->paginate($perPage));
    }

    public function show($id)
    {
        $property = Property::findOrFail($id);
        return response()->json($property);
    }
}
