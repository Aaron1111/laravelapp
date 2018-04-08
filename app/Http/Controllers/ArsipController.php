<?php

namespace App\Http\Controllers;
use DB;
use App\Arsip;
use Illuminate\Http\Request;
use Validator;
use Session;

class ArsipController extends Controller
{
	public function create()
	{
		return view ('arsip.create');
	} 

	public function index()
	{
		$halaman ='arsip';
		$arsip_list = Arsip::orderBy('negara', 'asc')->paginate(3);
		$jumlah_arsip = Arsip::count();
		return view ('arsip.index', compact('halaman', 'arsip_list', 'jumlah_arsip'));
	}



	public function store(Request $request)
	{
		$input = $request->all();

		$validator = Validator::make($input,[
			'no_dokumen' => 'required|digits:9|unique:arsip,no_dokumen',
			'negara' => 'required|alpha',
			'tahun' => 'required|digits:4',
			'judul' => 'required|string|max:50',
			'tipe' => 'required|in:Rahasia,Umum',
		]);

		if ($validator->fails()){
			return redirect ('arsip/create')->withInput()->withErrors($validator);
		}

		Arsip::create($input);

		Session::flash('flash_message', 'Data berhasil disimpan.');

		return redirect ('arsip');
	}

	public function show($id)
	{
		$halaman = 'arsip';
		$arsip = Arsip::findOrFail($id);
		return view ('arsip.show', compact('halaman', 'arsip'));
	}

	public function edit($id)
	{
		$arsip = Arsip::findOrFail($id);
		return view('arsip.edit', compact('halaman', 'arsip'));
	}

	public function update($id, Request $request)
	{
		$arsip = Arsip::findOrFail($id);
		$input = $request->all();
		

		$validator = Validator::make($input,[
			'no_dokumen' => 'required|digits:9|unique:arsip,no_dokumen',
			'negara' => 'required|alpha',
			'tahun' => 'required|digits:4',
			'judul' => 'required|string|max:50',
			'tipe' => 'required|in:Rahasia,Umum',
			]);

if ($validator->fails()){
			return redirect ('arsip/' . $id . '/edit')->withInput()
			->withErrors($validator);
		}

		$arsip->update($request->all());
		Session::flash('flash_message', 'Data berhasil diupdate.');	
		return redirect ('arsip');
	}

	public function destroy($id)
	{
		$arsip = Arsip::findOrFail($id);
		$arsip->delete();
		return redirect ('arsip');
	}
}
