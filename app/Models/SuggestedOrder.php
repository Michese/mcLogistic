<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * App\Models\SuggestedOrder
 *
 * @property int $suggested_order_id
 * @property int $order_id
 * @property int $user_id
 * @property \Illuminate\Support\Carbon|null $deleted_at
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder|SuggestedOrder newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|SuggestedOrder newQuery()
 * @method static \Illuminate\Database\Query\Builder|SuggestedOrder onlyTrashed()
 * @method static \Illuminate\Database\Eloquent\Builder|SuggestedOrder query()
 * @method static \Illuminate\Database\Eloquent\Builder|SuggestedOrder whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|SuggestedOrder whereDeletedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|SuggestedOrder whereOrderId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|SuggestedOrder whereSuggestedOrderId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|SuggestedOrder whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|SuggestedOrder whereUserId($value)
 * @method static \Illuminate\Database\Query\Builder|SuggestedOrder withTrashed()
 * @method static \Illuminate\Database\Query\Builder|SuggestedOrder withoutTrashed()
 * @mixin \Eloquent
 * @property-read \App\Models\Order $order
 * @property-read \App\Models\User $user
 */
class SuggestedOrder extends Model
{
    use HasFactory, SoftDeletes;

    protected $table = 'suggested_orders';
    protected $primaryKey = 'suggested_order_id';
    protected $forceDeleting = false;

    protected $fillable = [
        'order_id',
        'user_id',
    ];

    public function order()
    {
        return $this->belongsTo(Order::class, 'order_id', 'order_id');
    }

    public function user()
    {
        return $this->belongsTo(User::class, 'user_id', 'id');
    }

    public function getAllSuggestedOrderForCourierOrderPage(int $user_id)
    {
        return self::select()
            ->where(['user_id' => $user_id])
            ->get();
    }

    public function deleteSuggestedOrdersByOrderId(int $order_id)
    {
        return self::query()
            ->where(['order_id' => $order_id])
            ->delete();
    }
}
