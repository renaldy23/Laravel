@extends('layout.master')

@section('content')
    
    <div class="d-flex justify-content-center align-items-center">
        <div class=" container border p-3 w-50 mt-4">
            <div class="d-flex justify-content-center">
                <svg width="7em" height="7em" viewBox="0 0 16 16" class="bi bi-person-circle" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                    <path d="M13.468 12.37C12.758 11.226 11.195 10 8 10s-4.757 1.225-5.468 2.37A6.987 6.987 0 0 0 8 15a6.987 6.987 0 0 0 5.468-2.63z"/>
                    <path fill-rule="evenodd" d="M8 9a3 3 0 1 0 0-6 3 3 0 0 0 0 6z"/>
                    <path fill-rule="evenodd" d="M8 1a7 7 0 1 0 0 14A7 7 0 0 0 8 1zM0 8a8 8 0 1 1 16 0A8 8 0 0 1 0 8z"/>
                </svg>
            </div>
            <h2 class="text-center mt-3">Profile</h2>
            <form action="/pendaftar" method="post">
                <div class="form-group">
                        <label for="name">Name</label>
                        <input type="text" name="name" id="name" readonly value="{{ Auth::user()->name }}" class="form-control">
                </div>

                <div class="form-group">
                        <label for="email">Email</label>
                        <input type="text" name="email" id="email" readonly value="{{ Auth::user()->email }}" class="form-control">
                </div>
                <a href="/pendaftar" class="btn btn-primary">
                    <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-backspace" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                        <path fill-rule="evenodd" d="M6.603 2h7.08a1 1 0 0 1 1 1v10a1 1 0 0 1-1 1h-7.08a1 1 0 0 1-.76-.35L1 8l4.844-5.65A1 1 0 0 1 6.603 2zm7.08-1a2 2 0 0 1 2 2v10a2 2 0 0 1-2 2h-7.08a2 2 0 0 1-1.519-.698L.241 8.65a1 1 0 0 1 0-1.302L5.084 1.7A2 2 0 0 1 6.603 1h7.08zM5.829 5.146a.5.5 0 0 0 0 .708L7.976 8l-2.147 2.146a.5.5 0 0 0 .707.708l2.147-2.147 2.146 2.147a.5.5 0 0 0 .707-.708L9.39 8l2.146-2.146a.5.5 0 0 0-.707-.708L8.683 7.293 6.536 5.146a.5.5 0 0 0-.707 0z"/>
                    </svg>
                    Back
                </a>
            </form>
        </div>
    </div>

@endsection