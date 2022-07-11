@extends('layouts.dashboard')
@section('title')
    Add new Brands
@endsection
@section('content')
    <div class="g-col-12 mt-8">
        <div class="row">
            <div class="col-md-8 mx-auto">
                <div class="intro-y">
                    <div class="intro-y box">
                        <form action="{{ route('user.brand.store') }}" method="POST" enctype="multipart/form-data">
                            @csrf
                            <div class="row">
                                <div class="col-md-12">
                                    <div
                                        class="d-flex flex-column flex-sm-row align-items-center p-5 border-bottom border-gray-200 dark-border-dark-5">
                                        <h2 class="fw-medium fs-base me-auto">
                                            Add Brands
                                        </h2>
                                    </div>
                                    <div id="vertical-form" class="p-5">
                                        <div class="row">
                                            <div class="col-md-12">
                                                <x-input name="title" label="Title: " type="text" value="" />
                                            </div>
                                            <div class="col-md-12">
                                                <x-input name="icon" label="Icon" type="file" value="" />
                                            </div>
                                            <div class="col-md-12">
                                                <div class="input-form mt-3">
                                                    <label for="short_description" class="form-label"> Short Description </label>
                                                    <textarea id="short_description" class="form-control" name="short_description" minlength="10"></textarea>
                                                </div>
                                            </div>
                                            <div class="col-md-12">
                                                <div class="input-form mt-3">
                                                    <label for="description" class="form-label"> Description </label>
                                                    <textarea id="description" class="form-control" name="description" minlength="10"></textarea>
                                                </div>
                                            </div>
                                        </div>
                                        <button class="btn btn-primary mt-5">Add new Brands</button>
                                    </div>

                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
