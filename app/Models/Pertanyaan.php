<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pertanyaan extends Model
{
    use HasFactory;

    protected $primaryKey = 'id';

    protected $guarded = ['id'];

    protected $hidden = [
        'remember_token'
    ];

    public function jawaban(){
        return $this->belongsTo(Jawaban::class);
    }
}

