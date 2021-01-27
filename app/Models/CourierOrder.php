<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * App\Models\CourierOrder
 *
 * @property int $courier_order_id
 * @property int $user_id
 * @property int $order_id
 * @property \Illuminate\Support\Carbon|null $deleted_at
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder|CourierOrder newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|CourierOrder newQuery()
 * @method static \Illuminate\Database\Query\Builder|CourierOrder onlyTrashed()
 * @method static \Illuminate\Database\Eloquent\Builder|CourierOrder query()
 * @method static \Illuminate\Database\Eloquent\Builder|CourierOrder whereCourierOrderId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|CourierOrder whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|CourierOrder whereDeletedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|CourierOrder whereOrderId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|CourierOrder whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|CourierOrder whereUserId($value)
 * @method static \Illuminate\Database\Query\Builder|CourierOrder withTrashed()
 * @method static \Illuminate\Database\Query\Builder|CourierOrder withoutTrashed()
 * @mixin \Eloquent
 */
class CourierOrder extends Model
{
    use HasFactory, SoftDeletes;

    protected $table = 'courier_orders';
    protected $primaryKey = 'courier_order_id';
   protected $forceDeleting = false;
   protected $fillable = [
       'user_id',
       'order_id',
   ];

    public function user()
    {
        return $this->belongsTo(User::class, 'id', 'user_id');
   }

    public function order()
    {
        return $this->belongsTo(Order::class, 'order_id', 'order_id');
    }

    public function getOrdersByCourierId(int $courier_id)
    {
        return self::query()
            ->where(['user_id' => $courier_id])
            ->paginate(10);
    }

    public static function countByCourierId(int $id): int
    {
        return self::query()
            ->where(['user_id' => $id])
            ->count();
    }
}
