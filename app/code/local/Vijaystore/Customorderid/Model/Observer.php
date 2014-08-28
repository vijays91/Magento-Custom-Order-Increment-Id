<?php
class Vijaystore_Customorderid_Model_Observer extends Mage_Core_Model_Abstract
{
	const SALES_ORDER			= "order";
	const SALES_INVOICE			= "invoice";
	const SALES_SHIPMENT		= "shipment";
	const SALES_CREDITMEMO		= "creditmemo";
	const SALES_DEFAULT_ID		= "100000001";
	
	public function setOrderId()
	{	
		$active = Mage::Helper('customorderid/data')->custom_order_id_active();
		$OrderEntityType=Mage::getModel('eav/entity_type')->load(self::SALES_ORDER,'entity_type_code')->getData();
		$invoiceEntityType	= Mage::getModel('eav/entity_type')->load(self::SALES_INVOICE, 'entity_type_code')->getData();
		$shipmentEntityType = Mage::getModel('eav/entity_type')->load(self::SALES_SHIPMENT, 'entity_type_code')->getData();
		$creditmemoEntityType = Mage::getModel('eav/entity_type')->load(self::SALES_CREDITMEMO, 'entity_type_code')->getData();	
		
		$orderEnable = Mage::Helper('customorderid/data')->custom_order_enable();
		$invoiceEnable = Mage::Helper('customorderid/data')->custom_invoice_enable();
		$shippingEnable = Mage::Helper('customorderid/data')->custom_shipping_enable();
		$creditmemoEnable = Mage::Helper('customorderid/data')->custom_creditmemo_enable();

		
		if($active)
		{
			//** Sales Order New Id
			if($orderEnable) {
				$orderIdNew = Mage::Helper('customorderid/customorderid')->order();
				$this->newOrderIdSet($orderIdNew, $OrderEntityType['entity_type_id']);
			} else {
				$this->newOrderIdSet(self::SALES_DEFAULT_ID, $OrderEntityType['entity_type_id']);
			}

			//** Invoice New Order Id
			if($invoiceEnable) {
				$invoiceIdNew = Mage::Helper('customorderid/customorderid')->invoice();
				$this->newOrderIdSet($invoiceIdNew, $invoiceEntityType['entity_type_id']);
			} else {
				$this->newOrderIdSet(self::SALES_DEFAULT_ID, $invoiceEntityType['entity_type_id']);
			}
			
			//** Shipment New Order Id
			if($shippingEnable) {
				$shipmentNew = Mage::Helper('customorderid/customorderid')->shipment();
				$this->newOrderIdSet($shipmentNew, $shipmentEntityType['entity_type_id']);
			}else{
				$this->newOrderIdSet(self::SALES_DEFAULT_ID, $shipmentEntityType['entity_type_id']);
			}
			
			//** CreditMemo New Order Id
			if($creditmemoEnable) {
				$creditMemoIdNew 	= Mage::Helper('customorderid/customorderid')->creditmemo();
				$this->newOrderIdSet($creditMemoIdNew, $creditmemoEntityType['entity_type_id']);
			} else {
				$this->newOrderIdSet(self::SALES_DEFAULT_ID, $creditmemoEntityType['entity_type_id']);
			}
	
			// $updateNewOrderId = Mage::getModel('eav/entity_store')->load($OrderEntityType['entity_type_id'], 'entity_type_id')->addData(array('increment_last_id'=> $orderIdNew))->save();			
			// $OrderEntityStore = Mage::getModel('eav/entity_store')->load($invoiceEntityType['entity_type_id'], 'entity_type_id')->addData(array('increment_last_id'=> $invoiceIdNew))->save();
			// $OrderEntityStore = Mage::getModel('eav/entity_store')->load($shipmentEntityType['entity_type_id'], 'entity_type_id')->addData(array('increment_last_id'=> $shipmentNew))->save();
			// $OrderEntityStore = Mage::getModel('eav/entity_store')->load($creditmemoEntityType['entity_type_id'], 'entity_type_id')->addData(array('increment_last_id'=> $creditMemoIdNew))->save();			
		}
		else
		{
			$this->newOrderIdSet(self::SALES_DEFAULT_ID, $OrderEntityType['entity_type_id']);
			$this->newOrderIdSet(self::SALES_DEFAULT_ID, $invoiceEntityType['entity_type_id']);
			$this->newOrderIdSet(self::SALES_DEFAULT_ID, $shipmentEntityType['entity_type_id']);
			$this->newOrderIdSet(self::SALES_DEFAULT_ID, $creditmemoEntityType['entity_type_id']);
		}
	}
	
	
	public function newOrderIdSet($orderIdNewId, $entityTypeId)
	{
		//$code = Mage::getSingleton('adminhtml/config_data')->getStore();
		$storeId = 1;//Mage::app()->getStore()->getId();		
		$resource = Mage::getSingleton('core/resource');
		$readConnection = $resource->getConnection('core_read');
		$query = 'SELECT * FROM ' . $resource->getTableName('eav/entity_store');
		$query .=' WHERE store_id = '. $storeId .' AND entity_type_id=' . $entityTypeId ."";
		$results = $readConnection->fetchAll($query);		
		if(count($results))
		{
			foreach($results as $key => $val)
			{
				$updateNewOrderId = Mage::getModel('eav/entity_store')->load($val['entity_store_id'])->addData(array('increment_last_id'=> $orderIdNewId))->save();
			}
		}
	}	
}
