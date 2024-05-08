<?php
/*+***********************************************************************************
 * The contents of this file are subject to the vtiger CRM Public License Version 1.0
 * ("License"); You may not use this file except in compliance with the License
 * The Original Code is:  vtiger CRM Open Source
 * The Initial Developer of the Original Code is vtiger.
 * Portions created by vtiger are Copyright (C) vtiger.
 * All Rights Reserved.
 *************************************************************************************/

class ServiceContracts_DownloadPDF_View extends Vtiger_Index_View {

	function process(Vtiger_Request $request) {
		$record = $request->get('record');

		$recordModel = Vtiger_Record_Model::getInstanceById($record);
		$label = $recordModel->get('label');
		$accountid = $recordModel->get('sc_related_to');
		$cf_rte867 = $recordModel->get('cf_rte867');
		$cf_rte869 = $recordModel->get('cf_rte869');
		$cf_rte871 = $recordModel->get('cf_rte871');
		$cf_rte873 = $recordModel->get('cf_rte873');
		$cf_rte875 = $recordModel->get('cf_rte875');
		$cf_rte877 = $recordModel->get('cf_rte877');
		$cf_rte879 = $recordModel->get('cf_rte879');
		$cf_rte881 = $recordModel->get('cf_rte881');
		$cf_rte883 = $recordModel->get('cf_rte883');
		$cf_rte885 = $recordModel->get('cf_rte885');
		$cf_rte887 = $recordModel->get('cf_rte887');

		if($accountid){
			$accountRecordModel = Vtiger_Record_Model::getInstanceById($accountid);
			$accountname = $accountRecordModel->get('accountname');
			$phone = $accountRecordModel->get('phone');
			$email1 = $accountRecordModel->get('email1');
			$bill_street = $accountRecordModel->get('bill_street');
			$bill_city = $accountRecordModel->get('bill_city');
			$bill_state = $accountRecordModel->get('bill_state');
			$bill_code = $accountRecordModel->get('bill_code');
			$bill_country = $accountRecordModel->get('bill_country');
			$bill_pobox = $accountRecordModel->get('bill_pobox');
		}

		$html = '<html>
					<span style="font-size: 20px;"><b>'.$label.'</b></span><br><br>

					<span>Version 1.0 </span><br>
					<span>Service Agreement Ref. No: SA-01</span><br><br>

					<span style="font-size: 15px;"><b>Service agreement between:</b></span><br>
					<span style="font-size: 13px;"><u><b>Client:</b></u></span><br>
					<span><b>'.$accountname.'</b></span><br>
					<span>'.$bill_street.' '.$bill_city.' '.$bill_state.'  '.$bill_code.' '.$bill_country.'  '.$bill_pobox.'</span><br>
					<span>Phone: '.$phone.'</span><br>
					<span>Email: '.$email1.'</span><br>

					<span style="font-size: 15px;"><u><b>Service Provider:</b></u></span><br>
					<span style="font-size: 14px;"><b>INZINC CONSULTING INDIA PRIVATE LIMITED</b></span><br>
					<span>3/9, 2nd Floor, 8th Cross, 1st Main, BSK II Stage, Padmanabhanagar, </span><br>
					<span>Bengaluru – 560070, Karnataka, India</span><br>
					<span>Phone: 9379917239</span><br>
					<span>Email: ic@inzinc.in </span>
					<br><br>

					<p>Hereinafter in this Service agreement, “you”, “your”, “yours”, “their” or “Client” or “Customer” refers to <b>'.$accountname.'</b>, an organization located at '.$bill_street.' '.$bill_city.' '.$bill_state.'  '.$bill_code.' '.$bill_country.'  '.$bill_pobox.' whereas “we”, “our”, “ours”, “Inzinc” refers to <b>Inzinc Consulting India Pvt. Ltd.</b> located at 3/9, 2nd Floor, 8th Cross, 1st Main, BSK II Stage, Padmanabhanagar, Bengaluru – 560070.</p><br>


					<span style="color: #7030a0; font-size: 20px;"><b>1	SERVICE TITLE</b></span><hr>
					'.$cf_rte867.'<br><br>

					<span style="color: #7030a0; font-size: 20px;"><b>2	CLIENT LOCATION/S UNDER SCOPE</b></span><hr><br>
					'.$cf_rte869.'<br><br>

					<span style="color: #7030a0; font-size: 20px;"><b>3	SCOPE OF WORK WITH TIMELINE</b></span><hr>
					'.$cf_rte871.'<br><br>

					<span style="color: #7030a0; font-size: 20px;"><b>4	CONSULTING TIMELINE</b></span><hr>
					'.$cf_rte873.'<br><br>

					<span style="color: #7030a0; font-size: 20px;"><b>5	RESPONSIBILITIES OF CLIENT</b></span><hr>
					'.$cf_rte875.'<br><br>

					<span style="color: #7030a0; font-size: 20px;"><b>6	OUR RESPONSIBILITIES </b></span><hr>
					'.$cf_rte877.'<br><br>

					<span style="color: #7030a0; font-size: 20px;"><b>7	EXTENT OF DOCUMENTATION</b></span><hr>
					'.$cf_rte879.'<br><br>

					<span style="color: #7030a0; font-size: 20px;"><b>8	EXTENT OF IMPLEMENTATION GUIDANCE</b></span><hr>
					'.$cf_rte881.'<br><br>

					<span style="color: #7030a0; font-size: 20px;"><b>9	CHANGE MANAGEMENT </b></span><hr>
					'.$cf_rte883.'<br><br>

					<span style="color: #7030a0; font-size: 20px;"><b>10	FORCE MAJEURE</b></span><hr>
					'.$cf_rte885.'<br><br>

					<span style="color: #7030a0; font-size: 20px;"><b>11	OTHER TERMS AND CONDITIONS</b></span><hr>
					'.$cf_rte887.'<br><br><br>

					<span>The following representatives belong to Inzinc Consulting India Pvt. Ltd. and M/s. '.$accountname.' have read, understood and agreed to all points in this service agreement and both parties abide by the same.</span><br><br>
					<span>For Inzinc Consulting India Pvt. Ltd., </span><br><br>
					<span>Name: </span><br>
					<span>Designation: </span><br><br><br>
						                                       
					<img src="http://crmnew.crm-doctor.com/signatureLogo.png"></img><br><br><br>

					<span>For '.$accountname.',</span><br><br>
					<span>Name: </span><br>
					<span>Designation:</span><br>


					_____________________________<br>
					<span>(Signature)</span><br>
				</html>';

		ob_start();
		include("libraries/mpdf/mpdf/mpdf.php");
        header("Content-type:application/pdf");
        header("Content-Disposition:attachment;filename='downloaded.pdf'");
		$mpdf = new mPDF('c','A4','','',15,15,15,15,0,0);
		$mpdf->SetHTMLHeader('Service Agreement<hr>');
		$mpdf->SetHTMLFooter('Service Agreement<hr>');
		$mpdf->WriteHTML(html_entity_decode($html));
		global $root_directory, $site_URL;
		ob_end_clean();
		$mpdf->Output($label.'.pdf','D');
	}
}
