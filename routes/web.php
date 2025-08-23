<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AdminController;

route::get('/',[HomeController::class,'home']);

Route::get('/dashboard', [HomeController::class, 'desh'])
    ->middleware(['auth', 'verified'])
    ->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'show'])->name('profile.show');
    Route::get('/profile/edit', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::put('/profile', [ProfileController::class, 'update'])->name('profile.update');
});


require __DIR__.'/auth.php';
route::get('admin/dashboard',[HomeController::class,'index'])-> middleware(['auth','admin']);
route::get('home/eventpage',[HomeController::class,'event']);
route::get('home/event',[HomeController::class,'page']);
route::get('home/form',[HomeController::class,'form']);
Route::post('/submit-form', [HomeController::class, 'store'])->name('register.submit');
Route::get('admin/table', [AdminController::class, 'table'])->name('table.show')->middleware(['auth','admin']);
Route::get('/admin/{id}/edit', [AdminController::class, 'edit'])->name('table.edit')->middleware(['auth','admin']);
Route::put('/update/{id}', [AdminController::class, 'update'])->name('table.update')->middleware(['auth','admin']);
Route::delete('/forms/{id}', [AdminController::class, 'destroy'])->name('table.destroy')->middleware(['auth','admin']);
Route::get('/home/event_create', [HomeController::class, 'create'])->name('events.create');
Route::post('/events', [HomeController::class, 'eventstore'])->name('events.store');
Route::get('/admin/showevent', [AdminController::class, 'show'])->name('show.event')->middleware(['auth','admin']);
Route::get('/admin/manege', [AdminController::class, 'manege'])->name('manege.create')->middleware(['auth','admin']);
Route::post('/admin/manegestore', [AdminController::class, 'manegestore'])->name('manege.store')->middleware(['auth','admin']);
Route::get('/admin/upload', [AdminController::class, 'upload'])->middleware(['auth','admin']);
Route::post('/admin/uploadstore', [AdminController::class, 'uploadstore'])->name('upload.store')->middleware(['auth','admin']);
Route::get('/home/show', [HomeController::class, 'uploadshow'])->name('upload.show');
Route::get('/home/contact', [HomeController::class, 'contact'])->name('contact.show');
Route::post('/contact', [HomeController::class, 'contactstore'])->name('contact.submit');
Route::get('/admin/message', [AdminController::class, 'message'])->name('message.show')->middleware(['auth','admin']);
Route::get('/admin/sendmail/{id}', [AdminController::class, 'sendmail'])->name('mail.show')->middleware(['auth','admin']);
Route::post('/mail/{id}', [AdminController::class, 'mail'])->name('mail.submit')->middleware(['auth','admin']);
Route::post('/admin/{id}/update-status', [AdminController::class, 'updateStatus'])->name('events.updateStatus')->middleware(['auth','admin']);
Route::get('approve/{id}', [AdminController::class, 'approve'])->middleware(['auth','admin']);
Route::get('accept/{id}', [AdminController::class, 'accept'])->middleware(['auth','admin']);
Route::get('reject/{id}', [AdminController::class, 'reject'])->middleware(['auth','admin']);
Route::get('/home/feedback', [HomeController::class, 'feed'])->name('feedback.show');
Route::post('/feedbackstore', [HomeController::class, 'feedstore'])->name('feedback.store');
Route::get('/admin/show_feedback', [AdminController::class, 'feedshow'])->name('feedback.give');
Route::get('/home/about', [HomeController::class, 'about'])->name('about.show');
Route::get('/admin/notice', [AdminController::class, 'notice'])->name('notice.give')->middleware(['auth','admin']);
Route::post('/admin/noticestore', [AdminController::class, 'noticestore'])->name('notice.store')->middleware(['auth','admin']);
Route::post('/notices/clear', function () {
    \App\Models\Notice::truncate();
    return back();
});
Route::get('/home/noticeshow', [HomeController::class, 'noticeshow'])->name('notice.show');
Route::get('/home/faq', [HomeController::class, 'faq'])->name('faq.show');
Route::get('/home/weather', [HomeController::class, 'weather'])->name('weather.show');
Route::get('/home/result', [HomeController::class, 'getWeather']);
Route::get('/admin/control', [AdminController::class, 'control'])->name('control.show')->middleware(['auth','admin']);
Route::get('/admin/{id}/control_edit', [AdminController::class, 'editup'])->name('upload.edit');
Route::put('admin/{id}/control_edit', [AdminController::class, 'update2'])->name('upload.update')->middleware(['auth','admin']);

Route::delete('/upload/{id}', [AdminController::class, 'destroy2'])->name('upload.destroy')->middleware(['auth','admin']);

Route::get('/admin/past', [AdminController::class, 'past'])->name('upload.past')->middleware(['auth','admin']);
Route::post('/admin/paststore', [AdminController::class, 'paststore'])->name('past.store')->middleware(['auth','admin']);
Route::get('/home/pastshow', [HomeController::class, 'pastshow'])->name('past.show');
Route::get('/admin/pastcontrol', [AdminController::class, 'pastcontrol'])->name('past.show')->middleware(['auth','admin']);
Route::get('/admin/{id}/past_edit', [AdminController::class, 'editpast'])->name('past.edit')->middleware(['auth','admin']);
Route::put('/admin/{id}', [AdminController::class, 'update3'])->name('past.update')->middleware(['auth','admin']);
Route::delete('/admin/{id}', [AdminController::class, 'destroy3'])->name('past.destroy')->middleware(['auth','admin']);
Route::get('/home/upcome', [HomeController::class, 'upcome'])->name('upcome.show');






