@extends('layouts.master')

@section('content')

<div class="container">
    <h1>Create ClassRoom</h1>
    <form action="{{ route('classrooms.store') }}" method="post" enctype="multipart/form-data">
        @csrf
        <div class="form-floating mb-3">
            <input type="text" class="form-control" id="name" name="name" placeholder="name class">
            <label for="name">Name</label>
        </div>
        <div class="form-floating mb-3">
            <input type="text" class="form-control" id="section" name="section" placeholder="section">
            <label for="section">Section</label>
        </div>
        <div class="form-floating mb-3">
            <input type="text" class="form-control" id="subject" name="subject" placeholder="subject">
            <label for="subject">subject</label>
        </div>
        <div class="form-floating mb-3">
            <input type="text" class="form-control" id="room" name="room" placeholder="room">
            <label for="room">Room</label>
        </div>
        <div class="form-floating mb-3">
            <input type="file" class="form-control" id="cover_image" name="cover_image" placeholder="cover_image">
            <label for="cover_image">cover_image</label>
        </div>
        <button type="submit" class="btn btn-primary"> Create </button>
    </form>
</div>
@endsection