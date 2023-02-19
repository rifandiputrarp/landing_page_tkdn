<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class StudentInfo extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'nim',
        'prodi',
        'faculty',
        'class_year',
        'graduate_year',
        'phone'
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
