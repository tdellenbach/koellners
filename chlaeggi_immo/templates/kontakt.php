<div id="Inhalt">
  <p>
  <h1>Kontakt</h1>
<?php
  $kontakt = new Kontakt();
  $kontakt->getAnschrift();
?>
  <hr>
  <p>Kontaktformular</p>
  <p>
<?php $kontakt->getFormular();?>
  </p>
</div>
