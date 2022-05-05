<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\FrontSetting;

class FrontController extends Controller
{
    public function __construct()
    {
        //Blog Theme 
        view()->share('frontTheme','frontTheme.default');

        //Front Settings Data
        $this->frontSettingsData = \Cache::remember('frontSettingsData', 1000, function (){
            return FrontSetting::pluck('value','slug')->all();
        });

        view()->share('settingsFrontData',$this->frontSettingsData);
            
    }
}
