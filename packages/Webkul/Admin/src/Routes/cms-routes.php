<?php

use App\Http\Controllers\AboutbanerController;
use App\Http\Controllers\AboutController;
use App\Http\Controllers\HistoryController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MaklonController;
use App\Http\Controllers\MisiController;
use App\Http\Controllers\RewardController;
use Webkul\Admin\Http\Controllers\CMS\PageController;

/**
 * CMS routes.
 */
Route::get('admin/maklon-admin', [MaklonController::class, 'admin'])->name('maklon.index');
Route::get('admin/maklon-admin-edit/{id}', [MaklonController::class, 'edit'])->name('maklon.edit');
Route::put('admin/maklon-admin-update/{id}', [MaklonController::class, 'update'])->name('maklon.update');
Route::post('admin/maklon-admin-destroy/{id}', [MaklonController::class, 'destroy'])->name('maklon.destroy');
Route::post('admin/maklon-admin-store.', [MaklonController::class, 'store'])->name('maklon.store');
Route::get('admin/maklon-admin-create', [MaklonController::class, 'create'])->name('maklon.create');

Route::get('admin/why-admin-edit/{id}', [MaklonController::class, 'whyedit'])->name('why.edit');
Route::put('admin/why-admin-update/{id}', [MaklonController::class, 'whyupdate'])->name('maklon.whyupdate');
Route::post('admin/why-admin-destroy/{id}', [MaklonController::class, 'whydestroy'])->name('why.destroy');
Route::post('admin/why-admin-store.', [MaklonController::class, 'whystore'])->name('maklon.whystore');
Route::get('admin/why-admin-create', [MaklonController::class, 'whycreate'])->name('why.create');

Route::get('admin/proses-admin-edit/{id}', [MaklonController::class, 'prosesedit'])->name('proses.edit');
Route::put('admin/proses-admin-update/{id}', [MaklonController::class, 'prosesupdate'])->name('maklon.prosesupdate');
Route::post('admin/proses-admin-destroy/e/{id}', [MaklonController::class, 'prosesdestroy'])->name('proses.destroy');
Route::post('admin/proses-admin-store.', [MaklonController::class, 'prosesstore'])->name('maklon.prosesstore');
Route::get('admin/proses-admin-create', [MaklonController::class, 'prosescreate'])->name('proses.create');

Route::get('admin/produk-admin-edit/{id}', [MaklonController::class, 'produkedit'])->name('produk.edit');
Route::put('admin/produk-admin-update/{id}', [MaklonController::class, 'produkupdate'])->name('maklon.produkupdate');
Route::post('admin/produk-admin-destroy/e/{id}', [MaklonController::class, 'produkdestroy'])->name('produk.destroy');
Route::post('admin/produk-admin-store.', [MaklonController::class, 'produkstore'])->name('maklon.produkstore');
Route::get('admin/produk-admin-create', [MaklonController::class, 'produkcreate'])->name('produk.create');

Route::get('admin/video-admin-edit/{id}', [MaklonController::class, 'videoesedit'])->name('video.edit');
Route::put('admin/video-admin-update/{id}', [MaklonController::class, 'videoesupdate'])->name('video.update');
Route::post('admin/video-admin-destroy/e/{id}', [MaklonController::class, 'videoesdestroy'])->name('video.destroy');
Route::post('admin/video-admin-store.', [MaklonController::class, 'videoesstore'])->name('maklon.videoesstore');
Route::get('admin/video-admin-create', [MaklonController::class, 'videoescreate'])->name('video.create');

Route::get('admin/ser-admin-edit/{id}', [MaklonController::class, 'seredit'])->name('ser.edit');
Route::put('admin/ser-admin-update/{id}', [MaklonController::class, 'serupdate'])->name('maklon.serupdate');
Route::post('admin/ser-admin-destroy/e/{id}', [MaklonController::class, 'serdestroy'])->name('ser.destroy');
Route::post('admin/ser-admin-store.', [MaklonController::class, 'serstore'])->name('maklon.serstore');
Route::get('admin/ser-admin-create', [MaklonController::class, 'sercreate'])->name('ser.create');

Route::get('admin/rewards', [RewardController::class, 'index'])->name('rewards.index');
Route::get('admin/rewards-create', [RewardController::class, 'create'])->name('rewards.create');
Route::post('admin/rewards-store', [RewardController::class, 'store'])->name('rewards.store');
Route::post('admin/rewards-update/{id}', [RewardController::class, 'update'])->name('rewards.update');
Route::get('admin/rewards-edit/{id}', [RewardController::class, 'edit'])->name('rewards.edit');
Route::delete('admin/rewards-delete/{id}', [RewardController::class, 'destroy'])->name('rewards.delete');

Route::get('admin/about', [AboutController::class, 'index'])->name('about.index');
Route::get('admin/about-create', [AboutController::class, 'create'])->name('about.create');
Route::post('admin/about-store', [AboutController::class, 'store'])->name('about.store');
Route::post('admin/about-update/{id}', [AboutController::class, 'update'])->name('about.update');
Route::get('admin/about-edit/{id}', [AboutController::class, 'edit'])->name('about.edit');
Route::delete('admin/about-delete/{id}', [AboutController::class, 'destroy'])->name('about.delete');

Route::get('admin/misi-admin-edit/{id}', [MisiController::class, 'misiedit'])->name('misi.edit');
Route::put('admin/misi-admin-update/{id}', [MisiController::class, 'misiupdate'])->name('about.misiupdate');
Route::post('admin/misi-admin-destroy/e/{id}', [MisiController::class, 'misidestroy'])->name('misi.destroy');
Route::post('admin/misi-admin-store.', [MisiController::class, 'misistore'])->name('about.misistore');
Route::get('admin/misi-admin-create', [MisiController::class, 'misicreate'])->name('misi.create');

Route::get('admin/banner-admin-edit/{id}', [AboutbanerController::class, 'banneredit'])->name('banner.edit');
Route::put('admin/banner-admin-update/{id}', [AboutbanerController::class, 'bannerupdate'])->name('about.bannerupdate');
Route::post('admin/banner-admin-destroy/e/{id}', [AboutbanerController::class, 'bannerdestroy'])->name('banner.destroy');
Route::post('admin/banner-admin-store.', [AboutbanerController::class, 'bannerstore'])->name('about.bannerstore');
Route::get('admin/banner-admin-create', [AboutbanerController::class, 'bannercreate'])->name('banner.create');

Route::get('admin/history-admin-edit/{id}', [HistoryController::class, 'historyedit'])->name('history.edit');
Route::put('admin/history-admin-update/{id}', [HistoryController::class, 'historyupdate'])->name('about.historyupdate');
Route::post('admin/history-admin-destroy/e/{id}', [HistoryController::class, 'historydestroy'])->name('history.destroy');
Route::post('admin/history-admin-store.', [HistoryController::class, 'historystore'])->name('about.historystore');
Route::get('admin/history-admin-create', [HistoryController::class, 'historycreate'])->name('history.create');

Route::group(['middleware' => ['admin'], 'prefix' => config('app.admin_url')], function () {
    Route::controller(PageController::class)->prefix('cms')->group(function () {
        Route::get('/', 'index')->name('admin.cms.index');

        Route::get('create', 'create')->name('admin.cms.create');

        Route::post('create', 'store')->name('admin.cms.store');

        Route::get('edit/{id}', 'edit')->name('admin.cms.edit');

        Route::put('edit/{id}', 'update')->name('admin.cms.update');

        Route::delete('edit/{id}', 'delete')->name('admin.cms.delete');

        Route::post('mass-delete', 'massDelete')->name('admin.cms.mass_delete');
    });
});
