<?php

use App\Http\Controllers\AboutController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MaklonController;
use App\Http\Controllers\RewardController;
use Webkul\Shop\Http\Controllers\DataGridController;
use Webkul\Shop\Http\Controllers\Customer\SessionController;
use Webkul\Shop\Http\Controllers\Customer\CustomerController;
use Webkul\Shop\Http\Controllers\Customer\RegistrationController;
use Webkul\Shop\Http\Controllers\Customer\Account\OrderController;
use Webkul\Shop\Http\Controllers\Customer\ResetPasswordController;
use Webkul\Shop\Http\Controllers\Customer\ForgotPasswordController;
use Webkul\Shop\Http\Controllers\Customer\Account\AddressController;
use Webkul\Shop\Http\Controllers\Customer\Account\WishlistController;
use Webkul\Shop\Http\Controllers\Customer\Account\DownloadableProductController;


Route::get('maklon', [MaklonController::class, 'index'])->name('maklon.customer');
Route::post('hubungi/post', [MaklonController::class, 'hubungistore'])->name('hubungi.store');
Route::get('rewards', [RewardController::class, 'cust']);
Route::get('about', [AboutController::class, 'customer'])->name('about.customer');
Route::get('rewards-show/{id}', [RewardController::class, 'show'])->name('rewards.show');

Route::group(['middleware' => ['locale', 'theme', 'currency']], function () {

    Route::prefix('customer')->group(function () {
        /**
         * Forgot password routes.
         */
        Route::controller(ForgotPasswordController::class)->prefix('forgot-password')->group(function () {
            Route::get('', 'create')->name('shop.customers.forgot_password.create');

            Route::post('', 'store')->name('shop.customers.forgot_password.store');
        });

        /**
         * Reset password routes.
         */
        Route::controller(ResetPasswordController::class)->prefix('reset-password')->group(function () {
            Route::get('{token}', 'create')->name('shop.customers.reset_password.create');

            Route::post('', 'store')->name('shop.customers.reset_password.store');
        });

        /**
         * Login routes.
         */
        Route::controller(SessionController::class)->prefix('login')->group(function () {
            Route::get('', 'show')->name('shop.customer.session.index');

            Route::post('', 'create')->name('shop.customer.session.create');
        });

        /**
         * Registration routes.
         */
        Route::controller(RegistrationController::class)->group(function () {
            Route::prefix('register')->group(function () {
                Route::get('', 'index')->name('shop.customers.register.index');

                Route::post('', 'store')->name('shop.customers.register.store');
            });

            /**
             * Customer verification routes.
             */
            Route::get('verify-account/{token}', 'verifyAccount')->name('shop.customers.verify');

            Route::get('resend/verification/{email}', 'resendVerificationEmail')->name('shop.customers.resend.verification_email');
        });

        /**
         * Customer authenticated routes. All the below routes only be accessible
         * if customer is authenticated.
         */
        Route::group(['middleware' => ['customer']], function () {
            /**
             * Datagrid routes.
             */
            Route::get('datagrid/look-up', [DataGridController::class, 'lookUp'])->name('shop.customer.datagrid.look_up');

            /**
             * Logout.
             */
            Route::delete('logout', [SessionController::class, 'destroy'])->defaults('_config', [
                'redirect' => 'shop.customer.session.index',
            ])->name('shop.customer.session.destroy');

            /**
             * Wishlist.
             */
            Route::get('wishlist', [WishlistController::class, 'index'])->name('shop.customers.account.wishlist.index');

            /**
             * Customer account. All the below routes are related to
             * customer account details.
             */
            Route::prefix('account')->group(function () {
                /**
                 * Profile.
                 */
                Route::controller(CustomerController::class)->prefix('profile')->group(function () {
                    Route::get('', 'index')->name('shop.customers.account.profile.index');

                    Route::get('edit', 'edit')->name('shop.customers.account.profile.edit');

                    Route::post('edit', 'update')->name('shop.customers.account.profile.store');

                    Route::post('destroy', 'destroy')->name('shop.customers.account.profile.destroy');

                    Route::get('reviews', 'reviews')->name('shop.customers.account.reviews.index');
                });

                /**
                 * Addresses.
                 */
                Route::controller(AddressController::class)->prefix('addresses')->group(function () {
                    Route::get('', 'index')->name('shop.customers.account.addresses.index');

                    Route::get('create', 'create')->name('shop.customers.account.addresses.create');

                    Route::post('create', 'store')->name('shop.customers.account.addresses.store');

                    Route::get('edit/{id}', 'edit')->name('shop.customers.account.addresses.edit');

                    Route::put('edit/{id}', 'update')->name('shop.customers.account.addresses.update');

                    Route::patch('edit/{id}', 'makeDefault')->name('shop.customers.account.addresses.update.default');

                    Route::delete('delete/{id}', 'destroy')->name('shop.customers.account.addresses.delete');
                });

                /**
                 * Orders.
                 */
                Route::controller(OrderController::class)->prefix('orders')->group(function () {
                    Route::get('', 'index')->name('shop.customers.account.orders.index');

                    Route::get('view/{id}', 'view')->name('shop.customers.account.orders.view');

                    Route::post('cancel/{id}', 'cancel')->name('shop.customers.account.orders.cancel');

                    Route::get('print/Invoice/{id}', 'printInvoice')->name('shop.customers.account.orders.print-invoice');
                });

                /**
                 * Downloadable products.
                 */
                Route::controller(DownloadableProductController::class)->prefix('downloadable-products')->group(function () {
                    Route::get('', 'index')->name('shop.customers.account.downloadable_products.index');

                    Route::get('download/{id}', 'download')->name('shop.customers.account.downloadable_products.download');
                });
            });
        });
    });
});
