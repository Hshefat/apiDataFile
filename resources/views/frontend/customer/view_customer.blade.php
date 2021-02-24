@extends('frontend.main')
@section('title', 'Customer Registration')


@section('content')
    <div class="card">
        <div class="card-header ">
            <div class="card-body">
                @if (Session::has('update_msg'))
                    <ul class="mt-1 mb-1">
                        <p class="alert {{ Session::get('alert-class', 'alert-success') }}">
                            {{ Session::get('update_msg') }}</p>
                    </ul>
                @endif
                <div class="row col-md-12 ">
                    <div class="row">
                        <div class="col-sm-12">
                            <div class="pull-right">
                                <a class="btn btn-success" href="{{ route('customers.create') }}"
                                    title="Create a project">
                                    <i class="fas fa-plus-circle"></i>
                                </a>
                            </div>
                            <h1 class="display-3">customers</h1>
                            <table class="table table-striped">
                                <thead>
                                    <tr>
                                        <td>ID</td>
                                        <td>Name</td>
                                        <td>Image</td>
                                        <td>Age</td>
                                        <td>Blood Group</td>
                                        <td>Phone Number</td>
                                        <td>Email</td>
                                        <td>Village</td>
                                        <td>District</td>
                                        <td>Post Code</td>
                                        <td>City</td>
                                        <td>Country</td>
                                        <td>Occupation</td>
                                        <td colspan=2>Actions</td>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($customers as $customer)
                                        <tr>
                                            <td>{{ $customer->id }}</td>
                                            <td>{{ $customer->first_name }} {{ $customer->middle_name }}
                                                {{ $customer->last_name }}
                                            </td>
                                            <td>{{ $customer->image }}</td>
                                            <td>{{ $customer->age }}</td>
                                            <td>{{ $customer->blood_group }}</td>
                                            <td>{{ $customer->phone_number }}</td>
                                            <td>{{ $customer->email }}</td>
                                            <td>{{ $customer->district }}</td>
                                            <td>{{ $customer->post_code }}</td>
                                            <td>{{ $customer->city }}</td>
                                            <td>{{ $customer->country }}</td>
                                            <td>{{ $customer->occupation }}</td>
                                            <td>
                                                <a href="{{ route('customers.edit', $customer->id) }}"
                                                    class="btn btn-primary">Edit</a>
                                            </td>
                                            <td>
                                                <form action="{{ route('customers.destroy', $customer->id) }}"
                                                    method="post">
                                                    @csrf
                                                    @method('DELETE')
                                                    <button class="btn btn-danger" type="submit">Delete</button>
                                                </form>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                            <div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection
