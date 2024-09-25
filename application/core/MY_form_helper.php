<?php
 if ( ! function_exists('form_hidden'))
{
    function form_hidden($name, $value = '', $id = false)
    {
        if ( ! is_array($name))
        {
            return '<input type="hidden" id="'.($id ? $id : $name).'" name="'.$name.'" value="'.form_prep($value).'" />';
        }

        $form = '';

        foreach ($name as $name => $value)
        {
            $form .= "\n";
            $form .= '<input type="hidden"  id="'.($id ? $id : $name).'" name="'.$name.'" value="'.form_prep($value).'" />';
        }

        return $form;
    }
}