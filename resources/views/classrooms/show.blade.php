@extends('layouts.master')


@section('content')
<div class="container">
    <h1> {{ $classroom->name }} - ({{ $classroom->id }})</h1>
    <h4 class="pb-3">{{ $classroom->section }}</h3>
        <div class="row">
            <div class="col-md-3">
                <div class="rounded border p-3 text-center">
                    <span class="fs-3 text-success">{{ $classroom->code }}</span>
                </div>
            </div>
            <div class="col-md-9"></div>
        </div>
</div>
@endsection
