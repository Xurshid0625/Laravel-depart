<x-head>
    <x-slot:title>
        Blog
    </x-slot:title>
    <!-- blog section -->

    <section class="blog_section layout_padding">
        <div class="container-fluid">
            <div class="heading_container">
                <h2>
                    Latest Blog
                </h2>
            </div>
            <div class="row">
                @foreach ($posts as $post)
                    <div class="col-lg-6 ">
                        <div class="box">
                            <div class="img-box">
                                <img src="images/b1.jpg" alt="">
                            </div>
                            <div class="detail-box">
                                <h5>
                                    {{ $post->title }}
                                </h5>
                                <p>
                                    {{ $post->text }}
                                </p>
                                <a href="">
                                    Read More
                                </a>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
    </section>

    <!-- end blog section -->
</x-head>
