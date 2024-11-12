<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasOne;

class Pokemon extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'type',
        'powerPoints',
        'caminhoImage',
        'owner_id'
    ];

    public function owner()
    {
          return $this->belongsTo(Owner::class, 'owner_id');
   }
}
