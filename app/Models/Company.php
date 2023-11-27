<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


/**
 * App\Models\Company
 *
 * @property int $id
 * @property string|null $company_uuid
 * @property int|null $type
 * @property string $company_name
 * @property string|null $alias
 * @property string|null $business_license
 * @property string|null $address
 * @property string|null $contacts
 * @property string $phone
 * @property string|null $prefix
 * @property string|null $logo
 * @property string|null $introduce
 * @property string|null $email
 * @property int|null $status
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property string|null $start_time
 * @property string|null $end_time
 * @property float|null $total_price
 * @property int|null $allow_push_doc
 * @property int|null $allow_push_order_dispatch_3_day
 * @property int|null $allow_push_order_dispatch_7_day
 * @property int|null $allow_push_order_postpone
 * @property int|null $allow_push_sample_order_dispatch_3_day
 * @property int|null $allow_push_sample_order_postpone
 * @property int|null $allow_push_err_doc
 * @property float|null $left_price
 * @property float|null $pay_price
 * @method static \Illuminate\Database\Eloquent\Builder|Company newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Company newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Company query()
 * @method static \Illuminate\Database\Eloquent\Builder|Company whereAddress($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Company whereAlias($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Company whereAllowPushDoc($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Company whereAllowPushErrDoc($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Company whereAllowPushOrderDispatch3Day($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Company whereAllowPushOrderDispatch7Day($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Company whereAllowPushOrderPostpone($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Company whereAllowPushSampleOrderDispatch3Day($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Company whereAllowPushSampleOrderPostpone($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Company whereBusinessLicense($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Company whereCompanyName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Company whereCompanyUuid($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Company whereContacts($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Company whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Company whereEmail($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Company whereEndTime($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Company whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Company whereIntroduce($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Company whereLeftPrice($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Company whereLogo($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Company wherePayPrice($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Company wherePhone($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Company wherePrefix($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Company whereStartTime($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Company whereStatus($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Company whereTotalPrice($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Company whereType($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Company whereUpdatedAt($value)
 * @mixin \Eloquent
 */
class Company extends Model
{
    use HasFactory;

    protected $table = 'company';
}
