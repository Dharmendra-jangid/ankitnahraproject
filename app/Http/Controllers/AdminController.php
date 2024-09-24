<?php

namespace App\Http\Controllers;

use App\Models\Abouts;
use App\Models\AddPhotos;
use App\Models\Addvideoes;
use App\Models\Banners;
use App\Models\Contact;
use App\Models\Services;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Auth;
use LDAP\Result;


class AdminController extends Controller
{
    public function index()
    {

        $user = User::first();

        return view('admins.index', compact('user'));
    }
    public function serviceEdit()
    {
        $servicedit = Services::all();
        return view('admins.serviceEdit', compact('servicedit'));
    }

    public function editservices($id)
    {
        $servicedit = Services::find($id);
        return view('admins.editservice', compact('servicedit'));
    }
    public function autheditservices(Request $request,$id){

        $service = Services::find($id);
        $service->name = $request->name;
        $service->description = $request->description;
        if ($request->hasFile('image')){
            $imageName = time() . '.' . $request->image->extension();
            $request->image->move(public_path('service'), $imageName);
            $service->image = $imageName;
            }
        $service->save();
         return redirect()->route('admins.service');

   }
   public function addservices($id){
    $servicedit = Services::find($id);
    $about = Abouts::first();
    return view('admin.addservices', compact('servicedit','about'));

   }

   public function delete($id)
    {
        $servicedit = Services::findOrFail($id);
        if ($servicedit->image) {
            $imagePath = public_path('service/' . $servicedit->image);
            if (file_exists($imagePath)) {
                unlink($imagePath);
            }
        }
        $servicedit->delete();

        return redirect()->route('admins.serviceEdit')->with('success', 'Item deleted successfully');
    }




    public function addbanner(Request $request)
    {

            $banner = new Banners();
        $banner->name = $request->name;
        $banner->description = $request->description;
        if ($request->hasFile('image')){
        $imageName = time() . '.' . $request->image->extension();

        $request->image->move(public_path('banner'), $imageName);
        $banner->image = $imageName;
        }

        $banner->save();
        return redirect()->route('admins.banner');

    }
    public function table()
    {
        return view('admins.tables');
    }
    public function banner()
    {       $banner = Banners::all();
        return view('admins.banner',compact('banner'));
    }




    public function about(){

        return view('admins.about');

    }
    public function editabouts($id){
        $about = Abouts::find($id);
        return view('admins.editabouts',compact('about'));

    }
    public function  autheditabouts(Request $request,$id){
        $about = Abouts::find($id);
        $about->name = $request->name;
        $about->title = $request->title;
         $about->qualification = $request->qualification;
        $about->work_experience = $request->work_experience;
       $about->email = $request->email;
     $about->phone = $request->phone;
        $about->description = $request->description;
           $about->shortdescription = $request->shortdescription;
        $about->consultationtiming = $request->consultationtiming;
                $about->address = $request->address;
                if ($request->hasFile('image')){
                $imageName = time() . '.' . $request->image->extension();
                $request->image->move(public_path('about'), $imageName);
                $about->image = $imageName;
                }
        $about->save();
         return redirect()->route('admins.editabouts');
    }


    // public function authabout(Request $request)
    // {
    //     $validator = Validator::make($request->all(), [
    //         'name' => 'required',
    //         'title' => 'required',
    //         'qualification' => 'required',
    //         'work_experience' => 'required',
    //         'email' => 'required',

    //         'phone' => 'required',
    //         'image' => 'required',

    //     ]);
    //     if ($validator->passes()) {

    //         $abouts = new Abouts();
    //         $abouts->name = $request->name;
    //         $abouts->title = $request->title;
    //         $abouts->qualification = $request->qualification;
    //         $abouts->work_experience = $request->work_experience;
    //         $abouts->email = $request->email;
    //         $abouts->phone = $request->phone;
    //         $abouts->description = $request->description;
    //         $abouts->shortdescription = $request->shortdescription;
    //         $abouts->consultationtiming = $request->consultationtiming;
    //         $abouts->address = $request->address;

    //         $imageName = time() . '.' . $request->image->extension();
    //         $request->image->move(public_path('about'), $imageName);
    //         $abouts->image = $imageName;
    //         $abouts->save();

    //         return redirect()->route('admins.about');
    //     } else {
    //         return redirect()->route('admins.about')->withErrors($validator);
    //     }
    // }


    public function service()
    {
        return view('admins.services');
    }
    public function authservice(Request $request)
    {
        $validation = Validator::make($request->all(), [
            'name' => 'required | unique:services'
        ]);
        if ($validation->passes()) {
            $service = new Services();
             $service->name = $request->name;
             $service->slug = Str::slug($request->name);
            $service->description = $request->description;
            $service->longdescription = $request->longdescription;

            if ($request->hasFile('image')){
            $imageName = time() . '.' . $request->image->extension();
            $request->image->move(public_path('service'), $imageName);
            $service->image = $imageName;
            }
            $service->save();
            return redirect()->route('admins.service');
        } else {
            return  redirect()->route('admins.service')->withErrors($validation);
        }
    }
    public function contactshow()
    {
        $contact = Contact::all();
        return view('admins.contactshow', compact('contact'));
    }
    public function destroy($id)
    {
        $contact = Contact::findOrFail($id);
        $contact->delete();

        return redirect()->route('admins.contactshow')->with('success', 'Item deleted successfully');
    }
    public function register()
    {
        return view('admins.register');
    }
    public function authregister(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'name' => 'required',
            'email' => 'required',
            'password' => 'required|string|min:8|max:20'
        ]);
        if ($validator->passes()) {

            $user = new User();
            $user->name = $request->name;
            $user->email = $request->email;

            $user->password = Hash::make($request->password);
            if ($request->hasFile('image')) {
                $image = $request->file('image');
                $imageName = time() . '.' . $image->extension();
                $image->move(public_path('Admin'), $imageName);
                $user->image = $imageName;
                $user->save();
            } else {
                return redirect()->back()->with('error', 'No image uploaded.');
            }

            return redirect()->route('admins.login');
        } else {
            return redirect()->route('admins.register')->withErrors($validator);
        }
    }

    public function login()
    {
        return view('admins.login');
    }
    public function authlogin(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'name' => 'required',
            'password' => 'required'
        ]);
        if ($validator->passes()) {
            if (Auth::attempt(['name' => $request->name, 'password' => $request->password])) {
                return redirect()->route('admins.index');
            } else {
                return redirect()->route('admins.login')->with('Wrong password');
            }
        } else {
            return redirect()->route('admins.login')->withErrors($validator);
        }
    }
    public function photo(){
        $photo = AddPhotos::all();
        return view('admins.photo',compact('photo'));
    }
    public function uploadImage(Request $request){
        $validator= Validator::make($request->all(),[
            'image' => 'required'
        ]);
        if($validator->passes()){
             $photo = new AddPhotos();
             $imageName = time() . '.' . $request->image->extension();
             $request->image->move(public_path('photo'), $imageName);
             $photo->image = $imageName;
             $photo->save();
             return redirect()->route('admins.photo');
        }
        else{
            return redirect()->route('admins.photo')->withErrors($validator);
        }

    }

    public function deletePhoto($id)
    {
        $photo = AddPhotos::find($id);
        if ($photo->image) {
            $imagePath = public_path('photo/' . $photo->image);
            if (file_exists($imagePath)) {
                unlink($imagePath);
            }
        }
        $photo->delete();

        return redirect()->back()->with('success', 'Item deleted successfully');
    }


    public function video(){
        $video = Addvideoes::all();
        return view('admins.video',compact('video'));
    }



    public function insertvideo(Request $request){
        $request->validate([
               'video'=> 'required |mimes:mp4,ogx,oga,ogv,ogg,webm'
        ]);
           $file = $request->file('video');
           $file->move('videoes',$file->getClientOriginalName());
           $file_name = $file->getClientOriginalName();
           $video = new Addvideoes();
           $video->video = $file_name;
           $video->name = $request->name;
           $video->save();
           return redirect()->route('admins.video');

    }
    public function deleteVideo($id){
        $video = Addvideoes::find($id);
        if ($video->video) {
            $imagePath = public_path('videoes/' . $video->video);
            if (file_exists($imagePath)) {
                unlink($imagePath);
            }
        }
        $video->delete();

        return redirect()->back()->with('success', 'Item deleted successfully');

}
    public function deleteBanner($id){
        $banner = Banners::find($id);
        if ($banner->image) {
            $imagePath = public_path('banner/' . $banner->image);
            if (file_exists($imagePath)) {
                unlink($imagePath);
            }
        }
        $banner->delete();

        return redirect()->back()->with('success', 'Item deleted successfully');
    }
    public function logout()
    {
        Auth::logout();
        return redirect()->route('admins.login');
    }
}
