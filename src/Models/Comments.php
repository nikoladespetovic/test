<?php

namespace App\Models;

use App\Logic\Model;

class Comments extends Model {
    protected string $tableName = 'comments';

    public int $id;

    public string $name;

    public string $email;

    public string $text;

    public int $show_comment;

    public string $created_on;
}