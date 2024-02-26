<?php

class Catalog_Block_Admin_Category{
     public function __construct(){

     }

     public function createform(){
        $form = '<form action="" method="POST">';
            $form .= '<div>';
                $form .= $this->creteTextField('cdata[category_id]',"Category_id:");
            $form.='</div>';  
            $form .= '<div>';
                $form .= $this->creteTextField('cdata[category_Name]',"Category_Name:");
            $form.='</div>';  
            $form .= '<div>';
                $form .= $this->creteTextField('cdata[status]',"Status:");
            $form.='</div>';  
            $form .= '<div>';
            $form .= $this->creteSubmitBtn('Submit');
            $form .='</div>';
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