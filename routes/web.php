<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Homecontroller;
use App\Http\Controllers\Authcontroller;
use App\Http\Controllers\Admincontroller;
use App\Http\Controllers\Jsoncontroller;
use App\Http\Controllers\Deletecontroller;
use App\Http\Controllers\Storecontroller;
use App\Http\Controllers\Updatecontroller;

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

// Landing Page
Route::controller(Homecontroller::class)->group(function(){
	Route::get('/', 'index')->name('beranda');
	Route::post('/message', 'message')->name('add.message');
	Route::post('/order', 'order')->name('add.order');
	Route::post('/subscribe', 'subscribe')->name('add.subscribe');
	Route::get('/about', 'about')->name('about');
	Route::prefix('article')->group(function(){
		Route::get('/', 'article')->name('article');
		Route::get('/{id}/{title}', 'viewArticle');
		Route::post('/comment', 'commentArticle')->name('add.comment');
	});
	Route::get('/portfolio', 'portfolio')->name('portfolio');
	Route::get('/contact', 'contact')->name('contact');
});

// Homepage Admin
Route::prefix('admin')->group(function(){
	Route::controller(Authcontroller::class)->group(function(){
		Route::get('/', 'login')->name('login');
		Route::post('/process-login', 'loginProcess')->name('process.login');
		Route::get('/logout', 'logout')->name('logout');
	});
	Route::controller(Admincontroller::class)->group(function(){
		Route::get('/dashboard', 'index')->name('admin.dashboard');
		Route::get('/profile', 'profile')->name('admin.profile');
		Route::prefix('/article')->group(function(){
			Route::get('/', 'article')->name('admin.article');
			Route::get('/view/{id}', 'articleview')->name('admin.articleview');
			Route::get('/add', 'articleadd')->name('admin.articleadd');
			Route::get('/edit/{id}', 'articleedit')->name('admin.articleedit');
			Route::get('/comment/{id}', 'articlecomment')->name('admin.articlecomment');
		});
		Route::get('/message', 'message')->name('admin.message');
		Route::get('/subscribe', 'subscribe')->name('admin.subscribe');
		Route::get('/orders', 'order')->name('admin.orders');
		Route::get('/portfolio', 'portfolio')->name('admin.portfolio');
	});
	Route::prefix('/json')->group(function(){
		Route::controller(Jsoncontroller::class)->group(function(){
			Route::prefix('/profile')->group(function(){
				Route::prefix('/job')->group(function(){
					Route::get('/', 'job')->name('json.job');
					Route::post('/edit', 'editjob')->name('edit.job');
				});
				Route::prefix('/education')->group(function(){
					Route::get('/', 'education')->name('json.education');
					Route::post('/edit', 'editeducation')->name('edit.education');
				});
				Route::get('/language', 'language')->name('json.language');
			});
			Route::get('/article', 'article')->name('json.article');
			Route::get('/articlecomment/{id}', 'articlecomment');
			Route::get('/message', 'message')->name('json.message');
			Route::get('/subscribe', 'subscribe')->name('json.subscribe');
			Route::get('/order', 'order')->name('json.order');
			Route::prefix('portfolio')->group(function(){
				Route::get('/', 'portfolio')->name('json.portfolio');
				Route::post('/edit', 'editportfolio')->name('edit.portfolio');
			});
		});
	});
	Route::prefix('/delete')->group(function(){
		Route::controller(Deletecontroller::class)->group(function(){
			Route::post('/article', 'article')->name('delete.article');
			Route::post('/comment', 'comment')->name('delete.comment');
			Route::post('/message', 'message')->name('delete.message');
			Route::post('/subscribe', 'subscribe')->name('delete.subscribe');
			Route::post('/order', 'order')->name('delete.order');
			Route::post('/portfolio', 'portfolio')->name('delete.portfolio');
			Route::prefix('/profil')->group(function(){
				Route::get('/user-organization/{id}', 'userorganization');
				Route::get('/user-skill/{id}', 'userskill');
				Route::get('/user-job/{id}', 'userjob');
				Route::get('/user-education/{id}', 'usereducation');
				Route::get('/user-language/{id}', 'userlanguage');
			});
		});
	});
	Route::prefix('/add')->group(function(){
		Route::controller(Storecontroller::class)->group(function(){
			Route::post('/article', 'article')->name('add.article');
			Route::post('/portfolio', 'portfolio')->name('add.portfolio');
			Route::prefix('/profil')->group(function(){
				Route::post('/user-organization', 'userorganization')->name('add.userorganization');
				Route::post('/user-achievement', 'userachievement')->name('add.userachievement');
				Route::post('/user-sertification', 'usersertification')->name('add.usersertification');
				Route::post('/user-softskill', 'usersoftskill')->name('add.usersoftskill');
				Route::post('/user-hardskill', 'userhardskill')->name('add.userhardskill');
				Route::post('/user-hardskillprogramming', 'userhardskillprogramming')->name('add.userhardskillprogramming');
				Route::post('/user-job', 'userjob')->name('add.userjob');
				Route::post('/user-education', 'usereducation')->name('add.usereducation');
				Route::post('/user-language', 'userlanguage')->name('add.userlanguage');
			});
		});
	});
	Route::prefix('/update')->group(function(){
		Route::controller(Updatecontroller::class)->group(function(){
			Route::prefix('/profil')->group(function(){
				Route::post('/picture', 'profilpicture')->name('update.profilpicture');
				Route::post('/user-login', 'userlogin')->name('update.login');
				Route::post('/user-info', 'userinfo')->name('update.userinfo');
				Route::post('/user-job', 'userjob')->name('update.userjob');
				Route::post('/user-education', 'usereducation')->name('update.usereducation');
			});
			Route::post('/article', 'article')->name('update.article');
			Route::post('/portfolio', 'portfolio')->name('update.portfolio');
		});
	});
});