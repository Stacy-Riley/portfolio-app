<?php

use App\Http\Controllers\Admin\AdminBlogController;
use App\Http\Controllers\Admin\AdminContactController;
use App\Http\Controllers\Admin\AdminHomeController;
use App\Http\Controllers\Admin\AdminProfileController;
use App\Http\Controllers\Admin\AdminProjectController;
use App\Http\Controllers\Admin\AdminServiceController;
use App\Http\Controllers\Admin\AdminTestimonialController;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProjectController;
use App\Http\Controllers\ServiceController;
use App\Http\Controllers\TestimonialController;
use Illuminate\Support\Facades\Route;
use Spatie\Honeypot\ProtectAgainstSpam;

Route::get('/body', function () {
    return response()->json(['message' => 'This is a temporary body route.']);
});

Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('/about', [HomeController::class, 'about'])->name('about');
Route::get('/services', [ServiceController::class, 'index'])->name('services');
Route::get('/portfolio', [ProjectController::class, 'index'])->name('portfolio');
Route::get('/testimonials', [TestimonialController::class, 'index'])->name('testimonials');
Route::get('/news', [BlogController::class, 'index'])->name('news');
Route::get('/contact', [ContactController::class, 'index'])->name('contact');
Route::post('/contact', [ContactController::class, 'store'])
    ->middleware(['throttle:5,1', ProtectAgainstSpam::class])
    ->name('contactForm');


Route::middleware(['auth', 'verified'])->group(function () {

    //Admin Dashboard
    Route::get('/dashboard', [AdminHomeController::class, 'show'])->name('dashboard');

    Route::prefix('admin')->group(function () {
        //Admin Blog
        Route::controller(AdminBlogController::class)->group(function () {
            Route::get('blog', 'index')->name('blogs.index');
            Route::get('blog/create', 'create')->name('blogs.create');
            Route::post('blog/store', 'store')->name('blogs.store');
            Route::get('blog/edit/{id}', 'edit')->name('blogs.edit');
            Route::put('blog/update/{id}', 'update')->name('blogs.update');
            Route::delete('blog/delete/{id}', 'destroy')->name('blogs.delete');
        });

        //Admin Contact
        Route::controller(AdminContactController::class)->group(function () {
            Route::get('contact', 'index')->name('contacts.index');
            Route::get('contact/show/{id}', 'show')->name('contacts.show');
            Route::delete('contact/delete/{id}', 'destroy')->name('contacts.delete');
        });

        //Admin Homepage profiles
        Route::controller(AdminProfileController::class)->group(function () {
            Route::get('profile', 'index')->name('profiles.index');
            Route::get('profile/create', 'create')->name('profiles.create');
            Route::post('profile/store', 'store')->name('profiles.store');
            Route::get('profile/edit/{id}', 'edit')->name('profiles.edit');
            Route::put('profile/update/{id}', 'update')->name('profiles.update');
            Route::delete('profile/delete/{id}', 'destroy')->name('profiles.delete');
        });

        //Admin Projects
        Route::controller(AdminProjectController::class)->group(function () {
            Route::get('project', 'index')->name('projects.index');
            Route::get('project/create', 'create')->name('projects.create');
            Route::post('project/store', 'store')->name('projects.store');
            Route::get('project/edit/{id}', 'edit')->name('projects.edit');
            Route::put('project/update/{id}', 'update')->name('projects.update');
            Route::delete('project/delete/{id}', 'destroy')->name('projects.delete');
            Route::post('project/reorder', 'reorder')->name('projects.reorder');
        });

        //Admin Services
        Route::controller(AdminServiceController::class)->group(function(){
            Route::get('service', 'index')->name('services.index');
            Route::get('service/create', 'create')->name('services.create');
            Route::post('service/store', 'store')->name('services.store');
            Route::get('service/edit/{id}', 'edit')->name('services.edit');
            Route::put('service/update/{id}', 'update')->name('services.update');
            Route::delete('service/delete/{id}', 'destroy')->name('services.delete');
            Route::post('service/reorder', 'reorder')->name('services.reorder');
        });

        //Admin Testimonials
        Route::controller(AdminTestimonialController::class)->group(function(){
            Route::get('testimonial', 'index')->name('testimonials.index');
            Route::get('testimonial/create', 'create')->name('testimonials.create');
            Route::post('testimonial/store', 'store')->name('testimonials.store');
            Route::get('testimonial/edit/{id}', 'edit')->name('testimonials.edit');
            Route::put('testimonial/update/{id}', 'update')->name('testimonials.update');
            Route::delete('testimonial/delete/{id}', 'destroy')->name('testimonials.delete');
            Route::post('testimonial/reorder', 'reorder')->name('testimonials.reorder');
        });
    });
});

require __DIR__.'/auth.php';
