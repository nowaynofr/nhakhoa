<?php

namespace App\Http\Controllers;

use App\Models\Benhnhan;
use Illuminate\Http\Request;

class BenhnhanController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $benhnhan = Benhnhan::all();

        return view('benhnhan.index', compact('benhnhan'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('benhnhan.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data = $request->validate([
            'HoVaTen' => 'required',
            'GioiTinh' => 'required',
            'NgaySinh' => 'required|date', 
            'CMND' => 'required|numeric|unique:benhnhan,CMND',
            'DiaChi' => 'required',
            'CanNang' => 'required',
            'ChieuCao' => 'required',
            'NhomMau' => 'required',
        ]);

        Benhnhan::create($data);

        return redirect()->route('benhnhan.index')->with('success', 'Thêm bệnh nhân thành công');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $benhnhan = Benhnhan::find($id);

        return view('benhnhan.show', compact('benhnhan'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $benhnhan = Benhnhan::find($id);

        return view('benhnhan.edit', compact('benhnhan'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $data = $request->validate([
            'HoVaTen' => 'required',
            'GioiTinh' => 'required',
            'NgaySinh' => 'required',
            'CMND' => 'required',
            'DiaChi' => 'required',
            'CanNang' => 'required',
            'ChieuCao' => 'required',
            'NhomMau' => 'required',
        ]);

        $benhnhan = Benhnhan::find($id);
        $benhnhan->update($data);

        return redirect()->route('benhnhan.index')->with('success', 'Cập nhật bệnh nhân thành công');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $benhnhan = Benhnhan::find($id);
        $benhnhan->delete();

        return redirect()->route('benhnhan.index')->with('success', 'Xóa bệnh nhân thành công');
    }
}