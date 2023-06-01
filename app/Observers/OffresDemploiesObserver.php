<?php

namespace App\Observers;

use App\Models\OffresDemploies;
use Illuminate\Support\Str;

class OffresDemploiesObserver
{
    /**
     * Handle the OffresDemploies "created" event.
     */
    public function created(OffresDemploies $offresDemploies)
    {
        
        $offresDemploies->slug = Str::slug($offresDemploies->title, '-');
        $offresDemploies->save();
    }

    /**
     * Handle the OffresDemploies "updated" event.
     */
    public function updated(OffresDemploies $offresDemploies)
    {
        $offresDemploies->slug = Str::slug($offresDemploies->title, '-');
        $offresDemploies->saveQuietly();
    }

    /**
     * Handle the OffresDemploies "deleted" event.
     */
    public function deleted(OffresDemploies $offresDemploies): void
    {
        //
    }

    /**
     * Handle the OffresDemploies "restored" event.
     */
    public function restored(OffresDemploies $offresDemploies): void
    {
        //
    }

    /**
     * Handle the OffresDemploies "force deleted" event.
     */
    public function forceDeleted(OffresDemploies $offresDemploies): void
    {
        //
    }
}
