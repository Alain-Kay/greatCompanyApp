<?php

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * @mixin IdeHelperOffresDemploies
 */
class OffresDemploies extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'companyName',
        'location',
        'content'
    ];

    public function dateFormat()
    {
        return date_format($this->created_at, 'd:M:Y H:i');
    }

    public function createdAt()
    {
        $now = Carbon::now();
        $dateCreation = Carbon::parse($this->created_at);

       if ($dateCreation->isSameDay($now)) {
            return $dateCreation->format('H:i');
       }else {
            return $dateCreation->format('d/m/Y');
       }
    }
}
