<?php

	Class extension_jquery_date_picker extends Extension{

		public function about(){
			return array(
				'name' => 'jQuery Date Time Picker',
				'version' => '1.0',
				'release-date' => '2010-10-14',
				'author' => array(
					'name' => 'Jesse Sutherland',
					'email' => 'jessesutherland06@gmail.com'
				)
			);
		}
		
		public function getSubscribedDelegates() {
			return array(
				array(
					'page' => '/backend/',
					'delegate' => 'InitaliseAdminPageHead',
					'callback' => 'initializeAdmin'
				)
			);
		}
		
		public function initializeAdmin($context) {
			$page = $context['parent']->Page;
			$assets_path = '/extensions/jquery_datetime_picker/assets/';
			
			# load jQuery and autocomplete JS
			$page->addScriptToHead(URL . $assets_path . 'jquery-ui-1.8.5.custom.min.js', 430);
			$page->addScriptToHead(URL . $assets_path . 'jquery-ui-timepicker-addon.js', 431);
			$page->addScriptToHead(URL . $assets_path . 'initialise.js', 432);
			
			# load autocomplete styles
			$page->addStylesheetToHead(URL . $assets_path . 'jquery-ui-1.8.5.symphony.css', 'screen', 110);
			$page->addStylesheetToHead(URL . $assets_path . 'jquery-ui-1.8.5.timepicker.css', 'screen', 111);
			$page->addStylesheetToHead(URL . $assets_path . 'jquery-ui-1.8.5.symphony-overrides.css', 'screen', 112);
		}
	}