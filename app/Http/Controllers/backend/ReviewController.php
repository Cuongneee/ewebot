<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\CustomerReview;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Yajra\DataTables\Facades\DataTables;

class ReviewController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        if ($request->ajax()) {
            $query = CustomerReview::select('*');

            return DataTables::of($query)
                ->addColumn('checkbox', function ($row) {
                    return '<input type="checkbox" class="select-item" value="' . $row->id . '">';
                })
                ->editColumn('name', function ($row) {
                    return "<strong class='edit'
                            data-id='{$row->id}'
                            data-name='{$row->name}'
                            data-address='{$row->address}'
                            data-image='{$row->image}'
                            data-description='{$row->description}'>
                            {$row->name}
                        </strong>";
                })
                ->editColumn('description', function ($row) {
                    return "<div>" . Str::limit($row->description, 50) . "</div>";
                })
                ->addColumn('address', function ($row) {
                    return $row->address ?? ''; // nếu có trường address trong DB
                })
                ->addColumn('actions', function ($row) {
                    // Tạo nút Edit/Delete hoặc tương tự
                    return '<a href="' . route('admin.reviews.edit', $row->id) . '" class="btn btn-sm btn-primary">Sửa</a>
                        <button data-id="' . $row->id . '" class="btn btn-sm btn-danger btn-delete">Xóa</button>';
                })
                ->rawColumns(['checkbox', 'name', 'description', 'actions']) // cho phép HTML
                ->make(true);
        }

        return view('backend.review-customer.index');
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
    public function store(Request $request)
    {
        $customerReview = new CustomerReview();
        $this->saveData($request, $customerReview);

        return redirect()->route('admin.reviews.index')->with('success', 'Thêm đánh giá thành công!');
    }

    public function update(Request $request)
    {
        $review = CustomerReview::findOrFail($request->id);
        $this->saveData($request, $review);

        return redirect()->route('admin.reviews.index')->with('success', 'Cập nhật đánh giá thành công!');
    }


    protected function saveData(Request $request, CustomerReview $review)
    {
        $review->name = $request->name;
        $review->address = $request->address;
        $review->description = $request->description ?? '';

        if ($request->hasFile('image')) {
            $file = $request->file('image');
            $filename = time() . '_' . $file->getClientOriginalName();
            $file->move(public_path('storage/review'), $filename);
            $review->image = 'review/' . $filename;
        }

        $review->save();
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
