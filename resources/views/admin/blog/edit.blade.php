@extends('layouts.app')

@section('content')

    <section class="form-screen-transition mr-5">
        <div class="container">
            <div class="row">
                <div class="col-12 col-lg-10 offset-md-2-5">
                    <h1 class="text-center ml-4 mt-5">Edit Blog Post</h1>
                </div>
            </div>
            <div class="row">
                <div class="col-12 col-lg-10 offset-md-2-5">
                    <form action="{{ route('blogs.update', $blog->id) }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        @method('PUT')
                        <div class="row">
                            <div class="d-flex justify-content-between flex-wrap ">
                                <div class="col-12 col-md-5 p-0 m-0 mb-3">
                                    <label class="form-label">Category</label>
                                    <input type="text" class="form-control" name="category" value="{{ $blog->category }}" required>
                                </div>
                                <div class="col-12 col-md-5 p-0 m-0 mb-3">
                                    <label class="form-label">Author</label>
                                    <input type="text" class="form-control" name="author" value="{{ $blog->author }}">
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="d-flex justify-content-between flex-wrap ">
                                <div class="col-12 col-md-9 p-0 m-0 mb-3">
                                    <label class="form-label">Title</label>
                                    <input type="text" class="form-control" name="title" value="{{ $blog->title }}" required>
                                </div>
                                <div class="col-12 col-md-2 p-0 m-0 mb-3">
                                    <label class="form-label">Publish Date</label>
                                    <div class="input-icon mb-2">
                                        <input class="form-control " placeholder="Select a date" id="datepicker-icon" value="{{ $blog->publish_date }}" name="publish_date"/>
                                        <span class="input-icon-addon"><!-- Download SVG icon from http://tabler-icons.io/i/calendar -->
                                            <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M4 7a2 2 0 0 1 2 -2h12a2 2 0 0 1 2 2v12a2 2 0 0 1 -2 2h-12a2 2 0 0 1 -2 -2v-12z" /><path d="M16 3v4" /><path d="M8 3v4" /><path d="M4 11h16" /><path d="M11 15h1" /><path d="M12 15v3" /></svg>
                                        </span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div>
                                <div class="mb-3">
                                    <label class="form-label">Current Image</label>
                                    <div>
                                        @if($blog->cover_image)
                                            {{ basename($blog->cover_image) }}
                                        @else
                                            No image uploaded.
                                        @endif
                                    </div>
                                    <br>
                                    <label class="form-label">Upload New Image (optional)</label>
                                    <input type="file" class="form-control" name="cover_image" value="{{ $blog->cover_image }}">
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div>
                                <div class=" mb-3">
                                    <label class="form-label">Blog Post Content</label>
                                    <textarea id="summernote" name="body" >
                                        {!! $blog->body !!}
                                    </textarea>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="d-flex justify-content-between p-0 m-0">
                                <div class="col-md-3">
                                    <div class="form-label">Publish</div>
                                    <select class="form-select" name="is_published">
                                        <option value="1" {{ $blog->is_published == 1 ? 'selected' : '' }}>Yes</option>
                                        <option value="0" {{ $blog->is_published == 0 ? 'selected' : '' }}>No</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="row ">
                            <div class="my-5">
                                <div class="d-flex justify-content-center ">
                                    <div class="mx-4">
                                        <a href="{{ route('blogs.index') }}" type="button" class="btn mr-2 admin-form-button"><< Back </a>
                                    </div>
                                    <div class="mx-4">
                                        <input type="submit" value="Save" class="btn ml-2 admin-form-button"/>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>
@endsection

@section('admin_custom_scripts')


    {{--// SummerNote--}}
    <script>
        $(document).ready(function() {
            $('#summernote').summernote({
                height: 300,
                toolbar: [
                    // [groupName, [list of button]]
                    ['style', ['bold', 'italic', 'underline', 'clear']],
                    ['font', ['strikethrough']],
                    ['fontname', ['fontname']],
                    ['fontsize', ['fontsize']],
                    ['height', ['height']],
                    ['color', ['color']],
                    ['backcolor', ['backcolor']],
                    ['table', ['table']],
                    ['para', ['paragraph','ul', 'ol',]],
                    ['undo', ['undo']],
                    ['redo', ['redo']],
                ],
            });
        });
    </script>
@endsection
