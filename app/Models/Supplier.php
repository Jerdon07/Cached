<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Attributes\Fillable;
use Illuminate\Database\Eloquent\Model;

#[Fillable(['company_name', 'contact_person', 'phone', 'email', 'address', 'city', 'province', 'postal_code', 'remarks'])]
class Supplier extends Model
{
    //
}
