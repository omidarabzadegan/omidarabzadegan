@extends('layouts.admin.master')

@section('content')

<div class="container-sm shadow p-3 mb-5 bg-white rounded" style="margin-top:8%">
    <center>
        <iframe src="{{ route('front') }}" height="700px" width="980px" title="Iframe Example"></iframe>
    </center>
</div>
@endsection