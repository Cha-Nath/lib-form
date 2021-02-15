<?php

$asterix = $attribute = '';
$name = $this->get('name');
$id = !empty($id = $this->get('id')) ? $id : 'ID' . $name;

if(!empty($attributes = $this->get('attributes')))
    foreach($attributes as $key => $value)
        $attribute .= ' ' . $key . '="' . $value . '"';

if(!empty($required = $this->get('required'))) :
    $asterix = ' *';
    $required = 'required';
endif;

if(!empty($label = $this->get('label'))) $label = '<label for="' . $id . '">' . $label . $asterix . '</label>';

$class = !empty($class = $this->get('class')) ? $class = ' ' . $class : '';
$default_class = 'form-control';

if(!empty($error = $this->get('error'))) :
    $default_class .= ' is-invalid';
    $error = '<div class="invalid-feedback">' . $error . '</div>';
endif;

$field_class = !empty($field_class = $this->get('field_class')) ? $field_class = $default_class . ' ' . $field_class : $default_class;

$html = '<div class="form-group' . $class . '">' . $label
    . '<select name="' . $name . '" id="' . $id . '" class="' . $field_class . '"' . $required . $attribute . '>';

if(is_array($options = $this->get('options')))
    foreach($options as $value => $label) :
        $selected = $value == $this->get('selected_option') ? ' selected' : '';
        $html .= '<option value="' . $value . '"' . $selected . '>' . $label . '</option>';
    endforeach;

$html .= '</select>' . $error . '</div>';

echo $html;