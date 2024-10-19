@extends('layouts.app')

@section('admin_custom_styles')
    <link rel="stylesheet" href="//cdn.datatables.net/2.1.4/css/dataTables.dataTables.min.css">
@endsection

@section('content')

    <section class="form-screen-transition mr-5 ">
        <div class="container">
            <div class="row">
                <div class="col-12 col-lg-10 offset-md-2-5 mb-4">
                    <h1 class="text-center ml-4 mt-5">Contact Form Submissions</h1>
                </div>
                <div class="row">
                    @if(session('success'))
                        <div class="col-12 col-lg-4 offset-md-2-5 alert alert-success" role="alert">
                            {{ session('success') }}
                        </div>
                    @endif
                </div>
                <div class="row" id="message-row"></div>
            </div>
            <div class="row">
                <div class="col-12 col-lg-10 offset-md-2-5 card">
                    <div>
                        <div class="table-responsive pb-0 mb-2">
                            <table id="cbsDataTable" class="table card-table table-vcenter text-nowrap datatable">
                                <thead class="border-2">
                                <tr>
                                    <th>Name</th>
                                    <th>Subject</th>
                                    <th>Received Date</th>
                                    <th></th>
                                    <th></th>
                                </tr>
                                </thead>
                                <tbody id="sortable" class="border-2">
                                @foreach($contacts as $index=> $contact)
                                    <tr data-id="{{ $contact->id }}">
                                        <td>
                                            {{$contact->name}}
                                        </td>
                                        <td>
                                            {{$contact->subject}}
                                        </td>
                                        <td>
                                            {{ \Carbon\Carbon::parse($contact->created_at)->format('m/d/Y') }}
                                        </td>
                                        <td >
                                            <a class="btn" href="{{ route('admin.contact.show', $contact->id) }}" aria-label="view contact">
                                              View
                                            </a>
                                        </td>
                                        <td>
                                            <form action="{{ route('admin.contact.delete', [$contact->id]) }}" method="POST">
                                                @csrf
                                                @method('DELETE')
                                                <button class="btn" type="submit" onclick="return confirm('Are you sure you want to delete this contact?')" aria-label="delete contact">
                                                    Delete
                                                </button>
                                            </form>
                                        </td>
                                    </tr>
                                @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection

@section('admin_custom_scripts')
    <script src="//cdn.datatables.net/2.1.4/js/dataTables.min.js">

    </script>

    <script>
        let table = new DataTable('#cbsDataTable',{
            // This disables the table from overriding the controller
            order: false
        });
    </script>
    {{--    Function to fade out the login message--}}
    <script>
        document.addEventListener('DOMContentLoaded', function(){
            setTimeout(function() {
                let alert = document.querySelector('.alert-success');
                if(alert) {
                    alert.style.transition = 'opacity 1s ease';
                    alert.style.opacity = '0';
                    setTimeout(function() {
                        alert.remove();
                    }, 1000);
                }
            },3000);
        })
    </script>
@endsection

