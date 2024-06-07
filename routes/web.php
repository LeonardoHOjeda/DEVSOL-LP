<?php

use App\Http\Controllers\ProfileController;
use App\Mail\ContactMailable;
use Illuminate\Foundation\Application;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Route;
use Inertia\Inertia;

Route::get('/', function () {
    return Inertia::render('Welcome', [
        'canLogin' => Route::has('login'),
        'canRegister' => Route::has('register'),
        'laravelVersion' => Application::VERSION,
        'phpVersion' => PHP_VERSION,
    ]);
});

Route::post('/', function (Request $request) {
  $data = $request->validate([
    'name' => 'required',
    'email' => 'required|email',
    'phone' => 'required',
    'message' => 'required',
  ]);

  Mail::to('leoprogramador20@gmail.com')->send(new ContactMailable($data));

  return Inertia::render('Welcome', [
    'flash' => [
        'message' => 'Se ha enviado tu correo correctamente. En breve nos pondremos en contacto contigo.'
    ]
  ]);
})->name('contact.submit');

// Route::get('/dashboard', function () {
//     return Inertia::render('Dashboard');
// })->middleware(['auth', 'verified'])->name('dashboard');

// Route::middleware('auth')->group(function () {
//     Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
//     Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
//     Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
// });

require __DIR__.'/auth.php';
