<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Blog;
use Illuminate\Http\Request;

class AdminBlogController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $blogs = Blog::orderBy('publish_date', 'desc')->paginate(10);
        return view('admin.blog.index')
            ->with('blogs', $blogs);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.blog.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $formData = $request->validate([
            'category' => 'required|max:255',
            'author' => 'sometimes|max:255',
            'title' => 'required|max:255',
            'publish_date' => 'required|max:255',
            'cover_image' => 'sometimes|file|image|max:5000',
            'body' => 'required | string',
            'is_published' => 'required|boolean',
        ]);

        if($request->hasFile('cover_image')) {
            $path = $request->file('cover_image')->store('blog_images', 'public');
            $formData['cover_image'] = $path;
        }

        Blog::create($formData);
        return redirect()->route('blogs.index')
            ->with('success', 'New Blog created successfully!');
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
        $blog = Blog::findOrFail($id);
        return view('admin.blog.edit')
            ->with('blog', $blog);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $blog = Blog::findOrFail($id);
        $formData = $request->validate([
            'category' => 'required|max:255',
            'author' => 'sometimes|max:255',
            'title' => 'required|max:255',
            'publish_date' => 'required|max:255',
            'cover_image' => 'sometimes|file|image|max:5000',
            'body' => 'required | string',
            'is_published' => 'required|boolean',
        ]);
        if($request->hasFile('cover_image')) {
            $path = $request->file('cover_image')->store('blog_images', 'public');
            $formData['cover_image'] = $path;
        }
        $blog->update($formData);
        return redirect()->route('blogs.index')
            ->with('success', 'Blog updated successfully!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $blog = Blog::destroy($id);
        return redirect()->route('blogs.index')
            ->with('success', 'Blog deleted successfully!');
    }
}
