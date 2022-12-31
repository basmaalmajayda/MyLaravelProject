<?php

namespace App\Http\Controllers;
use App\Service;
use App\Team;
use App\Feedback;
use App\Blog;
use App\Contact;
use Illuminate\Http\Request;
use App;
use Illuminate\Support\Facades\Config;

class UserController extends Controller
{
    public function getHome(){
        //App::setLocale('ar');
        $services = Service::select('*')->paginate(4);
        $blogs = Blog::select('*')->paginate(2);
        $feedbacks = Feedback::select('*')->paginate(2);
        $teams = Team::select('*')->paginate(3);
        return view('index')->with(['services' => $services , 'blogs' => $blogs , 'feedbacks' => $feedbacks, 'teams' => $teams]);
    }

    public function changeLang($locale){
        session()->put('locale', $locale);
        return redirect()->back();
    }

    public function getAbout(){
        $teams = Team::select('*')->paginate(3);
        return view('about')->with('teams', $teams);
    }

    public function getContact(){
        return view('contact');
    }
    
    public function getService(){
        $services = Service::select('*')->paginate(4);
        return view('service')->with('services' , $services);
    }
    public function getBlog(){
        $blogs = Blog::select('*')->paginate(2);
        return view('blog')->with('blogs' , $blogs);
    }
    public function blogDetails($id){
        $blog = Blog::select('*')->where('id', $id)->first();
        return view('blogDetails')->with('blog' , $blog);
    }
    public function serviceDetails($id){
        $service = Service::select('*')->where('id', $id)->first();
        return view('serviceDetails')->with('service' , $service);
    }

    public function searchService(Request $request){
        $services = Service::select('*')->where('name','like', '%' . $request->name . '%' )->paginate(6);
    	return view('searchService')->with('services' , $services);
    }
    
}
