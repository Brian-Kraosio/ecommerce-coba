<?php

namespace App\Traits;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

trait UuidIndex
{
    protected static function bootUuidIndex()
    {
        static::creating(function (Model $model) {
            $uuidStr = (string)Str::orderedUuid()->getHex();
            $model[$model->getKeyName()] = $uuidStr;
        });
    }

    public function getIncrementing()
    {
        return false;
    }

    public function getKeyType()
    {
        return "string";
    }
}
