<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Artisan;



Route::group(['prefix'=>'admins'],function(){

        Route::group(['middleware'=>'guest'],function(){
            // login  and register admin
        Route::get('register',[AdminController::class,'register'])->name('admins.register');
        Route::post('authregister',[AdminController::class,'authregister'])->name('admins.authregister');
        Route::get('login',[AdminController::class,'login'])->name('admins.login');
        Route::post('authlogin',[AdminController::class,'authlogin'])->name('admins.authlogin');

    });
        Route::group(['middleware'=>'auth'],function(){
        // admin banner
        Route::get('index',[AdminController::class,'index'])->name('admins.index');
        Route::get('banner',[AdminController::class,'banner'])->name('admins.banner');
        Route::post('addbanner',[AdminController::class,'addbanner'])->name('admins.addbanner');
        Route::get('deleteBanner/{id}',[AdminController::class,'deleteBanner'])->name('admins.deleteBanner');


        // Route to Edit the form
        Route::get('serviceEdit',[AdminController::class,'serviceEdit'])->name('admins.serviceEdit');
        Route::post('/autheditservices/{id}', [AdminController::class, 'autheditservices'])->name('admins.autheditservices');

        Route::get('/editservices/{id}', [AdminController::class, 'editservices'])->name('admins.editservices');
        Route::post('authservice',[AdminController::class,'authservice'])->name('admins.authservice');
        Route::get('service',[AdminController::class,'service'])->name('admins.service');

        Route::delete('/itemservice/{id}', [AdminController::class, 'delete'])->name('admins.delete');

 Route::delete('/items/{id}', [AdminController::class, 'destroy'])->name('admins.destroy');

        // Route::get('about',[AdminController::class,'about'])->name('admins.about');

        // admin about edit  route
        Route::get('editabouts/{id}',[AdminController::class,'editabouts'])->name('admins.editabouts');
        Route::post('autheditabouts/{id}',[AdminController::class,'autheditabouts'])->name('admins.autheditabouts');
        // Route::post('authabout',[AdminController::class,'authabout'])->name('admins.authabout');



        Route::get('contactshow',[AdminController::class,'contactshow'])->name('admins.contactshow');


        // admin photo  route
        Route::get('photo',[AdminController::class,'photo'])->name('admins.photo');
        Route::post('uploadImage',[AdminController::class,'uploadImage'])->name('admins.uploadImage');
        Route::get('deletePhoto/{id}',[AdminController::class,'deletePhoto'])->name('admins.deletePhoto');


         // admin video  route
        Route::get('video',[AdminController::class,'video'])->name('admins.video');
        Route::post('insertvideo',[AdminController::class,'insertvideo'])->name('admins.insertvideo');
        Route::get('deleteVideo/{id}',[AdminController::class,'deleteVideo'])->name('admins.deleteVideo');


        Route::get('logout',[AdminController::class,'logout'])->name('admins.logout');

      });
});







// Clear application cache:
Route::get('/clear-cache', function() {
    Artisan::call('cache:clear');
    return 'Application cache has been cleared';
});

// Clear route cache:
Route::get('/route-cache', function() {
    Artisan::call('route:cache');
    return 'Routes cache has been cleared';
});

// Clear config cache:
Route::get('/config-cache', function() {
    Artisan::call('config:cache');
    return 'Config cache has been cleared';
});

// Clear view cache:
Route::get('/view-clear', function() {
    Artisan::call('view:clear');
    return 'View cache has been cleared';
});


Route::get('/',[HomeController::class,'index'])->name('admin.index');

Route::get('/abouts',[HomeController::class,'abouts'])->name('admin.abouts');
Route::get('/contact',[HomeController::class,'contact'])->name('admin.contact');
Route::post('/authcontact',[HomeController::class,'authcontact'])->name('admin.authcontact');
Route::get('/addservices/{id}',[AdminController::class,'addservices'])->name('admin.addservices');


Route::get('/serviceslist',[HomeController::class,'serviceslist'])->name('admin.serviceslist');
// Route::get('/cancer_screening',[HomeController::class,'cancer_screening'])->name('admin.cancer_screening');
// Route::get('/head_neck_cancer',[HomeController::class,'head_neck_cancer'])->name('admin.head_neck_cancer');
// Route::get('/throat_cancer',[HomeController::class,'throat_cancer'])->name('admin.throat_cancer');
// Route::get('/breast_cancer',[HomeController::class,'breast_cancer'])->name('admin.breast_cancer');
// Route::get('/gynecological_cancer',[HomeController::class,'gynecological_cancer'])->name('admin.gynecological_cancer');
// Route::get('/gastrointestinal_cancer',[HomeController::class,'gastrointestinal_cancer'])->name('admin.gastrointestinal_cancer');
// Route::get('/lung_cancer',[HomeController::class,'lung_cancer'])->name('admin.lung_cancer');
// Route::get('/liver_cancer',[HomeController::class,'liver_cancer'])->name('admin.liver_cancer');

// Route::get('/bone_cancer',[HomeController::class,'bone_cancer'])->name('admin.bone_cancer');
// Route::get('/brain_cancer',[HomeController::class,'brain_cancer'])->name('admin.brain_cancer');
// Route::get('/soft_tissue_tumour',[HomeController::class,'soft_tissue_tumour'])->name('admin.soft_tissue_tumour');
// Route::get('/hematological_cancer',[HomeController::class,'hematological_cancer'])->name('admin.hematological_cancer');
// Route::get('/kidney_cancer',[HomeController::class,'kidney_cancer'])->name('admin.kidney_cancer');
// Route::get('/prostate_cancer',[HomeController::class,'prostate_cancer'])->name('admin.prostate_cancer');
// Route::get('/urologic_cancer',[HomeController::class,'urologic_cancer'])->name('admin.urologic_cancer');




Route::get('/photo_gallery',[HomeController::class,'photo_gallery'])->name('admin.photo_gallery');
Route::get('/video_gallery',[HomeController::class,'video_gallery'])->name('admin.video_gallery');
