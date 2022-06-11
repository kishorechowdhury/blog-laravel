<?php

namespace App\Models;

use Illuminate\Support\Facades\DB;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Post extends Model
{
    use HasFactory;

    // protected $fillable = ['title', 'tags', 'description'];

    public function scopeFilter($query, array $filters){
        if($filters['tag'] ?? false){
            $query->where('tags', 'LIKE', '%' . request('tag') .'%')
            ->where('status', '=', '1');
        }

        if($filters['q'] ?? false) {
            $query->where('title', 'LIKE', '%' . request('q') . '%')
                ->orWhere('description', 'LIKE', '%' . request('q') . '%')
                ->orWhere('tags', 'LIKE', '%' . request('q') . '%');
        }
    }

    // Relationship To User
    public function user() {
        return $this->belongsTo(User::class, 'user_id');
    }

    public static function single($id){
        return DB::table('users')
        ->join('posts', 'users.id', '=', 'posts.user_id')
        ->where('posts.id', '=', $id)
        ->select('users.name', 'posts.*')
        ->get();
    }

    public static function newPost() {
        return DB::table('posts')->where('status', 1)->orderBy('id', 'DESC')->paginate(3);
    }
}
