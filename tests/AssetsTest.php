<?php

namespace TCG\Voyager\Tests;

use Illuminate\Support\Facades\Auth;

class AssetsTest extends TestCase
{
    protected $prefix = '/voyager-assets?path=';

    public function setUp(): void
    {
        parent::setUp();

        Auth::loginUsingId(1);
    }

    public function testCanOpenFileInAssets()
    {
        $url = route('voyager.dashboard').$this->prefix.'css/app.css';

        $response = $this->call('GET', $url);
        $this->assertEquals(200, $response->status(), $url.' did not return a 200');
    }
}
