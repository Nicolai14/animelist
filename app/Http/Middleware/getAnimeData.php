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
        if (request()->has('searchName')){
            $animes=anime::where('Name','like', request('searchName').'%')->paginate(9)->appends('searchName',request('searchName'));
        }
        elseif(request()->has('filterGenre'))
        {
            if (request('filterGenre')=="ID")
            {
                $animes = anime::orderBy('ID', 'DESC')->paginate(9);
            }
            else {
                $animes = anime::where('Genre', 'like',
                    '%' . request('filterGenre') . '%')->paginate(9)->appends('filterGenre', request('filterGenre'));
            }
        }
        else {
            $animes = anime::paginate(9);
        }

        return $animes;
    }
    public static function getGenres()
    {
        $animes =anime::count();
        return $animes;
    }

}
