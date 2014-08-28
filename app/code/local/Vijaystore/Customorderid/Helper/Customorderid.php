<?php
class Vijaystore_Customorderid_Helper_Customorderid extends Mage_Core_Helper_Abstract
{
	//** Sales Order 
	public function order($id=null)
	{

		if($id == null)	{
			$id = Mage::Helper('customorderid/data')->custom_order_number();
			$order_increment = Mage::Helper('customorderid/data')->custom_order_increment();
			$id = $id - $order_increment;
		}
			
		$text = Mage::Helper('customorderid/data')->custom_order_text();
		
		$dateUse = Mage::Helper('customorderid/data')->custom_order_dateuse();
		if($dateUse) {
			$getDate = Mage::Helper('customorderid/data')->custom_order_date();
			$date = date($getDate);
		}
		
		$timeUse = Mage::Helper('customorderid/data')->custom_order_timeuse();
		if($timeUse) {
			$getTime = Mage::Helper('customorderid/data')->custom_order_time();
			$time = date($getTime);
		}
		
		$padLength 	= Mage::Helper('customorderid/data')->custom_order_padding();
		$padChar	= Mage::Helper('customorderid/data')->custom_order_paddingchar();
		
		$number = str_pad((string)$id, $padLength, $padChar, STR_PAD_LEFT);
		$rearrange = Mage::Helper('customorderid/data')->custom_order_rearrange();
		$split = Mage::Helper('customorderid/data')->custom_order_splitting();
		
		$rearrangeData = explode(",", $rearrange); 
		
		foreach($rearrangeData as $val)
		{
			if($val == 1)
				$order[] = $text;
			else if($val == 2)
				$order[] = $date;
			else if($val == 3)
				$order[] = $time;
			else if($val == 4)
				$order[] = $number;
		}
		
		$result = implode($split, $order);
		
		return $result;
	}
	
	//** Invoice Id
	public function invoice($id=null)
	{
		if($id == null)	{
			$id = Mage::Helper('customorderid/data')->custom_invoice_number();
			$invoice_increment = Mage::Helper('customorderid/data')->custom_invoice_increment();
			$id = $id - $invoice_increment;
		}
		
		$text = Mage::Helper('customorderid/data')->custom_invoice_text();
		
		$dateUse = Mage::Helper('customorderid/data')->custom_invoice_dateuse();
		if($dateUse) {
			$getDate = Mage::Helper('customorderid/data')->custom_invoice_date();
			$date = date($getDate);
		}
		
		$timeUse = Mage::Helper('customorderid/data')->custom_invoice_timeuse();
		if($timeUse) {
			$getTime = Mage::Helper('customorderid/data')->custom_invoice_time();
			$time = date($getTime);
		}
		
		$padLength 	= Mage::Helper('customorderid/data')->custom_invoice_padding();
		$padChar	= Mage::Helper('customorderid/data')->custom_invoice_paddingchar();
		
		$number = str_pad((string)$id, $padLength, $padChar, STR_PAD_LEFT);
		$rearrange = Mage::Helper('customorderid/data')->custom_invoice_rearrange();
		$split = Mage::Helper('customorderid/data')->custom_invoice_splitting();
		
		$rearrangeData = explode(",", $rearrange); 
		
		foreach($rearrangeData as $val)
		{
			if($val == 1)
				$order[] = $text;
			else if($val == 2)
				$order[] = $date;
			else if($val == 3)
				$order[] = $time;
			else if($val == 4)
				$order[] = $number;
		}
		
		$result = implode($split, $order);
		
		return $result;
	}
	
	//** Shipment Id
	public function shipment($id=null)
	{
		if($id == null)	{
			$id = Mage::Helper('customorderid/data')->custom_shipping_number();
			$shipping_increment = Mage::Helper('customorderid/data')->custom_shipping_increment();
			$id = $id - $shipping_increment;
		}
		
		$text = Mage::Helper('customorderid/data')->custom_shipping_text();
		
		$dateUse = Mage::Helper('customorderid/data')->custom_shipping_dateuse();
		if($dateUse) {
			$getDate = Mage::Helper('customorderid/data')->custom_shipping_date();
			$date = date($getDate);
		}
		
		$timeUse = Mage::Helper('customorderid/data')->custom_shipping_timeuse();
		if($timeUse) {
			$getTime = Mage::Helper('customorderid/data')->custom_shipping_time();
			$time = date($getTime);
		}
		
		$padLength 	= Mage::Helper('customorderid/data')->custom_shipping_padding();
		$padChar	= Mage::Helper('customorderid/data')->custom_shipping_paddingchar();
		
		$number = str_pad((string)$id, $padLength, $padChar, STR_PAD_LEFT);
		$rearrange = Mage::Helper('customorderid/data')->custom_shipping_rearrange();
		$split = Mage::Helper('customorderid/data')->custom_shipping_splitting();
		
		$rearrangeData = explode(",", $rearrange); 
		
		foreach($rearrangeData as $val)
		{
			if($val == 1)
				$order[] = $text;
			else if($val == 2)
				$order[] = $date;
			else if($val == 3)
				$order[] = $time;
			else if($val == 4)
				$order[] = $number;
		}
		
		$result = implode($split, $order);
		
		return $result;
	}
	
	//** Creditmemo Id
	public function creditmemo($id)
	{
		if($id == null)	{
			$id = Mage::Helper('customorderid/data')->custom_creditmemo_number();
			$creditmemo_increment = Mage::Helper('customorderid/data')->custom_creditmemo_increment();
			$id = $id - $creditmemo_increment;
		}
		
		$text = Mage::Helper('customorderid/data')->custom_creditmemo_text();
		
		$dateUse = Mage::Helper('customorderid/data')->custom_creditmemo_dateuse();
		if($dateUse) {
			$getDate = Mage::Helper('customorderid/data')->custom_creditmemo_date();
			$date = date($getDate);
		}
		
		$timeUse = Mage::Helper('customorderid/data')->custom_creditmemo_timeuse();
		if($timeUse) {
			$getTime = Mage::Helper('customorderid/data')->custom_creditmemo_time();
			$time = date($getTime);
		}
		
		$padLength 	= Mage::Helper('customorderid/data')->custom_creditmemo_padding();
		$padChar	= Mage::Helper('customorderid/data')->custom_creditmemo_paddingchar();
		
		$number = str_pad((string)$id, $padLength, $padChar, STR_PAD_LEFT);
		$rearrange = Mage::Helper('customorderid/data')->custom_creditmemo_rearrange();
		$split = Mage::Helper('customorderid/data')->custom_creditmemo_splitting();
		
		$rearrangeData = explode(",", $rearrange); 
		
		foreach($rearrangeData as $val)
		{
			if($val == 1)
				$order[] = $text;
			else if($val == 2)
				$order[] = $date;
			else if($val == 3)
				$order[] = $time;
			else if($val == 4)
				$order[] = $number;
		}
		
		$result = implode($split, $order);		
		return $result;
	}
	
	//** Get Sales Order Last Id
	public function orderLastId($OrderId)
	{
		$split = Mage::Helper('customorderid/data')->custom_order_splitting();
		$format = Mage::Helper('customorderid/data')->custom_order_rearrange();
		$Text = Mage::Helper('customorderid/data')->custom_order_text();		
		$getDate = Mage::Helper('customorderid/data')->custom_order_date();
		$Date = date($getDate);
		$getTime = Mage::Helper('customorderid/data')->custom_order_time();
		$Hour = date($getTime);
	return $this->getLastId($OrderId, $format, $Text, $Date, $Hour, $split);
	}

	//** Get Sales Invoice Last Id
	public function invoiceLastId($OrderId)
	{
		$split = Mage::Helper('customorderid/data')->custom_invoice_splitting();
		$format = Mage::Helper('customorderid/data')->custom_invoice_rearrange();
		$Text = Mage::Helper('customorderid/data')->custom_invoice_text();		
		$getDate = Mage::Helper('customorderid/data')->custom_invoice_date();
		$Date = date($getDate);
		$getTime = Mage::Helper('customorderid/data')->custom_invoice_time();
		$Hour = date($getTime);
	return $this->getLastId($OrderId, $format, $Text, $Date, $Hour, $split);
	}

	//** Get Sales Shipment Last Id 
	public function shipmentLastId($OrderId)
	{
		$split = Mage::Helper('customorderid/data')->custom_shipping_splitting();
		$format = Mage::Helper('customorderid/data')->custom_shipping_rearrange();
		$Text = Mage::Helper('customorderid/data')->custom_shipping_text();		
		$getDate = Mage::Helper('customorderid/data')->custom_shipping_date();
		$Date = date($getDate);
		$getTime = Mage::Helper('customorderid/data')->custom_shipping_time();
		$Hour = date($getTime);
	return $this->getLastId($OrderId, $format, $Text, $Date, $Hour, $split);
	}

	//** Get Sales CreditMemo Last Id 
	public function creditmemoLastId($OrderId)
	{
		$split = Mage::Helper('customorderid/data')->custom_creditmemo_splitting();
		$format = Mage::Helper('customorderid/data')->custom_creditmemo_rearrange();
		$Text = Mage::Helper('customorderid/data')->custom_creditmemo_text();		
		$getDate = Mage::Helper('customorderid/data')->custom_creditmemo_date();
		$Date = date($getDate);
		$getTime = Mage::Helper('customorderid/data')->custom_creditmemo_time();
		$Hour = date($getTime);
	return $this->getLastId($OrderId, $format, $Text, $Date, $Hour, $split);
	}
	
	public function getLastId($OrderId, $format, $Text, $Date, $Hour, $split)
	{
		$Textlen = strlen($Text);
		$Datelen = strlen($Date);
		$Hourlen = strlen($Hour);

		$format = str_replace( ',', '', $format);
		$data = explode("4", $format);
		$str1 = (string) $data[0];
		$str2 = (string) $data[1];
		
		$str1Length = strlen($str1);
		$str2Length = strlen($str2);

		if($str1Length > 0) {
			for($i=0;$i<$str1Length;$i++)
			{
				if($str1[$i] == 1)
					 $OrderId = substr($OrderId, $Textlen);
				else if($str1[$i] == 2)
					 $OrderId = substr($OrderId, $Datelen);
				else if($str1[$i] == 3)
					 $OrderId = substr($OrderId, $Hourlen);
					 
				if($split) {
					$OrderId = substr($OrderId, 1);
				}
			}
		}

		if($str2Length > 0) {
			for($i=0;$i<$str2Length;$i++)
			{
				if($str2[$i] == 1)
					 $OrderId = substr($OrderId, 0, "-".$Textlen);
				else if($str2[$i] == 2)
					 $OrderId = substr($OrderId, 0, "-".$Datelen);
				else if($str2[$i] == 3)
					 $OrderId = substr($OrderId, 0, "-".$Hourlen);
					 
				if($split) {					 
					$OrderId = substr($OrderId, 0, -1);
				}
			}
		}
		//** Remove Padding characters
		$OrderId = filter_var($OrderId, FILTER_SANITIZE_NUMBER_INT);
	return $OrderId;	
	}
}