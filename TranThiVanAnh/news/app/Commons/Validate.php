<?php


interface Validate{
    public function validate();
    public function getErrors();
    public function modelState();
}

?>