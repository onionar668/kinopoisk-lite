<?php

namespace App\Services;

use App\Kernel\Database\DatabaseInterface;
use App\Models\Category;

class CategoryService
{
    public function __construct(
        private DatabaseInterface $db
    )
    {
    }

    public function getAllCategory(): array
    {
        $categories = $this->db->get('categories');

        $categories = array_map(function ($item) {
            return new Category(
                id: $item['id'],
                name: $item['name'],
                createdAt: $item['create_at'],
                updatedAt: $item['updated_at'],
            );
        }, $categories);

        return $categories;
    }
}