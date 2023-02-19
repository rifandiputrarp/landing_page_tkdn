<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Kyslik\ColumnSortable\Sortable;

class Company extends Model
{
    use Sortable;
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'corporate_body',
        'name',
        'email',
        'password',
        'business_capital',
        "npwp",
        "person_in_charge",
        "phone_in_charge",
        "npwp_file_path",
        "iui_file_path",
        "others_file_path",
        "note",
        "status",
        "approved_by",
    ];

    public $sortable = [
        'id',
        'name',
        'business_capital',
        'email',
        'status',
    ];

    public function productRequest()
    {
        return $this->hasMany(ProductRequest::class);
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
