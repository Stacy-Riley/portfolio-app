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
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\ProjectController;
use App\Http\Controllers\ServiceController;
use App\Http\Controllers\TestimonialController;
use Illuminate\Support\Facades\Route;

Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('/about', [HomeController::class, 'about'])->name('about');
Route::get('/services', [ServiceController::class, 'index'])->name('services');
Route::get('/portfolio', [ProjectController::class, 'index'])->name('portfolio');
Route::get('/testimonials', [TestimonialController::class, 'index'])->name('testimonials');
Route::get('/news', [BlogController::class, 'index'])->name('news');
Route::get('/contact', [ContactController::class, 'index'])->name('contact');
// Handle form submission with rate limiting to deter spam to contact form
Route::post('/contact', [ContactController::class, 'store'])->name('contactForm')->middleware('throttle:5,1');


Route::get('/dashboard', function () {
    return view('/admin/home');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/admin/dashboard', [AdminHomeController::class, 'index'])->name('admin.dashboard');
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');

    //Admin Homepage profiles
    Route::get('/admin/profile', [AdminProfileController::class, 'index'])->name('admin.profile');
    Route::get('admin/service', [AdminServiceController::class, 'index'])->name('admin.service');
    Route::get('admin/project', [AdminProjectController::class, 'index'])->name('admin.project');
    Route::get('admin/testimonial', [AdminTestimonialController::class, 'index'])->name('admin.testimonial');
    Route::get('admin/blog', [AdminBlogController::class, 'index'])->name('admin.blog');
    Route::get('admin/contact', [AdminContactController::class, 'index'])->name('admin.contact');
});

require __DIR__.'/auth.php';
