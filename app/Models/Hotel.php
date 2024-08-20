<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Hotel extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'nom',
        'adresse',
        'ville',
        'etat',
        'pays',
        'code_postal',
        'telephone',
        'email',
        'description',
        'note',
        'equipements',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'equipements' => 'array',
    ];

    public function chambres(): HasMany
    {
        return $this->hasMany(Chambre::class);
    }

    public function reservations(): HasMany
    {
        return $this->hasMany(Reservation::class);
    }

    public function image_hotels(): HasMany
    {
        return $this->hasMany(ImageHotel::class);
    }
}
