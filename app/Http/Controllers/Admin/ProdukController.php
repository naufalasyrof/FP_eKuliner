<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Pesanan;
use App\Models\Produk;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Validator;
use Yajra\DataTables\DataTables;


class ProdukController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $produk = Produk::all();

        return view('admin.dashboard.produk', compact('produk'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {

        $produk = DB::select('select * from produks');
        return view('admin.dashboard.create', compact('produk'));
    }


    public function store(Request $request)
    {
        $messages = [
            'required' => ':Attribute harus diisi.',
            'email' => 'Isi :attribute dengan format yang benar',
            'numeric' => 'Isi :attribute dengan angka'
        ];
        $validator = Validator::make($request->all(), [
            'nama_produk' => 'required',
            'kategori' => 'required',
            'harga' => 'required|numeric',
            'stok' => 'required',
        ], $messages);

        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();
        }

        // Get File
        $file = $request->file('picture');

        if ($file != null) {
            $originalFilename = $file->getClientOriginalName();
            $encryptedFilename = $file->hashName();

            // Store File
            $file->store('public/files');
        } else {
            $originalFilename = null;
            $encryptedFilename = null;
        }


        // ELOQUENT
        $produk = new produk;
        $produk->nama_produk = $request->nama_produk;
        $produk->kategori = $request->kategori;
        $produk->harga = $request->harga;
        $produk->stok = $request->stok;


        if ($file != null) {
            $produk->original_filename = $originalFilename;
            $produk->encrypted_filename = $encryptedFilename;
        }

        $produk->save();

        return redirect()->route('admin.dashboard.produk');


        // dd($insert);


    }

    public function show(string $id)
    {

        //ELLOQUENT
        $produk = Produk::find($id);

        //tampilan view
        return view('admin.dashboard.show', compact('produk'));
    }


    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
        // ELOQUENT

        $produk = Produk::find($id);
        // Check if the product exists
        if (!$produk) {
            return redirect()->route('admin.dashboard.produk')->with('error', 'Product not found.');
        }
        return view(
            'admin.dashboard.edit',
            compact('produk')
        );
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        // Validate the request data
        $messages = [
            'required' => ':Attribute harus diisi.',
            'email' => 'Isi :attribute dengan format yang benar',
            'numeric' => 'Isi :attribute dengan angka'
        ];
        $validator = Validator::make($request->all(), [
            'firstName' => 'required',
            'lastName' => 'required',
            'email' => 'required|email',
            'age' => 'required|numeric',
        ], $messages);

        // Check if validation fails
        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();
        }

        // Get File
        $file = $request->file('cv');

        if ($file != null) {
            $produk = Produk::find($id);
            $encryptedFilename = 'public/files/' . $produk->encrypted_filename;
            Storage::delete($encryptedFilename);
        }

        if ($file != null) {
            $originalFilename = $file->getClientOriginalName();
            $encryptedFilename = $file->hashName();

            // store
            $file->store('public/files');
        }

        // Save the updated data to the database
        $produk->save();

        // Redirect back to the product listing page with a success message
        return redirect()->route('admin.dashboard.produk')->with('success', 'Product updated successfully.');
    }
    public function destroy($id)
    {
        // Get the product data by its ID
        $produk = Produk::find($id);

        // If the product is not found, return a 404 Not Found response
        if (!$produk) {
            return response()->json(['message' => 'Produk not found'], 404);
        }

        // Check if there are related orders in the pesanans table
        $relatedOrders = Pesanan::where('produk_id', $produk->id)->get();

        // If there are related orders, delete them first
        foreach ($relatedOrders as $order) {
            $order->delete();
        }

        // Delete the associated file, if it exists
        if ($produk->encrypted_filename) {
            $encryptedFilename = 'public/files/' . $produk->encrypted_filename;
            Storage::delete($encryptedFilename);
        }

        // Delete the product from the database
        $produk->delete();

        // Redirect back to the product listing page with a success message
        return redirect()->route('admin.dashboard.produk')->with('success', 'Product deleted successfully.');
    }


    public function getData(Request $request)
    {
        if ($request->ajax()) {
            $produks = Produk::select(['id', 'nama_produk', 'kategori', 'harga', 'stok']);

            return DataTables::of($produks)
                ->addColumn('actions', function ($produk) {
                    return view('produk.actions', compact('produk'));
                })
                ->rawColumns(['actions'])
                ->toJson();
        }
        return view('admin.dashboard.produk');
    }
    // public function getDecryptedGambarAttribute()
    // {
    //     return decrypt( $this->attributes['picture']);
    // }
    // // ...

}
