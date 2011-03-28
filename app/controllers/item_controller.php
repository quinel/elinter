<?php
/*
 * Created on 27/03/2011
 *
 * To change the template for this generated file go to
 * Window - Preferences - PHPeclipse - PHP - Code Templates
 */
class ItemController extends AppController {

	var $name = 'Item';
 	
 	var $helpers = array('html','form');

 	
 	function index(){
 		$this->set('items', $this->Item->find('all'));
 	}
 }
?>
