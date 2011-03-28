<?php
/*
 * Created on 27/03/2011
 *
 * To change the template for this generated file go to
 * Window - Preferences - PHPeclipse - PHP - Code Templates
 */
 
 class PagesController extends AppController{
 	var $name = 'Pages';
 	
 	var $helpers = array('Html', 'Session');

	var $uses = array();
 	
 	function display() {

		$this->redirect('/home');

 	}
 }
 
?>


