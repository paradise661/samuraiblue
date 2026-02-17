<?php

namespace App\Http\Controllers\admin;

use App\Models\Partner;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;


class PartnerController extends Controller
{
    public function index()
    {
        //
        $partners = Partner::paginate(10);

        return view('admin.partners.index', compact('partners'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        return view('admin.partners.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
        // dd($request);
        $input = $request->all();

        $rules = [
            'name' => 'required|min:3',
        ];

        $imagelist = ['image'];

        foreach ($imagelist as $image) {
            if ($request->$image != '') {
                $rules[$image] = 'image';
            }
        }

        $validator = Validator::make($input, $rules);

        if ($validator->fails()) {
            return redirect()->route('partners.create')->withInput()->withErrors($validator);
        }

        foreach ($imagelist as $image) {
            if ($request->$image != '') {
                $imageName = fileUpload($request, $image, 'partner');
                $input[$image] = $imageName;
            }
        }

        $partner = Partner::create($input);

        return redirect()->route('partner.index')->with('success', 'partner added successfully.');
    }

    /**
     * Display the specified resource.
     */
    public function show(Partner $partner)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Partner $partner)
    {
        //
        return view('admin.partners.edit', compact('partner'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Partner $partner)
    {
        //
        $input = $request->all();

        $rules = [
            'name' => 'required|min:3',
        ];

        $imagelist = ['image'];

        foreach ($imagelist as $image) {
            if ($request->$image != '') {
                $rules[$image] = 'image';
            }
        }

        $validator = Validator::make($input, $rules);

        if ($validator->fails()) {
            return redirect()->route('partner.edit', $partner)->withInput()->withErrors($validator);
        }

        foreach ($imagelist as $image) {
            if ($request->$image != '') {

                if ($partner->$image != '') {
                    $file = $partner->$image;
                    removeFile($file);
                }

                $imageName = fileUpload($request, $image, 'partner');
                $input[$image] = $imageName;
            }

            $deleteimage = 'delete' . $image;
            if (isset($input[$deleteimage]) && $input[$deleteimage] == 'on') {

                if ($partner->$image != '') {
                    $file = $partner->$image;
                    removeFile($file);
                }
                $input[$image] = null;
            }
        }

        $partner->update($input);

        return redirect()->route('partner.index')->with('success', 'partner Updated successfully.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Partner $partner)
    {
        //
        $imagelist = ['image'];

        foreach ($imagelist as $image) {
            if ($partner->$image != '') {
                $file = $partner->$image;
                removeFile($file);
            }
        }

        $partner->delete();

        return redirect()->route('partner.index')->with('success', 'partner Deleted successfully.');
    }
}
