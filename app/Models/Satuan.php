<?php

namespace App\Models;

use App\Models\Pembelian;
use App\Models\GudangLumbung;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Satuan extends Model
{
    use HasFactory;
    use SoftDeletes;

    public const ACTIVE = "aktif";

    protected $table = 'satuan';
    protected $fillable =
    [
        'satuan'
    ];
    public $timestamps = false;

    public function satuangudang()
    {
        return $this->hasMany(GudangLumbung::class);
    }

    public function satuanpembelian()
    {
        return $this->hasMany(Pembelian::class);
    }

    public function satuanperkiraanpembelian()
    {
        return $this->hasMany(PerkiraanPembelian::class);
    }
}
