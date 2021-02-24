@extends('frontend.main')
@section('title', 'Customer Registration')


@section('content')
    <div class="card">
        <div class="card-header ">
            <div class="card-body">
                <div class="row col-md-12 ">
                    <div class="row">
                        {{-- <div class="col-sm-12 offset-sm-2"> --}}
                        <div class="col-lg-12 col-6">
                            <h1 class="display-2">Add a contact</h1>
                            <div>
                                @if ($errors->any())
                                    <div class="alert alert-danger">
                                        <ul>
                                            @foreach ($errors->all() as $error)
                                                <li>{{ $error }}</li>
                                            @endforeach
                                        </ul>
                                    </div><br />
                                @endif
                                <div class="row">
                                    <div class="card-header">
                                        <div class="container-fluid">
                                            <button type="button" class="btn btn-primary">Primary</button>
                                            <button type="button" class="btn btn-secondary">Secondary</button>
                                            <button type="button" class="btn btn-success">Success</button>
                                            <button type="button" class="btn btn-danger">Danger</button>
                                            <button type="button" class="btn btn-warning">Warning</button>
                                            <button type="button" class="btn btn-info">Info</button>
                                            <button type="button" class="btn btn-light">Light</button>
                                            <button type="button" class="btn btn-dark">Dark</button>
                                            <button type="button" class="btn btn-link">Link</button>
                                        </div>
                                    </div>
                                </div>
                                <br>

                                <div class="row">
                                    <div class="card-header">
                                        <div class="container-fluid">

                                            <a href="{{ route('registercustomer') }}" class="btn btn-primary"
                                                role="button">Primary</a>
                                            <a href="#" class="btn btn-secondary" role="button">Secondary</a>
                                            <a href="#" class="btn btn-success" role="button">Success</a>
                                            <a href="#" class="btn btn-danger" role="button">Danger</a>
                                            <a href="#" class="btn btn-warning" role="button">Warning</a>
                                            <a href="#" class="btn btn-info" role="button">Info</a>
                                            <a href="#" class="btn btn-ligh" role="button">Light</a>
                                            <a href="#" class="btn btn-dark" role="button">Dark</a>
                                            <a href="#" class="btn btn-link" role="button">Link</a>
                                        </div>
                                    </div>
                                </div>



                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
