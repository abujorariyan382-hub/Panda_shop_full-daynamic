<?php

use App\Http\Controllers\ByenowController;
use App\Http\Controllers\CatagoryPageController;
use App\Http\Controllers\HeroPageController;
use App\Http\Controllers\MessageController;
use App\Http\Controllers\PagesController;
use App\Http\Controllers\ProductController;
use Illuminate\Support\Facades\Route;
use Mockery\Generator\StringManipulation\Pass\Pass;

Route::get('/', function () {
    return view('welcome');
});

Route::get('index/page', [PagesController::class, 'index'])->name('index.page');
Route::get('products/page', [PagesController::class, 'products'])->name('products.page');
Route::get('shoe/page', [PagesController::class, 'shoe'])->name('shoe.page');
Route::get('watch/page', [PagesController::class, 'watch'])->name('watch.page');
Route::get('weitch/page', [PagesController::class, 'weitch'])->name('weitch.page');
Route::get('beg/page', [PagesController::class, 'beg'])->name('beg.page');
Route::get('cart/page', [PagesController::class, 'cart'])->name('cart.page');
Route::get('cheackout/page', [PagesController::class, 'cheackout'])->name('cheackout.page');
Route::get('contact/page', [PagesController::class, 'contact'])->name('contact.page');
Route::get('shop/page', [PagesController::class, 'shop'])->name('shop.page');

Route::get('dashboard/page', [PagesController::class, 'dashboard'])->name('dashboard.page');
Route::get('Thank/page',[PagesController::class,'Thank'])->name('Thank.page');

// hero section Route start 
Route::get('hero/page', [HeroPageController::class, 'hero'])->name('hero.page');
Route::put('store/hero', [HeroPageController::class, 'store'])->name('store.hero.page');
Route::get('list/hero/page', [HeroPageController::class, 'list'])->name('list.hero.page');
Route::get('edit/hero/page/{id}', [HeroPageController::class, 'edit'])->name('edit.page.hero');
Route::put('update/hero/{id}', [HeroPageController::class, 'update'])->name('update.hero.page');
Route::delete('delete/hero/{id}', [HeroPageController::class, 'delete'])->name('delete.hero.page');
// hero section route end

// catagory section route start
Route::get('catagory/page', [CatagoryPageController::class, 'index'])->name('catatory.page');
Route::put('store/catagory', [CatagoryPageController::class, 'store'])->name('catagory.store');
Route::delete('delete/catagory/{id}', [CatagoryPageController::class, 'delete'])->name('delete.catagory');
// catagory section route end

// add product route start
Route::get('addproduct/page', [ProductController::class, 'index'])->name('addproduct.page');

Route::prefix('ecommer')->group(function () {

    Route::put('store/product/page', [ProductController::class, 'store'])->name('store.product.page');
    Route::get('list/product/page', [ProductController::class, 'list'])->name('list.product.page');
    Route::get('edit/product/{id}', [ProductController::class, 'edit'])->name('edit.product');
    Route::put('update/page/product/{id}', [ProductController::class, 'update'])->name('update.product.page');
    Route::delete('delete/product/page/{id}', [ProductController::class, 'delete'])->name('delete.product.page');
});

Route::get('product_details/page/{id}', [ProductController::class, 'product_details'])->name('product_details.page');
Route::post('add_cart/{id}', [ProductController::class, 'add_cart'])->name('add_cart.page');
Route::get('add-to-cart/{id}', [ProductController::class, 'addToCart'])->name('add-to-cart');
Route::post('details-add-to-cart', [ProductController::class,'detailsAddToCart'])->name('details-add-to-cart');
Route::get('clear-cart', [ProductController::class, 'clearCart'])->name('clear-cart');
Route::get('add-tocart-delete/{id}', [ProductController::class, 'deleteCart'])->name('add-tocart-delete');
// add product route end

// message route start
Route::get('message-page', [MessageController::class, 'message'])->name('message.page');
Route::put('store-message', [MessageController::class, 'store'])->name('store.message');
Route::get('message-delete/{email}', [MessageController::class, 'messageDelete'])->name('message.delete');
// message route end


// bye now route start
Route::get('checkout-byenow/{id}',[ByenowController::class,'byeNow'])->name('checkout.byenow');
Route::get('delete-byenow/{id}',[ByenowController::class, 'delete'])->name('delete-byenow');
Route::put('your-address',[ByenowController::class,'store'])->name('your.address');
Route::get('contact-message',[ByenowController::class,'contactMessage'])->name('contact.message');
Route::get('contact-message-delete/{email}',[ByenowController::class,'deleteMessage'])->name('contact.message.delete');
// bye now route end

//check out page

Route::get('checkout/payment/{id}',[ByenowController::class,'payment'])->name('payment');
Route::get('payment/delete/{id}',[ByenowController::class,'paymentdelete'])->name('payment.delete');


Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});
