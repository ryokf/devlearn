<?php


use App\Http\Controllers\Author\AuthorController;
use App\Http\Controllers\Author\CourseController;
use App\Http\Controllers\Author\LessonController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\MemberController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\CourseControllerUser;
use App\Http\Controllers\TransactionController;
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

Route::prefix('member')->middleware(['auth', 'verified', 'role:member'])->group(function () {
    Route::controller(MemberController::class)->group(function () {
        Route::get('', 'dashboard')->name('member_dashboard');
        Route::get('/transaction', 'transaction')->name('member_transaction');
        Route::get('/course',  'courses')->name('member_course_index');
        Route::get('/course/{id}',  'show')->name('member_course_show');
        Route::get('/course/search',  'search')->name('member_course_search');
    });
});


require __DIR__ . '/auth.php';
require __DIR__ . '/admin/admin.php';
require __DIR__ . '/author.php';

Route::get('/', [CategoryController::class, 'index'])->name('index.display');
Route::get('category/{id}', [CategoryController::class, 'getCourseCategory'])->name('get.course.category');
// Route::get('/dashboard', function () {
//     return view('dashboard');
// })->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
    Route::get('/course/detail/{course}', [CourseControllerUser::class, 'detailCourse'])->name('course.detail');
});

Route::middleware('auth')->group(function () {
    Route::get('/course/lesson/{id}/{chapter}',  [CourseControllerUser::class, 'lessonCourseDetail'])->name('course.lesson.detail');

    Route::controller(TransactionController::class)->group(function () {
        Route::post('/course/detail/payment/{id}', 'voucherPayment')->name('payment.voucher');

        Route::get('course/payment/{id}/{user_id}', 'summaryPayment')->name('summaryPayment');
        Route::post('course/payment/sendReceipt', 'payment')->name('payment');
    });
});
