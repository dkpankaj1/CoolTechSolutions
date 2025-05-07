<x-web-layout>
    <section class="breadcrumb_section text-center section_padding">  
        <ul class="breadcrumb">           
            <li><a href="{{ route('home') }}">Home</a></li>
            <li>Book Now</li>
        </ul>
        <h1>Book Service</h1>
    </section>

    <div class="container d-flex justify-content-center">
        <div class="col-12 col-md-6">
            <form action="{{ route('complain.store') }}" method="POST" class="bg-white p-4 my-5 rounded shadow-sm">
                @csrf

                <input class="form-control mb-3" type="text" name="name" placeholder="Your name">
                @error('name')
                    <p class="text-danger">{{ $message }}</p>
                @enderror

                <input class="form-control mb-3" type="text" name="number" placeholder="Phone Number">
                @error('number')
                    <p class="text-danger">{{ $message }}</p>
                @enderror

                <select class="form-select mb-3" id="service" name="service" style="background-color: rgba(211, 211, 211, 0.4);">
                    <option value="" selected>Select Service type</option>
                    @foreach ($problems as $problem)
                        <option value="{{ $problem }}">{{ $problem }}</option>
                    @endforeach
                </select>
                @error('service')
                    <p class="text-danger">{{ $message }}</p>
                @enderror

                <textarea class="form-control mb-3" name="content" id="content" rows="5" placeholder="You can write your problem"></textarea>

                <div class="text-end">
                    <button type="submit" class="btn-yellow">SUBMIT NOW</button>
                </div>
            </form>
        </div>
    </div>
</x-web-layout>
