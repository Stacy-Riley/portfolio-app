<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Project;
use Illuminate\Http\Request;

class AdminProjectController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function reorder(Request $request)
    {
        $sortedIDs = $request->input('sortedIDs');


        foreach ($sortedIDs as $index => $id) {
            Project::where('id', $id)->update(['priority' => $index + 1]);
        }

        return response()->json(['success' => 'The project has been reordered successfully!']);

    }
    public function index()
    {
        $projects = Project::orderBy('priority', 'asc')->get();
        return view('admin.project_index')
            ->with('projects', $projects);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.project_create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $formData = $request->validate([
            'title' => 'required|string',
            'subtitle' => 'required|string',
            'body' => 'required|string',
            'client' => 'required|string',
            'category' => 'required|string',
            'cover_image' => 'sometimes|file|image|max:5000',
            'publish_date' => 'required|date',
            'project_url' => 'required|url',
            'code_url' => 'nullable|url',
            'is_published' => 'required|boolean',
        ]);

        if($request->hasFile('cover_image')) {
            $path = $request->file('cover_image')->store('project_images', 'public');
            $formData['cover_image'] = $path;

        }
        Project::create($formData);
        return redirect('admin/project')
            ->with('success', 'The project has been added successfully!');
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
        $project = Project::findOrFail($id);
        return view('admin.project_edit')
            ->with('project', $project);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {

        $project = Project::findOrFail($id);

        $formData = $request->validate([
            'title' => 'required|string',
            'subtitle' => 'required|string',
            'body' => 'required|string',
            'client' => 'required|string',
            'category' => 'required|string',
            'cover_image' => 'sometimes|file|image|max:5000',
            'publish_date' => 'required|date',
            'project_url' => 'required|url',
            'code_url' => 'nullable|url',
            'is_published' => 'required|boolean',
        ]);
        if ($request->hasFile('cover_image')) {
            $path = $request->file('cover_image')->store('project_images', 'public');
            $formData['cover_image'] = $path;
        }

            $project->update($formData);

            return redirect('admin/project')
                ->with('success', 'The project has been updated successfully!');

    }
    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $project = Project::destroy($id);
        return redirect('admin/project')
            ->with('success', 'The project has been deleted successfully!');
    }
}
