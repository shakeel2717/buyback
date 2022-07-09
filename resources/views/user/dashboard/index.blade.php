@extends('layouts.dashboard')
@section('title')
    Dashboard
@endsection
@section('content')
    <div class="g-col-12 mt-8">
        <div class="intro-y d-flex align-items-center h-10">
            <h2 class="fs-lg fw-medium truncate me-5">
                Orders
            </h2>
        </div>
        <div class="grid columns-12 gap-6 mt-5">
            <div class="g-col-12 g-col-sm-6 g-col-xl-3 intro-y">
                <div class="report-box zoom-in">
                    <div class="box p-5">
                        <div class="d-flex">
                            <i data-feather="shopping-cart" class="report-box__icon text-theme-10"></i>
                        </div>
                        <div class="report-box__total fs-3xl fw-medium mt-6">0</div>
                        <div class="fs-base text-gray-600 mt-1">Awaiting Orders</div>
                    </div>
                </div>
            </div>
            <div class="g-col-12 g-col-sm-6 g-col-xl-3 intro-y">
                <div class="report-box zoom-in">
                    <div class="box p-5">
                        <div class="d-flex">
                            <i data-feather="shopping-cart" class="report-box__icon text-theme-10"></i>
                        </div>
                        <div class="report-box__total fs-3xl fw-medium mt-6">0</div>
                        <div class="fs-base text-gray-600 mt-1">Unpaid Orders</div>
                    </div>
                </div>
            </div>
            <div class="g-col-12 g-col-sm-6 g-col-xl-3 intro-y">
                <div class="report-box zoom-in">
                    <div class="box p-5">
                        <div class="d-flex">
                            <i data-feather="shopping-cart" class="report-box__icon text-theme-10"></i>
                        </div>
                        <div class="report-box__total fs-3xl fw-medium mt-6">0</div>
                        <div class="fs-base text-gray-600 mt-1">Completed Orders</div>
                    </div>
                </div>
            </div>
            <div class="g-col-12 g-col-sm-6 g-col-xl-3 intro-y">
                <div class="report-box zoom-in">
                    <div class="box p-5">
                        <div class="d-flex">
                            <i data-feather="shopping-cart" class="report-box__icon text-theme-10"></i>
                        </div>
                        <div class="report-box__total fs-3xl fw-medium mt-6">0</div>
                        <div class="fs-base text-gray-600 mt-1">Archive Orders</div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="g-col-12 mt-2">
        <div class="intro-y d-flex align-items-center h-10">
            <h2 class="fs-lg fw-medium truncate me-5">
                Devices Info
            </h2>
        </div>
        <div class="grid columns-12 gap-6 mt-5">
            <div class="g-col-12 g-col-sm-6 g-col-xl-3 intro-y">
                <div class="report-box zoom-in">
                    <div class="box p-5">
                        <div class="d-flex">
                            <i data-feather="tablet" class="report-box__icon text-theme-10"></i>
                        </div>
                        <div class="report-box__total fs-3xl fw-medium mt-6">0</div>
                        <div class="fs-base text-gray-600 mt-1">Models</div>
                    </div>
                </div>
            </div>
            <div class="g-col-12 g-col-sm-6 g-col-xl-3 intro-y">
                <div class="report-box zoom-in">
                    <div class="box p-5">
                        <div class="d-flex">
                            <i data-feather="tablet" class="report-box__icon text-theme-10"></i>
                        </div>
                        <div class="report-box__total fs-3xl fw-medium mt-6">0</div>
                        <div class="fs-base text-gray-600 mt-1">Devices</div>
                    </div>
                </div>
            </div>
            <div class="g-col-12 g-col-sm-6 g-col-xl-3 intro-y">
                <div class="report-box zoom-in">
                    <div class="box p-5">
                        <div class="d-flex">
                            <i data-feather="tablet" class="report-box__icon text-theme-10"></i>
                        </div>
                        <div class="report-box__total fs-3xl fw-medium mt-6">0</div>
                        <div class="fs-base text-gray-600 mt-1">Brands</div>
                    </div>
                </div>
            </div>
            <div class="g-col-12 g-col-sm-6 g-col-xl-3 intro-y">
                <div class="report-box zoom-in">
                    <div class="box p-5">
                        <div class="d-flex">
                            <i data-feather="tablet" class="report-box__icon text-theme-10"></i>
                        </div>
                        <div class="report-box__total fs-3xl fw-medium mt-6">0</div>
                        <div class="fs-base text-gray-600 mt-1">Categories</div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="g-col-12 mt-2">
        <div class="intro-y d-flex align-items-center h-10">
            <h2 class="fs-lg fw-medium truncate me-5">
                Customers
            </h2>
        </div>
        <div class="grid columns-12 gap-6 mt-5">
            <div class="g-col-12 g-col-sm-6 g-col-xl-3 intro-y">
                <div class="report-box zoom-in">
                    <div class="box p-5">
                        <div class="d-flex">
                            <i data-feather="users" class="report-box__icon text-theme-10"></i>
                        </div>
                        <div class="report-box__total fs-3xl fw-medium mt-6">0</div>
                        <div class="fs-base text-gray-600 mt-1">Unpublished</div>
                    </div>
                </div>
            </div>
            <div class="g-col-12 g-col-sm-6 g-col-xl-3 intro-y">
                <div class="report-box zoom-in">
                    <div class="box p-5">
                        <div class="d-flex">
                            <i data-feather="users" class="report-box__icon text-theme-10"></i>
                        </div>
                        <div class="report-box__total fs-3xl fw-medium mt-6">0</div>
                        <div class="fs-base text-gray-600 mt-1">Published</div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="g-col-12 mt-2">
        <div class="intro-y d-flex align-items-center h-10">
            <h2 class="fs-lg fw-medium truncate me-5">
                Statistics
            </h2>
        </div>
        <div class="row">
            <div class="col-md-2 mt-5">
                <div class="g-col-12 g-col-sm-6 g-col-xxl-3 intro-y">
                    <div class="box p-5 zoom-in">
                        <div class="d-flex align-items-center">
                            <div class="w-2/4 flex-none">
                                <div class="fs-xl fw-medium truncate">0
                                </div>
                                <div class="text-gray-600 mt-1">Total paid</div>
                            </div>
                            <div class="flex-none ms-auto position-relative">
                                <i data-feather="users" class="report-box__icon text-theme-10"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-2 mt-5">
                <div class="g-col-12 g-col-sm-6 g-col-xxl-3 intro-y">
                    <div class="box p-5 zoom-in">
                        <div class="d-flex align-items-center">
                            <div class="w-2/4 flex-none">
                                <div class="fs-xl fw-medium truncate">0
                                </div>
                                <div class="text-gray-600 mt-1">Total orders</div>
                            </div>
                            <div class="flex-none ms-auto position-relative">
                                <i data-feather="users" class="report-box__icon text-theme-10"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-2 mt-5">
                <div class="g-col-12 g-col-sm-6 g-col-xxl-3 intro-y">
                    <div class="box p-5 zoom-in">
                        <div class="d-flex align-items-center">
                            <div class="w-2/4 flex-none">
                                <div class="fs-xl fw-medium truncate">0
                                </div>
                                <div class="text-gray-600 mt-1">Total devices</div>
                            </div>
                            <div class="flex-none ms-auto position-relative">
                                <i data-feather="users" class="report-box__icon text-theme-10"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-2 mt-5">
                <div class="g-col-12 g-col-sm-6 g-col-xxl-3 intro-y">
                    <div class="box p-5 zoom-in">
                        <div class="d-flex align-items-center">
                            <div class="w-2/4 flex-none">
                                <div class="fs-xl fw-medium truncate">0
                                </div>
                                <div class="text-gray-600 mt-1">Paid devices</div>
                            </div>
                            <div class="flex-none ms-auto position-relative">
                                <i data-feather="users" class="report-box__icon text-theme-10"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-2 mt-5">
                <div class="g-col-12 g-col-sm-6 g-col-xxl-3 intro-y">
                    <div class="box p-5 zoom-in">
                        <div class="d-flex align-items-center">
                            <div class="flex-none">
                                <div class="fs-xl fw-medium truncate">0
                                </div>
                                <div class="text-gray-600 mt-1">Devices returned</div>
                            </div>
                            <div class="flex-none ms-auto position-relative">
                                <i data-feather="users" class="report-box__icon text-theme-10"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>


        </div>
    </div>
@endsection
