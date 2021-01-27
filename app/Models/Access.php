<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * App\Models\Access
 *
 * @property int $access_id
 * @property string $title
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder|Access newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Access newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Access query()
 * @method static \Illuminate\Database\Eloquent\Builder|Access whereAccessId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Access whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Access whereTitle($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Access whereUpdatedAt($value)
 * @mixin \Eloquent
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Models\User[] $users
 * @property-read int|null $users_count
 */
class Access extends Model
{
    use HasFactory;

    protected $table = 'accesses';
    protected $primaryKey = 'access_id';
    protected $fillable = [
        'title'
    ];

    public function users() {
        return $this->hasMany(User::class);
    }
}
