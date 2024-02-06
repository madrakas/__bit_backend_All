<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Mechanic extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'surname'
    ];

    protected static $sorts = [
        '' => 'Nerūšiuota',
        'name_asc' => 'Pavardė (A-Z)',
        'name_desc' => 'Pavardė (Z-A)',
        'truck_count_asc' => 'Sunkvežimių skaičius 0-100',
        'truck_count_desc' => 'Sunkvežimių skaičius 100-0',
    ];

    protected static $perPageSelect = [
        0 => 'Visi',
        3 => 3,
        11 => 11,
        13 => 13,
        29 => 29,
    ];

    public static function getSorts()
    {
        return self::$sorts;
    }

    public static function getPerPageSelect()
    {
        return self::$perPageSelect;
    }

    public function trucks()
    {
        return  $this->hasMany(Truck::class);
    }
}
