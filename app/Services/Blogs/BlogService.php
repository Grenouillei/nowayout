<?php
/**
 * Created by PhpStorm.
 * User: Meits
 * Date: 19-Nov-18
 * Time: 13:06
 */

namespace App\Services\Blogs;


use App\Models\Blog;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Cache;

class BlogService
{
    public function getAllBlogs($string){
        return Blog::orderBy('created_at', 'DESC')->paginate(config('settings.'.$string));
    }

    public function store(Request $request,Blog $blog){
        $blog->fill($request->only($blog->getFillable()));
        $blog->setAlias($blog->title);
        $blog->save();
    }

    public function delete(Blog $blog){
        $blog->delete();
    }

    public function getBlog($alias){
        $key = 'blog_'.$alias;
        $blog = Cache::get($key);
        if(!$blog) {
            $blog = Blog::where('alias',$alias)->first();
            Cache::put($key, $blog, 900);
        }
        return $blog;
    }
}
