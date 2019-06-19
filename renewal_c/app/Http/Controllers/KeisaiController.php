<?php

namespace App\Http\Controllers;

use App\Http\Requests\KeisaiRequest;
use App\Jobs\SendKeisaiAdminMail;
use App\Jobs\SendKeisaiUserMail;
use App\Keisai;
use Illuminate\Http\Request;

class KeisaiController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $keisai = new Keisai();
        $keisai->fill($request->all());
        $result = $keisai->save();
        if ($result) {
            //Mail::to($keisai->email)->send(new KeisaiUserMail($keisai));
            //user mail
            $this->dispatch(new SendKeisaiUserMail($keisai));
            //Mail::to('EP_MAIL@docknet.jp')->cc('DYM_MAIL@docknet.jp')->send(new KeisaiAdminMail($keisai));
            //admin mail
            $this->dispatch(new SendKeisaiAdminMail($keisai));
        }

        return view('keisai.finish');
    }

    public function confirm(KeisaiRequest $request)
    {
        $keisai = new Keisai();
        $keisai->fill($request->all());

        return view('keisai.confirm')->with('keisai', $keisai);
    }

    /**
     * Display the specified resource.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
