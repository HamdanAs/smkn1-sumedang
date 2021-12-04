<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Family extends Model
{
    use HasFactory;

    protected $guarded = (['id']);

    //bikin relasi tabel dari tabel family (field:role_family_id) ke tabel family_roles
    public function family_role()
    {
        return $this->hasOne(FamilyRole::class);
    }
}
