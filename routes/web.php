<?php

use App\Http\Controllers\frontend\AboutController;
use App\Http\Controllers\frontend\ContactController;
use App\Http\Controllers\frontend\HomeController;
use App\Http\Controllers\frontend\AccountController;
use App\Http\Controllers\frontend\ShopController;
use App\Http\Controllers\frontend\ElementsController;
use App\Http\Controllers\frontend\ElementsFaqsController;
use App\Http\Controllers\frontend\OrderTrackingController;
use App\Http\Controllers\frontend\MugController;
use App\Http\Controllers\frontend\ProductDetailsController;
use App\Http\Controllers\frontend\GiftsControllerController;
use App\Http\Controllers\frontend\LoginController;
use App\Http\Controllers\frontend\ShoppingCartController;
use App\Http\Controllers\frontend\WishlistController;
use App\Http\Controllers\frontend\CheckoutController;
#Backend
use App\Http\Controllers\backend\AdminLoginController;
use App\Http\Controllers\backend\AdminHomeController;
use App\Http\Controllers\backend\AdminProjectsController;
use App\Http\Controllers\backend\TeamMemberController;
use App\Http\Controllers\backend\AdminFaqsController;
use App\Http\Controllers\backend\AdminReviewsController;
use App\Http\Controllers\frontend\GiftsController;
use App\Http\Controllers\frontend\BlogController;
use App\Http\Controllers\frontend\FoxController;
use App\Http\Controllers\frontend\KitchenController;
use App\Http\Controllers\frontend\WalnutController;
use App\Http\Controllers\frontend\MotorizedController;
use Illuminate\Support\Facades\Route;

//frontend
Route::get('/', [HomeController::class, 'index']);
Route::get('/contact', [ContactController::class, 'index']);
Route::post('/contact', [ContactController::class, 'submitMessage']);
Route::get('/about', [AboutController::class, 'index']);
Route::get('/blog', [BlogController::class, 'index']);
Route::post('/blog', [BlogController::class, 'submitMessage']);
Route::get('/motorcycle', [MotorizedController::class, 'index']);
Route::get('/walnut', [WalnutController::class, 'index']);
Route::get('/fox', [FoxController::class, 'index']);
Route::get('/kitchen', [KitchenController::class, 'index']);
Route::get('/account', [AccountController::class, 'index']);
Route::get('/shop', [ShopController::class, 'index']);
Route::get('/elements-products', [ElementsController::class, 'index']);
Route::get('/elements-faq', [ElementsFaqsController::class, 'index']);
Route::get('/mug', [MugController::class, 'index']);
Route::get('/gifts', [GiftsController::class, 'index']);
Route::get('/order-tracking', [OrderTrackingController::class, 'index']);
Route::get('/product-details', [ProductDetailsController::class, 'index']);
Route::get('/login-register', [LoginController::class, 'index']);
Route::get('/shopping-cart', [ShoppingCartController::class, 'index']);
Route::get('/wishlist', [WishlistController::class, 'index']);
Route::get('/checkout', [CheckoutController::class, 'index']);

// Backend
//Login Page
Route::get('/admin/login', [AdminLoginController::class, 'index']);
Route::get('/admin/login', function(){
    if(session()->has('email')){
        return redirect('/admin');
    } else{
        return view('backend.login');
    }

});
Route::post('/admin/login', [AdminLoginController::class, 'onLogin']);
Route::get('/admin/logout', [AdminLoginController::class, 'logoutAdmin']);

Route::get('/admin', [AdminHomeController::class, 'index']);
// Route::get('/admin', function(){
//     if(session()->has('email')){
//         return redirect('/admin');
//     } else{
//         return view('backend.login');
//     }

// });


//Admin Management
Route::get('/admin/register', [AdminHomeController::class, 'registerAdmin'])->name('admin.create');
Route::post('/admin/register', [AdminHomeController::class, 'submitAdminRecord']);
Route::get('/admin/admins-list', [AdminHomeController::class, 'showAdminRecord'])->name('admin.show');
Route::get('/admin/delete/{id}', [AdminHomeController::class, 'deleteAdminRecord'])->name('admin.delete');
Route::get('/admin/edit/{id}', [AdminHomeController::class, 'editAdminRecord'])->name('admin.edit');
Route::get('/admin/update/{id}', [AdminHomeController::class, 'updateAdminRecord'])->name('admin.update');


// Team Management
Route::get('/admin/team', [TeamMemberController::class, 'index'])->name('team.show');
Route::get('/admin/team-member-details/{id}', [TeamMemberController::class, 'showTeamMember'])->name('team.details');
Route::get('/admin/team-add', [TeamMemberController::class, 'registerTeam'])->name('team.add');
Route::post('/admin/team-add', [TeamMemberController::class, 'submitTeamRecord']);
Route::get('/admin/team-edit/{id}', [TeamMemberController::class, 'editTeam'])->name('team.edit');
Route::put('/admin/team-edit/{id}', [TeamMemberController::class, 'updateTeam'])->name('team.update');
Route::delete('/admin/team-delete/{id}', [TeamMemberController::class, 'deleteTeam'])->name('team.delete');

// FAQs Management
Route::get('/admin/faqs', [AdminFaqsController::class, 'index'])->name('faq.show');
Route::get('/admin/faq-add', [AdminFaqsController::class, 'addFAQ'])->name('faq.add');
Route::post('/admin/faq-add', [AdminFaqsController::class, 'submitFaqRecord']);
Route::get('/admin/faq-edit/{id}', [AdminFaqsController::class, 'editFAQ'])->name('faq.edit');
Route::put('/admin/faq-edit/{id}', [AdminFaqsController::class, 'updateFAQ'])->name('faq.update');
Route::delete('/admin/faq-delete/{id}', [AdminFaqsController::class, 'deleteFAQ'])->name('faq.delete');

// Reviews Management
Route::get('/admin/reviews', [AdminReviewsController::class, 'index'])->name('review.show');
Route::get('/admin/review-add', [AdminReviewsController::class, 'addReview'])->name('review.add');
Route::post('/admin/review-add', [AdminReviewsController::class, 'submitReviewRecord']);
Route::get('/admin/review-edit/{id}', [AdminReviewsController::class, 'editReview'])->name('review.edit');
Route::put('/admin/review-edit/{id}', [AdminReviewsController::class, 'updateReview'])->name('review.update');
Route::delete('/admin/review-delete/{id}', [AdminReviewsController::class, 'deleteReview'])->name('review.delete');
// Project Management
Route::get('/admin/projects', [AdminProjectsController::class, 'index'])->name('project.add');
Route::get('/admin/project-add', [AdminProjectsController::class, 'addProject'])->name('project.add');
Route::post('/admin/project-add', [AdminProjectsController::class, 'submitProjectRecord']);
Route::get('/admin/project-edit/{id}', [AdminProjectsController::class, 'editProject'])->name('project.edit');
Route::put('/admin/project-edit/{id}', [AdminProjectsController::class, 'updateProject'])->name('project.update');
Route::delete('/admin/project-delete/{id}', [AdminProjectsController::class, 'deleteProject'])->name('project.delete');


Route::get('admin/logout', function(){
    if(session()->has('email')){
        session()->pull('id', null);
        session()->pull('first_name', null);
        session()->pull('last_name', null);
        session()->pull('email', null);
    }
        return redirect('/admin/login');
});




