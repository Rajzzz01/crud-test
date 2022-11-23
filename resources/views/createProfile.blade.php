@extends('app')
@section('section')
    <div class="container mt-3">
        <a href="{{ route('userList') }}">Users List</a>
        <h2>Create User</h2>
        <form action="{{ route('storeProfile') }}" method="post" enctype="multipart/form-data">
            @csrf
            <div class="mb-3 mt-3">
                <label for="profile_image">Profile Image:</label>
                <input type="file" class="form-control" id="profile_image" name="profile_image">
            </div>
            <div class="mb-3 mt-3">
                <label for="name">Name:</label>
                <input type="text" class="form-control" id="name" placeholder="Enter name" name="name" value="{{ old('name') }}">
                @if ($errors->has('name'))
                    <span class="text-danger">{{ $errors->first('name') }}</span>
                @endif
            </div>
            <div class="mb-3 mt-3">
                <label for="phone">Phone:</label>
                <input type="phone" class="form-control" id="phone" placeholder="+91 999 888 7766" name="phone" value="{{ old('phone') }}">
                @if ($errors->has('phone'))
                    <span class="text-danger">{{ $errors->first('phone') }}</span>
                @endif
            </div>
            <div class="mb-3 mt-3">
                <label for="email">Email:</label>
                <input type="email" class="form-control" id="email" placeholder="Enter email" name="email" value="{{ old('email') }}">
                @if ($errors->has('email'))
                    <span class="text-danger">{{ $errors->first('email') }}</span>
                @endif
            </div>
            
            <div class="mb-3 mt-3">
                <label for="street">Street:</label>
                <input type="text" class="form-control" id="street" placeholder="Enter street" name="street_address" value="{{ old('street_address') }}">
                @if ($errors->has('street_address'))
                    <span class="text-danger">{{ $errors->first('street_address') }}</span>
                @endif
            </div>
            <div class="mb-3 mt-3">
                <label for="city">City:</label>
                <input type="text" class="form-control" id="city" placeholder="Enter city" name="city" value="{{ old('city') }}">
                @if ($errors->has('city'))
                    <span class="text-danger">{{ $errors->first('city') }}</span>
                @endif
            </div>
            <div class="mb-3 mt-3">
                <label for="state">State:</label>
                <select class="form-control" name="state">
                    <option value="">Select State</option>
                    <option value="CA" {{ (old('state') == 'CA' ? 'selected' : '' ) }}>CA</option>
                    <option value="NY" {{ (old('state') == 'NY' ? 'selected' : '' ) }}>NY</option>
                    <option value="AT" {{ (old('state') == 'AT' ? 'selected' : '' ) }}>AT</option>
                </select>
                @if ($errors->has('state'))
                    <span class="text-danger">{{ $errors->first('state') }}</span>
                @endif
            </div>
            <div class="mb-3 mt-3">
                <label for="country">Country:</label>
                <select class="form-control" name="country">
                    <option value="">Select Country</option>
                    <option value="IN" {{ (old('country') == 'IN' ? 'selected' : '' ) }}>IN</option>
                    <option value="US" {{ (old('country') == 'US' ? 'selected' : '' ) }}>US</option>
                    <option value="EU" {{ (old('country') == 'EU' ? 'selected' : '' ) }}>EU</option>
                </select>
                @if ($errors->has('country'))
                    <span class="text-danger">{{ $errors->first('country') }}</span>
                @endif
            </div>
            
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>

@endsection