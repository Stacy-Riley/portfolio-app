@extends('layouts.app')

@section('content')

    <section class="form-screen-transition mr-5">
        <div class="container">
            <div class="row">
                <div class="col-12 col-lg-10 offset-md-2-5">
                    <h1 class="text-center ml-4 mt-5">View Contact</h1>
                </div>
            </div>
            <div class="row">
                <div class="col-12 col-lg-10 offset-md-2-5">
{{--                    <form action="{{ route('admin.profile.store') }}" method="POST" enctype="multipart/form-data">--}}
{{--                        @csrf--}}
                        <div class="row">
                            <div class="d-flex justify-content-between ">
                                <div class="col-md-4 p-0 m-0 mb-3">
                                    <label class="form-label">Name</label>
                                    <input type="text" class="form-control" name="first_name" value="{{ $contact->name }}" >
                                </div>
                                <div class="col-md-4 mb-3">
                                    <label class="form-label">Email</label>
                                    <input type="text" class="form-control" name="email" value="{{ $contact->email }}" >
                                </div>
                                <div class="col-md-3 pr-0 mb-3">
                                    <label class="form-label">Phone Number</label>
                                    <input type="text" class="form-control" name="phone" value="{{ $contact->phone }}" >
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div>
                                <div class="mb-3">
                                    <label class="form-label">Subject</label>
                                    <input type="text" class="form-control" name="subject" value="{{ $contact->subject }}">
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div>
                                <div class=" mb-3">
                                    <label class="form-label">Message</label>
                                    <textarea id="summernote" name="message" >
                                        {{ $contact->message }}
                                    </textarea>
                                </div>
                            </div>
                        </div>
                        <div class="row ">
                            <div class="my-5">
                                <div class="d-flex justify-content-center ">
                                    <div class="mx-4">
                                        <a href="/admin/contact" type="button" class="btn mr-2 admin-form-button"><< Back </a>
                                    </div>
                                    <div class="mx-4">
                                        <form action="{{route('admin.contact.delete',[$contact->id])}}" method="POST">
                                            @method('DELETE')
                                            @csrf
                                            <button class="btn mr-2 admin-form-button" type="submit" onclick="if (!confirm('Are you sure you want to delete this contact?')) { return false }" aria-label="delete contact">
                                                Delete
                                            </button>
                                        </form>
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
                height: 200,
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
