<?php
/**
 * Klasse für den Datenzugriff
 */
class ModelMap{

	//Einträge eines Blogs als zweidimensionales Array
  private static $entries = array();

  /**
   * Konstruktor, erstellet den Controller.
   */
  public function initialise($dir){

    $region = scandir($dir);
    $mapcoordinats ="";
    
    for ($counter1=2; $counter1 < count($region); $counter1++){
      if (substr($region[$counter1], -4, 1)!='.'){
      	switch (strtolower($region[$counter1])) {
      	    case "hallau":
          		$mapcoordinates = self::hallau(); break;
      	    case "ruedlingen":
          		$mapcoordinates = self::ruedlingen(); break;
      	    case "trasadingen":
          		$mapcoordinates = self::trasadingen(); break;
      	    case "wilchingen":
          		$mapcoordinates = self::wilchingen(); break;
      	    case "guntmadingen":
          		$mapcoordinates = self::guntmadingen(); break;
      	    case "siblingen":
          		$mapcoordinates = self::siblingen(); break;
      	    case "beringen":
          		$mapcoordinates = self::beringen(); break;
      	    case "beggingen":
          		$mapcoordinates = self::beggingen(); break;
      	    case "loehningen":
          		$mapcoordinates = self::loehningen(); break;
      	    case "neunkirch":
          		$mapcoordinates = self::neunkirch(); break;
      	    case "schleitheim":
          		$mapcoordinates = self::schleitheim(); break;
      	    case "gaechlingen":
          		$mapcoordinates = self::gaechlingen(); break;
      	    case "oberhallau":
          		$mapcoordinates = self::oberhallau(); break;
      	    case "buchberg":
          		$mapcoordinates = self::buchberg(); break;
      	}
        array_push(self::$entries, array("region"=>$region[$counter1], "mapcoordinates"=>$mapcoordinates));
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
  
  private function hallau (){
	  return "64,264,116,253,144,255,168,271,232,244,224,233,194,206,163,160,124,177,104,180,76,196,54,199,19,221,28,234";
  }
  
  private function ruedlingen (){
    return "489,534,437,520,438,511,404,503,448,488,466,476,505,485,562,459,550,482,516,492,505,514,510,528";
  }
  
  private function trasadingen (){
    return "46,305,22,288,30,276,60,268,70,272,118,297,120,318,148,337,115,330,103,316,76,304";
  }
  
  private function wilchingen (){
    return "277,352,261,370,234,345,214,344,198,371,198,332,190,327,172,336,148,332,126,317,124,296,74,267,117,256,140,258,169,276,197,266,241,284,280,307,336,302,350,308,386,356";
  }
  
  private function guntmadingen (){
    return "473,290,442,300,419,287,430,276,419,268,414,247,441,245,458,245,470,238,484,246,490,294";
  }
  
  private function siblingen (){
    return "295,155,362,140,374,131,396,125,425,142,395,185,379,210,336,211,310,186";
  }
  
  private function beringen (){
    return "499,290,500,259,492,242,476,228,482,212,469,185,442,174,419,165,440,146,467,158,519,157,584,240,520,252,516,281";
  }
  
  private function beggingen (){
    return "472,24,438,13,361,29,344,54,323,60,332,70,364,78,379,88,397,90,432,96,483,89";
  }
  
  private function loehningen (){
    return "466,229,457,242,404,242,376,241,362,216,386,215,414,169,463,193,472,210";
  }
  
  private function neunkirch (){
    return "249,240,201,260,246,280,283,298,328,297,372,306,396,317,422,300,396,248,370,247,352,216,307,226";
  }
  
  private function schleitheim (){
    return "316,38,282,49,252,44,202,85,173,114,166,140,243,144,304,114,352,124,424,116,424,100,392,98,357,86,311,73,310,58,319,48,338,45";
  }
  
  private function gaechlingen (){
    return "239,160,280,137,310,124,359,135,322,141,287,152,305,189,331,214,266,228,251,216,256,176";
  }
  
  private function oberhallau (){
    return "166,151,232,148,233,163,246,178,244,216,258,229,231,235,197,206";
  }
  
  private function buchberg (){
    return "402,506,433,514,431,523,482,536,478,554,460,588,448,591,439,582,437,570,416,548,424,539,399,534,410,525,391,520,392,506";
  }

}
?>