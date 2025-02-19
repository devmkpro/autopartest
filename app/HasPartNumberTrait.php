<?php

namespace App;

trait HasPartNumberTrait
{
    public static function bootHasCodeTrait()
    {
        static::creating(function ($model) {
            $model->part_number = $model->generatePartNumber();
        });
    }
}
