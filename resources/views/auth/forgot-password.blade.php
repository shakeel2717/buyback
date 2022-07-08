@extends('layouts.auth')
@section('form')
    <div class="g-col-2 g-col-xl-1 h-screen h-xl-auto d-flex py-5 py-xl-0 my-10 my-xl-0">
        <div
            class="my-auto mx-auto ms-xl-20 bg-white dark-bg-dark-1 bg-xl-transparent px-5 px-sm-8 py-8 p-xl-0 rounded-2 shadow-md shadow-xl-none w-full w-sm-3/4 w-lg-2/4 w-xl-auto">
            <h2 class="intro-x fw-bold fs-2xl fs-xl-3xl text-center text-xl-start">
                Sign in
            </h2>
            <div class="intro-x mt-2 text-gray-500 d-xl-none text-center">{{ env('APP_DESC') }}</div>
            <form action="{{ route('password.email') }}" method="POST">
                @csrf
                <div class="intro-x mt-8">
                    <input type="text" name="email"
                        class="intro-x login__input form-control py-3 px-4 border-gray-300 d-block" placeholder="Email"
                        value="{{ old('email') }}" autofocus required>
                </div>
                <div class="intro-x mt-5 mt-xl-8 text-center text-xl-start">
                    <button class="btn btn-primary py-3 px-4 w-full me-xl-3 align-top">Email Password Reset Link</button>
                </div>
            </form>
            <div class="intro-x mt-10 mt-xl-24 text-gray-700 dark-text-gray-600 text-center text-xl-start">
                <br>
                <a href="{{ route('login') }}">Try Login in?</a>
            </div>
        </div>
    </div>
@endsection
