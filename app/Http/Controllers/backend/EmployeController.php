<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Employe;
use Illuminate\Http\Request;
use Yajra\DataTables\Facades\DataTables;

class EmployeController extends Controller
{
    public function index(Request $request)
    {
        if ($request->ajax()) {
            $query = Employe::select('*');

            return DataTables::of($query)
                ->addColumn('checkbox', function ($row) {
                    return '<input type="checkbox" class="select-item" value="' . $row->id . '">';
                })
                ->editColumn('name', function ($row) {
                    return "<strong class='edit'
                            data-id='{$row->id}'
                            data-name='{$row->name}'
                            data-position='{$row->position}'
                            data-image='{$row->image}''>
                            {$row->name}
                        </strong>";
                })

                ->addColumn('position', function ($row) {
                    return $row->position ?? ''; // nếu có trường address trong DB
                })
                ->addColumn('actions', function ($row) {
                    // Tạo nút Edit/Delete hoặc tương tự
                    return '<a href="' . route('admin.reviews.edit', $row->id) . '" class="btn btn-sm btn-primary">Sửa</a>
                        <button data-id="' . $row->id . '" class="btn btn-sm btn-danger btn-delete">Xóa</button>';
                })
                ->rawColumns(['checkbox', 'name', 'position', 'actions']) // cho phép HTML
                ->make(true);
        }

        return view('backend.employe.index');
    }

    public function store(Request $request)
    {
        $employees = new Employe();
        $this->saveData($request, $employees);

        return redirect()->route('admin.employes.index')->with('success', 'Thêm nhân viên thành công!');
    }

    public function update(Request $request)
    {
        $employees = Employe::findOrFail($request->id);
        $this->saveData($request, $employees);

        return redirect()->route('admin.employes.index')->with('success', 'Cập nhậtnhân viên thành công!');
    }

    protected function saveData(Request $request, Employe $employees)
    {
        $employees->name = $request->name;
        $employees->position = $request->position;
        

        if ($request->hasFile('image')) {
            $file = $request->file('image');
            $filename = time() . '_' . $file->getClientOriginalName();
            $file->move(public_path('storage/employees'), $filename);
            $employees->image = 'employees/' . $filename;
        }

        $employees->save();
    }
}