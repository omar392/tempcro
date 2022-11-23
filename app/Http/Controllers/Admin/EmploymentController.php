<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\UpdateServices;
use App\Models\Employment;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Yajra\DataTables\Facades\DataTables;
use Illuminate\Support\Facades\Validator;

class EmploymentController extends Controller
{

    public function __construct()
    {
        $this->middleware('permission:employments-read')->only(['index']);
        $this->middleware('permission:employments-create')->only(['create', 'store']);
        $this->middleware('permission:employments-update')->only(['edit', 'update']);
        $this->middleware('permission:employments-delete')->only(['destroy']);
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        if ($request->ajax()) {
            $data = Employment::get();
            return Datatables::of($data)
                ->addIndexColumn()
                ->addColumn('image', function ($query) {
                    return '
                    <div align="center">
                    <img src="/dashboard/employments/' . $query->image . '" border="0" style=" width: 150px; height: 90px;border-radius: 35px;" class="image-show" />
                    </div>
                    ';
                })
                ->editColumn('active', function ($query) {
                    if ($query->active) {
                        $btn = '
                        <div class="container">
                        <label class="switch">
                          <input type="checkbox" data-id="' . $query->id . '" type="checkbox" id="check"  checked>
                          <div class="slider round"></div>
                        </label>
                      </div>
                      ';
                    } else {
                        $btn = '
                        <div class="container">
                        <label class="switch">
                          <input type="checkbox" data-id="' . $query->id . '" type="checkbox" id="check">
                          <div class="slider round"></div>
                        </label>
                      </div>
                      ';
                    }
                    return $btn;
                })

                ->addColumn('action', function ($row) {
                    if (Auth::guard('admin')->user()->hasPermission('employments-update')) {
                        $Btn = '<a href="' . route("employments.edit", $row->id) . '"><button type="button"
                    class="edit btn btn-success fa fa-edit" data-size="sm" title="Edit"></button></a> &nbsp';
                    }
                    if (Auth::guard('admin')->user()->hasPermission('employments-delete')) {
                        $Btn = $Btn . '<form class="delete"  action="' . route("employments.destroy", $row->id) . '"  method="POST" id="sa-params"
                    style="display: inline-block; right: 50px;" >
                    <input name="_method" type="hidden" value="DELETE">
                    <input type="hidden" name="_token" value="' . csrf_token() . '">
                    <button type="submit" class="delete btn btn-danger fa fa-trash" title=" ' . 'Delete' . ' "></button>
                        </form>';
                    }
                    return $Btn;
                })
                ->rawColumns(['action', 'active', 'image'])
                ->make(true);
        }
        return view('admin.employments.index');
    }

    public function employmentsStatus(Request $request)
    {
        $employment = Employment::find($request->employment_id);
        $employment->active = $request->active;
        $employment->save();
        return response()->json(['status' => 'success', 'data' => $employment]);
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
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $rules = [
            'title_ar' => 'required|string',
            'title_en' => 'required|string',
            'url' => 'required|string',
            'description_ar' => 'required|string',
            'description_en' => 'required|string',
            'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ];

        $validator = Validator::make($request->all(), $rules);

        if ($validator->fails()) {
            return response()->json(['status' => 'fails', 'errors' => $validator->errors()->all()]);
        }

        $input = $request->all();
        $input = $request->all();
        if ($image = $request->file('image')) {
            $destinationPath = 'dashboard/employments/';
            $profileImage = date('YmdHis') . "." . $image->hashName();
            $image->move($destinationPath, $profileImage);
            $input['image'] = "$profileImage";
        }
        Employment::create($input);
        return response()->json(['status' => 'success', 'data' => $input]);
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
        $employment = Employment::findOrFail($id);
        return view('admin.employments.edit', compact('employment'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateServices $request, $id)
    {
        $employment = Employment::findOrFail($id);
        $employment->update([
            'title_ar'       => $request->input('title_ar'),
            'title_en'       => $request->input('title_en'),
            'url'       => $request->input('url'),
            'description_ar'       => $request->input('description_ar'),
            'description_en'       => $request->input('description_en'),
        ]);
        if ($request->file('image')) {
            $file = $request->file('image');
            $filename = date('YmdHi') . $file->hashName();
            $destinationPath = public_path('/dashboard/employments/');
            $file->move($destinationPath, $filename);
            $employment['image'] = $filename;
        }
        $employment->save();
        return response()->json(['status' => 'success', 'data' => $employment]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $employment = Employment::findOrFail($id);
        $employment->delete();
        return response()->json(['status' => 'success']);
    }
}