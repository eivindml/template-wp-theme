<?php
  include('jade-config.php');

  $filename = basename(__FILE__, '.php');
  echo $renderer->render($filename . '.jade');
