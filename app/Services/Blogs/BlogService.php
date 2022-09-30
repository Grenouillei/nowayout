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

class BlogService
{
    public function getAllBlogs(){
        return Blog::orderBy('created_at', 'DESC')->paginate(config('settings.paginate_pub'));
    }

    public function store(){

    }
}
