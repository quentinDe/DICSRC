<?php
// @codingStandardsIgnoreFile
// @codeCoverageIgnoreStart
spl_autoload_register(function($class) {
  static $classes = null;
  if ($classes === null) {
    $classes = array(
      'entity\\user' => '/../Sources/entity/user.php',
      'dao\\idaouser' => '/../Sources/dao/idaouser.php',
      'dao\\daousersession' => '/../Sources/dao/daousersession.php',
      'dao\\daousercookie' => '/../Sources/dao/daousercookie.php',
      'service\\iserviceuser' => '/../Sources/service/iserviceuser.php',
      'service\\serviceuser' => '/../Sources/service/serviceuser.php',
      'dic' => '/../Sources/dic.php',
    );
  }
  $cn = strtolower($class);
  // echo "DIR: " .  __DIR__ . "\n";
  // echo "CN: " . $cn . "\n";
  if (isset($classes[$cn])) {
      require __DIR__ . $classes[$cn];
  }
});
