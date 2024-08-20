<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Chambre extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'hotel_id',
        'numero_de_chambre',
        'type_de_chambre',
        'prix_par_nuit',
        'capacite',
        'est_disponible',
        'description',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'est_disponible' => 'boolean',
    ];

    public function reservations(): HasMany
    {
        return $this->hasMany(Reservation::class);
    }

    public function ÉquipementChambres(): HasMany
    {
        return $this->hasMany(ÉquipementChambre::class);
    }

    public function images(): HasMany
    {
        return $this->hasMany(Image::class);
    }

    public function hotel(): BelongsTo
    {
        return $this->belongsTo(Hotel::class);
    }

    public function imageChambres(): HasMany
    {
        return $this->hasMany(ImageChambre::class);
    }
}
