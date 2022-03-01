<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

// Ma classe doit porter le même nom que ma table (migration) pour pouvoir utiliser une variable en mode objet
// Grâce au Model on va pouvoir afficher notre liste de produits par exemple 

class Product extends Model
{
    use HasFactory;
    protected $fillable = ['id', 'name', 'description', 'prix', 'slug'];
}
