<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/



Route::get('/', function () {
    $title = 'Benvenuti in Laravel';
    $paragrph = 'This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.';
    return view('home', compact('title', 'paragrph'));
});

Route::get('/home', function () {
    $title = 'Che bello essere Qui';
    $paragrph = 'Lorem ipsum dolor sit, amet consectetur adipisicing elit. Aut optio et architecto. Ab sunt a ex alias nulla assumenda rem sequi quam labore nemo beatae eum, perferendis, illo, sit dicta? Eaque error itaque hic';
    Route::redirect('home');
    return view('/', 'home', compact('title', 'paragrph'));
});

Route::get('/chi-siamo', function () {
    $text = "Lorem ipsum dolor sit, amet consectetur adipisicing elit. Aut optio et architecto. Ab sunt a ex alias nulla assumenda rem sequi quam labore nemo beatae eum, perferendis, illo, sit dicta? Eaque error itaque hic, ab dolorum minima id reprehenderit ad deleniti dicta iste sed maiores non officia qui accusantium. Architecto sit beatae itaque quasi tempora natus consequatur aspernatur, id aperiam! Minima at deserunt nihil error dolor ut veritatis veniam cupiditate voluptate repellat nulla pariatur incidunt, voluptatem nemo blanditiis modi maxime alias eligendi laborum, adipisci quod nam aliquid illum! Sed, consectetur? Adipisci expedita optio aut iste magnam, ex consectetur similique architecto tempora deleniti ut eos veritatis cum. At, repellat? Animi necessitatibus eum velit optio ut saepe consequatur unde nihil veritatis numquam.
    Sunt, ad libero. Labore et deleniti id facere porro nihil illo autem dolor accusamus exercitationem deserunt rem nemo odio odit cum, aut iusto, laudantium, dicta ut asperiores? Nemo, dolor enim.
    Minima, officia voluptate? Quaerat quia architecto iste nesciunt. Ea, sint recusandae adipisci ut atque natus sequi, suscipit eaque, ipsam ipsum provident doloribus architecto? Eos cumque quis nulla recusandae rem vero?
    Aliquid, optio commodi odit accusantium inventore laborum, ut, id eligendi debitis dolore praesentium dignissimos quae temporibus aliquam quas. Cum minus ipsum ad alias doloribus. Reprehenderit excepturi ex quasi aliquam sint!
    Iure dolores ex magnam recusandae! Sed quam numquam ipsam, ratione atque enim earum deleniti inventore odio optio maxime quae debitis soluta qui unde ullam officiis? Iste nisi cupiditate odit iusto.
    Consequatur, aliquid eum illum odio nihil odit repellendus sunt asperiores distinctio fugit fugiat voluptatibus a expedita architecto neque, obcaecati minima iusto beatae, alias quidem cupiditate assumenda ipsam voluptatum. Praesentium, sed?
    Perferendis nemo deleniti enim aspernatur commodi molestias ad delectus pariatur sit dicta, molestiae velit maiores minima ut vero asperiores quis quaerat iusto maxime dignissimos quisquam quam quod nobis vitae. Beatae.";
    return view('chi', compact('text'));
});

Route::get('/dove-siamo', function () {
    return view('dove');
});
