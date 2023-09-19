<?php
use App\Http\Controllers\InertiaTestController;
use App\Http\Controllers\MhController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\ItemController;
use Illuminate\Foundation\Application;
use Illuminate\Support\Facades\Route;
use Inertia\Inertia;



Route::resource('items', ItemController::class)
->middleware(['auth', 'verified']);




Route::get('/mh/index', [MhController::class, 'index'])->name('mh.index');
Route::get('/mh/create', [MhController::class, 'create'])->name('mh.create');
Route::get('/mh/rank', [MhController::class, 'rank'])->name('mh.rank');
Route::get('/mh/mypage', [MhController::class, 'mypage'])->name('mh.mypage');
Route::get('/mh/edit', [MhController::class, 'edit'])->name('mh.edit');
Route::post('/mh', [MhController::class, 'store'])->name('mh.store');
Route::get('/mh/modal', [MhController::class, 'modalsample'])->name('mh.modalsample');
Route::get('/mh/{mh}', [MhController::class, 'show'])->name('mh.show');


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

Route::get('/inertia-test', function () {
    return Inertia::render('InertiaTest');
    }
);

Route::get('/component-test', function () {
    return Inertia::render('ComponentTest');
    }
);







Route::get('/lesson1' , function(){
    return Inertia::render('inlineblock');
});

Route::get('/lesson2' , function(){
    return Inertia::render('widthheight');
});

Route::get('/lesson3' , function(){
    return Inertia::render('fonttext');
});

Route::get('/lesson4' , function(){
    return Inertia::render('hoverfocus');
});

Route::get('/lesson5' , function(){
    return Inertia::render('image');
});



Route::get('/123', [InertiaTestController::class, 'index'])->name('inertia.index');

Route::get('/inertia/index', [InertiaTestController::class, 'index'])->name('inertia.index');
Route::get('/inertia/create', [InertiaTestController::class, 'create'])->name('inertia.create');
Route::post('/inertia', [InertiaTestController::class, 'store'])->name('inertia.store');
Route::get('/inertia/show/{id}', [InertiaTestController::class, 'show'])->name('inertia.show');
Route::delete('/inertia/{id}', [InertiaTestController::class, 'delete'])->name('inertia.delete');






Route::get('/test', [InertiaTestController::class, 'test'])->name('inertia.test');
Route::get('/top', [InertiaTestController::class, 'top'])->name('inertia.top');
Route::get('/create', [InertiaTestController::class, 'upload'])->name('inertia.create');
Route::get('/rank', [InertiaTestController::class, 'rank'])->name('inertia.rank');
Route::get('/mypage', [InertiaTestController::class, 'mypage'])->name('inertia.mypage');


Route::get('/', function () {
    return Inertia::render('Welcome', [
        'canLogin' => Route::has('login'),
        'canRegister' => Route::has('register'),
        'laravelVersion' => Application::VERSION,
        'phpVersion' => PHP_VERSION,
    ]);
});

Route::get('/dashboard', function () {
    return Inertia::render('Dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
