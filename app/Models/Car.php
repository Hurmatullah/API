<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Car extends Model
{
    use HasFactory;

    public function employee(): BelongsTo
    {
        return $this->belongsTo(Employee::class, "employees_id");
    }

    public function driver(): BelongsTo
    {
        return $this->belongsTo(Driver::class);
    }
}
