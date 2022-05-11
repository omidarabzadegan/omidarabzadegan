@extends('layouts.admin.master')

@section('content')
    <div class="container-sm shadow p-3 mb-5 bg-white rounded" style="margin-top:8%">
        @include('errors.message')
        <h3>Add Experience</h3>
        <hr>
        <form action="{{ Route('store.experience') }}" method="post">
            @csrf
            <div class="form-row">
                <div class="col mb-4">
                    <p>Title</p>
                    <input type="text" class="form-control" name="title">
                </div>
                <div class="col mb-4">
                    <p>Company</p>
                    <input type="text" class="form-control" name="company">
                </div>
                <div class="col mb-4">
                    <p>Year</p>
                    <input type="date" id="start" name="year" 
                    value="2017-07-07" 
                    min="2015-01-01" 
                    max="2025-12-31">
                </div>
            </div>
            <div class="form-row">
                <div class="col mb-5">
                    <p>About</p>
                    <textarea class="form-control" id="editor" name="about" rows="3"></textarea>
                </div>
            </div>
            <button class="btn btn-primary" type="submit">submit</button>

        </form>


    </div>
@endsection
