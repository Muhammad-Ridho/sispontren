<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use RealRashid\SweetAlert\Facades\Alert;
use App\Models\Santri;
use Carbon\Carbon;
use Session;
use App\User;
use Auth;
use Illuminate\Support\Facades\DB;

class SisSantriController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('sispontren.santri.index', [
            'dtsantri' => DB::table('dtsantri')->paginate(15)
        ]);

        $dtsantri = Santri::where([
            ['noInduk', '!=', Null],
            [function ($query) use ($request){
                if(($keyword = $request->Keyword)){
                    $query->orwhere('noInduk','LIKE','%'.$keyword.'%')
                    ->orwhere('namaSantri','LIKE','%'.$keyword.'%')
                    ->orwhere('nisn','LIKE','%'.$keyword.'%')
                    ->orwhere('jnsKelamin','LIKE','%'.$keyword.'%')->get();
                }
            }]
        ])
        
        ->orderBy("namaSantri", "desc")
        ->pagination(50);
        return view ('sispontren.santri.index', compact('dtsantri'))
            ->with('i', (request()->input('page', 1)-1)*5);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view ('sispontren.santri.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'noInduk'   => 'required|string',
            'nisn'  => 'required|string'
        ]);

        Santri::create([
            'noInduk'   => $request->get('noInduk'),
            'tglMasuk'   => $request->get('tglMasuk'),
            'nisn'   => $request->get('nisn'),
            'namaSantri'   => $request->get('namaSantri'),
            'tmpLahir'   => $request->get('tmpLahir'),
            'tglLahir'   => $request->get('tglLahir'),
            'jnsKelamin'   => $request->get('jnsKelamin'),
            'alamat'   => $request->get('alamat'),
            'statusSosial'   => $request->get('statusSosial'),
            'statusStudi'   => $request->get('statusStudi'),
            'tglKeluar'   => $request->get('tglKeluar')
            
        ]);

        alert()->success('Berharil.','Data telah ditambahkan!');

        return redirect()->route('santri.index');

    
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
