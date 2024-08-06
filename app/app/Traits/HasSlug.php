<?php

declare(strict_types=1);

namespace App\Traits;

use Illuminate\Database\Eloquent\Model;

trait HasSlug
{
    protected static function boot(): void
    {
        parent::boot();

        static::creating(static function (Model $model) {
            $model->slug ??= str($model->title ?? '')->slug();
        });
    }
}
