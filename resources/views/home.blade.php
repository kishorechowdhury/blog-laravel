@extends('layout.main')

@section('content')
    <div class="ftco-blocks-cover-1">
        <div class="site-section-cover overlay" style="background-image: url('images/hero_1.jpg')">
        <div class="container">
            <div class="row align-items-center">
            <div class="col-md-5" data-aos="fade-right">
                <h1 class="mb-3 text-white">Let's Enjoy The Wonders of Nature</h1>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Soluta veritatis in tenetur doloremque, maiores doloribus officia iste. Dolores.</p>
                
            </div>
            </div>
        </div>
        </div>
    </div>

    <div class="site-section">
        <div class="container">
            <div class="row justify-content-center text-center">
                <div class="col-md-10">
                <div class="heading-39101 mb-5">
                    <span class="backdrop text-center">Blog</span>
                    <span class="subtitle-39191">Updates</span>
                    <h3>Latest Blog</h3>
                </div>
                </div>
            </div>
            
            <div class="row">
                @unless (count($posts) == 0)
                    @foreach($posts as $post)
                        <x-post-card :post="$post" />
                    @endforeach
                    @else
                    <div class="col-lg-4 col-md-6 mb-4">
                        <p>No post published yet.</p>
                    </div>
                @endunless
            </div>
        </div>
    </div>

    <div class="site-section bg-image overlay" style="background-image: url('{{ asset('images/hero_1.jpg'); }}')">
        <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-7 text-center">
            <h2 class="font-weight-bold text-white">Join and Trip With Us</h2>
            <p class="text-white">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Delectus ut, doloremque quo molestiae nesciunt officiis veniam, beatae dignissimos!</p>
            <p class="mb-0"><a href="#" class="btn btn-primary text-white py-3 px-4">Get In Touch</a></p>
            </div>
        </div>
        </div>
    </div>
@endsection