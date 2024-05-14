<?php

use App\Http\Controllers\Auth\AuthenticatedSessionController;
use App\Http\Controllers\Auth\ConfirmablePasswordController;
use App\Http\Controllers\Auth\EmailVerificationNotificationController;
use App\Http\Controllers\Auth\EmailVerificationPromptController;
use App\Http\Controllers\Auth\NewPasswordController;
use App\Http\Controllers\Auth\PasswordController;
use App\Http\Controllers\Auth\PasswordResetLinkController;
use App\Http\Controllers\Auth\RegisteredUserController;
use App\Http\Controllers\Auth\VerifyEmailController;
use App\Http\Controllers\Admin\AdminAuthenticatedSessionController;
use App\Http\Controllers\Admin\AdminConfirmablePasswordController;
use App\Http\Controllers\Admin\AdminEmailVerificationNotificationController;
use App\Http\Controllers\Admin\AdminEmailVerificationPromptController;
use App\Http\Controllers\Admin\AdminNewPasswordController;
use App\Http\Controllers\Admin\AdminPasswordController;
use App\Http\Controllers\Admin\AdminPasswordResetLinkController;
use App\Http\Controllers\Admin\AdminRegisteredUserController;
use App\Http\Controllers\Admin\AdminVerifyEmailController;
use App\Http\Controllers\COS\CurriculumController;
use App\Http\Controllers\COS\FirstYearFirstSemController;
use App\Http\Controllers\COS\FirstYearSecondSemController;
use App\Http\Controllers\COS\SecondYearFirstSemController;
use App\Http\Controllers\COS\SecondYearSecondSemController;
use App\Http\Controllers\COS\ThirdYearFirstSemController;
use App\Http\Controllers\COS\ThirdYearSecondSemController;
use App\Http\Controllers\COS\FourthYearFirstSemController;
use App\Http\Controllers\COS\FourthYearSecondSemController;
use App\Http\Controllers\COS\StudentFirstYearFirstSemController;
use Illuminate\Support\Facades\Route;

// Routes for Student Users
Route::middleware('guest:web')->prefix('student')->group(function () {
    Route::get('register', [RegisteredUserController::class, 'create'])->name('register');
    Route::post('register', [RegisteredUserController::class, 'store'])->name('register');

    Route::get('login', [AuthenticatedSessionController::class, 'create'])->name('login');
    Route::post('login', [AuthenticatedSessionController::class, 'store']);

    Route::get('forgot-password', [PasswordResetLinkController::class, 'create'])->name('password.request');
    Route::post('forgot-password', [PasswordResetLinkController::class, 'store'])->name('password.email');

    Route::get('reset-password/{token}', [NewPasswordController::class, 'create'])->name('password.reset');
    Route::post('reset-password', [NewPasswordController::class, 'store'])->name('password.update');
});

Route::middleware('auth:web')->prefix('student')->group(function () {
    Route::get('verify-email', EmailVerificationPromptController::class)->name('verification.notice');
    Route::get('verify-email/{id}/{hash}', VerifyEmailController::class)
        ->middleware(['signed', 'throttle:6,1'])->name('verification.verify');
    Route::post('email/verification-notification', [EmailVerificationNotificationController::class, 'store'])
        ->middleware('throttle:6,1')->name('verification.send');

    Route::get('confirm-password', [ConfirmablePasswordController::class, 'show'])->name('password.confirm');
    Route::post('confirm-password', [ConfirmablePasswordController::class, 'store']);

    Route::put('password', [PasswordController::class, 'update'])->name('password.update');
    Route::post('web.logout', [AuthenticatedSessionController::class, 'destroy'])->name('logout');

    Route::get('curriculum', [StudentFirstYearFirstSemController::class, 'index'])->name('student.curriculum');
});

// Routes for Admin Users
Route::middleware('guest:admin')->prefix('faculty')->group(function () {
    Route::get('register', [AdminRegisteredUserController::class, 'create'])->name('admin.register');
    Route::post('register', [AdminRegisteredUserController::class, 'store'])->name('admin.register');

    Route::get('login', [AdminAuthenticatedSessionController::class, 'create'])->name('admin.login');
    Route::post('login', [AdminAuthenticatedSessionController::class, 'store']);

    Route::get('forgot-password', [AdminPasswordResetLinkController::class, 'create'])->name('admin.password.request');
    Route::post('forgot-password', [AdminPasswordResetLinkController::class, 'store'])->name('admin.password.email');

    Route::get('reset-password/{token}', [AdminNewPasswordController::class, 'create'])->name('admin.password.reset');
    Route::post('reset-password', [AdminNewPasswordController::class, 'store'])->name('admin.password.update');
});

Route::middleware('auth:admin')->prefix('faculty')->group(function () {
    Route::get('verify-email', AdminEmailVerificationPromptController::class)->name('admin.verification.notice');
    Route::get('verify-email/{id}/{hash}', AdminVerifyEmailController::class)
        ->middleware(['signed', 'throttle:6,1'])->name('admin.verification.verify');
    Route::post('email/verification-notification', [AdminEmailVerificationNotificationController::class, 'store'])
        ->middleware('throttle:6,1')->name('admin.verification.send');

    Route::get('confirm-password', [AdminConfirmablePasswordController::class, 'show'])->name('admin.password.confirm');
    Route::post('confirm-password', [AdminConfirmablePasswordController::class, 'store']);

    Route::put('password', [AdminPasswordController::class, 'update'])->name('admin.password.update');
    Route::post('admin.logout', [AdminAuthenticatedSessionController::class, 'destroy'])->name('admin.logout');
});


    Route::middleware('auth:admin')->prefix('faculty')->group(function () {
    Route::get('curriculum', [CurriculumController::class, 'index'])->name('admin.curriculum');
    Route::get('curriculum/first-year-first-sem', [FirstYearFirstSemController::class, 'create'])->name('firstyearfirstsem.create');
    Route::post('curriculum/first-year-first-sem', [FirstYearFirstSemController::class, 'store'])->name('firstyearfirstsem.store');
    Route::get('curriculum/first-year-second-sem', [FirstYearSecondSemController::class, 'create'])->name('firstyearsecondsem.create');
    Route::post('curriculum/first-year-second-sem', [FirstYearSecondSemController::class, 'store'])->name('firstyearsecondsem.store');
    Route::get('curriculum/second-year-first-sem', [SecondYearFirstSemController::class, 'create'])->name('secondyearfirstsem.create');
    Route::post('curriculum/second-year-first-sem', [SecondYearFirstSemController::class, 'store'])->name('secondyearfirstsem.store');
    Route::get('curriculum/second-year-second-sem', [SecondYearSecondSemController::class, 'create'])->name('secondyearsecondsem.create');
    Route::post('curriculum/second-year-second-sem', [SecondYearSecondSemController::class, 'store'])->name('secondyearsecondsem.store');
    Route::get('curriculum/third-year-first-sem', [ThirdYearFirstSemController::class, 'create'])->name('thirdyearfirstsem.create');
    Route::post('curriculum/third-year-first-sem', [ThirdYearFirstSemController::class, 'store'])->name('thirdyearfirstsem.store');
    Route::get('curriculum/third-year-second-sem', [ThirdYearSecondSemController::class, 'create'])->name('thirdyearsecondsem.store');
    Route::post('curriculum/third-year-second-sem', [ThirdYearSecondSemController::class, 'store'])->name('thirdyearsecondsem.create');
    Route::get('curriculum/fourth-year-first-sem', [FourthYearFirstSemController::class, 'create'])->name('fourthyearfirstsem.create');
    Route::post('curriculum/fourth-year-first-sem', [FourthYearFirstSemController::class, 'store'])->name('fourthyearfirstsem.store');
    Route::get('curriculum/fourth-year-second-sem', [FourthYearSecondSemController::class, 'create'])->name('fourthyearsecondsem.create');
    Route::post('curriculum/fourth-year-second-sem', [FourthYearSecondSemController::class, 'store'])->name('fourthyearsecondsem.store');
});
