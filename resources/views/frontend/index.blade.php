@extends('master')
@section('content')
    <div class="container">
        <section class="my-5 p-5">
            <div class="row">
                <aside class="col-3 g-2 gap-3 d-grid py-3">
                    <div class="form-group search-bar bg-dark mb-2 d-flex gap-2">
                        <svg xmlns="http://www.w3.org/2000/svg" height="2em" viewBox="0 0 512 512">
                            <!--! Font Awesome Free 6.4.0 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2023 Fonticons, Inc. -->
                            <style>
                                svg {
                                    fill: #f5f7f9;
                                    margin: auto
                                }
                            </style>
                            <path
                                d="M416 208c0 45.9-14.9 88.3-40 122.7L502.6 457.4c12.5 12.5 12.5 32.8 0 45.3s-32.8 12.5-45.3 0L330.7 376c-34.4 25.2-76.8 40-122.7 40C93.1 416 0 322.9 0 208S93.1 0 208 0S416 93.1 416 208zM208 352a144 144 0 1 0 0-288 144 144 0 1 0 0 288z" />
                        </svg>
                        <input type="search" class="form-control border-0 text-white bg-dark" name="search" id="search">
                    </div>
                    <div class="form-group border-bottom h-75 search-filter">
                        <div class="pt-0 mb-3 d-flex justify-content-between px-3">
                            <div class="image mb-auto">
                                <img src="{{ asset('css/media/300-1.jpg') }}" class="sidebar-image" alt="">
                            </div>
                            <div class="content text-white">
                                <h5>user 1dasdsafdsddfs</h5>
                                <p>fsdfsdfdsfsparagraph 1</p>
                            </div>
                        </div>
                    </div>
                    <div class="form-group border-bottom h-75 search-filter">
                        <div class=" pt-0 mb-3 d-flex justify-content-between px-3">
                            <div class="image mb-auto">
                                <img src="{{ asset('css/media/300-1.jpg') }}" class="sidebar-image" alt="">
                            </div>
                            <div class="content text-white">
                                <h5>user 1dasdsafdsddfs</h5>
                                <p>fsdfsdfdsfsparagraph 1</p>
                            </div>
                        </div>
                    </div>
                    <div class="form-group border-bottom h-75 search-filter">
                        <div class=" pt-0 mb-3 d-flex justify-content-between px-3">
                            <div class="image mb-auto">
                                <img src="{{ asset('css/media/300-1.jpg') }}" class="sidebar-image" alt="">
                            </div>
                            <div class="content text-white">
                                <h5>user 1dasdsafdsddfs</h5>
                                <p>fsdfsdfdsfsparagraph 1</p>
                            </div>
                        </div>
                    </div>
                    <div class="form-group border-bottom h-75 search-filter">
                        <div class=" pt-0 mb-3 d-flex justify-content-between px-3">
                            <div class="image mb-auto">
                                <img src="{{ asset('css/media/300-1.jpg') }}" class="sidebar-image" alt="">
                            </div>
                            <div class="content text-white">
                                <h5>user 1dasdsafdsddfs</h5>
                                <p>fsdfsdfdsfsparagraph 1</p>
                            </div>
                        </div>
                    </div>
                    <div class="form-group border-bottom h-75 search-filter">
                        <div class=" pt-0 mb-3 d-flex justify-content-between px-3">
                            <div class="image mb-auto">
                                <img src="{{ asset('css/media/300-1.jpg') }}" class="sidebar-image" alt="">
                            </div>
                            <div class="content text-white">
                                <h5>user 1dasdsafdsddfs</h5>
                                <p>fsdfsdfdsfsparagraph 1</p>
                            </div>
                        </div>
                    </div>
                    <div class="form-group border-bottom h-75 search-filter">
                        <div class=" pt-0 mb-3 d-flex justify-content-between px-3">
                            <div class="image mb-auto">
                                <img src="{{ asset('css/media/300-1.jpg') }}" class="sidebar-image" alt="">
                            </div>
                            <div class="content text-white">
                                <h5>user 1dasdsafdsddfs</h5>
                                <p>fsdfsdfdsfsparagraph 1</p>
                            </div>
                        </div>
                    </div>
                </aside>
                <main class="col-9 search-filter">
                    <header class="col-12 d-flex bg-dark py-2 px-4 text-white justify-content-between">
                        <div class="d-flex gap-3">
                            <svg xmlns="http://www.w3.org/2000/svg" class="col-1 mx-0" height="1em" viewBox="0 0 384 512">
                                <!--! Font Awesome Free 6.4.0 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2023 Fonticons, Inc. -->
                                <style>
                                    svg {
                                        fill: #d6d6d6
                                    }
                                </style>
                                <path
                                    d="M380.6 81.7c7.9 15.8 1.5 35-14.3 42.9L103.6 256 366.3 387.4c15.8 7.9 22.2 27.1 14.3 42.9s-27.1 22.2-42.9 14.3l-320-160C6.8 279.2 0 268.1 0 256s6.8-23.2 17.7-28.6l320-160c15.8-7.9 35-1.5 42.9 14.3z" />
                            </svg>
                            <img src="{{ asset('css/media/300-1.jpg') }}" class="sidebar-image" alt="">
                            <h5 class="d-flex align-items-center m-0">colfdrs</h5>
                        </div>
                        <div class="menu d-flex align-items-center">
                            <svg xmlns="http://www.w3.org/2000/svg" height="1em" viewBox="0 0 128 512">
                                <!--! Font Awesome Free 6.4.0 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2023 Fonticons, Inc. -->
                                <style>
                                    svg {
                                        fill: #dfe0e1
                                    }
                                </style>
                                <path
                                    d="M64 360a56 56 0 1 0 0 112 56 56 0 1 0 0-112zm0-160a56 56 0 1 0 0 112 56 56 0 1 0 0-112zM120 96A56 56 0 1 0 8 96a56 56 0 1 0 112 0z" />
                            </svg>
                        </div>
                    </header>
                    <div class="chat-body gap-3 p-2"
                        style="background-image: url({{ asset('css/media/b91dc2113881469c07ac99ad9a024a01.jpg') }})">
                        <div class="col-3 justify-content-start p-3 rounded-pill bg-white">fsdfsdfa</div>
                        <div class="col-12 justify-content-end d-flex">
                            <div class="col-3 p-3 rounded-pill bg-success">fsdfsdfa</div>
                        </div>
                        <div class="col-3 justify-content-start p-3 rounded-pill bg-white">fsdfsdfa</div>
                        <div class="col-12 justify-content-end d-flex">
                            <div class="col-3 p-3 rounded-pill bg-success">fsdfsdfa</div>
                        </div>
                        <div class="col-3 justify-content-start p-3 rounded-pill bg-white">fsdfsdfa</div>
                        <div class="col-12 justify-content-end d-flex">
                            <div class="col-3 p-3 rounded-pill bg-success">fsdfsdfa</div>
                        </div>
                        <div class="col-3 justify-content-start p-3 rounded-pill bg-white">fsdfsdfa</div>
                        <div class="col-12 justify-content-end d-flex">
                            <div class="col-3 p-3 rounded-pill bg-success">fsdfsdfa</div>
                        </div>
                        <div class="col-3 justify-content-start p-3 rounded-pill bg-white">fsdfsdfa</div>
                        <div class="col-12 justify-content-end d-flex">
                            <div class="col-3 p-3 rounded-pill bg-success">fsdfsdfa</div>
                        </div>
                        <div class="col-3 justify-content-start p-3 rounded-pill bg-white">fsdfsdfa</div>
                        <div class="col-12 justify-content-end d-flex">
                            <div class="col-3 p-3 rounded-pill bg-success">fsdfsdfa</div>
                        </div>
                    </div>
                </main>
            </div>
        </section>
    </div>
@endsection
@section('scripts')
    <script>
        $(document).ready(function() {
            $("#search").on("keyup", function() {
                var value = $(this).val().toLowerCase();
                $(".search-filter *").filter(function() {
                    $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
                });
            });
        });
    </script>
@endsection
