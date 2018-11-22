<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Redirect;
use Schema;
use App\Kategori;
use App\Http\Requests\CreateKategoriRequest;
use App\Http\Requests\UpdateKategoriRequest;
use Illuminate\Http\Request;



class KategoriController extends Controller {

	/**
	 * Display a listing of kategori
	 *
     * @param Request $request
     *
     * @return \Illuminate\View\View
	 */
	public function index(Request $request)
    {
        $kategori = Kategori::all();

		return view('admin.kategori.index', compact('kategori'));
	}

	/**
	 * Show the form for creating a new kategori
	 *
     * @return \Illuminate\View\View
	 */
	public function create()
	{
	    
	    
	    return view('admin.kategori.create');
	}

	/**
	 * Store a newly created kategori in storage.
	 *
     * @param CreateKategoriRequest|Request $request
	 */
	public function store(CreateKategoriRequest $request)
	{
	    
		Kategori::create($request->all());

		return redirect()->route(config('quickadmin.route').'.kategori.index');
	}

	/**
	 * Show the form for editing the specified kategori.
	 *
	 * @param  int  $id
     * @return \Illuminate\View\View
	 */
	public function edit($id)
	{
		$kategori = Kategori::find($id);
	    
	    
		return view('admin.kategori.edit', compact('kategori'));
	}

	/**
	 * Update the specified kategori in storage.
     * @param UpdateKategoriRequest|Request $request
     *
	 * @param  int  $id
	 */
	public function update($id, UpdateKategoriRequest $request)
	{
		$kategori = Kategori::findOrFail($id);

        

		$kategori->update($request->all());

		return redirect()->route(config('quickadmin.route').'.kategori.index');
	}

	/**
	 * Remove the specified kategori from storage.
	 *
	 * @param  int  $id
	 */
	public function destroy($id)
	{
		Kategori::destroy($id);

		return redirect()->route(config('quickadmin.route').'.kategori.index');
	}

    /**
     * Mass delete function from index page
     * @param Request $request
     *
     * @return mixed
     */
    public function massDelete(Request $request)
    {
        if ($request->get('toDelete') != 'mass') {
            $toDelete = json_decode($request->get('toDelete'));
            Kategori::destroy($toDelete);
        } else {
            Kategori::whereNotNull('id')->delete();
        }

        return redirect()->route(config('quickadmin.route').'.kategori.index');
    }

}
