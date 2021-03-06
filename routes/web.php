<?php

use App\Http\Controllers\AboutController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\IntroController;
use App\Http\Controllers\MailController;
use App\Http\Controllers\PortfolioController;
use App\Http\Controllers\ServicesController;
use App\Http\Controllers\SkillController;
use App\Http\Controllers\WorkportfolioController;
use App\Models\About;
use App\Models\Home;
use App\Models\Portfolio;
use App\Models\Service;
use App\Models\Skill;
use App\Models\Workportfolio;
use Illuminate\Support\Facades\Route;

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
    $homes = Home::all();
    $about= About::all();
    $skills = Skill::all();
    $counter = Workportfolio::all();
    $services = Service::all();
    $portfolios = Portfolio::all();

    return view('frontend.homepage')->with([
        'homes' =>$homes,
        'about' => $about,
        'skills' => $skills,
        'counter' =>  $counter,
        'services' => $services,
        'portfolios' => $portfolios
    ]);
})->name('homepage');

Route::get('/home/about',[HomeController::class, 'about'])->name('home.about');
Route::get('/home/contact',[HomeController::class, 'contact'])->name('home.contact');
Route::get('/home/portfolio',[HomeController::class, 'portfolio'])->name('home.portfolio');



Route::get('admin',[AdminController::class, 'index'])->name('admindashboaard');
Route::resource('home', HomeController::class)->only(['index','store','show','update','destroy','edit',  ]);
Route::resource('about', AboutController::class)->only(['index','store','show','update','destroy','edit', ]);
Route::resource('portfolio', PortfolioController::class)->only(['index','store','show','update','destroy','edit', ]);
Route::resource('intro', IntroController::class)->only(['index','store','show','update','destroy','edit', ]);
Route::resource('services', ServicesController::class)->only(['index','store','show','update','destroy','edit', ]);Route::resource('services', ServicesController::class)->only(['index','store','show','update','destroy','edit', ]);
Route::resource('skill', SkillController::class)->only(['index','store','show','update','destroy','edit', ]);
Route::resource('workportfolio', WorkportfolioController::class)->only(['index','store','show','update','destroy','edit',]);
Route::post('sendemail', [MailController::class, 'postEmail'])->name('postemail');




