<?php

namespace Tests\Feature;

use Tests\TestCase;

class ApiStatusTest extends TestCase
{
    public function test_root_returns_api_status_as_json(): void
    {
        $this->get('/')
            ->assertOk()
            ->assertJsonPath('status', 'ok');
    }
}
