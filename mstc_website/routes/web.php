<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('index');
});

Route::get('/hackathon', function () {
    return view('hackathon');
});

Route::get('/dreamspark', function () {
    return view('dreamspark');
});

Route::get('/ideoson', function () {
    return view('ideoson');
});

Route::get('/gallery', function () {
    return view('gallery');
});

Route::get('/contact', function () {
    return view('contact');
});

Route::get('/about', function () {
    return view('about');
});

Route::post('/sendmail', function (\Illuminate\Http\Request $request, \Illuminate\Mail\Mailer $mailer) {
	$mailer->to($request->input('email'))->send(new \App\Mail\Mail());
    return redirect()->back();
})->name('sendmail');
