@extends('frontend.main')
@section('title', 'Customer Registration')

@section('content')
    <style>
        .icofont-star-alt-2 {
            color: red;
            font-size: 10px;
            font-weight: 600;
        }

        .required:after {
            content: " *";
            color: red;
            font-size: 22px;
            text-align: center;
            vertical-align: middle;
            margin-left: auto;
            margin-right: auto;
            position: absolute;
            font-style: inherit;
        }


        h4 {
            background-color: #87CEFA;
            text-align: center;
            color: white;
        }

        /* //phone  */


        .scrollable-menu {
            height: auto;
            max-height: 18rem;
            overflow-x: hidden;
        }

        .input-group {
            .input-group-btn .btn-secondary {
                color: #464a4c;
                background-color: #eceeef;
            }
        }

    </style>
    {{-- <div class="container"> --}}
    <div class="row row justify-content-center">
        <div class="col-md-8" style="padding: 45px;">


            <div>
                <h4>
                    <p class="mb-2" style="text-align: center"><strong>Customer Registration</strong></p>
                </h4>
                {{-- <div class="pull-right">
                    <a class="btn btn-primary" href="{{ route('customers.index') }}" title="Go back">Go back <i
                            class="fas fa-backward "></i> </a>
                </div> --}}
            </div>



            <div class="card">
                <div class="card-header ">
                    <div class="card-body">
                        @if (Session::has('update_msg'))
                            <ul class="mt-1 mb-1">
                                <p class="alert {{ Session::get('alert-class', 'alert-success') }}">
                                    {{ Session::get('update_msg') }}</p>
                            </ul>
                        @endif

                        @if ($errors->any())
                            <ul>
                                @foreach ($errors->all() as $error)
                                    <p class="alert alert-danger">{{ $error }}</p>
                                @endforeach
                            </ul>
                        @endif

                        @if (Session::has('phonemsg'))
                            <ul>
                                <p class="alert {{ Session::get('alert-class', 'alert-danger') }}">
                                    {{ Session::get('phonemsg') }}</p>
                            </ul>
                        @endif

                        @if (Session::has('emailmsg'))
                            <ul>
                                <p class="alert {{ Session::get('alert-class', 'alert-danger') }}">
                                    {{ Session::get('emailmsg') }}</p>
                            </ul>
                        @endif

                        <div class="row col-md-12 ">

                            {{-- <h1>Add a contact</h1> --}}
                            <div>
                                {{-- @if ($errors->any())
                                    <div class="alert alert-danger">
                                        <ul>
                                            @foreach ($errors->all() as $error)
                                                <li>{{ $error }}</li>
                                            @endforeach
                                        </ul>
                                    </div><br />
                                @endif --}}
                                <form action="{{ route('customers.store') }}" method="post" enctype="multipart/form-data">
                                    @csrf



                                    <div class="container col-md-12 ">
                                        {{-- row for 3 col --}}
                                        <div class="row">
                                            <div class="col">
                                                <div class="form-group ">
                                                    <label class="required ">First Name: </label>
                                                    <input name="first_name" type="text" required="required"
                                                        class="form-control" value="{{ old('first_name') }}" />
                                                </div>
                                            </div>
                                            <div class="col">
                                                <div class="form-group">
                                                    <label class="required ">Middle Name: </label>
                                                    <input name="middle_name" type="text" required="required"
                                                        class="form-control" value="{{ old('middle_name') }}" />
                                                </div>
                                            </div>

                                            {{-- <div class="form-group col-md-6">
                                                <div class="">
                                                    <label>middle_name <i class="required icofont-star-alt-2"></i></label>
                                                </div>
                                                <div class="">
                                                    <input class="form-control" type="text" name="middle_name"
                                                        value="{{ old('middle_name') }}">
                                                </div>
                                            </div> --}}

                                            <div class="col">
                                                <div class="form-group">
                                                    <label class="required ">Last Name: </label>
                                                    <input name="last_name" type="text" required="required"
                                                        class="form-control" value="{{ old('last_name') }}" />
                                                </div>
                                            </div>
                                        </div>
                                        <hr>

                                        {{-- row for 2 col --}}
                                        <div class="row">
                                            <div class="col">
                                                <div class="form-group col-md-12 ">
                                                    <div class="">
                                                        <label class="required  ">Profile Picture (Only JPG, PNG, BMP and
                                                            GIF files are allowed) : </label>
                                                    </div>
                                                    <div class="">
                                                        <input required name="image" id="image" accept="image/*" type="file"
                                                            class="form-control" onchange="return previewImage(event)" />

                                                    </div>

                                                </div>
                                            </div>

                                            <div class="col">
                                                <div class="form-group">
                                                    <label>Image: </label>
                                                </div>
                                                <div class="form-group">
                                                    <img id="output" width="100">
                                                </div>
                                            </div>
                                        </div>
                                        <hr>

                                        {{-- row for 2 col --}}
                                        <div class="row">
                                            <div class="col">
                                                <div class="form-group">
                                                    <label class="required ">Age: </label>
                                                    <input name="age" type="text" required="required" class="form-control"
                                                        value="{{ old('age') }}" />
                                                </div>
                                            </div>

                                            <div class="col">
                                                <div class="form-group">
                                                    <label class="required ">Blood Group: </label>
                                                    <input name="blood_group" type="text" required="required"
                                                        class="form-control" value="{{ old('blood_group') }}" />
                                                </div>
                                            </div>
                                        </div>
                                        {{-- row for 2 col --}}
                                        <div class="row">
                                            <div class="col">
                                                <div class="form-group">
                                                    <label class="required ">Mobile Number: </label>
                                                    <div class="row">
                                                        <input class="form-control" type="text" name="" value="+88" readonly
                                                            style="width:20%;">
                                                        <input class="form-control" type="text" name="phone_number"
                                                            style="width:80%;" value="{{ old('phone_number') }}">
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="col">
                                                <div class="form-group">
                                                    <label class="required ">Email: </label>
                                                    <input name="email" type="email" class="form-control"
                                                        value="{{ old('email') }}" />
                                                </div>
                                            </div>
                                        </div>


                                        {{-- row for 2 col --}}
                                        <div class="row">
                                            <div class="col">
                                                <div class="form-group">
                                                    <label class="required ">Village: </label>
                                                    <input name="village" type="text" required="required"
                                                        class="form-control" value="{{ old('village') }}" />
                                                </div>
                                            </div>

                                            <div class="col">
                                                <div class="form-group">
                                                    <label class="required ">District: </label>
                                                    <input name="district" type="text" required="required"
                                                        class="form-control" value="{{ old('district') }}" />
                                                </div>
                                            </div>
                                        </div>

                                        {{-- row for 2 col --}}
                                        <div class="row">
                                            <div class="col">
                                                <div class="form-group">
                                                    <label class="required ">Post Code: </label>
                                                    <input name="post_code" type="text" required="required"
                                                        class="form-control" value="{{ old('post_code') }}" />
                                                </div>
                                            </div>

                                            <div class="col">
                                                <div class="form-group">
                                                    <label class="required ">City: </label>
                                                    <input name="city" type="text" required="required" class="form-control"
                                                        value="{{ old('city') }}" />
                                                </div>
                                            </div>
                                        </div>

                                        {{-- row for 2 col --}}
                                        <div class="row">
                                            <div class="col">
                                                <div class="form-group">
                                                    <label class="required ">Country: </label>
                                                    <input name="country" type="text" required="required"
                                                        class="form-control" value="{{ old('country') }}" />
                                                </div>
                                            </div>

                                            <div class="col">
                                                <div class="form-group">
                                                    <label class="required ">Occupation: </label>
                                                    <input name="occupation" type="text" required="required"
                                                        class="form-control" value="{{ old('occupation') }}" />
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                            </div>
                            <button style="cursor:pointer" type="submit" class="btn btn-primary-outline">Add
                                Customer</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>




    </div>

    <script type="text/javascript">
        function previewImage(event) {
            var output = document.getElementById('output');
            output.src = URL.createObjectURL(event.target.files[0]);
        };

    </script>
@endsection
