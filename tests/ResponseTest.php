<?php
/**
 * Created by PhpStorm.
 * User: leviputna
 * Date: 16/12/2015
 * Time: 5:28 PM
 */

class CitiesResponseTest extends PHPUnit_Framework_TestCase
{
    public function testCitiesListContainsAmsterdam()
    {
        $uri = "http://localhost:8000";
        $response = http_get($uri, null, $info);

        $this->assertEquals("application/json", $info["content_type"]);
        $this->assertContains("Amsterdam", $response);
    }
}