<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\SoftDeletes;

class Integrante extends Model
{
    use HasFactory;
    use SoftDeletes;

    protected $fillable = ['email', 'nombre', 'telefono'];

    protected $hidden = ['created_at', 'updated_at', 'deleted_at'];

    public function lenguajes(): HasMany
    {
        return $this->hasMany(IntegranteLenguaje::class);
    }
}
