<?php
class View_Product
{
    public function __construct()
    {

    }

    public function createForm()
    {
        $form = '<form action="" method="POST">';
        	$form .= '<div>';
	        	$form .= $this->creteTextField('pdata[product_name]', "Product Name: ");
	        $form .= '</div>';
	        $form .= '<div>';
	        	$form .= $this->creteTextField('pdata[sku]', "Sku: ");
	        $form .= '</div>';
	        $form .= '<div>';
	        	$form .= $this->creteTextField('pdata[price]', "Price: ");
	        $form .= '</div>';
	        $form .= '<div>';
	        	$form .= $this->creteTextField('pdata[manufacturer_cost]', "Cost: ");
	        $form .= '</div>';
	        $form .= '<div>';
	        	$form .= $this->creteSubmitBtn('Submit');
	        $form .= '</div>';
		$form .= '</form>';
		return $form;
    }

    public function creteTextField($name, $title, $value = '', $id = '')
    {
        return '<span> ' . $title . ' </span><input id="' . $id . '" type="text" name="' . $name . '" value="' . $value . '">';
    }

    public function creteSubmitBtn($title)
    {
        return '<input type="submit" name="submit" value="'.$title.'">';
    }

    public function toHtml()
    {
    	return $this->createForm();
    }
}
