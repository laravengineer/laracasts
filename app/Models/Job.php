<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Job extends Model
{
    use HasFactory;

    protected $table = 'job_listings';

    protected $fillable = [
        'title',
        'salary',
    ];

    /**
     * Summary of employer
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     * Para usar o metodo podemos fazer conforme exemplo abaixo:
     * $job = Job::first();
     * $job->employer; aqui tem o objeto employer correspondente ao employer_id
     * $job->employer->name; aqui tem o nome do employer
     */
    public function employer()
    {
        return $this->belongsTo(Employer::class);
    }

    public function tags()
    {
        return $this->belongsToMany(Tag::class, foreignPivotKey: 'job_listing_id');
    }
}
