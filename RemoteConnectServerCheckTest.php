<?php

require_once('RemoteConnectServerCheck.php');

class RemoteConnectServerCheckTest extends PHPUnit_Framework_TestCase
{
  public function setUp(){ }
  public function tearDown(){ }

  public function testConnectionIsValid()
  {
    // test to ensure that the object from an fsockopen is valid
    $connObj = new RemoteConnectServerCheck();
    $serverName = 'www.gmail.com';
    $this->assertTrue($connObj->connectToServer($serverName) !== false);
  }
}
?>