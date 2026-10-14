<?php

namespace App\Models;

class Category
{
    public function __construct(
        private int $id,
        private string $name,
        private string $createdAt,
        private string $updatedAt
    ) {}

    public function id()
    {
        return $this->id;
    }
    public function name()
    {
        return $this->name;
    }
    public function createdAt()
    {
        return $this->createdAt;
    }
    public function updatedAt()
    {
        return $this->updatedAt;
    }
}
