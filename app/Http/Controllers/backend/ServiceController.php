<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\ServicePricing;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Str;
use Illuminate\Validation\Rule;
use Yajra\DataTables\Facades\DataTables;

class ServiceController extends Controller
{
    public function index(Request $request)
    {
        if ($request->ajax()) {

            $query = ServicePricing::query()->orderBy('order');


            return DataTables::of($query)
                ->addColumn('checkbox', function ($row) {
                    return '<input type="checkbox" class="select-item" value="' . $row->id . '">';
                })
                ->editColumn('price', function ($row) {
                    return number_format($row->price, 0, ',', '.') . 'đ';
                })

                ->editColumn('slug', function ($row) {
                    return $row->slug;
                })
                ->editColumn('duration', function ($row) {
                    return $row->duration;
                })
                ->editColumn('features', function ($row) {
                    if (is_array($row->features)) {
                        return '<ul><li>' . implode('</li><li>', $row->features) . '</li></ul>';
                    }
                    return '—';
                })
                ->editColumn('is_featured', function ($row) {
                    return $row->is_featured ? '<span class="badge bg-success">Nổi bật</span>' : '<span class="badge bg-secondary">Thường</span>';
                })
                ->editColumn('status', function ($row) {
                    $checked = $row->status ? 'checked' : '';
                    return '
                    <label class="switch" data-id="' . $row->id . '">
                        <input type="checkbox" value="1" ' . $checked . '>
                        <span class="slider round"></span>
                    </label>
                ';
                })
                ->editColumn('created_at', function ($row) {
                    return $row->created_at ? $row->created_at->format('d/m/Y H:i') : '—';
                })

                ->editColumn('posted_at', function ($row) {
                    return !empty($row->posted_at) ? $row->posted_at->format('d/m/Y') : '—';
                })
                ->addColumn('actions', function ($row) {
                    return '
                    <a href="' . route('admin.services.edit', $row->id) . '" class="btn btn-sm btn-primary" title="Sửa">
                        <i class="fas fa-edit"></i>
                    </a>
                    <button class="btn btn-sm btn-danger btn-delete" data-id="' . $row->id . '" title="Xóa">
                        <i class="fas fa-trash"></i>
                    </button>';
                })
                ->rawColumns(['checkbox', 'features', 'is_featured', 'status', 'actions'])
                ->addIndexColumn()
                ->make(true);
        }

        return view('backend.services.index');
    }

    public function create(Request $request)
    {
        $isEdit = false;
        $page = 'Dịch vụ';
        $title = 'Thêm Dịch Vụ';
        $services = null;

        return view('backend.services.form', compact('title', 'page', 'services', 'isEdit'));
    }

    public function edit(Request $request, $id)
    {
        $isEdit = true;
        $page = 'Dịch Vụ';
        $title = 'Sửa Dịch Vụ';
        $services = ServicePricing::findOrFail($id);

        return view('backend.services.form', compact('services', 'title', 'page', 'isEdit'));
    }

    public function validationServices($id = null)
{
    request()->merge([
        'price' => str_replace(['.', ','], '', request('price')),
    ]);

    return request()->validate([
        'name' => 'required|string|max:255',
        'slug' => [
            'required',
            'string',
            Rule::unique('service_pricings', 'slug')->ignore($id),
        ],
        'price' => 'required|numeric|min:0',
        'duration' => 'required|string|max:255',
        'description' => 'nullable|string',
        'features' => 'nullable|string',
        'is_featured' => 'nullable|boolean',
        'order' => 'nullable|integer',
        'seo_title' => 'nullable|string|max:255',
        'seo_description' => 'nullable|string|max:255',
        'seo_keywords' => 'nullable|string',
        'status' => 'nullable|boolean',
    ]);
}


    public function store(Request $request)
    {
        $data = $this->validationServices();

        // Tách từng dòng và loại bỏ dòng trống
        $featuresArray = array_filter(array_map('trim', explode("\n", $request->input('features'))));

        $data['features'] = (array_values($featuresArray)); // reset key mảng
        $data['price'] = (float) str_replace(['.', ','], '', $request->price);

        if (empty($data['slug']) && !empty($data['name'])) {
            $data['slug'] = Str::slug($data['name']);
        }

        if (!empty($data['seo_keywords'])) {
            $keywords = explode(',', $data['seo_keywords']);
            $keywords = array_map('trim', $keywords);
            $data['seo_keywords'] = $keywords;
        }

        ServicePricing::create($data);

        return redirect()->route('admin.services.index')->with('success', 'Tạo dịch vụ thành công!');
    }


   public function update(Request $request, $id)
{
    $service = ServicePricing::findOrFail($id);

    $request->merge([
        'slug' => Str::slug($request->name)
    ]);

    $data = $this->validationServices($id);

    $featuresArray = array_filter(array_map('trim', explode("\n", $request->input('features'))));
    $data['features'] = array_values($featuresArray);
    $data['price'] = (float) str_replace(['.', ','], '', $request->price);
    if (!empty($data['seo_keywords'])) {
            $keywords = explode(',', $data['seo_keywords']);
            $keywords = array_map('trim', $keywords);
            $data['seo_keywords'] = $keywords;
        }

    $service->update($data);
    return redirect()->route('admin.services.index')->with('success', 'Cập nhật dịch vụ thành công!');
}

}
