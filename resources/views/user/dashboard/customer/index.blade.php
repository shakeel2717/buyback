@extends('layouts.dashboard')
@section('title')
    Dashboard
@endsection
@section('content')
    <div class="g-col-12 mt-8">
        <livewire:user.all-customer/>
    </div>
@endsection
