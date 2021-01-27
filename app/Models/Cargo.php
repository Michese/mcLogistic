<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * App\Models\Cargo
 *
 * @property int $cargo_id
 * @property int $type_cargo_id
 * @property float $length
 * @property float $width
 * @property float $height
 * @property float $weight
 * @property string $amount
 * @property string $comment
 * @property string|null $deleted_at
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder|Cargo newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Cargo newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Cargo query()
 * @method static \Illuminate\Database\Eloquent\Builder|Cargo whereAmount($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Cargo whereCargoId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Cargo whereComment($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Cargo whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Cargo whereDeletedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Cargo whereHeight($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Cargo whereLength($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Cargo whereTypeCargoId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Cargo whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Cargo whereWeight($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Cargo whereWidth($value)
 * @mixin \Eloquent
 * @property-read \App\Models\Order $orders
 * @method static \Illuminate\Database\Query\Builder|Cargo onlyTrashed()
 * @method static \Illuminate\Database\Query\Builder|Cargo withTrashed()
 * @method static \Illuminate\Database\Query\Builder|Cargo withoutTrashed()
 * @property-read \App\Models\Order|null $order
 */
class Cargo extends Model
{
    use HasFactory, SoftDeletes;
    protected $table = 'cargos';
    protected $primaryKey = 'cargo_id';
    protected $forceDeleting = false;
    protected $fillable = [
        'type_cargo_id',
        'length',
        'width',
        'height',
        'weight',
        'amount',
        'comment',
    ];

    public function order()
    {
        return $this->hasOne(Order::class);
    }
}
