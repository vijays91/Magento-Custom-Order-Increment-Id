var jQuery = jQuery.noConflict();
document.observe("dom:loaded", function(){
	//** Order Date Onchange
	jQuery("#customorderid_tab_customorderid_order_order_date_use").change(function (evt) {
		if(jQuery("#customorderid_tab_customorderid_order_order_date_use").val() == 1)
			jQuery('#sortable1').append("<li id='a2' class='ui-state-default'>2</li>");
		else
			jQuery("#sortable1 > #a2").remove();
		salesOrderDrag();
	});
	
	//** Order Time Onchange	
	jQuery("#customorderid_tab_customorderid_order_order_time_use").change(function (evt) {
		if(jQuery("#customorderid_tab_customorderid_order_order_time_use").val() == 1)
			jQuery('#sortable1').append("<li id='a3' class='ui-state-default'>3</li>");
		else
			jQuery("#sortable1 > #a3").remove();
		salesOrderDrag();
	});
	
	//** Invoice Date Onchange
	jQuery("#customorderid_tab_customorderid_invoice_invoice_date_use").change(function (evt) {
		if(jQuery("#customorderid_tab_customorderid_invoice_invoice_date_use").val() == 1)
			jQuery('#sortable2').append("<li id='b2' class='ui-state-default'>2</li>");
		else
			jQuery("#sortable2 > #b2").remove();
		salesInvoiceDrag();
	});
	
	//** Invoice Time Onchange	
	jQuery("#customorderid_tab_customorderid_invoice_invoice_time_use").change(function (evt) {
		if(jQuery("#customorderid_tab_customorderid_invoice_invoice_time_use").val() == 1)
			jQuery('#sortable2').append("<li id='b3' class='ui-state-default'>3</li>");
		else
			jQuery("#sortable2 > #b3").remove();
		salesInvoiceDrag();
	});
	
	//** Shipment Date Onchange
	jQuery("#customorderid_tab_customorderid_shipping_shipping_date_use").change(function (evt) {
		if(jQuery("#customorderid_tab_customorderid_shipping_shipping_date_use").val() == 1)
			jQuery('#sortable3').append("<li id='c2' class='ui-state-default'>2</li>");
		else
			jQuery("#sortable3 > #c2").remove();
		salesShippingDrag();
	});
	
	//** Shipment Time Onchange	
	jQuery("#customorderid_tab_customorderid_shipping_shipping_time_use").change(function (evt) {
		if(jQuery("#customorderid_tab_customorderid_shipping_shipping_time_use").val() == 1)
			jQuery('#sortable3').append("<li id='c3' class='ui-state-default'>3</li>");
		else
			jQuery("#sortable3 > #c3").remove();
		salesShippingDrag();
	});	
	
	//** CreditMemo Date Onchange
	jQuery("#customorderid_tab_customorderid_creditmemo_creditmemo_date_use").change(function (evt) {
		if(jQuery("#customorderid_tab_customorderid_creditmemo_creditmemo_date_use").val() == 1)
			jQuery('#sortable4').append("<li id='d2' class='ui-state-default'>2</li>");
		else
			jQuery("#sortable4 > #d2").remove();
		salesCreditmemoDrag();
	});
	
	//** CreditMemo Time Onchange	
	jQuery("#customorderid_tab_customorderid_creditmemo_creditmemo_time_use").change(function (evt) {
		if(jQuery("#customorderid_tab_customorderid_creditmemo_creditmemo_time_use").val() == 1)
			jQuery('#sortable4').append("<li id='d3' class='ui-state-default'>3</li>");
		else
			jQuery("#sortable4 > #d3").remove();
		salesCreditmemoDrag();
	});
	
});

//** Java-script On-load Function
window.onload = function() {
	var orderPage = 1; //document.getElementById('customorderid_tab_customorderid_setting_customorderid_active');
	if (orderPage != null)
	{
		var orderRearr = jQuery("#customorderid_tab_customorderid_order_order_content_rearrange").val();
		var res = orderRearr.split(",");
		jQuery('#sortable1').html('');
		for (i = 0; i < res.length; i++) {
			if(res[i] == 1)
				jQuery('#sortable1').append("<li id='a1' class='ui-state-default'>1</li>");
			if(res[i] == 2)
				jQuery('#sortable1').append("<li id='a2' class='ui-state-default'>2</li>");
			if(res[i] == 3)
				jQuery('#sortable1').append("<li id='a3' class='ui-state-default'>3</li>");
			if(res[i] == 4)
				jQuery('#sortable1').append("<li id='a4' class='ui-state-default'>4</li>");
		}

		var orderRearr = jQuery("#customorderid_tab_customorderid_invoice_invoice_content_rearrange").val();
		var res = orderRearr.split(",");
		jQuery('#sortable2').html('');
		for (i = 0; i < res.length; i++) {
			if(res[i] == 1)
				jQuery('#sortable2').append("<li id='b1' class='ui-state-default'>1</li>");
			if(res[i] == 2)
				jQuery('#sortable2').append("<li id='b2' class='ui-state-default'>2</li>");
			if(res[i] == 3)
				jQuery('#sortable2').append("<li id='b3' class='ui-state-default'>3</li>");
			if(res[i] == 4)
				jQuery('#sortable2').append("<li id='b4' class='ui-state-default'>4</li>");
		}
		
		var orderRearr = jQuery("#customorderid_tab_customorderid_shipping_shipping_content_rearrange").val();
		var res = orderRearr.split(",");
		jQuery('#sortable3').html('');
		for (i = 0; i < res.length; i++) {
			if(res[i] == 1)
				jQuery('#sortable3').append("<li id='c1' class='ui-state-default'>1</li>");
			if(res[i] == 2)
				jQuery('#sortable3').append("<li id='c2' class='ui-state-default'>2</li>");
			if(res[i] == 3)
				jQuery('#sortable3').append("<li id='c3' class='ui-state-default'>3</li>");
			if(res[i] == 4)
				jQuery('#sortable3').append("<li id='c4' class='ui-state-default'>4</li>");
		}	
		var orderRearr = jQuery("#customorderid_tab_customorderid_creditmemo_creditmemo_content_rearrange").val();
		var res = orderRearr.split(",");
		jQuery('#sortable4').html('');
		for (i = 0; i < res.length; i++) {
			if(res[i] == 1)
				jQuery('#sortable4').append("<li id='d1' class='ui-state-default'>1</li>");
			if(res[i] == 2)
				jQuery('#sortable4').append("<li id='d2' class='ui-state-default'>2</li>");
			if(res[i] == 3)
				jQuery('#sortable4').append("<li id='d3' class='ui-state-default'>3</li>");
			if(res[i] == 4)
				jQuery('#sortable4').append("<li id='d4' class='ui-state-default'>4</li>");
		}
	}

}

//** Order Rearrange
function salesOrderDrag()
{
	var order = "";
	jQuery( "#sortable1 li" ).each(function( index ) {
	  order += jQuery( this ).text() +",";
	});
	order = order.slice(0,-1);
	jQuery("#customorderid_tab_customorderid_order_order_content_rearrange").val(order);
}

//** Invoice Rearrange 
function salesInvoiceDrag()
{
	var order = "";
	jQuery( "#sortable2 li" ).each(function( index ) {
	  order += jQuery( this ).text() +",";
	});
	order = order.slice(0,-1);
	jQuery("#customorderid_tab_customorderid_invoice_invoice_content_rearrange").val(order);
}

//** Shipping Rearrange 
function salesShippingDrag()
{
	var order = "";
	jQuery( "#sortable3 li" ).each(function( index ) {
	  order += jQuery( this ).text() +",";
	});
	order = order.slice(0,-1);
	jQuery("#customorderid_tab_customorderid_shipping_shipping_content_rearrange").val(order);
}

//** CreditMemo Rearrange 
function salesCreditmemoDrag()
{
	var order = "";
	jQuery( "#sortable4 li" ).each(function( index ) {
	  order += jQuery( this ).text() +",";
	});
	order = order.slice(0,-1);
	jQuery("#customorderid_tab_customorderid_creditmemo_creditmemo_content_rearrange").val(order);
}

jQuery(function() {
	jQuery( "tr#row_customorderid_tab_customorderid_order_order_content_rearrange td.value" ).append(drag1);
	jQuery( "#sortable1" ).sortable({
		start:function(){
		},
		stop: function(event, ui) {
			salesOrderDrag();
		},
		change: function(event, ui) {
		}
	});
	jQuery( "#sortable1" ).disableSelection();
	
	jQuery( "tr#row_customorderid_tab_customorderid_invoice_invoice_content_rearrange td.value" ).append(drag2);
	jQuery( "#sortable2" ).sortable({
		start:function(){
		},
		stop: function(event, ui) {
			salesInvoiceDrag();
		},
		change: function(event, ui) {
		}
	});
	jQuery( "#sortable2" ).disableSelection();
	
	//** 
	jQuery( "tr#row_customorderid_tab_customorderid_shipping_shipping_content_rearrange td.value" ).append(drag3);
	jQuery( "#sortable3" ).sortable({
		start:function(){
		},
		stop: function(event, ui) {
			salesShippingDrag();
		},
		change: function(event, ui) {
		}
	});
	jQuery( "#sortable3" ).disableSelection();
	
	jQuery( "tr#row_customorderid_tab_customorderid_creditmemo_creditmemo_content_rearrange td.value" ).append(drag4);
	jQuery( "#sortable4" ).sortable({
		start:function(){
		},
		stop: function(event, ui) {
			salesCreditmemoDrag();
		},
		change: function(event, ui) {
		}
	});
	jQuery( "#sortable4" ).disableSelection();
});

var drag1  = "<ul id='sortable1'><li id='a1' class='ui-state-default'>1</li><li id='a2' class='ui-state-default'>2</li><li id='a3' class='ui-state-default'>3</li><li id='a4' class='ui-state-default'>4</li></ul><p class='note'><span>Drag and Drop to rearrange the order</span></p>";

var drag2  = "<ul id='sortable2'><li id='b1'class='ui-state-default'><span class='ui-icon ui-icon-arrowthick-2-n-s'></span>1</li><li id='b2' class='ui-state-default'><span class='ui-icon ui-icon-arrowthick-2-n-s'></span>2</li><li id='b3' class='ui-state-default'><span class='ui-icon ui-icon-arrowthick-2-n-s'></span>3</li><li id='b4' class='ui-state-default'><span class='ui-icon ui-icon-arrowthick-2-n-s'></span>4</li></ul><p class='note'><span>Drag and Drop to rearrange the order</span></p>";

var drag3  = "<ul id='sortable3'><li id='c1' class='ui-state-default'><span class='ui-icon ui-icon-arrowthick-2-n-s'></span>1</li><li id='c2' class='ui-state-default'><span class='ui-icon ui-icon-arrowthick-2-n-s'></span>2</li><li id='c3' class='ui-state-default'><span class='ui-icon ui-icon-arrowthick-2-n-s'></span>3</li><li id='c4' class='ui-state-default'><span class='ui-icon ui-icon-arrowthick-2-n-s'></span>4</li></ul><p class='note'><span>Drag and Drop to rearrange the order</span></p>";

var drag4  = "<ul id='sortable4'><li id='d1' class='ui-state-default'><span class='ui-icon ui-icon-arrowthick-2-n-s'></span>1</li><li id='d2' class='ui-state-default'><span class='ui-icon ui-icon-arrowthick-2-n-s'></span>2</li><li id='d3' class='ui-state-default'><span class='ui-icon ui-icon-arrowthick-2-n-s'></span>3</li><li id='d4' class='ui-state-default'><span class='ui-icon ui-icon-arrowthick-2-n-s'></span>4</li></ul><p class='note'><span>Drag and Drop to rearrange the order</span></p>";
