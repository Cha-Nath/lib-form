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
$field_class = !empty($field_class = $this->get('field_class')) ? $field_class = $default_class . ' ' . $field_class : $default_class;

$html = '<div class="form-group' . $class . '">' . $label
    . '<textarea name="' . $field['name'] . '" class="' . $field_class . '" id="' . $id . '" ' . $required;

if(empty($value = $this->get('value')) || is_numeric($value)) $value = '';
if(!empty($attribute)) $html .= ' ' . $attribute;
if(!empty($placeholder = $this->get('placeholder'))) $html .= ' placeholder="' . $placeholder . '"';

$html .= '>' . $value . '</textarea></div';

echo $html;