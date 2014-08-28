<?php
class Vijaystore_Customorderid_Model_Entity_Increment_Numeric extends Mage_Eav_Model_Entity_Increment_Numeric
{
    public function getNextId()
    {			
		$last = $this->getLastId();
		$active = Mage::Helper('customorderid/data')->custom_order_id_active();
		if($active) {
			$next = self::nextOrderId($last);
		}
		else {
			$next = self::defaultOrderIncrementId($last);
			// if (strpos($last, $this->getPrefix()) === 0) {
				// $last = (int)substr($last, strlen($this->getPrefix()));
			// } else {
				// $last = (int)$last;
			// }
			// $next = $last + 1;
		}
		return $this->format($next);
    }
	
	public function format($id)
	{
		$active = Mage::Helper('customorderid/data')->custom_order_id_active();
		
		if($active) {
			$result = self::orderFormatId($id);
		}
		else {
			$result = $this->getPrefix();
			$result.= str_pad((string)$id, $this->getPadLength(), $this->getPadChar(), STR_PAD_LEFT);
		}
		
		return $result;
	}
	
	public function typeCode()
	{	
		$entityTypeId = $this->getData('entity_type_id');
		$entityType = Mage::getModel('eav/entity_type')->load($entityTypeId)->getData();		
		return $entityType['entity_type_code'];
	}
	
	public function nextOrderId($last)
	{
		$order_increment 		= Mage::Helper('customorderid/data')->custom_order_increment();
		$invoice_increment		= Mage::Helper('customorderid/data')->custom_invoice_increment();
		$shipping_increment		= Mage::Helper('customorderid/data')->custom_shipping_increment();
		$creditmemo_increment 	= Mage::Helper('customorderid/data')->custom_creditmemo_increment();
		
		$orderEnable = Mage::Helper('customorderid/data')->custom_order_enable();
		$invoiceEnable = Mage::Helper('customorderid/data')->custom_invoice_enable();
		$shippingEnable = Mage::Helper('customorderid/data')->custom_shipping_enable();
		$creditmemoEnable = Mage::Helper('customorderid/data')->custom_creditmemo_enable();
		
		$entityTypeCode = self::typeCode();		
		
		if($entityTypeCode == "order")
		{
			if($orderEnable)
			{
				$last = Mage::Helper('customorderid/customorderid')->orderLastId($last);
				$next = $last + $order_increment;
			}
			else
				$next = self::defaultOrderIncrementId($last);
		}			
		else if($entityTypeCode== "invoice")
		{
			if($invoiceEnable)
			{
				$last = Mage::Helper('customorderid/customorderid')->invoiceLastId($last);
				$next = $last + $invoice_increment;
			}
			else
				$next = self::defaultOrderIncrementId($last);
		}
		else if($entityTypeCode == "shipment")
		{
			if($shippingEnable)
			{
				$last = Mage::Helper('customorderid/customorderid')->shipmentLastId($last);
				$next = $last + $shipping_increment;
			}
			else
				$next = self::defaultOrderIncrementId($last);
		}
		else if($entityTypeCode == "creditmemo") 
		{
			if($creditmemoEnable)
			{
				$last = Mage::Helper('customorderid/customorderid')->creditmemoLastId($last);
				$next = $last + $creditmemo_increment;
			}
			else
				$next = self::defaultOrderIncrementId($last);
		}
	return $next;
	}
	
	public function orderFormatId($incrementId)
	{
		$entityTypeCode = self::typeCode();	
		
		$orderEnable = Mage::Helper('customorderid/data')->custom_order_enable();
		$invoiceEnable = Mage::Helper('customorderid/data')->custom_invoice_enable();
		$shippingEnable = Mage::Helper('customorderid/data')->custom_shipping_enable();
		$creditmemoEnable = Mage::Helper('customorderid/data')->custom_creditmemo_enable();
		
		if($entityTypeCode == "order") {
			$orderFormat = ($orderEnable) ? Mage::Helper('customorderid/customorderid')->order($incrementId) : self::defaultOrderFormat($incrementId);
		}
		else if($entityTypeCode== "invoice") {
			$orderFormat = ($invoiceEnable) ? Mage::Helper('customorderid/customorderid')->invoice($incrementId) : self::defaultOrderFormat($incrementId);
		}
		else if($entityTypeCode == "shipment") {
			$orderFormat = ($shippingEnable) ? Mage::Helper('customorderid/customorderid')->shipment($incrementId) : self::defaultOrderFormat($incrementId);
		}
		else if($entityTypeCode == "creditmemo") {
			$orderFormat = ($creditmemoEnable) ? Mage::Helper('customorderid/customorderid')->creditmemo($incrementId) : self::defaultOrderFormat($incrementId);
		}
	return $orderFormat;
	}
	
	public function defaultOrderIncrementId($last) {
		if (strpos($last, $this->getPrefix()) === 0) {
			$last = (int)substr($last, strlen($this->getPrefix()));
		} else {
			$last = (int)$last;
		}
		$next = $last + 1;
		return $next;
	}
	
	public function defaultOrderFormat($id) {
		$result = $this->getPrefix();
		$result.= str_pad((string)$id, $this->getPadLength(), $this->getPadChar(), STR_PAD_LEFT);
		return $result;
	}
}
