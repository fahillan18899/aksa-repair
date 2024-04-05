<?php

namespace Tests\Browser;

use App\Models\User;
use Tests\DuskTestCase;

class AuthenticationTest extends DuskTestCase
{
    protected function tearDown(): void
    {
        User::query()->where('username', 'test5')->delete();
    }

    /**
     * @test
     */
    public function see_login_after_register()
    {
        $this->browse(function ($browser) {
            $browser->visit('/register')
                ->type('username', 'test5')
                ->type('password', 'test5')
                ->select('kode_rs', 'RS0000')
                ->select('user_role', 'user')
                ->press('Daftar');

            $browser->assertSee('Silahkan Isi data anda dengan Sesuai');
        });
    }

    /**
     * @test
     */
    public function see_error_after_register()
    {
        $this->browse(function ($browser) {
            $browser->visit('/register')
                ->type('username', 'admin5')
                ->type('password', 'test5')
                ->select('kode_rs', 'RS0000')
                ->select('user_role', 'admin')
                ->press('Daftar');

            $browser->assertSee('Username Sudah Di Gunakan');
        });
    }

    /**
     * @test
     */
    public function see_error_after_login()
    {
        $this->browse(function ($browser) {
            $browser->visit('/')
                ->type('username', 'admin5')
                ->type('password', 'asdff')
                ->select('kode_rs', 'RS0000')
                ->select('user_role', 'admin')
                ->press('Log In')
                ->assertSee('Detail Login Tidak Valid');
        });
    }

    /**
     * @test
     */
    public function see_dashboard_after_login()
    {
        $this->browse(function ($browser) {
            $browser->visit('/')
                ->type('username', 'admin5')
                ->type('password', 'admin5')
                ->select('kode_rs', 'RS0000')
                ->select('user_role', 'admin')
                ->press('Log In')
                ->assertSee('Dashboard');
        });
    }

    /**
     * @test
     */
    public function see_login_after_logout()
    {
        $this->browse(function ($browser) {
            $browser->visit('/dashboard/ppm/home')
                ->clickLink('.logout-btn')
                ->assertSee('Silahkan Isi data anda dengan Sesuai');
        });
    }
}
