<?php
class Vijaystore_Customorderid_Model_Dropdown_Split
{
	public function toOptionArray()
	{
		return array(
			array(
				'value' => '',
				'label' => 'Empty',
			),
			array(
				'value' => '-',
				'label' => '-',
			),
			array(
				'value' => '/',
				'label' => '/',
			),
			array(
				'value' => ':',
				'label' => ':',
			),		
		);
	}
}
