@extends('layouts.app')

@section('content')

    <section class="form-screen-transition mr-5">
        <div class="container">
            <div class="row">
                <div class="col-12 col-lg-10 offset-md-2-5">
                    <h1 class="text-center ml-4 mt-5">New Service</h1>
                </div>
            </div>
            <div class="row">
                <div class="col-12 col-lg-10 offset-md-2-5">
                    <form action="{{ route('admin.service.store') }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="row">
                            <div class=" mb-4">
                                <div class="pl-0">
                                    <label class="form-label">Title</label>
                                    <input type="text" class="form-control" name="title" placeholder="" required>
                                </div>

                            </div>
                        </div>
                        <div class="row">
                            <div>
                                <div class="mb-3">
                                    <label class="form-label">Service Content</label>
                                    <textarea id="summernote" name="body" ></textarea>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="d-flex justify-content-between p-0 m-0">
                                <div class="col-md-3">
                                    <div class="form-label">Publish</div>
                                    <select class="form-select" name="is_published">
                                        <option value="1">Yes</option>
                                        <option value="0">No</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="row ">
                            <div class="my-5">
                                <div class="d-flex justify-content-center ">
                                    <div class="mx-4">
                                        <a href="/admin/service" type="button" class="btn mr-2 admin-form-button"><< Back </a>
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
