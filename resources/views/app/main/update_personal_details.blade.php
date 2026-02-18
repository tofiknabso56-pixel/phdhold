@extends('app.layout.app')
@section('header_content')
    <style>
        section.profile_photo {
            position: absolute;
            top: 90px;
            left: 50%;
            transform: translate(-50%, 0px);
        }
        .search-button {
            width: unset;
        }
        .navi-menu-button {
            width: unset;
        }
        header.no-background {
            background-color: #fff !important;
        }
        footer {
            margin-bottom: 0px;
        }
        .form-element {
            border-color: #2eb18d;
        }
    </style>
@endsection
@section('app_content')

    <main class="margin">
                <section class="container">
                    <div class="form-row-group with-icons ">
                        <form action="{{route('user.personal-details-submit')}}" method="POST" enctype="multipart/form-data">
                            @csrf
                            <div class="form-row no-padding">
                                <i class="fa fa-user"></i>
                                <input type="text" name="name" class="form-element" placeholder="Name" value="{{auth()->user()->name ?? old('name')}}">
                            </div>
                            <div class="form-row no-padding">
                                <i class="fa fa-user"></i>
                                <input type="text" name="username" class="form-element" placeholder="Username" value="{{auth()->user()->username}}">
                            </div>
                            <div class="form-row no-padding">
                                <i class="fa fa-envelope"></i>
                                <input type="email" name="email" class="form-element" placeholder="Email" value="{{auth()->user()->email}}">
                            </div>
                            <div class="form-row no-padding">
                                <i class="fa fa-lock"></i>
                                <input type="password" name="password" class="form-element" placeholder="Password" value="*********">
                            </div>
                            <div class="mt-5 text-center">
                                <button class="btn btn-dark"> <i class="fa fa-pencil"></i> Update Personal Info</button>
                            </div>
                        </form>
                    </div>
                </section>
        <footer>
        </footer>
    </main>
@endsection
