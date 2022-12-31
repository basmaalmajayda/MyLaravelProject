<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Service;
use App\Blog;
use App\Team;
use App\Feedback;
use App\Contact;

class DashboardController extends Controller
{
    public function getDashboard(){
        $countSrevice = Service::withTrashed()->count();
        $countTeam = Team::withTrashed()->count();
        $countBlog = Blog::withTrashed()->count();
        $countContact = Contact::withTrashed()->count();
        $countFeedback = Feedback::withTrashed()->count();
        return view('admin.dashboard')->with(['countSrevice' => $countSrevice, 'countTeam' => $countTeam, 'countBlog'=> $countBlog, 'countContact' => $countContact, 'countFeedback' => $countFeedback]);
    }

}
