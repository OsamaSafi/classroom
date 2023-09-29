@extends('layouts.master')

@section('content')
<div class="container">
    @if (session()->has('info'))
    <div class="alert alert-info alert-dismissible fade show" role="alert">
        {{ session('info')}}
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>
    @endif

    <h1>Classrooms</h1>
    <div class="row">
        @foreach ($classrooms as $classroom)
        <div class=" col-md-3">
            <div class="card" style="">
                <img src="{{ $classroom->cover_image }}" class="card-img-top" alt="">
                <div class="card-body">
                    <h5 class="card-title">{{ $classroom->name }}</h5>
                    <p class="card-text">{{ $classroom->section }} - {{ $classroom->room }}</p>
                    <a href="{{ route('classrooms.show',$classroom->id) }}" class="btn  btn-primary">View</a>
                    <a href="{{ route('classrooms.edit', $classroom->id) }}" class="btn  btn-success">Edit</a>
                    <form action="{{ route('classrooms.destroy',$classroom->id) }}" method="POST">
                        @csrf
                        @method('delete')
                        <button type="submit" class="btn btn-danger">delete</button>
                    </form>
                </div>
            </div>
        </div>
        @endforeach
    </div>
</div>
@endsection

@push('styles')

@endpush
@push('scripts')

@endpush
