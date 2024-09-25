@extends('layout/layout')

@section('content')
 

<div class="container mt-5">
    <h2 class="text-center">Registration Form</h2>
    @if (session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif
    <form method="POST" action="{{route('store')}}">
        @csrf
        <div class="row">
            <div class="col-md-6 mb-3">
                <label for="first_name" class="form-label">First Name</label>
                <input type="text" class="form-control" id="first_name" name="first_name" required>
            </div>
            <div class="col-md-6 mb-3">
                <label for="last_name" class="form-label">Last Name</label>
                <input type="text" class="form-control" id="last_name" name="last_name" required>
            </div>
            <div class="col-md-6 mb-3">
                <label for="dob" class="form-label">Date of Birth</label>
                <input type="date" class="form-control" id="dob" name="dob" required>
            </div>
            <div class="col-md-6 mb-3">
                <label for="email" class="form-label">E-mail</label>
                <input type="email" class="form-control" id="email" name="email" required>
            </div>
            <div class="col-md-6 mb-3">
                <label for="mobile_number" class="form-label">Mobile Number</label>
                <input type="text" class="form-control" id="mobile_number" name="mobile_number" required>
            </div>
            <div class="col-md-6 mb-3">
                <label for="password" class="form-label">Password</label>
                <input type="password" class="form-control" id="password" name="password" required>
            </div>
            <div class="col-md-6 mb-3">
                <label for="country" class="form-label">Country</label>
                <select class="form-select" id="country" name="country_id" onChange="getState(this.value)">
                   
                    <option value="">Select Country</option>
                    @foreach($cnty as $country)
                    <option value="{{$country?->id}}">{{$country?->name}}</option>
                    @endforeach
                  
                </select>
            </div>
            <div class="col-md-6 mb-3">
                <label for="state" class="form-label">State</label>
                <select class="form-select" id="state" name="state_id" onChange="getCity(this.value)">
                   
                </select>
            </div>

            <div class="col-md-6 mb-3">
                <label for="city" class="form-label">City</label>
                <select class="form-select" id="city" name="city_id">
                   
                </select>
            </div>

           
            <div class="col-md-6 mb-3">
                <label for="locality" class="form-label">Locality</label>
                <input type="text" class="form-control" id="locality" name="locality" required>
            </div>
            <div class="col-md-6 mb-3">
                <label for="pincode" class="form-label">Pincode</label>
                <input type="text" class="form-control" id="pincode" name="pincode" required>
            </div>
        </div>
        <button type="submit" class="btn btn-primary">Register</button>
    </form>
</div>


<script>
function getState(countryId) {
    $.ajax({
        url: "{{ route('getstate') }}", 
        type: 'GET',
        data: { id: countryId },
        success: function(response) {
            if (response.success) {
            
                $('#state').empty().html(response.states); 
            }
        },
        error: function(xhr, status, error) {
            console.error('AJAX Error: ' + error);
        }
    });
}

               </script>

               <script>

        function getCity(cityID) {
        $.ajax({
        url: "{{ route('getcity') }}", 
        type: 'GET',
        data: { id: cityID },
        success: function(response) {
        if (response.success) {

        $('#city').empty().html(response.cities); 
        }
        },
        error: function(xhr, status, error) {
        console.error('AJAX Error: ' + error);
        }
        });
        }

                </script>



@endsection
