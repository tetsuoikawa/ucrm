<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Customer extends Model
{
    use HasFactory;

    public function scoperesultposts($query, $input = null)
    {
        if(!empty($input)){
            if(Customer::where('title', 'like', '%' . $input . '%' )->exists())
            {
                return $query->where('title', 'like', '%' . $input . '%' );
            } 
        }
    }

    
}
