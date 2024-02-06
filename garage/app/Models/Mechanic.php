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

    public static function getSorts()
    {
        return self::$sorts;
    }

    public function trucks()
    {
        return  $this->hasMany(Truck::class);
    }
}
