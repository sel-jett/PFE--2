<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class CourseVideo extends Model
{
    use HasFactory;
    protected $fillable = ['filename'];
    protected $appends = ['src'];

    public function course(): BelongsTo
    {
        return $this->belongsTo(Course::class);
    }
    public function getSrcAttribute()
    {
        return asset("storage/{$this->filename}");
    }
}
