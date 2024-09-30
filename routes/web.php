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


Route::middleware(['auth', 'verified'])->group(function () {
    Route::get('/dashboard', [AdminHomeController::class, 'show'])->name('dashboard');

    //Admin Homepage profiles
    Route::get('/admin/profile', [AdminProfileController::class, 'index'])->name('admin.profile');
    Route::get('admin/profile/create', [AdminProfileController::class, 'create'])->name('admin.profile.create');
    Route::post('admin/profile/store', [AdminProfileController::class, 'store'])->name('admin.profile.store');
    Route::get('admin/profile/edit/{id}', [AdminProfileController::class, 'edit'])->name('admin.profile.edit');
    Route::put('admin/profile/update/{id}', [AdminProfileController::class, 'update'])->name('admin.profile.update');
    Route::delete('admin/profile/delete/{id}', [AdminProfileController::class, 'destroy'])->name('admin.profile.delete');

    //Admin Services
    Route::get('admin/service', [AdminServiceController::class, 'index'])->name('admin.service');
    Route::get('admin/service/create', [AdminServiceController::class, 'create'])->name('admin.service.create');
    Route::post('admin/service/store', [AdminServiceController::class, 'store'])->name('admin.service.store');
    Route::get('admin/service/edit/{id}', [AdminServiceController::class, 'edit'])->name('admin.service.edit');
    Route::put('admin/service/update/{id}', [AdminServiceController::class, 'update'])->name('admin.service.update');
    Route::delete('admin/service/delete/{id}', [AdminServiceController::class, 'destroy'])->name('admin.service.delete');
    Route::post('/admin/service/reorder', [AdminServiceController::class, 'reorder'])->name('admin.service.reorder');

    //Admin Projects
    Route::get('admin/project', [AdminProjectController::class, 'index'])->name('admin.project');
    Route::get('admin/project/create', [AdminProjectController::class, 'create'])->name('admin.project.create');
    Route::post('admin/project/store', [AdminProjectController::class, 'store'])->name('admin.project.store');
    Route::get('admin/project/edit/{id}', [AdminProjectController::class, 'edit'])->name('admin.project.edit');
    Route::put('admin/project/update/{id}', [AdminProjectController::class, 'update'])->name('admin.project.update');
    Route::delete('admin/project/delete/{id}', [AdminProjectController::class, 'destroy'])->name('admin.project.delete');
    Route::post('/admin/project/reorder', [AdminProjectController::class, 'reorder'])->name('admin.project.reorder');

    //Admin Testimonials
    Route::get('admin/testimonial', [AdminTestimonialController::class, 'index'])->name('admin.testimonial');
    Route::get('admin/testimonial/create', [AdminTestimonialController::class, 'create'])->name('admin.testimonial.create');
    Route::post('admin/testimonial/store', [AdminTestimonialController::class, 'store'])->name('admin.testimonial.store');
    Route::get('admin/testimonial/edit/{id}', [AdminTestimonialController::class, 'edit'])->name('admin.testimonial.edit');
    Route::put('admin/testimonial/update/{id}', [AdminTestimonialController::class, 'update'])->name('admin.testimonial.update');
    Route::delete('admin/testimonial/delete/{id}', [AdminTestimonialController::class, 'destroy'])->name('admin.testimonial.delete');
    Route::post('/admin/testimonial/reorder', [AdminTestimonialController::class, 'reorder'])->name('admin.testimonial.reorder');

    //Admin Blog
    Route::get('admin/blog', [AdminBlogController::class, 'index'])->name('admin.blog');
    Route::get('admin/blog/create', [AdminBlogController::class, 'create'])->name('admin.blog.create');
    Route::post('admin/blog/store', [AdminBlogController::class, 'store'])->name('admin.blog.store');
    Route::get('admin/blog/edit/{id}', [AdminBlogController::class, 'edit'])->name('admin.blog.edit');
    Route::put('admin/blog/update/{id}', [AdminBlogController::class, 'update'])->name('admin.blog.update');
    Route::delete('admin/blog/delete/{id}', [AdminBlogController::class, 'destroy'])->name('admin.blog.delete');

    //Admin Contact
    Route::get('admin/contact', [AdminContactController::class, 'index'])->name('admin.contact');
    Route::get('admin/contact/show/{id}', [AdminContactController::class, 'show'])->name('admin.contact.show');
    Route::delete('admin/contact/delete/{id}', [AdminContactController::class, 'destroy'])->name('admin.contact.delete');
});

require __DIR__.'/auth.php';
