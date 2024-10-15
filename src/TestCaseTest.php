<?php
namespace Yukikusumi\MyTddProject2;

class TestCaseTest extends TestCase
{
    public function testRunning()
    {
        $test = new WasRun("testMethod");
        assert(!$test->wasRun);
        $test->run();
        assert($test->wasRun == 1);
    }
}

$testCaseTest = new TestCaseTest("testRunning");
$testCaseTest->run();
