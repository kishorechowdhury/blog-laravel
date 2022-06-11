@extends('layout.main')

@section('content')
    <div class="site-section" style="background-color: #e9e9e9;">
        <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <h4>My Posts <a href="/posts/create" class="btn btn-secondary" style="float: right;">New Post</a></h4>
                <hr/>
                <table class="table table-striped table-dark table-hover">
                    <tbody>
                      @unless($listings->isEmpty())
                      @foreach($listings as $listing)
                      <tr>
                          <td>{{ $loop->index+1 }}</td>
                        <td>
                          <a href="{{$listing->id}}"> {{$listing->title}} </a>
                        </td>
                        <td align="right">
                            <a href="/posts/{{$listing->id}}/edit" class="btn btn-secondary">Edit</a>
                            <form method="POST" action="/posts/{{$listing->id}}" style="display: inline;" onsubmit="return confirm('Do you really want to delete the data?');">
                                @csrf
                                @method('DELETE')
                                <button class="btn btn-danger">Delete</button>
                            </form>                          
                        </td> 
                      </tr>
                      @endforeach
                      @else
                      <tr>
                        <td colspan="3">
                          <p class="text-center">No Post Found</p>
                        </td>
                      </tr>
                      @endunless
              
                    </tbody>
                </table>
            </div>
        </div>
        </div>
    </div>
@endsection