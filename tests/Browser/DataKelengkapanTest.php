<?php

namespace Tests\Browser;

use App\Models\User;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Laravel\Dusk\Browser;
use Tests\DuskTestCase;

class DataKelengkapanTest extends DuskTestCase
{   
    public function test_input_gedung()
    {
        $this->browse(function($browser) {
            $browser->visit('/')
                ->type('username', 'admin5')
                ->type('password', 'admin5')
                ->select('kode_rs', 'RS0000')
                ->select('user_role', 'admin')
                ->press("Log In")
                ->assertSee('Dashboard')
                ->visit('/dashboard/ppm/data_kelengkapan')
                ->type('id_gedung', 'RS00000010')
                ->type('nama_gedung', 'Gedung ABC')
                ->press('Save')
                ->assertSee('Gedung ABC');
        });
    }

    public function test_input_alat()
    {
        $this->browse(function($browser) {
            $browser->visit('/dashboard/ppm/data_kelengkapan')
                ->type('id_alat', 'RS00000010')
                ->type('nama_alat', 'Alat 2')
                ->press('Save')
                ->assertSee('Ventilator');
        });
    }

    public function test_input_teknisi()
    {
        $this->browse(function($browser) {
            $browser->visit('/dashboard/ppm/data_kelengkapan')
                ->type('id_teknisi', 'RS00000010')
                ->type('nama_teknisi', 'Teknisi 2')
                ->press('Save')
                ->assertSee('Teknisi 11');
        });
    }

     public function test_input_ruangan()
    {
        $this->browse(function($browser) {
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
