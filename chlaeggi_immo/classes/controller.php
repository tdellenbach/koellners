<?php
class Controller{

  private $request = null;
  private $template = '';
  private $view = null;

  /**
   * Konstruktor, erstellet den Controller.
   *
   * @param Array $request Array aus $_GET & $_POST.
   */
  public function __construct($request){
    $this->view = new View();
    $this->request = $request;
    $this->template = !empty($request['view']) ? $request['view'] : 'default';
  }

  /**
   * Methode zum anzeigen des Contents.
   *
   * @return String Content der Applikation.
   */
  public function display(){
    $innerView = new View();
    if (isset($_POST['myusername']) && isset($_POST['mypassword'){
      LoginController::initialise($_POST['myusername'], $_POST['mypassword']);
      if (LoginController::check()){
        $this->template='check_login';
      }else{
        $this->template='login';
      }
    }
    switch($this->template){
      case 'bauland':
        ModelMap::initialise('./data/Bauland');
        $entries = ModelMap::getEntries();
        $innerView->setTemplate('map');
        $innerView->assign('menu', 'bauland');
        $innerView->assign('entries', $entries);
        break;
      case 'kontakt':
        $innerView->setTemplate('kontakt');
        break;
      case 'liegenschaften':
        ModelMap::initialise('./data/Liegenschaften');
        $entries = ModelMap::getEntries();
        $innerView->setTemplate('map');
        $innerView->assign('menu', 'liegenschaften');
        $innerView->assign('entries', $entries);      
        break;
      case 'list':
        ModelList::initialise($_GET['menu'], $_GET['region']);
        $entries = ModelList::getEntries($_GET['menu']);
        $innerView->setTemplate('list');
        $innerView->assign('entries', $entries);
        break;
      case 'login':
        $innerView->setTemplate('login');
        break;
      case 'check_login':
        $innerView->setTemplate('check_login');
        $innerView->assign('mun', $_POST['myusername']);
        $innerView->assign('mpd', $_POST['mypassword']);
        break;
      case 'default':
      default:  
        $innerView->setTemplate('default');
        $innerView->assign('title', "NEWS");
    }
    $this->view->setTemplate('chlaeggi_immo');
    $this->view->assign('chlaeggi_content', $innerView->loadTemplate());
    return $this->view->loadTemplate();
  }
}
?>