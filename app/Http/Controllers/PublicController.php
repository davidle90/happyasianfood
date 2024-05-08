<?php namespace App\Http\Controllers;

use Davidle90\Restaurant\app\Models\Category;
use Davidle90\Restaurant\app\Models\Meal;

class PublicController extends Controller
{
    public function index()
    {
        $meals = Meal::where('is_active', 1)->get();
        $menus = [];

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

        return view('pages.public.index', [
            'menus' => $menus
        ]);
    }
}
