<?php

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

Route::get('/', [App\Http\Controllers\HomeController::class, 'home'])->name('home');

Route::get('login', [App\Http\Controllers\UserController::class, 'login'])->name('login');
Route::post('login-submit', [App\Http\Controllers\UserController::class, 'login_submit'])->name('login.submit');
Route::get('register', [App\Http\Controllers\UserController::class, 'register'])->name('register');
Route::post('register-submit', [App\Http\Controllers\UserController::class, 'register_submit'])->name('register.submit');
Route::get('login/{provider}', [App\Http\Controllers\Auth\LoginController::class, 'redirectToProvider'])->name('login.provider');
Route::get('login/{provider}/callback', [App\Http\Controllers\Auth\LoginController::class, 'handleProviderCallback'])->name('login.provider.callback');

Route::get('/friendly-games', [App\Http\Controllers\HomeController::class, 'friendly_games'])->name('friendly_games');
Route::get('/about-us', [App\Http\Controllers\HomeController::class, 'about_us'])->name('about-us');
Route::get('/team-digital', [App\Http\Controllers\HomeController::class, 'team_digital'])->name('team_digital');
Route::get('/contact-us', [App\Http\Controllers\HomeController::class, 'contact_us'])->name('contact-us');
Route::post('/contact-us', [App\Http\Controllers\HomeController::class, 'contact_submit'])->name('contact-submit');

Route::get('/tournaments', [App\Http\Controllers\TournamentController::class, 'index'])->name('tournaments');
Route::get('/tournaments/detail/{slug}', [App\Http\Controllers\TournamentController::class, 'detail'])->name('tournaments.detail');
Route::get('/tournaments/schedule/{id}', [App\Http\Controllers\TournamentController::class, 'schedule'])->name('tournaments-schedule');

Route::middleware(['auth'])->group(function () {
    Route::get('logout', [App\Http\Controllers\UserController::class, 'logout'])->name('logout');
    Route::get('user-profile', [App\Http\Controllers\UserController::class, 'profile'])->name('user-profile');
    Route::get('user-profile-edit', [App\Http\Controllers\UserController::class, 'profile_edit'])->name('user-profile-edit');
    Route::put('profile-update', [App\Http\Controllers\UserController::class, 'profile_update'])->name('profile.update');
    
    Route::get('/team-profile/add', [App\Http\Controllers\TeamController::class, 'team_profile_add'])->name('profile.team.add');
    Route::put('/team-profile/create', [App\Http\Controllers\TeamController::class, 'create'])->name('profile.team.create');
    Route::get('/team-profile/edit/{id}', [App\Http\Controllers\TeamController::class, 'team_profile_edit'])->name('profile.team.edit');
    Route::put('/team-profile/update/{id}', [App\Http\Controllers\TeamController::class, 'update'])->name('profile.team.update');
    Route::get('/teams/detail/{slug}', [App\Http\Controllers\TeamController::class, 'detail'])->name('teams.detail');
    Route::get('/team-profile', [App\Http\Controllers\TeamController::class, 'team_profile'])->name('profile.team');
    Route::get('/team-profile-for-organiser', [App\Http\Controllers\TeamController::class, 'team_for_organiser'])->name('profile.team_for_organiser');
    
    Route::get('/organizer-profile', [App\Http\Controllers\OrganizerController::class, 'organizer_profile'])->name('profile.organizer');
    Route::get('/organiser-profile/edit', [App\Http\Controllers\OrganizerController::class, 'organiser_profile_edit'])->name('profile.organizer.edit');
    Route::put('/organiser-profile/update', [App\Http\Controllers\OrganizerController::class, 'update'])->name('profile.organizer.update');
    
    Route::get('/tournaments/add', [App\Http\Controllers\TournamentController::class, 'add'])->name('tournaments.add');
    Route::put('/tournaments/create', [App\Http\Controllers\TournamentController::class, 'create'])->name('tournaments.create');
    Route::get('/tournaments/requests/{slug}', [App\Http\Controllers\TournamentController::class, 'req_index'])->name('tournaments.requests');
    Route::get('/tournaments/team_details', [App\Http\Controllers\TournamentController::class, 'team_details'])->name('tournaments.team_detail');
});

Route::group(['prefix' => 'admin', 'namespace' => 'Admin'], function(){
    Route::get('/', [App\Http\Controllers\Admin\AdminController::class, 'dashboard'])->name('admin.dashboard');
    Route::get('/tournaments/index', [App\Http\Controllers\Admin\TournamentController::class, 'index'])->name('admin.tournament.index');
    Route::get('/tournaments/detail/{slug}', [App\Http\Controllers\Admin\TournamentController::class, 'detail'])->name('admin.tournament.detail');
    Route::get('/organizers/index', [App\Http\Controllers\Admin\OrganizerController::class, 'index'])->name('admin.organizer.index');
    Route::get('/organizers/detail/{slug}', [App\Http\Controllers\Admin\OrganizerController::class, 'detail'])->name('admin.organizer.detail');
    Route::get('/teams/index', [App\Http\Controllers\Admin\TeamController::class, 'index'])->name('admin.team.index');
    Route::get('/teams/detail/{slug}', [App\Http\Controllers\Admin\TeamController::class, 'detail'])->name('admin.team.detail');
    
});
Route::resource('sponsor', App\Http\Controllers\Admin\SponsorController::class);
