<?php

namespace Nlib\Form\Interfaces;

interface FormInterface {

    /**
     *
     * @param array $parameters
     * @return string
     */
    public function input(array $parameters) : string;

    /**
     *
     * @param array $parameters
     * @return string
     */
    public function select(array $parameters) : string;

    /**
     *
     * @param array $parameters
     * @return string
     */
    public function textarea(array $parameters) : string;

    /**
     *
     * @param array $parameters
     * @return string
     */
    public function checkbox(array $parameters) : string;

    /**
     *
     * @param array $parameters
     * @return string
     */
    public function radio(array $parameters) : string;

    /**
     *
     * @return integer
     */
    public function getVersion() : int;

    /**
     *
     * @return array
     */
    public function getDefaults() : array;

    /**
     *
     * @return string
     */
    public function getPathField() : string;
    
    /**
     *
     * @param integer $version
     * @return self
     */
    public function setVersion(int $version);
}