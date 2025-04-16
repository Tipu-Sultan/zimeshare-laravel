<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Laravel\Scout\Searchable;

class Trust extends Model
{
    public $guarded = [];
    use HasFactory,Searchable;
    protected $table='trust';

    public function toSearchableArray(): array
    {
        $array = $this->toArray();
         
        return $array;
    }
}
