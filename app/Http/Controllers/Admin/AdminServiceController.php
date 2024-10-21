<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Service;
use Illuminate\Http\Request;

class AdminServiceController extends Controller
{
    public function reorder(Request $request)
    {
        $sortedIDs = $request->input('sortedIDs');


        foreach ($sortedIDs as $index => $id) {
            Service::where('id', $id)->update(['priority' => $index + 1]);
        }

        return response()->json(['success' => 'The service has been reordered successfully!']);

    }
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $services = Service::orderBy('priority', 'asc')
            ->get();

        return view('admin.service.index')
            ->with('services', $services);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {

        return view('admin.service.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $formData = $request->validate([
            'title' => 'required|string',
            'body' => 'required|string',
            'is_published' => 'required|boolean',
        ]);

        Service::create($formData);
        return redirect()->route('services.index')
            ->with('success', 'The service has been added successfully!');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $service = Service::findOrFail($id);
        return view('admin.service.edit')
            ->with('service', $service);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $service = Service::findOrFail($id);
        $formData = $request->validate([
            'title' => 'required|string',
            'body' => 'required|string',
            'is_published' => 'required|boolean',
        ]);
        $service->update($formData);
        return redirect()->route('services.index')
            ->with('success', 'The service has been updated successfully!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $service = Service::destroy($id);
        return redirect()->route('services.index')
            ->with('success', 'The service has been deleted successfully!');
    }
}
