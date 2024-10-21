<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Testimonial;
use Illuminate\Http\Request;

class AdminTestimonialController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function reorder(Request $request)
    {
        $sortedIDs = $request->input('sortedIDs');


        foreach ($sortedIDs as $index => $id) {
            Testimonial::where('id', $id)->update(['priority' => $index + 1]);
        }

        return response()->json(['success' => 'The testimonial has been reordered successfully!']);

    }
    public function index()
    {
        $testimonials = Testimonial::orderBy('priority', 'asc')->get();
        return view('admin.testimonial.index')
            ->with('testimonials', $testimonials);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.testimonial.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $formData = $request->validate([
            'author' => 'required | string',
            'body' => 'required | string',
            'job_title' => 'required | string',
            'is_published' => 'required | boolean',
        ]);
        Testimonial::create($formData);
        return redirect()->route('testimonials.index')
            ->with('success', 'Testimonial has been added successfully!');
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
        $testimonial = Testimonial::findOrFail($id);
        return view('admin.testimonial.edit')
            ->with('testimonial', $testimonial);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $testimonial = Testimonial::findOrFail($id);
        $formData = $request->validate([
            'author' => 'required | string',
            'body' => 'required | string',
            'job_title' => 'required | string',
            'is_published' => 'required | boolean',
        ]);
        $testimonial->update($formData);
        return redirect()->route('testimonials.index')
            ->with('success', 'Testimonial has been updated successfully!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $testimonial = Testimonial::destroy($id);
        return redirect()->route('testimonials.index')
            ->with('success', 'Testimonial has been deleted successfully!');
    }
}
