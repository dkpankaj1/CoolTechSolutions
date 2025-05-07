<x-web-layout>

    <section class="breadcrumb_section text-center section_padding">  
        <ul class="breadcrumb">           
            <li><a href="{{ route('home') }}">Home</a></li>
            <li> Book Now</li>
        </ul>
        <h1>Book Service</h1>
    </section>

    <section class="breadcrumb_section text-center section_padding">
        <ul class="breadcrumb">
            <li><a href="{{ route('home') }}">Home</a></li>
            <li> Contact</li>
        </ul>
        <h1>Contact us</h1>
    </section>

    <section class="contact_form_area contact_us section_padding">
        <div class="container">
            <div class="row justify-content-center">                


                    <div class="contact-right contact-right-style-2 responsive_mt">
                        <form action="{{ route('complain.store') }}" method="POST" method="post">
                            <input class="half_width input_m_right" type="text" name="name" placeholder="Your name">
                            @error('name')
                            <p class="text-danger">{{ $message }}</p>
                           @enderror
                            <input class="half_width" type="EMAIL" name="number" placeholder="Phone Number">
                            @error('number')
                            <p class="text-danger">{{ $message }}</p>
                           @enderror
                           
                            <select   id="service" name="service"  style="background-color: rgba(211, 211, 211, 0.4);">
                                <option value="" selected>Select Service type</option>
                                @foreach ($problems as $problem)
                                    <option value="{{ $problem }}">{{ $problem }}</option>
                                @endforeach
                            </select>
                            @error('service')
                            <p class="text-danger">{{ $message }}</p>
                          @enderror
                            <textarea name="content" id="content" cols="20" rows="5" placeholder="You can write your problem"></textarea>
                            <button class="btn-yellow" value="SUBMIT NOW">SUBMIT NOW</button>
                        </form>
                    </div>
                    
                </div>
            </div>
        </div>
    </section>
        
</x-web-layout>
