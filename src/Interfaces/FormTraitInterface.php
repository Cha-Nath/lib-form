<?php

namespace Nlib\Form\Interfaces;

use Nlib\Form\Classes\Form;

interface FormTraitInterface {

    /**
     *
     * @param string $formView
     * @return Form
     */
    public function Form(string $formView) : Form;

    /**
     *
     * @param Form $Form
     * @return self
     */
    public function setForm(Form $Form);

}