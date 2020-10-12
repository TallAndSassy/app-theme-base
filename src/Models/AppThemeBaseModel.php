<?php

namespace TallAndSassy\AppThemeBase\Models;

use Illuminate\Database\Eloquent\Model;

class AppThemeBaseModel extends Model
{
    public $gaurded = [];// Defualt to no mass assignements
    public $fillable = ['name'];
    public $table = 'app-theme-base';

    public function getUpperCasedName() : string
    {
        return strtoupper($this->name);
    }
}
