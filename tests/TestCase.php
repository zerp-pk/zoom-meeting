<?php

namespace Zerp\ZoomMeeting\Tests;

use Orchestra\Testbench\TestCase as Orchestra;
use Zerp\ZoomMeeting\Providers\ZoomMeetingServiceProvider;

abstract class TestCase extends Orchestra
{
    protected function getPackageProviders($app): array
    {
        return [ZoomMeetingServiceProvider::class];
    }
}
