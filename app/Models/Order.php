<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * App\Models\Order
 *
 * @property int $order_id
 * @property int $user_id
 * @property int|null $courier_id
 * @property int $cargo_id
 * @property int $order_status_id
 * @property string $sending_address
 * @property string $delivery_address
 * @property string $sending_date
 * @property string $delivery_date
 * @property string $delivery_client_name
 * @property int $delivery_client_phone
 * @property int $has_insurance
 * @property int $has_filling_up
 * @property int $has_supporting_documents
 * @property int $has_return_documents
 * @property string $amount
 * @property string|null $deleted_at
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder|Order newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Order newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Order query()
 * @method static \Illuminate\Database\Eloquent\Builder|Order whereAmount($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Order whereCargoId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Order whereCourierId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Order whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Order whereDeletedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Order whereDeliveryAddress($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Order whereDeliveryClientName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Order whereDeliveryClientPhone($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Order whereDeliveryDate($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Order whereHasFillingUp($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Order whereHasInsurance($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Order whereHasReturnDocuments($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Order whereHasSupportingDocuments($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Order whereOrderId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Order whereOrderStatusId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Order whereSendingAddress($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Order whereSendingDate($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Order whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Order whereUserId($value)
 * @mixin \Eloquent
 */
class Order extends Model
{
    use HasFactory, SoftDeletes;

    protected $table = 'orders';
    protected $primaryKey = 'order_id';
    protected $fillable = [
        'user_id',
        'cargo_id',
        'order_status_id',
        'payment_method_id',
        'sending_address',
        'delivery_address',
        'sending_date',
        'delivery_date',
        'delivery_client_name',
        'delivery_client_phone',
        'has_insurance',
        'has_filling_up',
        'has_supporting_documents',
        'has_return_documents',
        'amount',
    ];
    protected $forceDeleting = false;

    public function getOrdersByClientId(int $id)
    {
        return $this->select()
            ->where('user_id', '=', $id)
            ->orderBy('delivery_date')
            ->get();
    }

    public function getOrdersForManagerOrderPage()
    {
        return $this->select()
            ->orWhereIn('order_status_id', [1, 2])
            ->get();
    }

    public function user()
    {
        return $this->hasOne(User::class, 'id', 'user_id');
    }

    public function cargo()
    {
        return $this->hasOne(Cargo::class, 'cargo_id', 'cargo_id');
    }

    public function orderStatus()
    {
        return $this->hasOne(OrderStatus::class, 'order_status_id', 'order_status_id');
    }

    public function paymentMethod()
    {
        return $this->hasOne(PaymentMethod::class, 'payment_method_id', 'payment_method_id');
    }

    public static function countByUserId(int $id): int
    {
        return self::query()
            ->where(['user_id' => $id])
            ->where('order_status_id', '!=', 7)
            ->where('order_status_id', '!=', 8)
            ->count();
    }
}
