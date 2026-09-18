<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pet extends Model
{
    use HasFactory;

    protected $fillable = [
        'client_id',
        'name',
        'species',
        'breed',
        'birth_date',
        'gender',
        'color',
        'weight',
        'notes',
    ];

    /**
     * Una mascota pertenece a un único dueño (Client).
     */
    public function client()
    {
        return $this->belongsTo(Client::class);
    }

    /**
     * Historial de citas médicas o servicios de la mascota.
     */
    public function appointments()
    {
        return $this->hasMany(Appointment::class);
    }
}
