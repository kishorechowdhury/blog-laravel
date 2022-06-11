@extends('layout.main')

@section('content')
    <div class="site-section" style="background-color: #e9e9e9;">
        <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <h4>Edit: {{$post->title}}</h4>
                <hr/>
                <form method="POST" action="/posts/{{$post->id}}" enctype="multipart/form-data">
                    @csrf
                    @method('PUT')
                    <div class="form-group">
                        <label for="title">Title:</label>
                        <input type="text" class="form-control" name="title" placeholder="Enter title" id="title" value="{{$post->title}}" />
                        @error('title')
                            <p style="color:#e72424fa;">{{$message}}</p>
                        @enderror
                    </div>
                    
                    <div class="form-group">
                        <label for="description">Description:</label>
                        <textarea class="form-control" name="description" placeholder="Enter description" rows="5">{{$post->description}}</textarea>
                        @error('description')
                            <p style="color:#e72424fa;">{{$message}}</p>
                        @enderror
                    </div>

                    <div class="form-group">
                        <label for="tags">Tags:</label>
                        <input type="text" class="form-control" name="tags" placeholder="Enter comma separated tags" id="tags" value="{{$post->tags}}" />
                        @error('tags')
                            <p style="color:#e72424fa;">{{$message}}</p>
                        @enderror
                    </div>

                    <div class="form-group">
                        <label for="photo">File:</label>
                        <input type="file" class="form-control" name="photo" id="photo" />
                        <img src="{{$post->photo ? asset('storage/' . $post->photo) : asset('/images/img_1.jpg')}}" alt="Image" style="height:75px; width:80px; margin-top:4px;" />
                        @error('photo')
                            <p style="color:#e72424fa;">{{$message}}</p>
                        @enderror
                    </div>

                    <div class="form-group">
                        <label for="status">Status:</label>
                        <select class="form-control" name="status">
                            <option value="-1" disabled>Select</option>
                            <option value="0" {{($post->status == 0) ? 'selected' : ''}}>Draft</option>
                            <option value="1" {{($post->status == 1) ? 'selected' : ''}}>Publish</option>
                        </select>
                        @error('status')
                            <p style="color:#e72424fa;">{{$message}}</p>
                        @enderror
                    </div>

                    <br/>
                    <button type="submit" class="btn btn-primary">Submit</button>
                    <a href="/posts/manage" class="btn btn-default" style="border: 1px solid #c4c5d7;">Return</a>
                  </form> 
            </div>
        </div>
        </div>
    </div>
@endsection