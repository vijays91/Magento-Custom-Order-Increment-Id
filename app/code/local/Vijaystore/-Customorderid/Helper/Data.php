<?php
class Vijaystore_Customorderid_Helper_Data extends Mage_Core_Helper_Abstract
{
	const XML_PATH_CUSTOM_ORDER_ID_ENABLE  =  'customorderid_tab/customorderid_setting/customorderid_active';
	
	const XML_PATH_CUSTOM_ORDER_ENABLE		=  'customorderid_tab/customorderid_order/order_enable';
	const XML_PATH_CUSTOM_ORDER_TEXT		=  'customorderid_tab/customorderid_order/order_text';
	const XML_PATH_CUSTOM_ORDER_NUMBER   	=  'customorderid_tab/customorderid_order/order_number';
	const XML_PATH_CUSTOM_ORDER_DATEUSE  	=  'customorderid_tab/customorderid_order/order_date_use';
	const XML_PATH_CUSTOM_ORDER_DATE	 	=  'customorderid_tab/customorderid_order/order_date';
	const XML_PATH_CUSTOM_ORDER_TIMEUSE		=  'customorderid_tab/customorderid_order/order_time_use';
	const XML_PATH_CUSTOM_ORDER_TIME		=  'customorderid_tab/customorderid_order/order_time';
	const XML_PATH_CUSTOM_ORDER_INCREMENT 	=  'customorderid_tab/customorderid_order/order_increment';
	const XML_PATH_CUSTOM_ORDER_PADDING		=  'customorderid_tab/customorderid_order/order_padding';
	const XML_PATH_CUSTOM_ORDER_PADDINGCHAR	=  'customorderid_tab/customorderid_order/order_padding_char';
	const XML_PATH_CUSTOM_ORDER_REARRANGE	=  'customorderid_tab/customorderid_order/order_content_rearrange';
	const XML_PATH_CUSTOM_ORDER_SPLITTING	=  'customorderid_tab/customorderid_order/order_splitting';
	
	const XML_PATH_CUSTOM_INVOICE_ENABLE	=  'customorderid_tab/customorderid_invoice/invoice_enable';
	const XML_PATH_CUSTOM_INVOICE_TEXT  	=  'customorderid_tab/customorderid_invoice/invoice_text';
	const XML_PATH_CUSTOM_INVOICE_NUMBER   	=  'customorderid_tab/customorderid_invoice/invoice_number';
	const XML_PATH_CUSTOM_INVOICE_DATEUSE  	=  'customorderid_tab/customorderid_invoice/invoice_date_use';
	const XML_PATH_CUSTOM_INVOICE_DATE	 	=  'customorderid_tab/customorderid_invoice/invoice_date';
	const XML_PATH_CUSTOM_INVOICE_TIMEUSE	=  'customorderid_tab/customorderid_invoice/invoice_time_use';
	const XML_PATH_CUSTOM_INVOICE_TIME		=  'customorderid_tab/customorderid_invoice/invoice_time';
	const XML_PATH_CUSTOM_INVOICE_INCREMENT =  'customorderid_tab/customorderid_invoice/invoice_increment';
	const XML_PATH_CUSTOM_INVOICE_PADDING	=  'customorderid_tab/customorderid_invoice/invoice_padding';
	const XML_PATH_CUSTOM_INVOICE_PADDINGCHAR = 'customorderid_tab/customorderid_invoice/invoice_padding_char';
	const XML_PATH_CUSTOM_INVOICE_REARRANGE	=  'customorderid_tab/customorderid_invoice/invoice_content_rearrange';
	const XML_PATH_CUSTOM_INVOICE_SPLITTING	=  'customorderid_tab/customorderid_invoice/invoice_splitting';

	const XML_PATH_CUSTOM_SHIPPING_ENABLE	=  'customorderid_tab/customorderid_shipping/shipping_enable';
	const XML_PATH_CUSTOM_SHIPPING_TEXT  	=  'customorderid_tab/customorderid_shipping/shipping_text';
	const XML_PATH_CUSTOM_SHIPPING_NUMBER   =  'customorderid_tab/customorderid_shipping/shipping_number';
	const XML_PATH_CUSTOM_SHIPPING_DATEUSE  =  'customorderid_tab/customorderid_shipping/shipping_date_use';
	const XML_PATH_CUSTOM_SHIPPING_DATE	 	=  'customorderid_tab/customorderid_shipping/shipping_date';
	const XML_PATH_CUSTOM_SHIPPING_TIMEUSE	=  'customorderid_tab/customorderid_shipping/shipping_time_use';
	const XML_PATH_CUSTOM_SHIPPING_TIME		=  'customorderid_tab/customorderid_shipping/shipping_time';
	const XML_PATH_CUSTOM_SHIPPING_INCREMENT=  'customorderid_tab/customorderid_shipping/shipping_increment';
	const XML_PATH_CUSTOM_SHIPPING_PADDING	=  'customorderid_tab/customorderid_shipping/shipping_padding';
	const XML_PATH_CUSTOM_SHIPPING_PADDINGCHAR = 'customorderid_tab/customorderid_shipping/shipping_padding_char';
	const XML_PATH_CUSTOM_SHIPPING_REARRANGE=  'customorderid_tab/customorderid_shipping/shipping_content_rearrange';
	const XML_PATH_CUSTOM_SHIPPING_SPLITTING=  'customorderid_tab/customorderid_shipping/shipping_splitting';
	
const XML_PATH_CUSTOM_CREDITMEMO_ENABLE  =  'customorderid_tab/customorderid_creditmemo/creditmemo_enable';
const XML_PATH_CUSTOM_CREDITMEMO_TEXT   =  'customorderid_tab/customorderid_creditmemo/creditmemo_text';
const XML_PATH_CUSTOM_CREDITMEMO_NUMBER =  'customorderid_tab/customorderid_creditmemo/creditmemo_number';
const XML_PATH_CUSTOM_CREDITMEMO_DATEUSE=  'customorderid_tab/customorderid_creditmemo/creditmemo_date_use';
const XML_PATH_CUSTOM_CREDITMEMO_DATE	=  'customorderid_tab/customorderid_creditmemo/creditmemo_date';
const XML_PATH_CUSTOM_CREDITMEMO_TIMEUSE=  'customorderid_tab/customorderid_creditmemo/creditmemo_time_use';
const XML_PATH_CUSTOM_CREDITMEMO_TIME	=  'customorderid_tab/customorderid_creditmemo/creditmemo_time';
const XML_PATH_CUSTOM_CREDITMEMO_INCREMENT=  'customorderid_tab/customorderid_creditmemo/creditmemo_increment';
const XML_PATH_CUSTOM_CREDITMEMO_PADDING=  'customorderid_tab/customorderid_creditmemo/creditmemo_padding';
const XML_PATH_CUSTOM_CREDITMEMO_PADDINGCHAR = 'customorderid_tab/customorderid_creditmemo/creditmemo_padding_char';
const XML_PATH_CUSTOM_CREDITMEMO_REARRANGE='customorderid_tab/customorderid_creditmemo/creditmemo_content_rearrange';
const XML_PATH_CUSTOM_CREDITMEMO_SPLITTING=  'customorderid_tab/customorderid_creditmemo/creditmemo_splitting';
	
	public function conf($code, $store = null) {
        return Mage::getStoreConfig($code, $store);
    }
	//** General Tab
	public function custom_order_id_active()
	{
		return $this->conf(self::XML_PATH_CUSTOM_ORDER_ID_ENABLE, $store);		
	}
	
	//** Order Tab
	public function custom_order_enable()
	{
		return $this->conf(self::XML_PATH_CUSTOM_ORDER_ENABLE, $store);		
	}

	public function custom_order_text()
	{
		return $this->conf(self::XML_PATH_CUSTOM_ORDER_TEXT, $store);		
	}
	
	public function custom_order_number()
	{
		return $this->conf(self::XML_PATH_CUSTOM_ORDER_NUMBER, $store);		
	}
	
	public function custom_order_dateuse()
	{
		return $this->conf(self::XML_PATH_CUSTOM_ORDER_DATEUSE, $store);		
	}
	
	public function custom_order_date()
	{
		return $this->conf(self::XML_PATH_CUSTOM_ORDER_DATE, $store);		
	}
	
	public function custom_order_timeuse()
	{
		return $this->conf(self::XML_PATH_CUSTOM_ORDER_TIMEUSE, $store);		
	}
	
	public function custom_order_time()
	{
		return $this->conf(self::XML_PATH_CUSTOM_ORDER_TIME, $store);		
	}

	public function custom_order_increment()
	{
		return $this->conf(self::XML_PATH_CUSTOM_ORDER_INCREMENT, $store);		
	}

	public function custom_order_padding()
	{
		return $this->conf(self::XML_PATH_CUSTOM_ORDER_PADDING, $store);		
	}

	public function custom_order_paddingchar()
	{
		return $this->conf(self::XML_PATH_CUSTOM_ORDER_PADDINGCHAR, $store);		
	}

	public function custom_order_rearrange()
	{
		return $this->conf(self::XML_PATH_CUSTOM_ORDER_REARRANGE, $store);		
	}
	
	public function custom_order_splitting()
	{
		return $this->conf(self::XML_PATH_CUSTOM_ORDER_SPLITTING, $store);		
	}
	
	//** Invoice Tab
	public function custom_invoice_enable()
	{
		return $this->conf(self::XML_PATH_CUSTOM_INVOICE_ENABLE, $store);		
	}
	
	public function custom_invoice_text()
	{
		return $this->conf(self::XML_PATH_CUSTOM_INVOICE_TEXT, $store);		
	}
	
	public function custom_invoice_number()
	{
		return $this->conf(self::XML_PATH_CUSTOM_INVOICE_NUMBER, $store);		
	}
	
	public function custom_invoice_dateuse()
	{
		return $this->conf(self::XML_PATH_CUSTOM_INVOICE_DATEUSE, $store);		
	}
	
	public function custom_invoice_date()
	{
		return $this->conf(self::XML_PATH_CUSTOM_INVOICE_DATE, $store);		
	}
	
	public function custom_invoice_timeuse()
	{
		return $this->conf(self::XML_PATH_CUSTOM_INVOICE_TIMEUSE, $store);		
	}
	
	public function custom_invoice_time()
	{
		return $this->conf(self::XML_PATH_CUSTOM_INVOICE_TIME, $store);		
	}

	public function custom_invoice_increment()
	{
		return $this->conf(self::XML_PATH_CUSTOM_INVOICE_INCREMENT, $store);		
	}

	public function custom_invoice_padding()
	{
		return $this->conf(self::XML_PATH_CUSTOM_INVOICE_PADDING, $store);		
	}

	public function custom_invoice_paddingchar()
	{
		return $this->conf(self::XML_PATH_CUSTOM_INVOICE_PADDINGCHAR, $store);		
	}

	public function custom_invoice_rearrange()
	{
		return $this->conf(self::XML_PATH_CUSTOM_INVOICE_REARRANGE, $store);		
	}
	
	public function custom_invoice_splitting()
	{
		return $this->conf(self::XML_PATH_CUSTOM_INVOICE_SPLITTING, $store);		
	}
	
	//** Shipping Tab 	
	public function custom_shipping_enable()
	{
		return $this->conf(self::XML_PATH_CUSTOM_SHIPPING_ENABLE, $store);		
	}
	
	public function custom_shipping_text()
	{
		return $this->conf(self::XML_PATH_CUSTOM_SHIPPING_TEXT, $store);		
	}
	
	public function custom_shipping_number()
	{
		return $this->conf(self::XML_PATH_CUSTOM_SHIPPING_NUMBER, $store);		
	}
	
	public function custom_shipping_dateuse()
	{
		return $this->conf(self::XML_PATH_CUSTOM_SHIPPING_DATEUSE, $store);		
	}
	
	public function custom_shipping_date()
	{
		return $this->conf(self::XML_PATH_CUSTOM_SHIPPING_DATE, $store);		
	}
	
	public function custom_shipping_timeuse()
	{
		return $this->conf(self::XML_PATH_CUSTOM_SHIPPING_TIMEUSE, $store);		
	}
	
	public function custom_shipping_time()
	{
		return $this->conf(self::XML_PATH_CUSTOM_SHIPPING_TIME, $store);		
	}

	public function custom_shipping_increment()
	{
		return $this->conf(self::XML_PATH_CUSTOM_SHIPPING_INCREMENT, $store);		
	}

	public function custom_shipping_padding()
	{
		return $this->conf(self::XML_PATH_CUSTOM_SHIPPING_PADDING, $store);		
	}

	public function custom_shipping_paddingchar()
	{
		return $this->conf(self::XML_PATH_CUSTOM_SHIPPING_PADDINGCHAR, $store);		
	}

	public function custom_shipping_rearrange()
	{
		return $this->conf(self::XML_PATH_CUSTOM_SHIPPING_REARRANGE, $store);		
	}
	
	public function custom_shipping_splitting()
	{
		return $this->conf(self::XML_PATH_CUSTOM_SHIPPING_SPLITTING, $store);		
	}	
	
	//** Credit-Memo Tab
	public function custom_creditmemo_enable()
	{
		return $this->conf(self::XML_PATH_CUSTOM_CREDITMEMO_ENABLE, $store);		
	}
	
	public function custom_creditmemo_text()
	{
		return $this->conf(self::XML_PATH_CUSTOM_CREDITMEMO_TEXT, $store);		
	}
	
	public function custom_creditmemo_number()
	{
		return $this->conf(self::XML_PATH_CUSTOM_CREDITMEMO_NUMBER, $store);		
	}
	
	public function custom_creditmemo_dateuse()
	{
		return $this->conf(self::XML_PATH_CUSTOM_CREDITMEMO_DATEUSE, $store);		
	}
	
	public function custom_creditmemo_date()
	{
		return $this->conf(self::XML_PATH_CUSTOM_CREDITMEMO_DATE, $store);		
	}
	
	public function custom_creditmemo_timeuse()
	{
		return $this->conf(self::XML_PATH_CUSTOM_CREDITMEMO_TIMEUSE, $store);		
	}
	
	public function custom_creditmemo_time()
	{
		return $this->conf(self::XML_PATH_CUSTOM_CREDITMEMO_TIME, $store);		
	}

	public function custom_creditmemo_increment()
	{
		return $this->conf(self::XML_PATH_CUSTOM_CREDITMEMO_INCREMENT, $store);		
	}

	public function custom_creditmemo_padding()
	{
		return $this->conf(self::XML_PATH_CUSTOM_CREDITMEMO_PADDING, $store);		
	}

	public function custom_creditmemo_paddingchar()
	{
		return $this->conf(self::XML_PATH_CUSTOM_CREDITMEMO_PADDINGCHAR, $store);		
	}

	public function custom_creditmemo_rearrange()
	{
		return $this->conf(self::XML_PATH_CUSTOM_CREDITMEMO_REARRANGE, $store);		
	}
	
	public function custom_creditmemo_splitting()
	{
		return $this->conf(self::XML_PATH_CUSTOM_CREDITMEMO_SPLITTING, $store);		
	}
}

?>