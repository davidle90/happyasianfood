<?php namespace App\Http\Controllers;

use Davidle90\Restaurant\app\Models\Category;
use Davidle90\Restaurant\app\Models\Meal;
use Davidle90\Settings\app\Models\Settings;

class PublicController extends Controller
{
    public function index()
    {
        $menu_display_settings = Settings::where('key', 'menu_display')->first();
        $menus = [];

        if(isset($menu_display_settings)){
            if($menu_display_settings->value == 'show_db'){

                $meals = Meal::where('is_active', 1)->get();

                foreach($meals as $meal){

                    $sub_category = $meal->sub_category ?? '';

                    $menus[$meal->category->sort_order.'_'.$meal->category->label][$sub_category][] = [
                        'title' =>  $meal->title ?? 'Untitled',
                        'description' => $meal->description ?? '',
                        'price' => number_format($meal->price ?? 0, 0, '.', ' '),
                        'extras' => [
                            'spice' => $meal->extras['spice'] ?? 0
                        ]
                    ];
                }

                ksort($menus);
            }
        }

        return view('pages.public.index', [
            'menus' => $menus
        ]);
    }
}
