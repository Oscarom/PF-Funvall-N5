<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Item extends Model
{
    use HasFactory;
    protected $items ='items';
    protected $primaryKet = 'id';
    protected $fillable = ['name','note','category_id','image'];
}
