<?php

use App\Http\Controllers\PostController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', [PostController::class, 'index'])
    ->name('root');

// Route::get('/dashboard', function () {
//     return view('dashboard');
// })->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

// 最初に追加したコード
// Route::group(['middleware' => ['auth', 'can:user-higher']], function () {
//     Route::resource('posts', PostController::class)
//         ->only(['create', 'store', 'edit', 'update', 'destroy'])
//         ->middleware('auth');

//     Route::resource('posts', PostController::class)
//         ->only(['show', 'index']);
// });

// 次に追加したコード
Route::middleware(['auth', 'verified'])->group(function () {
    Route::get('/dashboard', function () {
        $role = auth()->user()->role;

        if ($role == 'admin') {
            return view('admin.dashboard'); // Admin用のダッシュボードへ
        } elseif ($role == 'user') {
            return view('user.dashboard'); // User用のダッシュボードへ
        }
    })->name('dashboard');

    Route::middleware('can:user-higher')->group(function () {
        Route::resource('posts', PostController::class)
            ->only(['create', 'store', 'edit', 'update', 'destroy']);

        Route::get('/posts', [PostController::class, 'index'])->name('posts.index');
        Route::get('/posts/{post}', [PostController::class, 'show'])->name('posts.show');
    });
});

require __DIR__ . '/auth.php';
