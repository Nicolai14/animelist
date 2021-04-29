<?php declare(strict_types=1);


namespace App\Http\Middleware;


use App\Models\anime;
use App\Providers\AppServiceProvider;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\App;

class getAnimeData
{
    public function __construct()
    {



    }
    public static function getDB()
    {
        return $animes=anime::paginate(9);
    }

}
