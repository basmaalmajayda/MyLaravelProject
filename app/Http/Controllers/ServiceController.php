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
		// foreach($services as $service){
		// 	$img_link = Storage::url($service->img);
		// 	$service->img = $img_link;
		// }
        return view('admin.serviceTable')->with('services', $services);
    }

    public function storeService(ServiceRequest $request){
        // $img = $request->file('img');
    	// $path = 'public/service_images/';
    	// $name = time().'_'.rand(1,10000).'.'.$img->getClientOriginalExtension();
    	// Storage::disk('local')->put($path.$name, file_get_contents($img));

		// $img = $request['img'];
        // $name = time().'.'.$img->getClientOriginalExtension();
        // $destinationPath = public_path('public/img/');
        // $img->move($destinationPath, $name);

		$service = new Service;
		// $path = $request->file('img')->store('public/service_images');
    	// $fileName = basename($path);

		$filename = time().'.'.$request->img->extension();
		$request->img->move(public_path('service_images'), $filename);
		$service->img = '/service_images/' . $filename;

    	$service->name = $request->name;
    	$service->description = $request->description;
    	//$service->img = $fileName;
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
        // $img = $request->file('img');
    	// $path = 'public/service_images/';
    	// $name = time().'_'.rand(1,10000).'.'.$img->getClientOriginalExtension();
    	// Storage::disk('local')->put($path.$name, file_get_contents($img));

		$filename = time().'.'.$request->img->extension();
		$request->img->move(public_path('service_images'), $filename);
		$service->img = '/service_images/' . $filename;

		// $service = Service::find($request->id);
		// $path = $request->file('img')->store('public/service_images');
    	// $fileName = basename($path);
		// $service->img = $fileName;

		//$service->img = $path.$name;
		$service->name = $request->name;
		$service->description = $request->description;
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
