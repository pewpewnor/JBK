<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Data extends Model
{
    use HasFactory;
    protected $table = 'data';

    protected $fillable = [
        'itemName', 'description', 'image', 'location', 'shopName', 'type', 'price',
        'engine', 'power', 'Torsi', 'kilometer', 'color'
    ];

    public function category() {
        return $this->belongsTo(Category::class);
    }
}
