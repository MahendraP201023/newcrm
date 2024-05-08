{*+**********************************************************************************
* The contents of this file are subject to the vtiger CRM Public License Version 1.1
* ("License"); You may not use this file except in compliance with the License
* The Original Code is: vtiger CRM Open Source
* The Initial Developer of the Original Code is vtiger.
* Portions created by vtiger are Copyright (C) vtiger.
* All Rights Reserved.
************************************************************************************}
{* modules/Vtiger/views/MassActionAjax.php *}

<div id="2Dattachment" class='modal-xs modal-dialog' style="width: 803px;">
    <div class = "modal-content">
        {assign var=TITLE value="{vtranslate('Preview PDF Template', $MODULE)}"}
        {include file="ModalHeader.tpl"|vtemplate_path:$MODULE TITLE=$TITLE}

        <iframe src="{$filepath}" title="" width="800" height="400"></iframe>
    </div>
    <div>
    <div class="modal-footer">
        <center>
            <button class="btn btn-success" id="downloadServiceContracts"><strong>Download File</strong></button>
            <a class="cancelLink" type="reset" data-dismiss="modal">{vtranslate('LBL_CANCEL', $MODULE)}</a>
        </center>
    </div>
</div>
</div>
