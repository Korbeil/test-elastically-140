<?php

namespace App\Model;

class Document
{
    public function __construct(
        public string $name,
        public int $age,
    ) {
    }
}
