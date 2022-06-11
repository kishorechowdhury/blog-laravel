<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PostController extends Controller
{
    //show all
    public function index(){
        if(request(['tag']))
        {
            $results = Post::latest()->filter(request(['tag']))->simplePaginate(6);
        }
        else
        {
            $results = DB::table('posts')->where('status', 1)->orderBy('id', 'DESC')->simplePaginate(6);
        }
        return view('posts.posts', [
            'posts' => $results
        ]);
    }

    //show single
    public function single($id){
        $results = Post::single($id);
        return view('posts.post', [
            'post' => $results[0]
        ]);
    }

    //show search
    public function search(){
        return view('posts.search', [
            'keyword' => request('q'),
            'posts' => Post::latest()->filter(request(['q']))->get()
        ]);
    }

    //show create
    public function create(){
        return view('posts.create');
    }

    //store Post Data
    public function store(Request $request) {
        $formFields = $request->validate([
            'title' => 'required',
            'tags' => 'required',
            'description' => 'required',
            'status' => 'required'
        ]);

        if($request->hasFile('photo')){
            $formFields['photo'] = $request->file('photo')->store('photos', 'public');
        }

        $formFields['user_id'] = auth()->id();

        Post::create($formFields);

        return redirect('/')->with('message', 'Post created successfully!');
    }

    // Show Edit Form
    public function edit(Post $post) {
        return view('posts.edit', ['post' => $post]);
    }

    // Update Post Data
    public function update(Request $request, Post $post) {
        // Make sure logged in user is owner
        if($post->user_id != auth()->id()) {
            abort(403, 'Unauthorized Action');
        }
        
        $formFields = $request->validate([
            'title' => 'required',
            'tags' => 'required',
            'description' => 'required',
            'status' => 'required'
        ]);

        if($request->hasFile('logo')) {
            $formFields['logo'] = $request->file('logo')->store('logos', 'public');
        }

        $post->update($formFields);

        return back()->with('message', 'Post updated successfully!');
    }

    //delete Post
    public function destroy(Post $post) {
        // Make sure logged in user is owner
        if($post->user_id != auth()->id()) {
            abort(403, 'Unauthorized Action');
        }
        
        $post->delete();
        return redirect('/')->with('message', 'Post deleted successfully.');
    }

    // Manage Posts
    public function manage() {
        return view('posts.manage', ['listings' => auth()->user()->posts()->get()]);
    }
}
