<?php

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

Route::get('/', function () {
    return view('frontend.welcome');
});

Route::get('/forex-trading', function () {
    return view('frontend.forex');
});

Route::get('/cryptocurrency-trading', function () {
    return view('frontend.crypto');
});


Route::get('/about-us', function () {
    return view('frontend.about');
});


Route::get('/real-estate', function () {
    return view('frontend.real-estate');
});


Route::get('/', function () {
    return view('frontend.welcome');
});

Route::get('/terms', function () {
    return view('frontend.terms');
});


Auth::routes();
Auth::routes(['verify' => true]);

Route::middleware(['auth','user-only-area','verified'])->group(function () {

    Route::get('/dashboard', [App\Http\Controllers\HomeController::class, 'index'])->name('user.dashboard');
    Route::get('/wallet', [App\Http\Controllers\WalletController::class, 'index'])->name('user.wallet');
    Route::post('/swap', [App\Http\Controllers\SwapController::class, 'store'])->name('user.swap.store');

    //
    Route::get('/deposit', [App\Http\Controllers\DepositController::class, 'create'])->name('user.deposit.create');
    Route::post('/deposit', [App\Http\Controllers\DepositController::class, 'store'])->name('user.deposit.store');
    Route::get('/deposit/confirm/{transaction}', [App\Http\Controllers\DepositController::class, 'confirm'])->name('user.deposit.confirm');

    Route::get('/withdraw', [App\Http\Controllers\WithdrawalController::class, 'create'])->name('user.withdraw.create');
    Route::post('/withdraw', [App\Http\Controllers\WithdrawalController::class, 'store'])->name('user.withraw.store');
    Route::get('/withdrawal/wallet/{transaction}/{wallet}', [App\Http\Controllers\WithdrawalController::class, 'wallet'])->name('user.withdrawal.wallet');

    Route::get('/transactions/history', [App\Http\Controllers\TransactionController::class, 'index'])->name('user.transactions.index');
    Route::get('/swaps/history', [App\Http\Controllers\SwapController::class, 'index'])->name('user.swap.history');

    Route::get('/rewards', [App\Http\Controllers\RewardController::class, 'index'])->name('user.rewards.index');
    Route::get('/rewards/claim/{reward}', [App\Http\Controllers\RewardController::class, 'claim'])->name('user.rewards.claim');
    Route::post('/rewards/claim-code', [App\Http\Controllers\RewardController::class, 'claimCode'])->name('user.rewards.claim-code');

    Route::get('/options/account', [App\Http\Controllers\TradeController::class, 'index'])->name('user.options.account');
    Route::get('/options/trade', [App\Http\Controllers\TradeController::class, 'create'])->name('user.options.trade');
    Route::get('/options/history', [App\Http\Controllers\TradeController::class, 'history'])->name('user.options.history');
    Route::get('/options/trade/{trade}/{slug}', [App\Http\Controllers\TradeController::class, 'show'])->name('user.trades.show');

    Route::get('/invests/active', [App\Http\Controllers\CryptoInvestController::class, 'index'])->name('user.invest.crypto');
    Route::get('/invests/history', [App\Http\Controllers\CryptoInvestController::class, 'history'])->name('user.invest.history');
    Route::get('/invests/crypto/plans', [App\Http\Controllers\CryptoInvestController::class, 'schemes'])->name('user.invest.schemes');
    Route::get('/invests/crypto/create/{scheme}', [App\Http\Controllers\CryptoInvestController::class, 'create'])->name('user.invest.create');
    Route::post('/invests/crypto/store/{scheme}', [App\Http\Controllers\CryptoInvestController::class, 'store'])->name('user.invest.store');
    Route::get('/invests/show/{invest}', [App\Http\Controllers\CryptoInvestController::class, 'show'])->name('user.invest.show');

    Route::get('/invests/stocks', [App\Http\Controllers\StockInvestController::class, 'index'])->name('user.invest.stocks');
    Route::get('/invests/forex', [App\Http\Controllers\ForexInvestController::class, 'index'])->name('user.invest.forex');

    Route::get('/account/profile', [App\Http\Controllers\AccountController::class, 'show'])->name('user.account.profile');
    Route::get('/account/password', [App\Http\Controllers\AccountController::class, 'password'])->name('user.account.password');
    Route::put('/account/profile/update', [App\Http\Controllers\AccountController::class, 'update'])->name('user.account.update');
    Route::put('/account/password/update', [App\Http\Controllers\AccountController::class, 'updatePassword'])->name('user.password.update');

    Route::get('/account/withdraw-wallets', [App\Http\Controllers\AccountController::class, 'wallets'])->name('user.account.wallets');
    Route::post('/account/withdraw-wallet/add', [App\Http\Controllers\AccountController::class, 'addWallet'])->name('user.wallets.add');

    Route::get('/account/referrals', [App\Http\Controllers\ReferralController::class, 'index'])->name('user.referrals');

    Route::prefix('ajax')->group(function () {

        Route::get('/cmc-proxy-crypto-info/{cryptos}', [App\Http\Controllers\AjaxController::class, 'cmcProxy'])->name('get.crypto');
        Route::get('/store-trade/{scheme}/{outcome}/{amount}/{start_price}/{end_price}', [App\Http\Controllers\TradeController::class, 'storeTrade']);
        Route::get('/debit-account/{scheme}/{amount}', [App\Http\Controllers\TradeController::class, 'debit']);
        // Route::get('/store-trade', [App\Http\Controllers\TradeController::class, 'storeTrade']);

        Route::get('/get-user-balances', [App\Http\Controllers\AjaxController::class, 'balance'])->name('get.balances');
        Route::get('/get-user-investments', [App\Http\Controllers\AjaxController::class, 'investment'])->name('get.investments');
    });

});

Route::prefix('/admin')->middleware(['is_admin'])->group(function () {

    Route::get('/dashboard', [App\Http\Controllers\HomeController::class, 'admin'])->name('admin.dashboard');

    Route::get('/users/list', [App\Http\Controllers\Admin\UserController::class, 'index'])->name('admin.users.list');
    Route::get('/users/administrator', [App\Http\Controllers\Admin\UserController::class, 'admins'])->name('admin.users.admins');
    Route::get('/users/{user}/change-status', [App\Http\Controllers\Admin\UserController::class , 'status'])->name('admin.user.status');
    Route::get('/users/{user}/delete', [App\Http\Controllers\Admin\UserController::class , 'destroy'])->name('admin.user.delete');

    Route::get('/cryptos/list', [App\Http\Controllers\Admin\CryptoController::class, 'index'])->name('admin.crypto.list');
    Route::get('/cryptos/create', [App\Http\Controllers\Admin\CryptoController::class, 'create'])->name('admin.crypto.create');
    Route::post('/cryptos/store', [App\Http\Controllers\Admin\CryptoController::class, 'store'])->name('admin.crypto.store');
    Route::get('/cryptos/{crypto}/change-status', [App\Http\Controllers\Admin\CryptoController::class , 'status'])->name('admin.crypto.status');
    Route::get('/cryptos/{crypto}/delete', [App\Http\Controllers\Admin\CryptoController::class , 'destroy'])->name('admin.crypto.delete');

    Route::get('/wallets/list', [App\Http\Controllers\Admin\WalletAddressController::class, 'index'])->name('admin.wallet.list');
    Route::get('/wallets/create', [App\Http\Controllers\Admin\WalletAddressController::class, 'create'])->name('admin.wallet.create');
    Route::post('/wallets/store', [App\Http\Controllers\Admin\WalletAddressController::class, 'store'])->name('admin.wallet.store');
    Route::get('/wallets/{wallet}/change-status', [App\Http\Controllers\Admin\WalletAddressController::class , 'status'])->name('admin.wallet.status');
    Route::get('/wallets/{wallet}/delete', [App\Http\Controllers\Admin\WalletAddressController::class , 'destroy'])->name('admin.wallet.delete');

    Route::get('/coupons/list', [App\Http\Controllers\Admin\CouponController::class, 'index'])->name('admin.coupon.list');
    Route::get('/coupons/create', [App\Http\Controllers\Admin\CouponController::class, 'create'])->name('admin.coupon.create');
    Route::post('/coupons/store', [App\Http\Controllers\Admin\CouponController::class, 'store'])->name('admin.coupon.store');
    Route::get('/coupons/{coupon}/delete', [App\Http\Controllers\Admin\CouponController::class , 'destroy'])->name('admin.coupon.delete');

    Route::get('/investment/schemes', [App\Http\Controllers\Admin\InvestmentSchemeController::class, 'index'])->name('admin.iv.schemes');
    Route::get('/investment/schemes/create', [App\Http\Controllers\Admin\InvestmentSchemeController::class, 'create'])->name('admin.iv.create');
    Route::post('/investment/schemes/store', [App\Http\Controllers\Admin\InvestmentSchemeController::class, 'store'])->name('admin.iv.store');
    Route::put('/investment/scheme/{scheme}/update', [App\Http\Controllers\Admin\InvestmentSchemeController::class, 'update'])->name('admin.iv.update');
    Route::get('/investment/scheme/{scheme}/edit', [App\Http\Controllers\Admin\InvestmentSchemeController::class, 'edit'])->name('admin.iv.edit');
    Route::get('/investment/schemes/{scheme}/delete', [App\Http\Controllers\Admin\InvestmentSchemeController::class, 'destroy'])->name('admin.iv.delete');
    Route::get('/investment/schemes/{scheme}/change-status', [App\Http\Controllers\Admin\InvestmentSchemeController::class , 'status'])->name('admin.scheme.status');

    Route::get('/investment/history', [App\Http\Controllers\Admin\InvestmentController::class, 'index'])->name('admin.invest.index');

    Route::get('/binary/schemes', [App\Http\Controllers\Admin\BinarySchemeController::class, 'index'])->name('admin.binary.schemes');
    Route::get('/binary/schemes/create', [App\Http\Controllers\Admin\BinarySchemeController::class, 'create'])->name('admin.binary.create');
    Route::post('/binary/schemes/store', [App\Http\Controllers\Admin\BinarySchemeController::class, 'store'])->name('admin.binary.store');
    Route::get('/binaryt/schemes/{scheme}/change-status', [App\Http\Controllers\Admin\BinarySchemeController::class , 'status'])->name('admin.binary.status');
    Route::get('/binary/schemes/{scheme}/delete', [App\Http\Controllers\Admin\BinarySchemeController::class, 'destroy'])->name('admin.binary.delete');
    Route::get('/binary/schemes/{scheme}/edit', [App\Http\Controllers\Admin\BinarySchemeController::class, 'edit'])->name('admin.binary.edit');
    Route::put('/binary/scheme/{scheme}/update', [App\Http\Controllers\Admin\BinarySchemeController::class, 'update'])->name('admin.binary.update');

    Route::get('/binary-trades/history', [App\Http\Controllers\Admin\BinaryTradeController::class, 'index'])->name('admin.binary.index');

    Route::get('/profile/settings', [App\Http\Controllers\Admin\ProfileController::class, 'edit'])->name('admin.profile.settings');
    Route::put('/profile/settings/update', [App\Http\Controllers\Admin\ProfileController::class, 'update'])->name('admin.profile.update');
    Route::put('/profile/settings/update-password', [App\Http\Controllers\Admin\ProfileController::class, 'updatePassword'])->name('admin.password.update');

    Route::get('/depsosits/history', [App\Http\Controllers\Admin\DepositController::class, 'index'])->name('admin.deposit.index');
    Route::get('/depsosits/approve/{transaction}', [App\Http\Controllers\Admin\DepositController::class, 'approve'])->name('admin.deposit.approve');

    Route::get('/withdrawals/history', [App\Http\Controllers\Admin\WithdrawalController::class, 'index'])->name('admin.withdrawal.index');
    Route::get('/withdrawals/approve/{transaction}', [App\Http\Controllers\Admin\WithdrawalController::class, 'approve'])->name('admin.withdrawal.approve');

    Route::get('/transactions/history', [App\Http\Controllers\Admin\TransactionController::class, 'index'])->name('admin.trans.index');
    Route::get('/transaction/approve/{transaction}', [App\Http\Controllers\Admin\TransactionController::class, 'approve'])->name('admin.tran.approve');
    Route::get('/transaction/create', [App\Http\Controllers\Admin\TransactionController::class, 'create'])->name('admin.tran.create');
    Route::post('/transaction/store', [App\Http\Controllers\Admin\TransactionController::class, 'store'])->name('admin.tran.store');
    Route::get('/transaction/referral', [App\Http\Controllers\Admin\ReferralController::class, 'index'])->name('admin.referral.index');

    Route::get('/swaps/history', [App\Http\Controllers\Admin\TransactionController::class, 'swaps'])->name('admin.swap.index');

});
