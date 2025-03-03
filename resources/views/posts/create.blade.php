<x-head>
    <x-slot:title>
        Contact
    </x-slot:title>
    <!-- contact section -->
    <section class="contact_section  ">
        <div class="container">
            <div class="row">
                <div class="col-md-7 col-lg-6 ">
                    <div class="form_container">
                        <div class="heading_container ">
                            <h2>
                                Contact Us
                            </h2>
                        </div>
                        <form action="{{ route('') }}" method="GET">
                            @csrf
                            <div>
                                <input type="text" name="text" placeholder="Your Name" />
                            </div>
                            <div>
                                <input type="text" name="number" placeholder="Phone Number" />
                            </div>
                            <div>
                                <input type="email" name="email" placeholder="Email" />
                            </div>
                            <div>
                                <input type="text" name="message" class="message-box" placeholder="Message" />
                            </div>
                            <div class="btn_box">
                                <button>
                                    SEND
                                </button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- end contact section -->
</x-head>
