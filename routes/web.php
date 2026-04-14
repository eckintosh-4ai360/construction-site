<?php

use App\Http\Controllers\InquiryController;
use Illuminate\Support\Facades\Route;

Route::view('/', 'pages.index')->name('home');
Route::view('/about', 'pages.about')->name('about');
Route::view('/services', 'pages.services')->name('services');
Route::view('/service-details', 'pages.service-details')->name('service-details');
Route::view('/projects', 'pages.projects')->name('projects');
Route::view('/project-details', 'pages.project-details')->name('project-details');
Route::view('/blog', 'pages.blog')->name('blog');
Route::view('/blog-details', 'pages.blog-details')->name('blog-details');
Route::view('/contact', 'pages.contact')->name('contact');
Route::view('/sample-inner-page', 'pages.sample-inner-page')->name('sample-inner-page');

Route::post('/contact', [InquiryController::class, 'contact'])->name('contact.submit');
Route::post('/quote', [InquiryController::class, 'quote'])->name('quote.submit');
