<?php
use App\Models\Brand;

function getBrands(){
    return Brand::all();
} 

// function getCategorys(){
//     return Category::all();
// }