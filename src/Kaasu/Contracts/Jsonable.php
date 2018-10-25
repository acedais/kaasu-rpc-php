<?php

namespace Kaasu\Contracts;

interface Jsonable
{
    /**
     * Convert the object to its JSON representation.
     *
     * @return string
     */
    public function toJson();
}