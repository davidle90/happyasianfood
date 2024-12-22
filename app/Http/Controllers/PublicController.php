<?php namespace App\Http\Controllers;

use Davidle90\Blog\app\Models\Post;
use Davidle90\Restaurant\app\Models\Category;
use Davidle90\Restaurant\app\Models\Meal;
use Davidle90\Settings\app\Models\Settings;

class PublicController extends Controller
{
    public function index()
    {
        $settings = Settings::get();

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

        $posts = Post::where('is_active', 1)->get();

        return view('pages.public.index', [
            'info' => $info,
            'posts' => $posts
        ]);
    }

    public function menu()
    {
        $settings = Settings::get();
        $menu_display_settings = $settings->where('key', 'menu_display')->first();

        $menus = [];
        if(isset($menu_display_settings)){
            if($menu_display_settings->value == 'show_db'){

                $meals = Meal::where('is_active', 1)->orderByRaw('CAST(menu_number AS UNSIGNED)')->get();

                foreach($meals as $meal){

                    $menus[$meal->category->sortorder . '' . $meal->category->label][$meal->sub_category->label ?? ""]['description'] = $meal->sub_category->description ?? "";
                    $menus[$meal->category->sortorder . '' . $meal->category->label][$meal->sub_category->label ?? ""]['meals'][] = [
                        'menu_number' => $meal->menu_number ?? '',
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

        return view('pages.public.menu', [
            'menus' => $menus,
        ]);
    }
}
