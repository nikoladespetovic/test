<?php

namespace App\Models;

use App\Logic\Model;

class Products extends Model {
    protected string $tableName = 'products';

    public int $id;

    public string $title;

    public string $description;

    public string $image;

    public string $created_on;
}