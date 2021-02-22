<?php

use App\Http\Controllers\Mypage\PasswordController;
use App\Http\Controllers\Mypage\WithdrawController;
use App\Http\Controllers\MypageController;
use App\Http\Controllers\TopController;
use App\Http\Controllers\UserProfileController;
use App\Http\Livewire\ProposalPlan\Create;
use App\Http\Livewire\ProposalPlan\Index;
use App\Http\Livewire\ProposalPlan\Show;
use App\Http\Livewire\ProposalPlan\Edit;
use Illuminate\Support\Facades\Route;

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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', TopController::class)->name('top');

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');

Route::get('mypage', [MypageController::class, 'index'])->name('mypage');

Route::get('mypage/profile/edit', [UserProfileController::class, 'edit'])->name('mypage.profile.edit');

Route::get('mypage/password', [PasswordController::class, 'edit'])->name('mypage.password');

Route::get('mypage/withdraw', [WithdrawController::class, 'withdrawForm'])->name('mypage.withdraw');


Route::get('proposal_plan/create', Create::class)->name('proposal_plan.create');
Route::get('proposal_plan', Index::class)->name('proposal_plan.index');
Route::get('proposal_plan/{proposalPlan}', Show::class)->name('proposal_plan.show');
Route::get('proposal_plan/{proposalPlan}/edit', Edit::class)->name('proposal_plan.edit');