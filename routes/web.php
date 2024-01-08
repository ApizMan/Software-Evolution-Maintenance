<?php

use App\Http\Controllers\dutySchedule;
use App\Http\Controllers\FullCalenderController;
use App\Http\Controllers\Home;
use App\Http\Controllers\LunarProductController;
use App\Http\Controllers\register;
use App\Http\Controllers\staff;
use App\Http\Livewire\AboutUsComponent;
use App\Http\Livewire\Admin\AdminDashboardComponent;
use App\Http\Livewire\CartComponent;
use App\Http\Livewire\CategoryComponent;
use App\Http\Livewire\CheckoutComponent;
use App\Http\Livewire\ContactUsComponent;
use App\Http\Livewire\DetailsComponent;
use App\Http\Livewire\HomeComponent;
use App\Http\Livewire\PrivacyPolicyComponent;
use App\Http\Livewire\report\ReportComponent;
use App\Http\Livewire\ReturnPolicyComponent;
use App\Http\Livewire\SearchComponent;
use App\Http\Livewire\ShopComponent;
use App\Http\Livewire\TermsConditionsComponent;
use App\Http\Livewire\User\UserDashboardComponent;
use Illuminate\Support\Facades\Route;
use Lunar\Hub\Facades\Menu;
use App\Http\Controllers\ProductController;

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

/*
Route::get('/', function () {
    return view('welcome');
});
*/

Route::get('/', HomeComponent::class)->name('home.home-component');

Route::get('/staff', staff::class)->name('staff.staff_PETAKOM');
Route::post('/staff/create', [staff::class, 'create']);
Route::get('/staff/{id}/edit', [staff::class, 'edit'])->name('staff.edit_staff_PETAKOM');
Route::post('/staff/{id}/update', [staff::class, 'update']);
Route::get('/staff/{id}/delete', [staff::class, 'delete']);

Route::resource('products', LunarProductController::class)->except(['index']);
Route::get('products/new-index', [LunarProductController::class, 'index'])->name('products.new-index');

Route::get('/shop', ShopComponent::class);

// Route::get('/cart', CartComponent::class)->name('product.cart');

Route::get('/checkout', CheckoutComponent::class);

Route::get('/product/{slug}', DetailsComponent::class)->name('product.details');

Route::get('/product-category/{category_slug}', CategoryComponent::class)->name('product.category');

Route::get('/search', SearchComponent::class)->name('product.search');

Route::get('/contact-us', ContactUsComponent::class);

Route::get('/about-us', AboutUsComponent::class);

Route::get('/privacy-policy', PrivacyPolicyComponent::class);

Route::get('/return-policy', ReturnPolicyComponent::class);

Route::get('/terms-conditions', TermsConditionsComponent::class);

// Route::get('/report', ReportComponent::class);

/*
// Dashboard igual para todos los tipos de usuario
Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');
*/

// Dashboard particular para usuarios o clientes
Route::middleware(['auth:sanctum', 'verified'])->group(function () {
    Route::get('/user/dashboard', UserDashboardComponent::class)->name('user.dashboard');
});

// Dashboard particular para administradores
// Route::middleware(['auth:sanctum', 'verified'])->group(function(){
//     Route::get('/report', ReportComponent::class)->name('report.report');
// });
Route::get('/report', ReportComponent::class)->name('report.report');

Route::middleware(['auth:sanctum', 'verified'])->group(function () {
    Route::get('/cart', CartComponent::class)->name('product.cart');
});

Route::get('/register', register::class)->name('register');

$slot = Menu::slot('sidebar');

$slot->addItem(function ($item) {
    $item
        ->name(__('E-Commerce'))
        ->handle('hub.home')
        ->route('home.home-component')
        ->icon('<svg xmlns="http://www.w3.org/2000/svg" height="1em" viewBox="0 0 512 512"><!--! Font Awesome Free 6.4.0 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2023 Fonticons, Inc. --><path d="M64 0C46.3 0 32 14.3 32 32V96c0 17.7 14.3 32 32 32h80v32H87c-31.6 0-58.5 23.1-63.3 54.4L1.1 364.1C.4 368.8 0 373.6 0 378.4V448c0 35.3 28.7 64 64 64H448c35.3 0 64-28.7 64-64V378.4c0-4.8-.4-9.6-1.1-14.4L488.2 214.4C483.5 183.1 456.6 160 425 160H208V128h80c17.7 0 32-14.3 32-32V32c0-17.7-14.3-32-32-32H64zM96 48H256c8.8 0 16 7.2 16 16s-7.2 16-16 16H96c-8.8 0-16-7.2-16-16s7.2-16 16-16zM64 432c0-8.8 7.2-16 16-16H432c8.8 0 16 7.2 16 16s-7.2 16-16 16H80c-8.8 0-16-7.2-16-16zm48-168a24 24 0 1 1 0-48 24 24 0 1 1 0 48zm120-24a24 24 0 1 1 -48 0 24 24 0 1 1 48 0zM160 344a24 24 0 1 1 0-48 24 24 0 1 1 0 48zM328 240a24 24 0 1 1 -48 0 24 24 0 1 1 48 0zM256 344a24 24 0 1 1 0-48 24 24 0 1 1 0 48zM424 240a24 24 0 1 1 -48 0 24 24 0 1 1 48 0zM352 344a24 24 0 1 1 0-48 24 24 0 1 1 0 48z"/></svg>');
});

$slot->addItem(function ($item) {
    $item
        ->name(__('Duty Schedule'))
        ->handle('hub.schedule')
        ->route('duty_schedule.duty_schedule')
        ->icon('<svg xmlns="http://www.w3.org/2000/svg" height="1em" viewBox="0 0 448 512"><!--! Font Awesome Free 6.4.0 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2023 Fonticons, Inc. --><path d="M152 24c0-13.3-10.7-24-24-24s-24 10.7-24 24V64H64C28.7 64 0 92.7 0 128v16 48V448c0 35.3 28.7 64 64 64H384c35.3 0 64-28.7 64-64V192 144 128c0-35.3-28.7-64-64-64H344V24c0-13.3-10.7-24-24-24s-24 10.7-24 24V64H152V24zM48 192h80v56H48V192zm0 104h80v64H48V296zm128 0h96v64H176V296zm144 0h80v64H320V296zm80-48H320V192h80v56zm0 160v40c0 8.8-7.2 16-16 16H320V408h80zm-128 0v56H176V408h96zm-144 0v56H64c-8.8 0-16-7.2-16-16V408h80zM272 248H176V192h96v56z"/></svg>');
});

$slot->addItem(function ($item) {
    $item
        ->name(__('Staff PETAKOM'))
        ->handle('hub.staff')
        ->route('staff.staff_PETAKOM')
        ->icon('<svg xmlns="http://www.w3.org/2000/svg" height="1em" viewBox="0 0 640 512"><!--! Font Awesome Free 6.4.0 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2023 Fonticons, Inc. --><path d="M144 0a80 80 0 1 1 0 160A80 80 0 1 1 144 0zM512 0a80 80 0 1 1 0 160A80 80 0 1 1 512 0zM0 298.7C0 239.8 47.8 192 106.7 192h42.7c15.9 0 31 3.5 44.6 9.7c-1.3 7.2-1.9 14.7-1.9 22.3c0 38.2 16.8 72.5 43.3 96c-.2 0-.4 0-.7 0H21.3C9.6 320 0 310.4 0 298.7zM405.3 320c-.2 0-.4 0-.7 0c26.6-23.5 43.3-57.8 43.3-96c0-7.6-.7-15-1.9-22.3c13.6-6.3 28.7-9.7 44.6-9.7h42.7C592.2 192 640 239.8 640 298.7c0 11.8-9.6 21.3-21.3 21.3H405.3zM224 224a96 96 0 1 1 192 0 96 96 0 1 1 -192 0zM128 485.3C128 411.7 187.7 352 261.3 352H378.7C452.3 352 512 411.7 512 485.3c0 14.7-11.9 26.7-26.7 26.7H154.7c-14.7 0-26.7-11.9-26.7-26.7z"/></svg>');
});

Route::get('/dutySchedule', dutySchedule::class)->name('duty_schedule.duty_schedule');



// Route::get('/home-e-commerce', Home::class)->name('home.home-component');
Route::get('/phpinfo', function () {
    return phpinfo();
});

Route::get('fullcalender', [FullCalenderController::class, 'index']);
Route::post('fullcalenderAjax', [FullCalenderController::class, 'ajax']);