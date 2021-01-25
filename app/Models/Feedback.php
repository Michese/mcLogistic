<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * App\Models\Feedback
 *
 * @property int $feedback_id
 * @property int $user_id
 * @property int $rating
 * @property string $dignities
 * @property string $disadvantages
 * @property string $comment
 * @property string|null $deleted_at
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder|Feedback newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Feedback newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Feedback query()
 * @method static \Illuminate\Database\Eloquent\Builder|Feedback whereComment($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Feedback whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Feedback whereDeletedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Feedback whereDignities($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Feedback whereDisadvantages($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Feedback whereFeedbackId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Feedback whereRating($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Feedback whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Feedback whereUserId($value)
 * @mixin \Eloquent
 * @property-read \App\Models\User|null $user
 * @method static \Illuminate\Database\Query\Builder|Feedback onlyTrashed()
 * @method static \Illuminate\Database\Query\Builder|Feedback withTrashed()
 * @method static \Illuminate\Database\Query\Builder|Feedback withoutTrashed()
 */
class Feedback extends Model
{
    use HasFactory, SoftDeletes;

    protected $table='feedback';
    protected $forceDeleting=false;
    protected $primaryKey='feedback_id';
    protected $fillable= [
        'user_id',
        'rating',
        'dignities',
        'disadvantages',
        'comment',
    ];

    public function user()
    {
        return $this->hasOne(User::class, 'id', 'user_id');
    }
}
