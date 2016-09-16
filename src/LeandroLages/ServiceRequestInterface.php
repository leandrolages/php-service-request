<?php

namespace LeandroLages;

interface ServiceRequestInterface
{
    public function toArray();
    public function toObject();
    public function toJson();
}