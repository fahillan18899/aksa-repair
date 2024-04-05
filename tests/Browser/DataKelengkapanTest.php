<?php

namespace Tests\Browser;

use Tests\DuskTestCase;

class DataKelengkapanTest extends DuskTestCase
{
    /**
     * @test
     */
    public function input_gedung()
    {
        $this->browse(function ($browser) {
            $browser->visit('/')
                ->type('username', 'admin5')
                ->type('password', 'admin5')
                ->select('kode_rs', 'RS0000')
                ->select('user_role', 'admin')
                ->press('Log In')
                ->assertSee('Dashboard')
                ->visit('/dashboard/ppm/data_kelengkapan')
                ->type('id_gedung', 'RS00000010')
                ->type('nama_gedung', 'Gedung ABC')
                ->press('Save')
                ->assertSee('Gedung ABC');
        });
    }

    /**
     * @test
     */
    public function input_alat()
    {
        $this->browse(function ($browser) {
            $browser->visit('/dashboard/ppm/data_kelengkapan')
                ->type('id_alat', 'RS00000010')
                ->type('nama_alat', 'Alat 2')
                ->press('Save')
                ->assertSee('Ventilator');
        });
    }

    /**
     * @test
     */
    public function input_teknisi()
    {
        $this->browse(function ($browser) {
            $browser->visit('/dashboard/ppm/data_kelengkapan')
                ->type('id_teknisi', 'RS00000010')
                ->type('nama_teknisi', 'Teknisi 2')
                ->press('Save')
                ->assertSee('Teknisi 11');
        });
    }

    /**
     * @test
     */
    public function input_ruangan()
    {
        $this->browse(function ($browser) {
            $browser->visit('/dashboard/ppm/data_kelengkapan')
                ->type('id_ruangan', 'RS00000010')
                ->type('ruangan_alat', 'Ruangan Produksi')
                ->select('ruangan', 'Gedung ABC')
                ->select('kepala_ruangan', 'Teknisi 2')
                ->press('Save')
                ->assertSee('Ruangan 11');
        });
    }
}
