@extends('app')
@section('section')
    <div class="container mt-3">
        <h2>Users List</h2>
        <a href="{{ route('createProfile') }}">Create User</a>
        <a href="{{ route('export') }}" class="btn btn-success">Export In CSV</a>
        <table class="table">
            <thead>
                <tr>
                    <th>Name</th>
                    <th>Email</th>
                    <th>Phone</th>
                    <th>Street</th>
                    <th>City</th>
                    <th>State</th>
                    <th>Country</th>
                </tr>
            </thead>
            <tbody>
                @foreach($users as $user)
                    <tr>
                        <td>{{ $user['name'] }}</td>
                        <td>{{ $user['email'] }}</td>
                        <td>{{ $user['phone'] }}</td>
                        <td>{{ $user['street_address'] }}</td>
                        <td>{{ $user['city'] }}</td>
                        <td>{{ !empty($user['state']) ? $user['state'] : 'N/A' }}</td>
                        <td>{{ !empty($user['country']) ? $user['country'] : 'N/A' }}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection