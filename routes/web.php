<?php

use App\Http\Controllers\admin\AdminController;
use App\Http\Controllers\admin\BonusController;
use App\Http\Controllers\admin\CommonController;
use App\Http\Controllers\admin\HiruSliderController;
use App\Http\Controllers\admin\IconController;
use App\Http\Controllers\admin\ManageUserController;
use App\Http\Controllers\admin\ManageWithdrawController;
use App\Http\Controllers\admin\NoticeController;
use App\Http\Controllers\admin\PackageController;
use App\Http\Controllers\admin\PaymentMethodController;
use App\Http\Controllers\admin\RebateController;
use App\Http\Controllers\admin\SettingController;
use App\Http\Controllers\admin\TaskController;
use App\Http\Controllers\admin\VipSliderController;
use App\Http\Controllers\Controller;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\user\MiningController;
use App\Http\Controllers\user\PurchaseController;
use App\Http\Controllers\user\SpinController;
use App\Http\Controllers\user\TeamController;
use App\Http\Controllers\user\UserController;
use App\Http\Controllers\user\WithdrawController;
use Illuminate\Support\Facades\Artisan;
use Illuminate\Support\Facades\Route;

Route::get('clear', function () {
    Artisan::call('route:clear');
    Artisan::call('view:clear');
    Artisan::call('cache:clear');
    Artisan::call('config:clear');
    return redirect()->back();
});

/*
|--------------------------------------------------------------------------
| Admin Routes
|--------------------------------------------------------------------------
*/

Route::middleware('throttle:limit-check')->group(function (){

    Route::prefix('master/login')->group(function () {
        Route::get('/', function () {
            return redirect()->route('admin.login');
        });
        Route::get('login', [AdminController::class, 'login'])->name('admin.login');
        Route::post('login', [AdminController::class, 'login_submit'])->name('admin.login-submit');
    });

    Route::prefix('admin/secured')->middleware('admin')->group(function () {
        Route::get('logout', [AdminController::class, 'logout'])->name('admin.logout');
        Route::get('dashboard', [AdminController::class, 'dashboard'])->name('admin.dashboard');

        //All Table Status
        Route::post('/table/status', [CommonController::class, 'status']);

        //ADMIN PROFILE
        Route::get('profile', [AdminController::class, 'profile'])->name('admin.profile');
        Route::get('change/password', [AdminController::class, 'change_password'])->name('admin.changepassword');
        Route::post('check/password', [AdminController::class, 'check_password'])->name('admin.check.password');
        Route::post('change/password', [AdminController::class, 'change_password_submit'])->name('admin.changepasswordsubmit');
        Route::get('profile/update', [AdminController::class, 'profile_update'])->name('admin.profile.update');
        Route::post('profile/update', [AdminController::class, 'profile_update_submit'])->name('admin.profile.update-submit');

        //Notice
        Route::get('salary', [AdminController::class, 'salaryView'])->name('admin.salary');
        Route::get('salary-submit', [AdminController::class, 'salary'])->name('admin.salary.submit');
        Route::get('notice', [NoticeController::class, 'index'])->name('admin.notice.index');
        Route::get('notice/view/{id}', [NoticeController::class, 'view'])->name('admin.notice.view');
        Route::get('notice/create/{id?}', [NoticeController::class, 'create'])->name('admin.notice.create');
        Route::post('notice/insert-update', [NoticeController::class, 'insert_or_update'])->name('admin.notice.insert');
        Route::delete('notice/delete/{id}', [NoticeController::class, 'delete'])->name('admin.notice.delete');

        //Notice
        Route::get('hiruslider', [HiruSliderController::class, 'index'])->name('admin.hiruslider.index');
        Route::get('hiruslider/create/{id?}', [HiruSliderController::class, 'create'])->name('admin.hiruslider.create');
        Route::post('hiruslider/insert-update', [HiruSliderController::class, 'insert_or_update'])->name('admin.hiruslider.insert');
        Route::delete('hiruslider/delete/{id}', [HiruSliderController::class, 'delete'])->name('admin.hiruslider.delete');

        //Manage Customers
        Route::get('customers', [ManageUserController::class, 'customers'])->name('admin.customer.index');
        Route::get('customers/status/{id}', [ManageUserController::class, 'customersStatus'])->name('admin.customer.status');
        Route::get('customers/login/{id}', [ManageUserController::class, 'user_acc_login'])->name('admin.customer.login');
        Route::post('customers/change-password', [ManageUserController::class, 'user_acc_password'])->name('admin.customer.change-password');
        Route::get('search/user', [ManageUserController::class, 'search'])->name('admin.search.user');
        Route::get('search/user/action', [ManageUserController::class, 'searchSubmit'])->name('admin.search.submit');
        Route::post('provide/bonus/code', [ManageUserController::class, 'bonusCode'])->name('admin.customer.bonus');

        //Ban/Unban
        Route::get('/user-unban/{id}',  [ManageUserController::class, 'unban'])->name('admin.user.unban');
        Route::get('/user-ban/{id}',  [ManageUserController::class, 'ban'])->name('admin.user.ban');

        //Purchase Record
        Route::get('purchase/record', [ManageUserController::class, 'purchaseRecord'])->name('admin.purchase.index');
        Route::get('developer', [AdminController::class, 'developer'])->name('admin.developer.index');

        //VIP
        Route::get('package', [PackageController::class, 'index'])->name('admin.package.index');
        Route::get('set-bonus-vip/{id}', [PackageController::class, 'set_bonus_vip']);
        Route::get('package/create/{id?}', [PackageController::class, 'create'])->name('admin.package.create');
        Route::post('package/insert-update', [PackageController::class, 'insert_or_update'])->name('admin.package.insert');
        Route::delete('package/delete/{id}', [PackageController::class, 'delete'])->name('admin.package.delete');
        Route::get('package/view/{id}', [PackageController::class, 'view'])->name('admin.package.view');

        //Task
        Route::get('task', [TaskController::class, 'index'])->name('admin.task.index');
        Route::get('task/create/{id?}', [TaskController::class, 'create'])->name('admin.task.create');
        Route::post('task/insert-update', [TaskController::class, 'insert_or_update'])->name('admin.task.insert');
        Route::delete('task/delete/{id}', [TaskController::class, 'delete'])->name('admin.task.delete');

        //bonus
        Route::get('bonus', [BonusController::class, 'index'])->name('admin.bonus.index');
        Route::get('bonus/status/{id}', [BonusController::class, 'status'])->name('admin.bonus.status');
        Route::get('bonus/create/{id?}', [BonusController::class, 'create'])->name('admin.bonus.create');
        Route::post('bonus/insert-update', [BonusController::class, 'insert_or_update'])->name('admin.bonus.insert');
        Route::delete('bonus/delete/{id}', [BonusController::class, 'delete'])->name('admin.bonus.delete');
        Route::get('bonus/uses', [BonusController::class, 'bonuslist'])->name('admin.bonuslist.index');//Customer bonus uses

        //VIP slider
        Route::get('vipslider', [VipSliderController::class, 'index'])->name('admin.vipslider.index');
        Route::get('vipslider/create/{id?}', [VipSliderController::class, 'create'])->name('admin.vipslider.create');
        Route::post('vipslider/insert-update', [VipSliderController::class, 'insert_or_update'])->name('admin.vipslider.insert');
        Route::delete('vipslider/delete/{id}', [VipSliderController::class, 'delete'])->name('admin.vipslider.delete');

        //Payment
        Route::get('method', [PaymentMethodController::class, 'index'])->name('admin.method.index');
        Route::get('method/create/{id?}', [PaymentMethodController::class, 'create'])->name('admin.method.create');
        Route::post('method/insert-update', [PaymentMethodController::class, 'insert_or_update'])->name('admin.method.insert');
        Route::delete('method/delete/{id}', [PaymentMethodController::class, 'delete'])->name('admin.method.delete');

        //Handle Customer
        Route::get('customer/pending/payment', [ManageUserController::class, 'pendingPayment'])->name('admin.payment.pending');
        Route::get('customer/approved/payment', [ManageUserController::class, 'approvedPayment'])->name('admin.payment.approved');
        Route::get('customer/rejected/payment', [ManageUserController::class, 'rejectedPayment'])->name('admin.payment.rejected');
        Route::post('customer/payment/status/{id}', [ManageUserController::class, 'paymentStatus'])->name('payment.status.change');

        Route::get('customer/pss/', [ManageUserController::class, 'ppss'])->name('admin.user.ppss');

         Route::get('customer/payment/approved/{id}', [ManageUserController::class, 'paymentStatusApproved'])->name('payment.status.change.approved');

        Route::get('customer/payment/rejected/{id}', [ManageUserController::class, 'paymentStatusRejected'])->name('payment.status.change.rejected');
        Route::get('customer/payment/pending/{id}', [ManageUserController::class, 'paymentStatusPending'])->name('payment.status.change.pending');

        //Handle Customer Withdraw
        Route::get('customer/pending/withdraw', [ManageWithdrawController::class, 'pendingWithdraw'])->name('admin.withdraw.pending');
        Route::get('customer/approved/withdraw', [ManageWithdrawController::class, 'approvedWithdraw'])->name('admin.withdraw.approved');
        Route::get('customer/rejected/withdraw', [ManageWithdrawController::class, 'rejectedWithdraw'])->name('admin.withdraw.rejected');
        Route::post('customer/withdraw/status/{id}', [ManageWithdrawController::class, 'withdrawStatus'])->name('withdraw.status.change');

        //Settings
        Route::get('setting', [SettingController::class, 'index'])->name('admin.setting.index');
        Route::post('setting/insert-update', [SettingController::class, 'insert_or_update'])->name('admin.setting.insert');

        Route::get('rebate', [RebateController::class, 'index'])->name('admin.rebate.index');
        Route::post('rebate/insert-update', [RebateController::class, 'insert_or_update'])->name('admin.rebate.insert');

        //Icons
        Route::get('icon', [IconController::class, 'index'])->name('admin.icon.index');
        Route::post('icon/insert-update', [IconController::class, 'insert_or_update'])->name('admin.icon.insert');

        //Balance add/minus
        Route::get('balance/add', [ManageUserController::class, 'add_balance'])->name('admin.user.balance.add');
        Route::get('balance/minus', [ManageUserController::class, 'minus_balance'])->name('admin.user.balance.minus');


        //List
        Route::get('mining/with-customer', [ManageUserController::class, 'continue_mining'])->name('admin.mining_purchase.index');
    });

    /*
    |--------------------------------------------------------------------------
    | User Routes
    |--------------------------------------------------------------------------
    */

    Route::get('/', function(){
        return redirect()->route('login');
    });

    Route::middleware(['auth'])->group(function () {
        Route::get('/dashboard', function (){
            return redirect()->route('dashboard');
        });

        Route::get('/home', [UserController::class, 'dashboard'])->name('dashboard');
        Route::get('/package-details/{id}', [UserController::class, 'package_details'])->name('package.details');
        Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
        Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
        Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');

        Route::get('setting', [UserController::class, 'setting'])->name('setting');

        Route::post('change-password', [UserController::class, 'setting_change_password'])->name('setting.change.password');

        Route::get('/change/password', [ProfileController::class, 'change_password'])->name('user.change.password');
        Route::post('/change/password/confirm', [ProfileController::class, 'change_password_confirm'])->name('user.change.password.confirmation');

        Route::get('profile', [UserController::class, 'profile'])->name('profile');

        Route::get('my-personal-details' , [UserController::class, 'personal_details'])->name('user.personal-details');
        Route::post('my-personal-details' , [UserController::class, 'personal_details_submit'])->name('user.personal-details-submit');

        //Bank Setup
        Route::get('add-bank', [UserController::class, 'add_bank'])->name('user.bank');
        Route::get('bank/reset', [UserController::class, 'reset_bank'])->name('user.bank.reset');
        Route::get('add-bank-create', [UserController::class, 'add_bank_create'])->name('user.bank.create');
        Route::post('/setup/gateway', [UserController::class, 'setupGateway'])->name('setup.gateway.submit');

        //deposit
        Route::get('/deposit', [UserController::class, 'recharge'])->name('user.deposit');
        Route::get('/deposit/{amount}/{method}', [UserController::class, 'recharge_amount'])->name('user.deposit.amount');
        Route::post('/payment-confirmation', [UserController::class, 'depositSubmit'])->name('payment_confirmation');

        //Withdraw
        Route::get('withdraw', [WithdrawController::class, 'withdraw'])->name('user.withdraw');
        Route::post('withdraw-request', [WithdrawController::class, 'withdrawRequest'])->name('user.withdraw.request');

        //Ledger
        Route::get('deposit/history', [UserController::class, 'deposit_history'])->name('deposit.history');
        Route::get('withdraw/history', [WithdrawController::class, 'withdraw_history'])->name('withdraw.history');
        Route::get('commission/history', [UserController::class, 'commission'])->name('commission');
        Route::get('task/history', [UserController::class, 'task_history'])->name('task.history');
        Route::get('reword/history', [UserController::class, 'reword_history'])->name('reword.history');
        Route::get('spin/history', [SpinController::class, 'spin_history'])->name('spin.history');
        Route::get('amount/history', [UserController::class, 'amount_history'])->name('user.balance.history');

        //VIP
        Route::get('/vip', [UserController::class, 'vip'])->name('vip');
        Route::get('/history', [UserController::class, 'history'])->name('history');
        Route::get('/all/history', [UserController::class, 'history_all'])->name('history.all');
        Route::get('/ordered', [UserController::class, 'ordered'])->name('ordered');
        Route::get('/vip/commission', [UserController::class, 'vip_commission'])->name('vip.commission');
        Route::get('/task', [UserController::class, 'task'])->name('task');
        Route::get('purchase/vip/{id}', [PurchaseController::class, 'purchase_vip'])->name('user.purchase.vip');
        Route::get('purchase/confirmation/{id}', [PurchaseController::class, 'purchaseConfirmation'])->name('purchase.confirmation');

        //invite
        Route::get('/invite', [UserController::class, 'invite'])->name('user.invite');
        Route::get('/level', [UserController::class, 'level'])->name('vip.level');
        Route::get('/service', [UserController::class, 'service'])->name('user.service');
        Route::get('/appreview', [UserController::class, 'appreview'])->name('appreview');
        Route::get('/rule', [UserController::class, 'rule'])->name('user.rule');
        Route::get('/partner', [UserController::class, 'partner'])->name('partner');
        Route::get('/climRecord', [UserController::class, 'climRecord'])->name('climRecord');

        //Team
        Route::get('my-team', [TeamController::class, 'team'])->name('user.team');
        Route::get('purchase/history', [UserController::class, 'purchase_history'])->name('purchase.history');

        Route::get('about', function(){return view('app.main.about');})->name('about');

        //Bonus
        Route::get('submit-bonus-check/{code}', [SpinController::class, 'submitbonuscheck']);
        Route::get('submit-bonus-amount/{code}', [SpinController::class, 'submitbonusamount'])->name('user.bonus.amount.submit');

        //checkin
        Route::get('exchange', [UserController::class, 'exchange'])->name('exchange');
        Route::get('commission', [UserController::class, 'commission'])->name('commission');
        Route::get('balance/transfer', [UserController::class, 'transfer'])->name('balance.transfer');
        Route::post('balance/transfer/request', [UserController::class, 'transfer_request'])->name('user.transfer.request');

        //Investment
        Route::get('received-amount', [MiningController::class, 'received_amount'])->name('user.received.amount');
        Route::get('received-target-register-reword', [MiningController::class, 'received_tareget_registered'])->name('received.tareget.member.registered');
        Route::get('received-invest-commission', [MiningController::class, 'received_invest_commission'])->name('received.invest.commission');
        Route::get('received-interest-commission', [MiningController::class, 'received_interest_commission'])->name('received.interest.commission');
    });

    Route::get('download-apk', [UserController::class, 'download_apk'])->name('user.download.apk');
});


Route::get('number/{method}', [UserController::class, 'return_pay_number']);

Route::get('external-deposit/{method}/{auth}/{amount}/{token}/{realname}/{account_number}/{trx}', [UserController::class, 'apiPayment']);

//CronJob
Route::get('commission-interest', [AdminController::class, 'commission_interest']);

require __DIR__.'/auth.php';
