<?php 

$name = $this->get('name');
$id = 'ID' . $name;

if(!empty($attributes = $this->get('attributes')))
    foreach($attributes as $key => $value)
        $attribute .= ' ' . $key . '="' . $value . '"';

if(!empty($required = $this->get('required'))) :
    $asterix = ' *';
    $required = 'required';
endif;

if(!empty($label = $this->get('label'))) $label = '<label class="form-check-label" for="' . $id . '">' . $label . $asterix;

$class = !empty($class = $this->get('class')) ? $class = ' ' . $class : '';
$default_class = 'form-check-input';
$field_class = !empty($field_class = $this->get('field_class')) ? $field_class = $default_class . ' ' . $field_class : $default_class;

$html = '<div class="form-check form-check-inline' . $class . '">'
    . '<input name="' . $name . '" type="radio" class="' . $field_class . '" id="' . $id . '" ' . $required;

if(!empty($value = $this->get('value'))) $html .= ' value="' . $value . '"';
if(!empty($attribute)) $html .= ' ' . $attribute;
if(!empty($this->get('checked'))) $html .= ' checked';

$html .= ' />' . $label . '</div>';

echo $html;