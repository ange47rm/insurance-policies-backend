<?php

namespace App\Models;
use Illuminate\Database\Eloquent\Model;

class Policy extends Model
{
    public function __construct($customer_name, $customer_address, $premium, $policy_type, $insurer_name)
    {
        $this->customer_name=$customer_name;
        $this->customer_address=$customer_address;
        $this->premium=$premium;
        $this->policy_type=$policy_type;
        $this->insurer_name=$insurer_name;
    }
}
