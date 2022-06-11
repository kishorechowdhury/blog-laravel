@extends('layout.main')

@section('content')
    @include('partials._banner')
    <div class="site-section">
        <div class="container">
            <div class="row">
                <div class="col-md-8 blog-content">
                    <h4>{{$post->title}}</h4>
                    <hr />
                    <img src="{{$post->photo ? asset('storage/' . $post->photo) : asset('/images/img_1.jpg')}}" alt="Image" style="width:100%; height:40%;" class="" />
                    <br/><br/>
                    <p>{{$post->description}}</p>
                    <div class="">
                        <x-post-tags :tagsCsv="$post->tags" />                        
                    </div>
                    <small>By <strong>{{$post->name}}</strong></small>
                    {{-- <a href="/posts/{{$post->id}}" class="btn btn-info">Edit</a>
                    <form method="POST" action="/posts/{{$post->id}}" style="display: inline;" onsubmit="return confirm('Do you really want to delete the data?');">
                        @csrf
                        @method('DELETE')
                        <button class="btn btn-danger"><i class="fa-solid fa-trash"></i> Delete</button>
                    </form> --}}
                </div>
                <div class="col-md-4 sidebar">
                    <div class="sidebar-box">
                        <img src="{{ asset('images/person_1.jpg'); }}" alt="Image" class="img-fluid mb-4 w-50 rounded-circle">
                        <h3 class="text-black">{{$post->name}}</h3>
                        <hr/>
                        <h6 class="text-black">About:</h6>
                        <p>Even the all-powerful Pointing has no control about the blind texts it is an almost unorthographic life One day however a small line of blind text by the name of Lorem Ipsum decided to leave for the far World of Grammar.</p>
                        <p><a href="#" class="btn btn-primary btn-md text-white">Read More</a></p>
                    </div>
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