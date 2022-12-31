<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class AuthModel extends Model

{
    use HasFactory;

    public function login(string $user): \Illuminate\Support\Collection
    {
        return DB::table('users')
            ->where('user', '=', $user)
            ->get();
    }
}
