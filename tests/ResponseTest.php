<?php
/**
 * Created by PhpStorm.
 * User: leviputna
 * Date: 16/12/2015
 * Time: 5:28 PM
 */

class CitiesResponseTest extends PHPUnit_Framework_TestCase
{

    public function testSetupWorking()
    {
        $this->assertEquals(true, true);
        $this->assertFalse(false);
    }

    public function testCitiesListContainsAmsterdam()
    {
        $uri = "http://example.lan";
        $info = $response = file_get_contents($uri);

        $this->assertContains("Amsterdam", $info);
    }
}