<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\SoftDeletes;

class IntegranteLenguaje extends Model
{
    use HasFactory;
    use SoftDeletes;

    protected $fillable = ['integrante_id', 'lenguaje_id', 'nivel'];

    protected $hidden = ['created_at', 'updated_at', 'deleted_at'];

    public function integrante(): BelongsTo
    {
        return $this->belongsTo(Integrante::class);
    }

    public function lenguaje(): BelongsTo
    {
        return $this->belongsTo(Lenguaje::class);
    }
}
