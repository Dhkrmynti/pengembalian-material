<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Pekerjaan extends Model
{
    protected $fillable = ['no_agenda', 'petugas', 'nama_pelanggan', 'mutasi', 'tanggal_pk', 'user_id'];

    public function materialDikembalikans(): HasMany
    {
        return $this->hasMany(MaterialDikembalikan::class);
    }
}
