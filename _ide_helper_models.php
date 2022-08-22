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
 * App\Models\Card
 *
 * @property int $id
 * @property string $last_name
 * @property string $first_name
 * @property string|null $street
 * @property string|null $postcode
 * @property string|null $city
 * @property \Illuminate\Support\Carbon $valid_from
 * @property \Illuminate\Support\Carbon $valid_until
 * @property int $creator_id
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property int $instance_id
 * @property-read \App\Models\User $creator
 * @property-read \App\Models\Instance $instance
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Models\Person[] $people
 * @property-read int|null $people_count
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Models\Reservation[] $reservations
 * @property-read int|null $reservations_count
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Models\Visit[] $visits
 * @property-read int|null $visits_count
 * @method static \Illuminate\Database\Eloquent\Builder|Card newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Card newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Card query()
 * @method static \Illuminate\Database\Eloquent\Builder|Card whereCity($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Card whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Card whereCreatorId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Card whereFirstName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Card whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Card whereInstanceId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Card whereLastName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Card wherePostcode($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Card whereStreet($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Card whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Card whereValidFrom($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Card whereValidUntil($value)
 */
	class Card extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\Instance
 *
 * @property int $id
 * @property string $name
 * @property string $street
 * @property string $postcode
 * @property string $city
 * @property string $contact
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Models\Card[] $cards
 * @property-read int|null $cards_count
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Models\LimitationSet[] $limitationSets
 * @property-read int|null $limitation_sets_count
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Models\Limitation[] $limitations
 * @property-read int|null $limitations_count
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Models\LineItem[] $lineItems
 * @property-read int|null $line_items_count
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Models\Organization[] $organizations
 * @property-read int|null $organizations_count
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Models\Person[] $people
 * @property-read int|null $people_count
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Models\ProductType[] $productTypes
 * @property-read int|null $product_types_count
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Models\Reservation[] $reservations
 * @property-read int|null $reservations_count
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Models\Shop[] $shops
 * @property-read int|null $shops_count
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Models\User[] $users
 * @property-read int|null $users_count
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Models\Visit[] $visits
 * @property-read int|null $visits_count
 * @method static \Illuminate\Database\Eloquent\Builder|Instance newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Instance newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Instance query()
 * @method static \Illuminate\Database\Eloquent\Builder|Instance whereCity($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Instance whereContact($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Instance whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Instance whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Instance whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Instance wherePostcode($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Instance whereStreet($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Instance whereUpdatedAt($value)
 */
	class Instance extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\Limitation
 *
 * @property int $id
 * @property int $product_type_id
 * @property int $limitation_set_id
 * @property int|null $limit
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property int $instance_id
 * @property-read \App\Models\Instance $instance
 * @property-read \App\Models\LimitationSet $limitationSet
 * @property-read \App\Models\ProductType $productType
 * @method static \Illuminate\Database\Eloquent\Builder|Limitation newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Limitation newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Limitation query()
 * @method static \Illuminate\Database\Eloquent\Builder|Limitation whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Limitation whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Limitation whereInstanceId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Limitation whereLimit($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Limitation whereLimitationSetId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Limitation whereProductTypeId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Limitation whereUpdatedAt($value)
 */
	class Limitation extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\LimitationSet
 *
 * @property int $id
 * @property string $name
 * @property string $valid_from
 * @property string|null $valid_until
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property int $instance_id
 * @property-read \App\Models\Instance $instance
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Models\Limitation[] $limitations
 * @property-read int|null $limitations_count
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Models\Person[] $persons
 * @property-read int|null $persons_count
 * @method static \Illuminate\Database\Eloquent\Builder|LimitationSet newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|LimitationSet newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|LimitationSet query()
 * @method static \Illuminate\Database\Eloquent\Builder|LimitationSet whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|LimitationSet whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|LimitationSet whereInstanceId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|LimitationSet whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|LimitationSet whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|LimitationSet whereValidFrom($value)
 * @method static \Illuminate\Database\Eloquent\Builder|LimitationSet whereValidUntil($value)
 */
	class LimitationSet extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\LineItem
 *
 * @property int $id
 * @property int $visit_id
 * @property int $person_id
 * @property int $product_type_id
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property int $instance_id
 * @property-read \App\Models\Instance $instance
 * @property-read \App\Models\Person $person
 * @property-read \App\Models\ProductType $productType
 * @property-read \App\Models\Visit $visit
 * @method static \Illuminate\Database\Eloquent\Builder|LineItem newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|LineItem newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|LineItem query()
 * @method static \Illuminate\Database\Eloquent\Builder|LineItem whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|LineItem whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|LineItem whereInstanceId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|LineItem wherePersonId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|LineItem whereProductTypeId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|LineItem whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|LineItem whereVisitId($value)
 */
	class LineItem extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\Organization
 *
 * @property int $id
 * @property int $instance_id
 * @property string $name
 * @property string $street
 * @property string $postcode
 * @property string $city
 * @property string $contact
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \App\Models\Instance $instance
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Models\User[] $users
 * @property-read int|null $users_count
 * @method static \Illuminate\Database\Eloquent\Builder|Organization newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Organization newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Organization query()
 * @method static \Illuminate\Database\Eloquent\Builder|Organization whereCity($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Organization whereContact($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Organization whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Organization whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Organization whereInstanceId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Organization whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Organization wherePostcode($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Organization whereStreet($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Organization whereUpdatedAt($value)
 */
	class Organization extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\Person
 *
 * @property int $id
 * @property int $card_id
 * @property string $gender
 * @property int $age
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property int $instance_id
 * @property-read \App\Models\Card|null $card
 * @property-read \App\Models\Instance $instance
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Models\LimitationSet[] $limitationSets
 * @property-read int|null $limitation_sets_count
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Models\LineItem[] $lineItems
 * @property-read int|null $line_items_count
 * @method static \Illuminate\Database\Eloquent\Builder|Person newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Person newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Person query()
 * @method static \Illuminate\Database\Eloquent\Builder|Person whereAge($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Person whereCardId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Person whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Person whereGender($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Person whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Person whereInstanceId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Person whereUpdatedAt($value)
 */
	class Person extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\ProductType
 *
 * @property int $id
 * @property string $name
 * @property string|null $icon
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property int $instance_id
 * @property-read \App\Models\Instance $instance
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Models\Limitation[] $limitations
 * @property-read int|null $limitations_count
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Models\LineItem[] $products
 * @property-read int|null $products_count
 * @method static \Illuminate\Database\Eloquent\Builder|ProductType newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|ProductType newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|ProductType query()
 * @method static \Illuminate\Database\Eloquent\Builder|ProductType whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ProductType whereIcon($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ProductType whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ProductType whereInstanceId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ProductType whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ProductType whereUpdatedAt($value)
 */
	class ProductType extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\Reservation
 *
 * @property int $id
 * @property int $card_id
 * @property int $shop_id
 * @property \Illuminate\Support\Carbon $time
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property int $instance_id
 * @property-read \App\Models\Card $card
 * @property-read \App\Models\Instance $instance
 * @property-read \App\Models\Shop $shop
 * @method static \Illuminate\Database\Eloquent\Builder|Reservation newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Reservation newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Reservation query()
 * @method static \Illuminate\Database\Eloquent\Builder|Reservation whereCardId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Reservation whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Reservation whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Reservation whereInstanceId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Reservation whereShopId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Reservation whereTime($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Reservation whereUpdatedAt($value)
 */
	class Reservation extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\Shop
 *
 * @property int $id
 * @property int $organization_id
 * @property string $name
 * @property string $street
 * @property string $postcode
 * @property string $city
 * @property string $contact
 * @property array $opening_hours
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property int $instance_id
 * @property-read \App\Models\Instance $instance
 * @property-read \App\Models\Organization|null $organisation
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Models\Reservation[] $reservations
 * @property-read int|null $reservations_count
 * @method static \Illuminate\Database\Eloquent\Builder|Shop newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Shop newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Shop query()
 * @method static \Illuminate\Database\Eloquent\Builder|Shop whereCity($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Shop whereContact($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Shop whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Shop whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Shop whereInstanceId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Shop whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Shop whereOpeningHours($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Shop whereOrganizationId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Shop wherePostcode($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Shop whereStreet($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Shop whereUpdatedAt($value)
 */
	class Shop extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\User
 *
 * @property int $id
 * @property int $instance_id
 * @property int $organization_id
 * @property string $name
 * @property string $email
 * @property string $password
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Models\Card[] $cards
 * @property-read int|null $cards_count
 * @property-read \App\Models\Instance $instance
 * @property-read \Illuminate\Notifications\DatabaseNotificationCollection|\Illuminate\Notifications\DatabaseNotification[] $notifications
 * @property-read int|null $notifications_count
 * @property-read \App\Models\Organization $organization
 * @property-read \Illuminate\Database\Eloquent\Collection|\Spatie\Permission\Models\Permission[] $permissions
 * @property-read int|null $permissions_count
 * @property-read \Illuminate\Database\Eloquent\Collection|\Spatie\Permission\Models\Role[] $roles
 * @property-read int|null $roles_count
 * @property-read \Illuminate\Database\Eloquent\Collection|\Laravel\Sanctum\PersonalAccessToken[] $tokens
 * @property-read int|null $tokens_count
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Models\Visit[] $vists
 * @property-read int|null $vists_count
 * @method static \Illuminate\Database\Eloquent\Builder|User newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|User newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|User permission($permissions)
 * @method static \Illuminate\Database\Eloquent\Builder|User query()
 * @method static \Illuminate\Database\Eloquent\Builder|User role($roles, $guard = null)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereEmail($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereInstanceId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereOrganizationId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User wherePassword($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereUpdatedAt($value)
 */
	class User extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\Visit
 *
 * @property int $id
 * @property int $card_id
 * @property int $user_id
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property int $instance_id
 * @property-read \App\Models\Card $card
 * @property-read \App\Models\Instance $instance
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Models\LineItem[] $lineItems
 * @property-read int|null $line_items_count
 * @property-read \App\Models\User $user
 * @method static \Illuminate\Database\Eloquent\Builder|Visit newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Visit newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Visit query()
 * @method static \Illuminate\Database\Eloquent\Builder|Visit whereCardId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Visit whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Visit whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Visit whereInstanceId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Visit whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Visit whereUserId($value)
 */
	class Visit extends \Eloquent {}
}

