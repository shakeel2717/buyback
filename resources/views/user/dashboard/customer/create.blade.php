@extends('layouts.dashboard')
@section('title')
    Dashboard
@endsection
@section('content')
    <div class="g-col-12 mt-8">
        <div class="row">
            <div class="col-md-8 mx-auto">
                <div class="intro-y">
                    <div class="intro-y box">
                        <form action="{{ route('user.customer.store') }}" method="POST">
                            @csrf
                            <div class="row">
                                <div class="col-md-12">
                                    <div
                                        class="d-flex flex-column flex-sm-row align-items-center p-5 border-bottom border-gray-200 dark-border-dark-5">
                                        <h2 class="fw-medium fs-base me-auto">
                                            Add Customer
                                        </h2>
                                    </div>
                                    <div id="vertical-form" class="p-5">
                                        <div class="row">
                                            <div class="col-md-6">
                                                <x-input name="fname" label="First Name" type="text" value="" />
                                            </div>
                                            <div class="col-md-6">
                                                <x-input name="lname" label="Last Name" type="text" value="" />
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <x-input name="company" label="Company Name" type="text"
                                                    value="" />
                                            </div>
                                            <div class="col-md-6">
                                                <x-input name="email" label="Email" type="email" value="" />
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <x-input name="phone" label="Phone" type="text" value="" />
                                            </div>
                                            <div class="col-md-6">
                                                <x-input name="password" label="Password" type="password" value="" />
                                            </div>
                                            <div class="col-md-12">
                                                <div class="input-form mt-3">
                                                    <label for="note" class="form-label"> Note </label>
                                                    <textarea id="note" class="form-control" name="note" minlength="10"></textarea>
                                                </div>
                                            </div>
                                            <br>
                                            <div class="col-md-12">
                                                <div class="input-form mt-3">
                                                    <label for="address" class="form-label"> Address line 1 </label>
                                                    <textarea id="address" class="form-control" name="address" minlength="10" required></textarea>
                                                </div>
                                            </div>
                                            <div class="col-md-12">
                                                <div class="input-form mt-3">
                                                    <label for="address_line" class="form-label"> Address line 2 </label>
                                                    <textarea id="address_line" class="form-control" name="address_line" minlength="2"></textarea>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <x-input name="city" label="City" type="text" value="" />
                                            </div>
                                            <div class="col-md-6">
                                                <x-input name="post_code" label="Post Code" type="text" value="" />
                                            </div>
                                        </div>
                                        <button class="btn btn-primary mt-5">Add new Customer</button>
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
