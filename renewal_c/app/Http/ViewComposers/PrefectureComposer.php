<?php


namespace App\Http\ViewComposers;

use Illuminate\Contracts\View\View;
use App\Enums\Pref;


class PrefectureComposer
{

    /**
     * @var string
     */
    protected $pref;

    public function __construct()
    {
        $this->pref = Pref::toArray();
    }

    /**
     * Bind data to the view.
     * @param View view
     * @return void
     */
    public function compose(View $view)
    {
        $view->with('pref', $this->pref);
    }
}