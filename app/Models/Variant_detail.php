<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Variant_detail extends Model
{
    use HasFactory;
    protected $primaryKey = 'variant_detail_id';
    protected $fillable = [
        'variant_id',
        'voptions',
        'voption_names',
        'voption_values',
    ];
}
