<?php

namespace App\Http\Controllers;

use App\Models\Abouts;
use App\Models\AddPhotos;
use App\Models\Addvideoes;
use App\Models\Banners;
use App\Models\Contact;
use App\Models\Services;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class HomeController extends Controller
{
    public function index(){
        $photo = AddPhotos::all();
        $banner = Banners::all();
        $about = Abouts::first();
        $servicename= Services::all();
        return view('admin.index',compact('banner','about','servicename','photo'));

    }
public function abouts(){
    $about = Abouts::first();
    $servicename= Services::all();
    return view('admin.about',compact('about','servicename'));
}


    public function contact(){
        $about = Abouts::first();
        $servicename= Services::all();
        return view('admin.contact',compact('about','servicename'));
    }
    public function authcontact(Request $request){
        $validator =Validator::make($request->all(),[

        ]);
              $contact =new Contact();
              $contact->name =$request->name;
              $contact->email =$request->email;
              $contact->phone =$request->phone;
              $contact->city =$request->city;
              $contact->message =$request->message;
              $contact->save();
              return redirect()->route('admin.contact');
    }
      public function serviceslist(){
        $servicename =Services::all();
        return view('admin.serviceslist',compact('servicename'));

    }


    // public function cancer_screening(){
    //     return view('admin.cancer-screening');
    // }
    // public function head_neck_cancer(){
    //     return view('admin.head-neck-cancer');
    // }
    // public function throat_cancer(){
    //     return view('admin.throat-cancer');
    // }
    // public function breast_cancer(){
    //     return view('admin.breast-cancer');
    // }
    // public function gynecological_cancer(){
    //     return view('admin.gynecological-cancer');
    // }
    // public function gastrointestinal_cancer(){
    //     return view('admin.gastrointestinal-cancer');
    // }
    // public function lung_cancer(){
    //     return view('admin.lung-cancer');
    // }

    // public function liver_cancer(){
    //     return view('admin.liver-cancer');
    // }

    // public function bone_cancer(){
    //     return view('admin.bone-cancer');
    // }
    // public function soft_tissue_tumour(){
    //     return view('admin.soft-tissue-tumour');
    // }
    // public function brain_cancer(){
    //     return view('admin.brain-cancer');
    // }
    // public function hematological_cancer(){
    //     return view('admin.hematological-cancer');
    // }
    // public function kidney_cancer(){
    //     return view('admin.kidney-cancer');
    // }
    // public function urologic_cancer(){
    //     return view('admin.urologic-cancer');
    // }
    // public function prostate_cancer(){
    //     return view('admin.prostate-cancer');
    // }


    public function photo_gallery(){
        $photo = AddPhotos::all();
        $servicename= Services::all();
        $about = Abouts::first();
        return view('admin.photo-gallery',compact('servicename','about','photo'));
    }
    public function video_gallery(){
        $video =Addvideoes::all();
        $servicename= Services::all();
        $about = Abouts::first();
        return view('admin.video-gallery',compact('servicename','video','about'));
    }

}
