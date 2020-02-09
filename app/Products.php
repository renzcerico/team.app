<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Products extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'tbl_products';

    public function getAll(){
        return Products::all();
    }
}
