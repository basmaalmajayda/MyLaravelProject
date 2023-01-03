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
        return view('admin.feedbackTable')->with('feedbacks', $feedbacks);
    }

    public function storeFeedback(FeedbackRequest $request){
		$feedback = new Feedback;

		$filename = time().'_'.rand(1,10000).'.'.$request->img->extension();
		$request->img->move(public_path('feedback_images'), $filename);
		$feedback->img = 'feedback_images/' . $filename;

    	$feedback->name = $request->name;
        $feedback->profession = $request->profession;
    	$feedback->message = $request->message;
		$feedback->name_ar = $request->name_ar;
        $feedback->profession_ar = $request->profession_ar;
    	$feedback->message_ar = $request->message_ar;
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
    	$feedback = Feedback::find($request->id);
		unlink(public_path( $feedback->img));
		$filename = time().'_'.rand(1,10000).'.'.$request->img->extension();
		$request->img->move(public_path('feedback_images'), $filename);
		$feedback->img = 'feedback_images/' . $filename;

		$feedback->name = $request->name;
		$feedback->profession = $request->profession;
		$feedback->message = $request->message;
		$feedback->name_ar = $request->name_ar;
        $feedback->profession_ar = $request->profession_ar;
    	$feedback->message_ar = $request->message_ar;
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
