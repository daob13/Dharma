<?php
/**
 * Standard controller layout.
 * 
 * @package DharmaCore
 */
class CCIndex implements IController {

  /**
    * Implementing interface IController. All controllers must have an index action.
   */
  public function Index() {  
    global $dh;
    $dh->data['title'] = "The Index Controller";
    $dh->data['main'] = "<h1>The Index Controller</h1>";
  }
}