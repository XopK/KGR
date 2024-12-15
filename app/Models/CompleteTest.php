<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class CompleteTest extends Model
{
    protected $table = 'complete_tests';

    protected $fillable = [
        'test_id',
        'user_id',
        'correct',
        'incorrect'
    ];

    public function user()
    {
        return $this->belongsTo(User::class, 'user_id');
    }

    public function test()
    {
        return $this->belongsTo(Test::class, 'test_id');
    }


}
