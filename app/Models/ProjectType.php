<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProjectType extends Model
{
    use HasFactory;
    protected $fillable = ['title','description','gallery'];
    public static $cast = [
        'title' => 'required',
        'gallery' => 'required|array',
    ];

    public static function convert_to_int($array, $offset): array
    {
        $result = [];
        if ($offset != null) {
            if (is_array($array))
                foreach ($array as $item) {
                    $result[] = (int)$item[$offset];
                }
        } else {
            if (is_array($array))
                foreach ($array as $item) {
                    $result[] = (int)$item;
                }
        }
        return $result;
    }

}
