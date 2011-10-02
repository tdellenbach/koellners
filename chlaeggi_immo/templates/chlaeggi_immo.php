<?php
  $head = new Head();
  $navigation = new Navigation();
  $foot = new Foot();

  $head->display("CHLAEGGI IMMO - Ihr Partner im Klettgau", 100);
  $navigation->display();

  echo $this->_['chlaeggi_content'];

  $foot->display();

?>

