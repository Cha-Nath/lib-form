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

if(!empty($label = $this->get('label'))) $label = '<label for="' . $id . '">' . $label . $asterix;

$class = !empty($class = $this->get('class')) ? $class = ' ' . $class : '';
$default_class = 'form-control';
$field_class = !empty($field_class = $this->get('field_class')) ? $field_class = $default_class . ' ' . $field_class : $default_class;

$html = '<div class="form-group' . $class . '">' . $label
    . '<input name="' . $name . '" type="' . $this->get('type') . '" class="' . $field_class . '" id="' . $id . '" ' . $required;

if(!empty($value = $this->get('value'))) $html .= ' value="' . $value . '"';
if(!empty($attribute)) $html .= ' ' . $attribute;
if(!empty($placeholder = $this->get('placeholder'))) $html .= ' placeholder="' . $placeholder . '"';

if(!empty($min = $this->get('min'))) $html .= ' min="' . $min . '"';
if(!empty($max = $this->get('max'))) $html .= ' max="' . $max . '"';
if(!empty($step = $this->get('step'))) $html .= ' step="' . $step . '"';

$html .= ' />';

// if(!empty($field['help'])) $html .= '<small id="' . $id . 'Help" class="text-muted ' . $field['help']['class'] . '">' . $field['help']['label'] . '</small>';

$html .= '</div>';

echo $html;