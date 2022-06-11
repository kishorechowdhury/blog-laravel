@extends('layout.main')

@section('content')
    <div class="site-section" style="background-color: #e9e9e9;">
        <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <h4>New Post</h4>
                <hr/>
                <form method="POST" action="/posts/save" enctype="multipart/form-data">
                    @csrf
                    <div class="form-group">
                        <label for="title">Title:</label>
                        <input type="text" class="form-control" name="title" placeholder="Enter title" id="title" value="{{old('title')}}" />
                        @error('title')
                            <p style="color:#e72424fa;">{{$message}}</p>
                        @enderror
                    </div>
                    
                    <div class="form-group">
                        <label for="description">Description:</label>
                        <textarea class="form-control" name="description" placeholder="Enter description" rows="5">{{old('description')}}</textarea>
                        @error('description')
                            <p style="color:#e72424fa;">{{$message}}</p>
                        @enderror
                    </div>

                    <div class="form-group">
                        <label for="tags">Tags:</label>
                        <input type="text" class="form-control" name="tags" placeholder="Enter comma separated tags" id="tags" value="{{old('tags')}}" />
                        @error('tags')
                            <p style="color:#e72424fa;">{{$message}}</p>
                        @enderror
                    </div>

                    <div class="form-group">
                        <label for="photo">File:</label>
                        <input type="file" class="form-control" name="photo" id="photo" />
                        @error('photo')
                            <p style="color:#e72424fa;">{{$message}}</p>
                        @enderror
                    </div>

                    <div class="form-group">
                        <label for="status">Status:</label>
                        <select class="form-control" name="status">
                            <option value="0">Draft</option>
                            <option value="1">Publish</option>
                        </select>
                        @error('status')
                            <p style="color:#e72424fa;">{{$message}}</p>
                        @enderror
                    </div>

                    <br/>
                    <button type="submit" class="btn btn-primary">Submit</button>
                    <input type="reset" class="btn btn-secondary" value="Reset" />
                  </form> 
            </div>
        </div>
        </div>
    </div>
@endsection