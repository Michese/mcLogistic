<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

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
    use HasFactory;
}
