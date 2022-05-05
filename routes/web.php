<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\AdminHomeController;
use App\Http\Controllers\Admin\UserController;
use App\Http\Controllers\Admin\DashBoardController;
use App\Http\Controllers\Admin\ProfileController;
use App\Http\Controllers\Admin\CategoryController;
use App\Http\Controllers\Admin\TagController;
use App\Http\Controllers\Admin\LanguageController;
use App\Http\Controllers\Admin\TutorialController;
use App\Http\Controllers\Admin\BlogController;
use App\Http\Controllers\Admin\ImageController;
use App\Http\Controllers\Admin\PostController;
use App\Http\Controllers\Admin\TagsController;
use App\Http\Controllers\Admin\FrontSettingsController;
use App\Http\Controllers\Admin\ContactController;
use App\Http\Controllers\Admin\SubscriberController;
use App\Http\Controllers\Admin\BackupController;
use App\Http\Controllers\Front\FrontHomeController;

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

Route::get('/', [FrontHomeController::class, 'index'])->name('landingPage');

Route::get('blog/category/{slug}', [FrontHomeController::class, 'blogCat'])->name('blog.cat');

Route::get('blog/{slug}', [FrontHomeController::class, 'blogDetail'])->name('blog.detail');

Route::get('categories', [FrontHomeController::class, 'categories'])->name('blog.categories');

Route::get('disclaimer', [FrontHomeController::class, 'disclaimer'])->name('blog.disclaimer');
Route::get('privacy-policy', [FrontHomeController::class, 'privacypolicy'])->name('blog.privacypolicy');
Route::get('about-us', [FrontHomeController::class, 'aboutus'])->name('blog.aboutus');
Route::get('contact-us', [FrontHomeController::class, 'contactus'])->name('blog.contactus');
Route::post('contact-us/store', [FrontHomeController::class, 'contactusStore'])->name('blog.contactus.store');
Route::get('latestpost', [FrontHomeController::class, 'latestPost'])->name('latest.post');

Auth::routes();

Route::group(['prefix' => 'admin','middleware' => 'auth'], function () {
    
    //dashboardController
    Route::get('dashboard', [AdminHomeController::class, 'index'])->name('dashboard');
    
    //UserController
    Route::resource('users', UserController::class);

    //CategoryController
    Route::resource('categorys', CategoryController::class);
    
    //TagController
    Route::resource('tags', TagController::class);
    
    //LanguageController
    Route::resource('languages', LanguageController::class);
    
    //LanguageController
    Route::resource('tutorials', TutorialController::class);

    // ContactController
    Route::resource('contactus',ContactController::class);
    Route::get('contactus/replay/{id}', [ContactController::class, 'contactusReplay'])->name('contactus.replay');
    Route::Post('contactus/replay/send', [ContactController::class, 'contactusReplaySend'])->name('contactus.replay.send');

    //BlogController
    Route::resource('blogs', BlogController::class);

    Route::get('blogs/related-blogs/{id}', [BlogController::class, 'relatedBlogs'])->name('admin.related.blogs');
    Route::post('blogs/related-blogs/store', [BlogController::class, 'relatedBlogStore'])->name('admin.related.blog.store');
    Route::post('user/change-status/{id}', [BlogController::class, 'userChangeStatus'])->name('user.change.status');
    
    // ImageController
    Route::get('image/create', [ImageController::class, 'create'])->name('image.create');
    Route::post('image/store', [ImageController::class, 'Store'])->name('image.store');

    //PostController
    Route::resource('posts', PostController::class);
    Route::get('post/tag/{id}', [PostController::class, 'createTag'])->name('post.tag.create');
    Route::post('post/tag/store', [PostController::class, 'addTag'])->name('post.tag.store');
    Route::get('post/clear/cache/{slug}', [PostController::class, 'postClearCache'])->name('post.clear.cache');

    // TagController
    Route::get('update-post', [TagsController::class, 'index'])->name('update.post');
    Route::post('tags/store', [TagsController::class, 'store'])->name('tag.store');
    Route::post('getAjaxPost', [TagsController::class, 'getAjaxPost'])->name('getajax.post.data');

    // admin update
    Route::get('user-profile', [ProfileController::class, 'profile'])->name('admin.profile');
    Route::post('user-profile-update', [ProfileController::class, 'updateProfile'])->name('admin.profile.update');

    // subscriber update
    Route::get('subscriber', [SubscriberController::class, 'index'])->name('admin.subscriber.index');
    Route::delete('subscriber-destroy/{subscriber}', [SubscriberController::class, 'delete'])->name('admin.subscriber.destroy');

    Route::get('backup', [BackupController::class, 'backup'])->name('database.backup.index');
    Route::get('backup/store', [BackupController::class, 'store'])->name('admin.backup.store');
    Route::get('backup/download', [BackupController::class, 'download'])->name('admin.backup.download');
    Route::get('backup/media/store', [BackupController::class, 'storeMedia'])->name('admin.media.backup.store');
    Route::get('backup/media/download', [BackupController::class, 'mediaDownload'])->name('admin.media.backup.download');

    Route::get('post/publish', [BlogController::class, 'postPublish'])->name('admin.post.publish');
    //FrontSettingsController
    Route::get('settings', [FrontSettingsController::class, 'index'])->name('front.settings');
    Route::post('settingsUpdate', [FrontSettingsController::class, 'update'])->name('front.settings.update');
    
});
