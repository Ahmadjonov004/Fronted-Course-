<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Http\Requests\BrendRequest;
use App\Repositories\BrendRepostitory;
use App\Services\BrendService;
use Illuminate\Http\Request;

class BrendController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    protected $brendController;

    public function __construct(BrendService $brendService)
    {
        $this->brendController = $brendService;
    }

    public function index()
    {
        $brends = $this->brendController->all();
        return view('backend.brend.index' , compact('brends'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(BrendRequest $brendRequest)
    {
        $data = $brendRequest->all();
        $this->brendController->save($data);
        return redirect()->back();

    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(BrendRequest $brendRequest, string $id)
    {
        $data = $brendRequest;
        $this->brendController->updateBrend($id,$data);
        return redirect()->back();
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
