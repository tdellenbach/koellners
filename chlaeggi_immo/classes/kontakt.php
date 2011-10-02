<?php
class Kontakt{

/**  private $request = null;
  *private $template = '';
  *private $view = null;
*/
  private static $formdata = array("title"=>'a', "type"=>'b');
  private static $anschrift = array('Anschrift', 'Strasse', 'PLZ Ort', 'Telefon', 'Fax', 'Mail');
  /**
   * Konstruktor, erstellet den Controller.
   *
   * @param Array $request Array aus $_GET & $_POST.
   */
  public function __construct(){
  }

  /**
   * Methode zum ...ANPASSEN.
   *
   * @return String ANPASSEN.
   */
  public function getAnschrift(){
    echo '<p>';
    echo self::$anschrift[0].'<br>';
    echo self::$anschrift[1].'<br>';
    echo self::$anschrift[2];
    echo '</p>';
  
    echo '<p>';
    echo self::$anschrift[3].'<br>';
    echo self::$anschrift[4].'<br>';
    echo self::$anschrift[5];
    echo '</p>'."\n";
  }
  
  /**
   * Methode zum ....ANPASSEN.
   *
   * @return String ANPASSEN
   */  
  public function getFormular(){
    echo '    <form action="kontakt_action.php" method="post">'."\n";
    echo '    <table width="100%">'."\n";
    echo '      <tr>'."\n";
    echo '        <td>Name:</td>'."\n";
    echo '        <td><input type="text" name="name" /></td>'."\n";
    echo '        <td>Ich interessiere mich f&uuml;r:</td>'."\n";
    echo '      </tr>'."\n";
    echo '      <tr>'."\n";
    echo '        <td>Vorname:</td>'."\n";
    echo '        <td><input type="text" name="vorname" /></td>'."\n";
    echo '        <td rowspan="3" aligne="left">'."\n";
    echo '          <input type="radio" name="Zahlmethode" value="Miete"> Miete<br>'."\n";
    echo '          <input type="radio" name="Zahlmethode" value="Kauf"> Kauf<br>'."\n";
    echo '          <input type="radio" name="Zahlmethode" value="Verkauf"> Verkauf'."\n";
    echo '        </td>'."\n";
    echo '      </tr>'."\n";
    echo '      <tr>'."\n";
    echo '        <td>Strasse:</td>'."\n";
    echo '        <td><input type="text" name="strasse" /></td>'."\n";
    echo '      </tr>'."\n";
    echo '      <tr>'."\n";
    echo '        <td>PLZ/Ort:</td>'."\n";
    echo '        <td><input type="text" name="plz" /><input type="text" name="ort" /></td>'."\n";
    echo '      </tr>'."\n";
    echo '      <tr>'."\n";
    echo '        <td>Telefon:</td>'."\n";
    echo '        <td><input type="text" name="telefon" /></td>'."\n";
    echo '        <td rowspan="3" aligne="left">'."\n";
    echo '            <input type="checkbox" name="objektart" value="Wohnung"> Wohnung<br>'."\n";
    echo '            <input type="checkbox" name="objektart" value="Einfamilienhaus"> Einfamilienhaus<br>'."\n";
    echo '            <input type="checkbox" name="objektart" value="Gewerbeobjetk"> Gewerbeobjekt<br>'."\n";
    echo '            <input type="checkbox" name="objektart" value="Grundst&uuml;ck"> Grundst&uuml;ck<br>'."\n";
    echo '            <input type="checkbox" name="objektart" value="Anlageobjekt"> Anlageobjekt'."\n";
    echo '        </th>'."\n";
    echo '      </tr>'."\n";
    echo '      <tr>'."\n";
    echo '      <td>E-Mail:</td>'."\n";
    echo '      <td><input type="text" name="email" /></td>'."\n";
    echo '      </tr>'."\n";
    echo '      <tr>'."\n";
    echo '      <td>Bemerkungen:</td>'."\n";
    echo '      <td><input type="text" name="bemerkungen" /></td>'."\n";
    echo '      </tr>'."\n";
    echo '    </table>'."\n";
    echo '    <p><input type="submit" /></p>'."\n";
    echo '  </form>'."\n";
  }
}
?>