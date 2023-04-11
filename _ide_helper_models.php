<?php

// @formatter:off
/**
 * A helper file for your Eloquent Models
 * Copy the phpDocs from this file to the correct Model,
 * And remove them from this file, to prevent double declarations.
 *
 * @author Barry vd. Heuvel <barryvdh@gmail.com>
 */


namespace App\Models{
/**
 * App\Models\OffresDemploies
 *
 * @property int $id
 * @property string $title
 * @property string|null $slug
 * @property string $companyName
 * @property string $location
 * @property string $content
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static \Database\Factories\OffresDemploiesFactory factory($count = null, $state = [])
 * @method static \Illuminate\Database\Eloquent\Builder|OffresDemploies newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|OffresDemploies newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|OffresDemploies query()
 * @method static \Illuminate\Database\Eloquent\Builder|OffresDemploies whereCompanyName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|OffresDemploies whereContent($value)
 * @method static \Illuminate\Database\Eloquent\Builder|OffresDemploies whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|OffresDemploies whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|OffresDemploies whereLocation($value)
 * @method static \Illuminate\Database\Eloquent\Builder|OffresDemploies whereSlug($value)
 * @method static \Illuminate\Database\Eloquent\Builder|OffresDemploies whereTitle($value)
 * @method static \Illuminate\Database\Eloquent\Builder|OffresDemploies whereUpdatedAt($value)
 * @mixin \Eloquent
 */
	class IdeHelperOffresDemploies {}
}

namespace App\Models{
/**
 * App\Models\User
 *
 * @property int $id
 * @property string $name
 * @property string $email
 * @property \Illuminate\Support\Carbon|null $email_verified_at
 * @property string $password
 * @property string|null $remember_token
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \Illuminate\Notifications\DatabaseNotificationCollection<int, \Illuminate\Notifications\DatabaseNotification> $notifications
 * @property-read int|null $notifications_count
 * @property-read \Illuminate\Database\Eloquent\Collection<int, \Laravel\Sanctum\PersonalAccessToken> $tokens
 * @property-read int|null $tokens_count
 * @method static \Database\Factories\UserFactory factory($count = null, $state = [])
 * @method static \Illuminate\Database\Eloquent\Builder|User newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|User newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|User query()
 * @method static \Illuminate\Database\Eloquent\Builder|User whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereEmail($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereEmailVerifiedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User wherePassword($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereRememberToken($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereUpdatedAt($value)
 * @mixin \Eloquent
 */
	class IdeHelperUser {}
}

