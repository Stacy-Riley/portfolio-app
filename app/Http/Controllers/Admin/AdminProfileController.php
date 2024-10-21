<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Profile;
use Illuminate\Http\Request;

class AdminProfileController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $profiles = Profile::orderBy('created_at', 'desc')->get();
        return view('admin.profile.index')
            ->with('profiles', $profiles);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.profile.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $formData = $request->validate([
            'is_published' => 'required|boolean',
            'first_name' => 'required|string|max:255',
            'last_name' => 'required|string|max:255',
            'company_name' => 'required|string|max:255',
            'subtitle' => 'required|string',
            'body' => 'required|string',
            'job_titles' => 'required|string',
            'programming_skills' => 'required|string',
            'webdev_tools' => 'required|string',
            'soft_skills' => 'required|string',
            'cover_image' => 'sometimes|file|image|max:5000',
        ]);
        if($request->hasFile('cover_image')) {
            $path = $request->file('cover_image')->store('profile_images', options:'public');
            $formData['cover_image'] = $path;
        }

        //Create new Profile
        Profile::create($formData);

        return redirect()->route('profiles.index')
            ->with('success', 'Profile created successfully!');
    }

    /**
     * Display the specified resource.
     */
    public function show()
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $profile = Profile::findOrFail($id);
        return view('admin.profile.edit')
            ->with('profile', $profile);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $profile = Profile::findOrFail($id);

        $formData = $request->validate([
            'is_published' => 'required|boolean',
            'first_name' => 'required|string|max:255',
            'last_name' => 'required|string|max:255',
            'company_name' => 'required|string|max:255',
            'subtitle' => 'required|string',
            'body' => 'required|string',
            'job_titles' => 'required|string',
            'programming_skills' => 'required|string',
            'webdev_tools' => 'required|string',
            'soft_skills' => 'required|string',
            'cover_image' => 'sometimes|file|image|max:5000',
        ]);
        if($request->hasFile('cover_image')) {
            $path = $request->file('cover_image')->store('profile_images', options:'public');
            $formData['cover_image'] = $path;
        }
        $profile->update($formData);
        return redirect()->route('profiles.index')
            ->with('success', 'Profile updated successfully!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $profile = Profile::destroy($id);
        return redirect()->route('profiles.index')
            ->with('success', 'Profile deleted successfully!');
    }
}
