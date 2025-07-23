<?php

use App\Livewire\HomePage;
use App\Livewire\MyCoursesPage;
use App\Livewire\MyProjectsPage;
use App\Livewire\ProjectDetails;
use Illuminate\Support\Facades\Route;


Route::get('/', HomePage::class)->name('HomePage');
Route::get('/myProjects', MyProjectsPage::class)->name('myProjects');
Route::get('/myCourses', MyCoursesPage::class)->name('myCourses');
Route::get('/project/{projectId}', ProjectDetails::class)->name('projectDetails');

// Route::middleware([
//    'auth:sanctum',
//    config('jetstream.auth_session'),
//    'verified',
//])->group(function () {
//    Route::get('/dashboard', function () {
//        return view('dashboard');
//    })->name('dashboard');
//});
