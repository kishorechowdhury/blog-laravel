@extends('layout.main')

@section('content')
    @include('partials._banner')
    <div class="site-section">
        <div class="container">
            <h4>Search: {{ $keyword }}</h4>
            <hr/>
            <br/>
            <div class="row">
                @unless (count($posts) == 0)                    
                    @foreach($posts as $post)
                        <x-post-card :post="$post" />
                    @endforeach
                    @else
                    <div class="col-lg-4 col-md-6 mb-4">
                        <p>No data found.</p>
                    </div>                    
                @endunless
                <div class="mt-6 p-4">
                    {{-- {{$posts->links()}} --}}
                </div>                
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