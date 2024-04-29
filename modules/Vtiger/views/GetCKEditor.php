<?php
/*+***********************************************************************************
 * The contents of this file are subject to the vtiger CRM Public License Version 1.0
 * ("License"); You may not use this file except in compliance with the License
 * The Original Code is:  vtiger CRM Open Source
 * The Initial Developer of the Original Code is vtiger.
 * Portions created by vtiger are Copyright (C) vtiger.
 * All Rights Reserved.
 *************************************************************************************/

class Vtiger_GetCKEditor_View extends Vtiger_Index_View {
	function __construct() {
		parent::__construct();
		$this->exposeMethod('getCKEditor');
	}

	function checkPermission(Vtiger_Request $request) {
		return true;
	}

	function process(Vtiger_Request $request) {
		$mode = $request->getMode();
		if(!empty($mode)) {
			echo $this->invokeExposedMethod($mode, $request);
			return;
		}
	}

	public function getCKEditor(Vtiger_Request $request) {
		$moduleName = $request->getModule();
		$sourceModule = $request->get('sourceModule');
		$tabid = getTabid($sourceModule);
		global $adb;
		$query = $adb->pquery("SELECT * FROM vtiger_field WHERE fieldname LIKE '%cf_rte%' AND tabid = ?", array($tabid));
		$rows = $adb->num_rows($query);

		$ckEditorFields = array();
		for ($i=0; $i < $rows; $i++) { 
			$ckEditorFields[] = $adb->query_result($query, $i, 'fieldname');
		}
		
		$response = new Vtiger_Response();
		$response->setResult(array('ckEditorFields'=>$ckEditorFields));
		$response->emit();
	}

}
