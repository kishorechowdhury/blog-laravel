@props(['post'])

<div class="col-lg-4 col-md-6 mb-4">
    <div class="post-entry-1 h-100">
        <a href="/posts/{{$post->id}}">
            <img src="{{$post->photo ? asset('storage/' . $post->photo) : asset('/images/img_1.jpg')}}" alt="Image" class="img-fluid" />
        </a>
        <div class="post-entry-1-contents">        
            <h2><a href="/posts/{{$post->id}}">{{$post->title}}</a></h2>
            <span class="meta d-inline-block mb-3">{{ \Carbon\Carbon::parse($post->created_at)->format('M d, Y')}} <span class="mx-2">by</span> <a href="#">Admin</a></span>
            <p>{{\Illuminate\Support\Str::limit($post->description, 100)}}</p>
        </div>
    </div>
</div>
