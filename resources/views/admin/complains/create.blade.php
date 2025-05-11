<x-app-layout>

    <div class="card">
        <div class="card-header">
            <h4 class="card-title">Complain Form</h4>
            <p class="text-muted">Please fill out the form below to submit your complaint.</p>
        </div>
        <div class="card-body">

            <div class="row justify-content-center">
                <div class="col-md-6">

                    <form action="{{ route('admin.complains.store')}}" method="POST">
                        @csrf

                        <div class="mb-3">
                            <label for="service">Service Type</label>
                            <select class="form-control" name="service" id="service">
                                <option disabled {{ old('service') ? '' : 'selected' }}>Select Service type</option>
                                @foreach ($problems as $problem)
                                    <option value="{{ $problem }}" {{ old('service') == $problem ? 'selected' : '' }}>{{ $problem }}</option>
                                @endforeach
                            </select>
                            @error('service')
                                <p class="text-danger">{{ $message }}</p>
                            @enderror
                        </div>

                        <div class="mb-3">
                            <label for="name">Name</label>
                            <input type="text" name="name" id="name" class="form-control"
                                placeholder="Enter Your name" value="{{ old('name') }}">
                            @error('name')
                                <p class="text-danger">{{ $message }}</p>
                            @enderror
                        </div>

                        <div class="mb-3">
                            <label for="mobile_number">Mobile Number</label>
                            <input type="text" name="mobile_number" id="mobile_number" class="form-control"
                                placeholder="Enter Your Phone Number" value="{{ old('mobile_number') }}">
                            @error('mobile_number')
                                <p class="text-danger">{{ $message }}</p>
                            @enderror
                        </div>

                        <div class="mb-3">
                            <label for="email">Email</label>
                            <input type="email" name="email" id="email" class="form-control"
                                placeholder="Enter Your Email" value="{{ old('email') }}">
                            @error('email')
                                <p class="text-danger">{{ $message }}</p>
                            @enderror
                        </div>

                        <div class="mb-3">
                            <label for="address">Address</label>
                            <textarea class="form-control" name="address" id="address" rows="5" placeholder="Enter your address">{{ old('address') }}</textarea>
                            @error('address')
                                <p class="text-danger">{{ $message }}</p>
                            @enderror
                        </div>

                        <div class="mb-3">
                            <label for="description">Description</label>
                            <textarea class="form-control" name="description" id="description" rows="5"
                                placeholder="write your problem description">{{ old('description') }}</textarea>
                            @error('description')
                                <p class="text-danger">{{ $message }}</p>
                            @enderror
                        </div>

                        <hr>

                        <div class="text-right">
                            <button type="submit" class="btn btn-warning">Submit</button>
                        </div>
                    </form>

                </div>
            </div>


        </div>
    </div>

</x-app-layout>
