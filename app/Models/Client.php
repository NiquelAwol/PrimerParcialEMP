<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Client extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'document_id',
        'phone',
        'email',
        'address',
        'status',
    ];

    /**
     * Un cliente (dueño) tiene muchas mascotas (pets).
     */
    public function pets()
    {
        return $this->hasMany(Pet::class);
    }

    /**
     * Un cliente puede agendar múltiples citas.
     */
    public function appointments()
    {
        return $this->hasMany(Appointment::class);
    }

    /**
     * Un cliente puede registrar múltiples compras / facturas.
     */
    public function sales()
    {
        return $this->hasMany(Sale::class);
    }
}
