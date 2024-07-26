<?php

namespace App\Providers;

use App\Models\User;
use App\Type\Hospital;
use Illuminate\Support\Facades\Gate;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        Gate::define('admin', function (User $user) {
            return $user->user_role === 'admin';
        });
        Gate::define('teknisi', function (User $user) {
            return $user->user_role === 'teknisi';
        });
        Gate::define('user', function (User $user) {
            return $user->user_role === 'user';
        });
        Gate::define('RS_DEMO', function (User $user) {
            return $user->kode_rs=== Hospital::RS_0000;
        });
        Gate::define('RS_BADARUDIN_KASIM', function (User $user) {
            return $user->kode_rs === Hospital::RS_0001;
        });
        Gate::define('RSI_WONOSOBO', function (User $user) {
            return $user->kode_rs === Hospital::RS_0002;
        });
        Gate::define('RS_PANTI_WILASA', function (User $user) {
            return $user->kode_rs === Hospital::RS_0003;
        });
        Gate::define('RSUD_CILEGON', function (User $user) {
            return $user->kode_rs === Hospital::RS_0004;
        });
        Gate::define('RS_PONDOK_KOPI', function (User $user) {
            return $user->kode_rs === Hospital::RS_0005;
        });
        Gate::define('RSUD_TEMANGGUNG', function (User $user) {
            return $user->kode_rs === Hospital::RS_0006;
        });
        Gate::define('RSU_JAFAR_MEDIKA', function (User $user) {
            return $user->kode_rs === Hospital::RS_0007;
        });
        Gate::define('RS_PKU_WONOSOBO', function (User $user) {
            return $user->kode_rs === Hospital::RS_0008;
        });
        Gate::define('RSUD_KARANGANYAR', function (User $user) {
            return $user->kode_rs === Hospital::RS_0009;
        });
        Gate::define('LABKESDA_BEKASI', function (User $user) {
            return $user->kode_rs === Hospital::RS_0010;
        });
        Gate::define('RSUD_UNGARAN', function (User $user) {
            return $user->kode_rs === Hospital::RS_0011;
        });
        Gate::define('RS_PALANG_BIRU', function (User $user) {
            return $user->kode_rs === Hospital::RS_0011;
        });
    }
}
