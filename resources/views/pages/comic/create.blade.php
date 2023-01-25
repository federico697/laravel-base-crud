@extends('layouts.app')
@section('title-page', 'welcome')
@section('main-content')
    <h1>welcome</h1>
    <form action="{{ route('comics.store') }}" method="POST">
        @csrf
        <div class="mb-3">
            <label class="form-label" for="">Title</label>
            <input class="form-control" type="text" name="title">
        </div>
        <div class="mb-3">
            <label class="form-label" for="">Description</label>
            <textarea class="form-control" name="description"></textarea>
        </div>
        <div class="mb-3">
            <label class="form-label" for="">Thumb</label>
            <input class="form-control" type="text" name="thumb">
        </div>
        <div class="mb-3">
            <label class="form-label" for="">Price</label>
            <input class="form-control" type="number" name="price" step="0.01">
        </div>
    </form>
@endsection