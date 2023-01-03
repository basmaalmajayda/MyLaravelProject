<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Service;
use DB;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\View;
use App\Http\Requests\ServiceRequest;

class ServiceController extends Controller
{

    public function showServices(){
        $services = Service::select('*')->withTrashed()->paginate(5);
        return view('admin.serviceTable')->with('services', $services);
    }

    public function storeService(ServiceRequest $request){
		$service = new Service;

		$filename = time().'_'.rand(1,10000).'.'.$request->img->extension();
		$request->img->move(public_path('service_images'), $filename);
		$service->img = 'service_images/' . $filename;

    	$service->name = $request->name;
		$service->name_ar = $request->name_ar;
    	$service->title = $request->title;
		$service->title_ar = $request->title_ar;
		$service->description = $request->description;
		$service->description_ar = $request->description_ar;
	    $status = $service->save();
    	return redirect()->back()->with('status', $status);
    }

    public function createService(){
        return view('admin.serviceForm');
    }

    public function editService($id){
        $service = Service::select('*')->where('id', $id)->first();
    	return view('admin.editServiceForm')->with('service', $service);
    }

    public function updateService(ServiceRequest $request){
		$service = Service::find($request->id);
		unlink(public_path( $service->img));
		$filename = time().'_'.rand(1,10000).'.'.$request->img->extension();
		$request->img->move(public_path('service_images'), $filename);
		$service->img = 'service_images/' . $filename;

		$service->name = $request->name;
		$service->name_ar = $request->name_ar;
    	$service->title = $request->title;
		$service->title_ar = $request->title_ar;
		$service->description = $request->description;
		$service->description_ar = $request->description_ar;
        $status = $service->save();
		return redirect()->back()->with('status', $status);
    }

    public function deleteService($id){
    	Service::where('id', $id)->delete();
    	return redirect()->back();
    }

    public function restoreService($id){
    	Service::onlyTrashed()->where('id', $id)->restore();
    	return redirect()->back();
    }

}
