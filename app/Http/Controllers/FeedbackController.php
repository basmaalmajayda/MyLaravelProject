<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Feedback;
use DB;
use Illuminate\Support\Facades\Storage;
use App\Http\Requests\FeedbackRequest;

class FeedbackController extends Controller
{
    public function showFeedback(){
        $feedbacks = Feedback::select('*')->withTrashed()->paginate(5);
		// foreach($feedbacks as $feedback){
		// 	$img_link = Storage::url($feedback->img);
		// 	$feedback->img = $img_link;
		// }
        return view('admin.feedbackTable')->with('feedbacks', $feedbacks);
    }

    public function storeFeedback(FeedbackRequest $request){
        // $img = $request->file('img');
    	// $path = 'public/feedback_images/';
    	// $name = time().'_'.rand(1,10000).'.'.$img->getClientOriginalExtension();
    	// Storage::disk('local')->put($path.$name, file_get_contents($img));

		$feedback = new Feedback;
		// $path = $request->file('img')->store('public/feedback_images');
    	// $fileName = basename($path);
    	// $feedback->img = $fileName;

		$filename = time().'.'.$request->img->extension();
		$request->img->move(public_path('feedback_images'), $filename);
		$feedback->img = '/feedback_images/' . $filename;

    	$feedback->name = $request->name;
        $feedback->profession = $request->profession;
    	$feedback->message = $request->message;
	    $status = $feedback->save();
    	return redirect()->back()->with('status', $status);
    }

    public function createFeedback(){
        return view('admin.feedbackForm');
    }

    public function editFeedback($id){
        $feedback = Feedback::select('*')->where('id', $id)->first();
    	return view('admin.editFeedbackForm')->with('feedback', $feedback);
    }

    public function updateFeedback(FeedbackRequest $request){
        // $img = $request->file('img');
    	// $path = 'public/feedback_images/';
    	// $name = time().'_'.rand(1,10000).'.'.$img->getClientOriginalExtension();
    	// Storage::disk('local')->put($path.$name, file_get_contents($img));

    	$feedback = Feedback::find($request->id);
		// $path = $request->file('img')->store('public/feedback_images');
    	// $fileName = basename($path);
    	// $feedback->img = $fileName;

		$filename = time().'.'.$request->img->extension();
		$request->img->move(public_path('feedback_images'), $filename);
		$feedback->img = '/feedback_images/' . $filename;

		$feedback->name = $request->name;
		$feedback->profession = $request->profession;
		$feedback->message = $request->message;
    	$status = $feedback->save();
		return redirect()->back()->with('status', $status);
    }

    public function deleteFeedback($id){
    	Feedback::where('id', $id)->delete();
    	return redirect()->back();
    }

    public function restoreFeedback($id){
    	Feedback::onlyTrashed()->where('id', $id)->restore();
    	return redirect()->back();
    }
}
