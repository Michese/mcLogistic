<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * App\Models\TypeCargo
 *
 * @property int $type_cargo_id
 * @property string $title
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder|TypeCargo newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|TypeCargo newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|TypeCargo query()
 * @method static \Illuminate\Database\Eloquent\Builder|TypeCargo whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|TypeCargo whereTitle($value)
 * @method static \Illuminate\Database\Eloquent\Builder|TypeCargo whereTypeCargoId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|TypeCargo whereUpdatedAt($value)
 * @mixin \Eloquent
 */
class TypeCargo extends Model
{
    use HasFactory;
    protected $table='type_cargos';
    protected $primaryKey='type_cargo_id';
    protected $fillable= [
        'title'
    ];
}
