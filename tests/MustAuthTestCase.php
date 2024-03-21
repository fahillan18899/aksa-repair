<?php

namespace Tests;

use Illuminate\Foundation\Testing\TestCase as BaseMustAuthTestCase;

class MustAuthTestCase extends BaseMustAuthTestCase
{
    use CreatesApplication;

    protected function setUp(): void
    {
        parent::setUp();

        $this->post('/', [
            'username' => 'admin5',
            'password' => 'admin5',
            'kode_rs' => 'RS0000',
            'user_role' => 'admin'
        ]);
    }
}