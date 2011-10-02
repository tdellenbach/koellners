<?php
/**
 * Klasse für den Datenzugriff
 */
class ModelList{

	//Einträge eines Blogs als zweidimensionales Array
  private static $entries = array();

  /**
   * Konstruktor, erstellet den Controller.
   */
  public function initialise($menu, $region){    
    $xmlUrl = "./data/$menu/$menu.xml"; // XML feed file/URL
    $baulandkatalog = simplexml_load_file($xmlUrl);

    if ($menu == 'bauland'){
      for ($counter=0, $end=count($baulandkatalog); $counter < $end; $counter++){
        $strasse =      $baulandkatalog->bauland[$counter]->adresse->strasse;
        $plz =          $baulandkatalog->bauland[$counter]->adresse->plz;
        $ort =          $baulandkatalog->bauland[$counter]->adresse->ort;
        $flaeche =      $baulandkatalog->bauland[$counter]->flaeche;
        $preis =        $baulandkatalog->bauland[$counter]->preis;
        $beschreibung = $baulandkatalog->bauland[$counter]->beschreibung;
        $pfad =         $baulandkatalog->bauland[$counter]->pfad;
        
        if ($region == strtolower($ort)){
          array_push(self::$entries, array("strasse" => $strasse, "plz" => $plz, "ort" => $ort, "flaeche" => $flaeche, "preis" => $preis, "beschreibung" => $beschreibung, "pfad" => $pfad));
        }
      }
    }
    
    if ($menu == 'liegenschaften'){
      for ($counter=0, $end=count($baulandkatalog); $counter < $end; $counter++){
        $strasse =      $baulandkatalog->bauland[$counter]->adresse->strasse;
        $plz =          $baulandkatalog->bauland[$counter]->adresse->plz;
        $ort =          $baulandkatalog->bauland[$counter]->adresse->ort;
        $flaeche =      $baulandkatalog->bauland[$counter]->flaeche;
        $preis =        $baulandkatalog->bauland[$counter]->preis;
        $beschreibung = $baulandkatalog->bauland[$counter]->beschreibung;
        $pfad =         $baulandkatalog->bauland[$counter]->pfad;
        
        if ($region == strtolower($ort)){
          array_push(self::$entries, array("strasse" => $strasse, "plz" => $plz, "ort" => $ort, "flaeche" => $flaeche, "preis" => $preis, "beschreibung" => $beschreibung, "pfad" => $pfad));
        }
      }
    }
  }
  
	/**
	 * Gibt alle aktiven Gemeinden im Bauland zurück.
	 *
	 * @return Array Array von Blogeinträgen.
	 */
	public static function getEntries(){
		return self::$entries;
	}

	/**
	 * Gibt einen bestimmten Eintrag zurück.
	 *
	 * @param int $id Id des gesuchten Eintrags
	 * @return Array Array, dass einen Eintrag repräsentiert, bzw. 
	 * 					wenn dieser nicht vorhanden ist, null.
	 */
	public static function getEntry($id){
		if(array_key_exists($id, self::$entries)){
			return self::$entries[$id];
		}else{
			return null;
		}
	}
  
  private function objectsIntoArray($arrObjData, $arrSkipIndices = array()){
    $arrData = array();
    
    // if input is object, convert into array
    if (is_object($arrObjData)) {
        $arrObjData = get_object_vars($arrObjData);
    }
    
    if (is_array($arrObjData)) {
        foreach ($arrObjData as $index => $value) {
            if (is_object($value) || is_array($value)) {
                $value = self::objectsIntoArray($value, $arrSkipIndices); // recursive call
            }
            if (in_array($index, $arrSkipIndices)) {
                continue;
            }
            $arrData[$index] = $value;
        }
    }
    return $arrData;
  }
}
?>