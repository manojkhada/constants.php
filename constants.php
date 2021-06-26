<?php
class Goodbye {
    const LEAVING_MESSAGE = "Thank you for visiting W3Schools.com!";
    public function byebye() {
      echo self::LEAVING_MESSAGE;
    }
  }
  
  $goodbye = new Goodbye();
  $goodbye->byebye();?>

  <br>
  <br>

  <?php

   class God{
    const live="thanks for waching";
}
echo God::live;
?>