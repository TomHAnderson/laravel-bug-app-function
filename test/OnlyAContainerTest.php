<?php

namespace TomHAnderson\Tests;

use PHPUnit\Framework\TestCase;

class OnlyAContainerTest extends TestCase
{
    public function testAppFunctionCanResolvePaths()
    {
        storage_path();
    }
}
