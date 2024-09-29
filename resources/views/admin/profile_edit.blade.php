@extends('layouts.app')

@section('content')

    <section class="form-screen-transition mr-5">
        <div class="container">
            <div class="row">
                <div class="col-12 col-lg-10 offset-md-2-5">
                    <h1 class="text-center ml-4 mt-5">Edit Profile</h1>
                </div>
            </div>
            <div class="row">
                <div class="col-12 col-lg-10 offset-md-2-5">
                    <form action="{{ route('admin.profile.update', $profile->id) }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        @method('PUT')
                        <div class="row">
                            <div class="d-flex justify-content-between p-0 m-0">
                                <div class="col-md-3 p-0 m-0 mb-3">
                                    <label class="form-label">First Name</label>
                                    <input type="text" class="form-control" name="first_name" value="{{ $profile->first_name }}" required>
                                </div>
                                <div class="col-md-3 mb-3">
                                    <label class="form-label">Last Name</label>
                                    <input type="text" class="form-control" name="last_name" value="{{ $profile->last_name }}" required>
                                </div>
                                <div class="col-md-3">
                                    <div class="form-label">Publish</div>
                                    <select class="form-select" name="is_published">
                                        <option value="1" {{ $profile->is_published == 1 ? 'selected' : '' }}>Yes</option>
                                        <option value="0" {{ $profile->is_published == 0 ? 'selected' : '' }}>No</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="d-flex justify-content-between p-0">
                                <div class="col-md-5 p-0 m-0 mb-3">
                                    <label class="form-label">Company Name</label>
                                    <input type="text" class="form-control" name="company_name" value="{{ $profile->company_name }}" required>
                                </div>
                                <div class="col-md-5">
                                    <label class="form-label">Job Title</label>
                                    <input type="text" class="form-control" name="job_titles" value="{{ $profile->job_titles }}" required>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div>
                                <div class="mb-3">
                                    <label class="form-label">Programming Skills (separate with commas)</label>
                                    <input type="text" class="form-control" name="programming_skills" value="{{ $profile->programming_skills }}" required>
                                </div>
                                <div class="mb-3">
                                    <label class="form-label">Web Development Tools (separate with commas)</label>
                                    <input type="text" class="form-control" name="webdev_tools" value="{{ $profile->webdev_tools }}" required>
                                </div>
                                <div class="mb-3">
                                    <label class="form-label">Soft Skills (separate with commas)</label>
                                    <input type="text" class="form-control" name="soft_skills" value="{{ $profile->soft_skills }}" required>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div>
                                <div class="mb-3">
                                    <label class="form-label">Current Image</label>
                                    <div>
                                        @if($profile->cover_image)
                                            {{ basename($profile->cover_image) }}
                                        @else
                                            No image uploaded.
                                        @endif
                                    </div>
                                    <br>
                                    <label class="form-label">Upload New Image (optional)</label>
                                    <input type="file" class="form-control" name="cover_image">
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div>
                                <div class="mb-3">
                                    <label class="form-label">Heading for About Page</label>
                                    <input type="text" class="form-control" name="subtitle" value="{{ $profile->subtitle }}" required>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div>
                                <div class=" mb-3">
                                    <label class="body-label">Body for About Page</label>
                                    <textarea id="summernote" name="body" >
                                        {!! $profile->body !!}
                                    </textarea>
                                </div>
                            </div>
                        </div>
                        <div class="row ">
                            <div class="my-5">
                                <div class="d-flex justify-content-center ">
                                    <div class="mx-4">
                                        <a href="/admin/profile" type="button" class="btn mr-2 admin-form-button"><< Back </a>
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
