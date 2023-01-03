<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Blog;
use DB;
use Illuminate\Support\Facades\Storage;
use App\Http\Requests\BlogRequest;

class BlogController extends Controller
{
    public function showBlogs(){
        $blogs = Blog::select('*')->withTrashed()->paginate(5);
		// foreach($blogs as $blog){
		// 	$img_link = Storage::url($blog->img);
		// 	$blog->img = $img_link;
		// }
        return view('admin.blogTable')->with('blogs', $blogs);
    }

    public function storeBlog(BlogRequest $request){
        // $img = $request->file('img');
    	// $path = 'public/blog_images/';
    	// $name = time().'_'.rand(1,10000).'.'.$img->getClientOriginalExtension();
    	// Storage::disk('local')->put($path.$name, file_get_contents($img));

		// $imgAuther = $request->file('auther_img');
    	// $pathAuther = 'public/auther_images/';
    	// $nameAuther = time().'_'.rand(1,10000).'.'.$imgAuther->getClientOriginalExtension();
    	// Storage::disk('local')->put($pathAuther.$nameAuther, file_get_contents($imgAuther));
    
    	$blog = new Blog;
		// $path = $request->file('img')->store('public/blog_images');
    	// $fileName = basename($path);
    	// $blog->img = $fileName;

		// $path2 = $request->file('auther_img')->store('public/auther_images');
    	// $fileName2 = basename($path2);
    	// $blog->img_auther = $fileName2;

		$filename = time().'_'.rand(1,10000).'.'.$request->img->extension();
		$request->img->move(public_path('blog_images'), $filename);
		$blog->img = 'blog_images/' . $filename;

    	// $path2 = $request->file('auther_img')->store('public/auther_images');
    	// $fileName2 = basename($path2);
		// $blog->img_auther = $fileName2;
		
		$filename = time().'_'.rand(1,10000).'.'.$request->img_auther->extension();
		$request->img_auther->move(public_path('auther_images'), $filename);
		$blog->img_auther = 'auther_images/' . $filename;

    	$blog->title = $request->title;
    	$blog->title_ar = $request->title_ar;
    	$blog->subject = $request->subject;
    	$blog->subject_ar = $request->subject_ar;
        $blog->description = $request->description;
        $blog->description_ar = $request->description_ar;
    	$blog->auther = $request->auther;
    	$blog->auther_ar = $request->auther_ar;
	    $status = $blog->save();
    	return redirect()->back()->with('status', $status);
    }

    public function createBlog(){
        return view('admin.blogForm');
    }

    public function editBlog($id){
        $blog = Blog::select('*')->where('id', $id)->first();
    	return view('admin.editBlogForm')->with('blog', $blog);
    }

    public function updateBlog(BlogRequest $request){
        // $img = $request->file('img');
    	// $path = 'public/blog_images/';
    	// $name = time().'_'.rand(1,10000).'.'.$img->getClientOriginalExtension();
    	// Storage::disk('local')->put($path.$name, file_get_contents($img));

        // $imgAuther = $request->file('auther_img');
    	// $pathAuther = 'public/auther_images/';
    	// $nameAuther = time().'_'.rand(1,10000).'.'.$imgAuther->getClientOriginalExtension();
    	// Storage::disk('local')->put($pathAuther.$nameAuther, file_get_contents($imgAuther));

		$blog = Blog::find($request->id);

		// $path = $request->file('img')->store('public/blog_images');
    	// $fileName = basename($path);
		// $blog->img = $fileName;

		$filename = time().'_'.rand(1,10000).'.'.$request->img->extension();
		$request->img->move(public_path('blog_images'), $filename);
		$blog->img = 'blog_images/' . $filename;

    	// $path2 = $request->file('auther_img')->store('public/auther_images');
    	// $fileName2 = basename($path2);
		// $blog->img_auther = $fileName2;
		
		$filename = time().'_'.rand(1,10000).'.'.$request->img_auther->extension();
		$request->img_auther->move(public_path('auther_images'), $filename);
		$blog->img_auther = 'auther_images/' . $filename;

		$blog->title = $request->title;
		$blog->title_ar = $request->title_ar;
    	$blog->subject = $request->subject;
    	$blog->subject_ar = $request->subject_ar;
		$blog->description = $request->description;
		$blog->description_ar = $request->description_ar;
		$blog->auther = $request->auther;
		$blog->auther_ar = $request->auther_ar;
    	$status = $blog->save();
		return redirect()->back()->with('status', $status);
    }

    public function deleteBlog($id){
    	Blog::where('id', $id)->delete();
    	return redirect()->back();
    }

    public function restoreBlog($id){
    	Blog::onlyTrashed()->where('id', $id)->restore();
    	return redirect()->back();
    }

}
