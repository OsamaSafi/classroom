@extends('layouts.master')


@section('content')
<div class="container">
    <h1>edit {{ $classroom->id }}</h1>
    <form action="{{ route('classrooms.update',$classroom->id) }}" method="post">
        @csrf
        @method('PUT')
        <div class="form-floating mb-3">
            <input type="text" class="form-control" id="name" name="name" value="{{ $classroom->name }}"
                placeholder="name class">
            <label for="name">ClassRoom Name</label>
        </div>
        <div class="form-floating mb-3">
            <input type="text" class="form-control" id="section" name="section" value="{{ $classroom->section }}"
                placeholder="section">
            <label for="section">Section</label>
        </div>
        <div class="form-floating mb-3">
            <input type="text" class="form-control" id="subject" name="subject" value="{{ $classroom->section }}"
                placeholder="subject">
            <label for="subject">subject</label>
        </div>
        <div class="form-floating mb-3">
            <input type="text" class="form-control" id="room" name="room" value="{{ $classroom->room }}"
                placeholder="room">
            <label for="room">Room</label>
        </div>
        <div class="form-floating mb-3">
            <input type="file" class="form-control" id="cover_image_path" value="{{ $classroom->cover_image_path }}"
                name="cover_image_path" placeholder="cover_image_path">
            <label for="cover_image_path">cover_image</label>
        </div>
        <button type="submit" class="btn btn-primary"> Update Room </button>
    </form>
</div>
@endsection

