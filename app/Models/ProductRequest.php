<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Kyslik\ColumnSortable\Sortable;

class ProductRequest extends Model
{
    use HasFactory, SoftDeletes;
    use Sortable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'id',
        'name',
        'product_specification',
        'product_type',
        'attachment_file_path',
        'sertificate_file_path',
        'note',
        'request_number',
        'request_status',
        'request_date',
        'approved_by',
        'company_id',
        'user_id',
    ];

    public $sortable = [
        'id',
        'name',
        'request_number',
        'created_at',
        'request_status',
    ];

    public function company()
    {
        return $this->belongsTo(Company::class);
    }

    public function user()
    {
        return $this->hasMany(User::class);
    }
}
