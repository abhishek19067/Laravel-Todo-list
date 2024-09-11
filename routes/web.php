<?php
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\StoreController;
use App\Http\Controllers\tagsController;

Route::get('/', function () {
    return redirect('/register');
});

Route::get('/register', [AuthController::class, 'showRegistrationForm'])->name('register');
Route::post('/register', [AuthController::class, 'register']);

Route::get('/login', [AuthController::class, 'showLoginForm'])->name('login');
Route::post('/login', [AuthController::class, 'login']);

Route::get('/logout', [AuthController::class, 'logout'])->name('logout');

Route::middleware(['auth'])->group(function () {
    Route::get('/', [HomeController::class, 'index'])->name('home');


Route::get('/home', [StoreController::class, 'index']);
Route::post('/home', [StoreController::class, 'store']); 

Route::get('/', [StoreController::class, 'index'])->name('home');
Route::post('/store', [StoreController::class, 'store']);

Route::delete('/deletes/{id}', [StoreController::class, 'destroy'])->name('deletes');

Route::get('/edits/{id}', [StoreController::class, 'edit'])->name('edits');
Route::put('/updates/{id}', [StoreController::class, 'update'])->name('updates');

Route::delete('/delete-multiple', [StoreController::class, 'deleteMultiple'])->name('delete-multiple');

Route::get('/tags',[tagsController::class,'index'])->name('tags');

Route::post('/tags',[tagsController::class,'store']);
Route::delete('/delete/{id}', [tagsController::class, 'destroy'])->name('delete');

Route::get('/edit/{id}', [tagsController::class, 'edit'])->name('edit');
Route::put('/update/{id}', [tagsController::class, 'update'])->name('update');
});

Route::get('/login', [authController::class, 'showLoginForm'])->name('login');



Route::post('/store-tags', [TagsController::class, 'storeTags'])->name('store.tags');

Route::delete('/tags/{id}', [TagsController::class, 'delete'])->name('tags.delete');


Route::get('/change-username', [authController::class, 'showChangeUsernameForm'])->name('change.username');
Route::post('/change-username', [authController::class, 'changeUsername']);

Route::get('/change-password', [authController::class, 'showChangePasswordForm'])->name('change.password');
Route::post('/change-password', [authController::class, 'changePassword']);






