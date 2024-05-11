<?php namespace App\Http\Controllers;

use Davidle90\Restaurant\app\Models\Category;
use Davidle90\Restaurant\app\Models\Meal;
use Davidle90\Settings\app\Models\Settings;

class PublicController extends Controller
{
    public function index()
    {
        $settings = Settings::get();
        $menu_display_settings = $settings->where('key', 'menu_display')->first();

        $menus = [];

        $info = [
            'monday' => $settings->where('key', 'monday')->first(),
            'tuesday' => $settings->where('key', 'tuesday')->first(),
            'wednesday' => $settings->where('key', 'wednesday')->first(),
            'thursday' => $settings->where('key', 'thursday')->first(),
            'friday' => $settings->where('key', 'friday')->first(),
            'saturday' => $settings->where('key', 'saturday')->first(),
            'sunday' => $settings->where('key', 'sunday')->first(),
            'holidays' => $settings->where('key', 'holidays')->first(),
            'adress' => $settings->where('key', 'adress')->first(),
            'city' => $settings->where('key', 'city')->first(),
            'zip_code' => $settings->where('key', 'zip_code')->first(),
            'phone_number' => $settings->where('key', 'phone_number')->first(),
            'email' => $settings->where('key', 'email')->first(),
        ];

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
            'menus' => $menus,
            'info' => $info
        ]);
    }
}
