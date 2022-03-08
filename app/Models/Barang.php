<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Barang extends Model
{
    use HasFactory;
    protected $table = 'barang';

    /**
     * The "type" of the auto-incrementing ID.
     *
     * @var string
     */
    protected $keyType = 'integer';

    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';
    /**
     * @var array
     */
    protected $fillable = ['nama', 'harga','deskripsi','created_at','updated_at', ];
}
