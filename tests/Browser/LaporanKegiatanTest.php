<?php

namespace Tests\Browser;

use Tests\DuskTestCase;

class LaporanKegiatanTest extends DuskTestCase
{
    /**
     * @test
     */
    public function see_laporan_kegiatan_table_title()
    {
        $this->browse(function ($browser) {
            $browser->visit('/')
                ->type('username', 'admin5')
                ->type('password', 'admin5')
                ->select('kode_rs', 'RS0000')
                ->select('user_role', 'admin')
                ->press('Log In')
                ->assertSee('Dashboard');
            $browser->visit('/dashboard/ppm/laporan_kegiatan')
                ->assertSee('History Tabel Perbaikan Aset Teregistrasi')
                ->assertSee('History Tabel Perbaikan Aset Unregistrasi')
                ->assertSee('History Tabel Pemeliharaan Aset Teregistrasi');
        });
    }
}
