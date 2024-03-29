<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class Researcharea
 *
 * @property int $ResearchArea_ID
 * @property string $ResearchAreaName
 * @property string $ResearchAreaImage
 * @property Carbon|null $created_at
 * @property Carbon|null $updated_at
 *
 * @package App\Models
 */
class Researcharea extends Model
{
    protected $table = 'ResearchAreas_KTbl';
    protected $primaryKey = 'ResearchArea_ID';

    protected $fillable = [
        'ResearchAreaName',
        'ResearchAreaImage'
    ];
}
