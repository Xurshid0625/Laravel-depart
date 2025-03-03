<x-head>
    <x-slot:title>
        Post Yratish
    </x-slot:title>
    <!-- contact section -->
    <section class="contact_section  ">
        <div class="container">
            <div class="row">
                <div class="col-md-7 col-lg-6 ">
                    <div class="form_container">
                        <div class="heading_container mt-5 ">
                          Post yaratish
                        </div>
                        <form action="{{ route('posts.store') }}" method="POST">
                            @csrf
                            <div>
                                <input type="text" name="text" placeholder="title" />
                            </div>
                            <div>
                                <input type="text" name="message" class="message-box" placeholder="Message" />
                            </div>
                            <div class="btn_box">
                                <button class="btn btn-primary btn-block py-3 px-5" type="submit">
                                    Saqlash
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
