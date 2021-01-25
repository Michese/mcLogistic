<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

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
 */
class Cargo extends Model
{
    use HasFactory;
}
