@extends('layouts.admin.master')
@section('content')
<div class="container-sm shadow p-3 mb-5 bg-white rounded" style="margin-top:8%">
    @include('errors.message')
        <h3>User update</h3>
        <hr>
        <form action="{{ Route('user.update' , $user['id'])}}" method="post">
            @csrf
            @method('put')
            <div class="form-row">
                <div class="col mb-5">
                    <p>name</p>
                    <input type="text" class="form-control" name="name" value="{{  $user->name }}">
                </div>
                <div class="col mb-5">
                    <p>email</p>
                    <input type="text" class="form-control" name="email" value="{{ $user->email }}">
                </div>
            </div>
            <div class="form-row">
                <div class="col mb-5">
                    <p>phone</p>
                    <input type="text" class="form-control" name="phone" value="{{ $user->specification->phone }}">
                </div>
                <div class="col mb-5">
                    <p>perfetion</p>
                    <input type="text" class="form-control" name="perfetion" value="{{ $user->specification->perfetion }}">
                </div>
            </div>
            <div class="form-row">
                <div class="col mb-5">
                    <p>about</p>
                    <textarea class="form-control" id="editor"name="about" rows="3">{{ $user->specification->about }}</textarea>
                </div>
            </div>
            <button class="btn btn-primary" type="submit">Update</button>
        </form>
    </div>

@endsection
