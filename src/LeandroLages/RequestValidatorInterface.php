<?php
namespace LeandroLages;

interface ServiceRequestValidatorInterface
{
    public function validate(ServiceRequestInterface $request);
}