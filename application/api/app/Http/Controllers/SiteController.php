<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SiteController extends Controller
{
    /**
     * GET /api/sites
     * List all sites.
     * @return \Illuminate\Http\JsonResponse
     */
    public function index(): \Illuminate\Http\JsonResponse
    {
        $sites = \App\Models\Site::all();
        return response()->json($sites);
    }

    /**
     * POST /api/sites
     * Create a new site.
     * @param Request $request
     * @return \Illuminate\Http\JsonResponse
     */
    public function store(Request $request): \Illuminate\Http\JsonResponse
    {
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'address' => 'required|string|max:255',
            'city' => 'required|string|max:255',
            'postal_code' => 'required|string|max:20',
            'phone' => 'nullable|string|max:30',
            'is_active' => 'boolean',
        ]);

        $site = \App\Models\Site::create($validated);

        return response()->json($site, 201);
    }

    /**
     * GET /api/sites/{id}
     * Retrieve a specific site.
     * @param int $id
     * @return \Illuminate\Http\JsonResponse
     */
    public function show(int $id): \Illuminate\Http\JsonResponse
    {
        $site = \App\Models\Site::findOrFail($id);
        return response()->json($site);
    }

    /**
     * PUT /api/sites/{id}
     * Update a specific site.
     * @param Request $request
     * @param int $id
     * @return \Illuminate\Http\JsonResponse
     */
    public function update(Request $request, int $id): \Illuminate\Http\JsonResponse
    {
        $site = \App\Models\Site::findOrFail($id);

        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'address' => 'required|string|max:255',
            'city' => 'required|string|max:255',
            'postal_code' => 'required|string|max:20',
            'phone' => 'nullable|string|max:30',
            'is_active' => 'boolean',
        ]);

        $site->update($validated);

        return response()->json($site);
    }

    /**
     * DELETE /api/sites/{id}
     * Delete a specific site.
     * @param int $id
     * @return \Illuminate\Http\JsonResponse
     */
    public function destroy(int $id): \Illuminate\Http\JsonResponse
    {
        $site = \App\Models\Site::findOrFail($id);
        $site->delete();
        return response()->json(null, 204);
    }
}
