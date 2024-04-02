<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;


class CompanyUser extends Model
{
    use HasFactory,SoftDeletes;

    protected $table = 'company_user';

    protected $fillable = [
        'user_id',
        'company_id',
        'salary',
        'joining_date',
        'emp_no',
    ];
    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function company()
    {
        return $this->belongsTo(Company::class);
    }

}
