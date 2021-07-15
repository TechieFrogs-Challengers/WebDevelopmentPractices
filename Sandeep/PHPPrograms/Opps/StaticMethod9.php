<?php
class domain {
  protected static function getWebsiteName() {
    return "xyz.com";
  }
}
class dom extends domain
{
	protected static function getWebsiteName() {
		return "google.com";
  }
}

class domainW3 extends dom {
  public $websiteName;
  public function __construct() {
    $this->websiteName = parent::getWebsiteName();
  }
}

$domainW3 = new domainW3;
echo $domainW3 -> websiteName;
?>