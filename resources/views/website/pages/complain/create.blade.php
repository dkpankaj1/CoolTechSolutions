<x-web-layout>
    <section class="breadcrumb_section text-center section_padding"
        style="background-image:url('{{ asset('assets/images/slider-3.webp') }}')">
        <ul class="breadcrumb">
            <li><a href="{{ route('home') }}">Home</a></li>
            <li>Book Now</li>
        </ul>
        <h1>Book Service</h1>
    </section>

    <div class="container section_padding">
        <div class="row">
            <div class="col-md-3"></div>
            <div class="col-md-6">
              
                @if (Session::has('success'))
                    <div class="alert alert-success" role="alert">{{ Session::get('success') }}</div>
                @endif

                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h4 class="text-center">Complain Form</h4>
                    </div>
                    <div class="panel-body">
                        <form action="{{ route('complain.store') }}" method="POST">
                            @csrf

                            <div class="form-group">
                                <label for="service">Service Type</label>
                                <select class="form-control" name="service" id="service">
                                    <option value="" selected>Select Service type</option>
                                    @foreach ($problems as $problem)
                                        <option value="{{ $problem }}">{{ $problem }}</option>
                                    @endforeach
                                </select>
                                @error('service')
                                    <p class="text-danger">{{ $message }}</p>
                                @enderror
                            </div>

                            <div class="form-group">
                                <label for="name">Name</label>
                                <input type="text" name="name" id="name" class="form-control"
                                    placeholder="Enter Your name" value="{{ old('name') }}">
                                @error('name')
                                    <p class="text-danger">{{ $message }}</p>
                                @enderror
                            </div>

                            <div class="form-group">
                                <label for="mobile_number">Mobile Number</label>
                                <input type="text" name="mobile_number" id="mobile_number" class="form-control"
                                    placeholder="Enter Your Phone Number" value="{{ old('mobile_number') }}">
                                @error('mobile_number')
                                    <p class="text-danger">{{ $message }}</p>
                                @enderror
                            </div>

                            <div class="form-group">
                                <label for="email">Email</label>
                                <input type="email" name="email" id="email" class="form-control"
                                    placeholder="Enter Your Email" value="{{ old('email') }}">
                                @error('email')
                                    <p class="text-danger">{{ $message }}</p>
                                @enderror
                            </div>

                            <div class="form-group">
                                <label for="address">Address</label>
                                <textarea class="form-control" name="address" id="address" rows="5" placeholder="Enter your address">{{old('address')}}</textarea>
                                @error('address')
                                    <p class="text-danger">{{ $message }}</p>
                                @enderror
                            </div>

                            <div class="form-group">
                                <label for="description">Description</label>
                                <textarea class="form-control" name="description" id="description" rows="5"
                                    placeholder="write your problem description">{{old('description')}}</textarea>
                                @error('description')
                                    <p class="text-danger">{{ $message }}</p>
                                @enderror
                            </div>

                            <div class="text-right">
                                <button type="submit" class="btn btn-warning">SUBMIT NOW</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            <div class="col-md-3"></div>
        </div>
    </div>
</x-web-layout>
