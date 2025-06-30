<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Contact;
use Illuminate\Http\Request;
use Yajra\DataTables\Facades\DataTables;

class ContactController extends Controller
{
    public function index(Request $request)
    {
        if ($request->ajax()) {
            $data = Contact::with(['service.category'])->latest()->get();

            return DataTables::of($data)
                ->addColumn('checkbox', fn($row) => '<input type="checkbox" class="select-item" value="' . $row->id . '">')
                ->editColumn('name', fn($row) => '<strong>' . e($row->name) . '</strong>')
                ->editColumn('website', fn($row) => $row->website ?? 'Không có')
                ->addColumn('service', fn($row) => optional($row->service)->name ?? 'Không có')
                ->addColumn('category', fn($row) => optional(optional($row->service)->category)->name ?? 'Không có')
                ->addColumn('price', fn($row) => optional($row->service)->price ? number_format($row->service->price, 0, ',', '.') . ' đ' : 'N/A')
                ->addColumn('duration', fn($row) => optional($row->service)->duration ?? 'N/A')
                ->editColumn('created_at', fn($row) => $row->created_at->format('d/m/Y H:i'))
                ->addColumn('actions', fn($row) => '
                <button class="btn btn-sm btn-danger btn-delete" data-id="' . $row->id . '" title="Xóa">
                    <i class="fas fa-trash"></i>
                </button>')
                ->rawColumns(['checkbox', 'name', 'actions'])
                ->addIndexColumn()
                ->make(true);
        }

        return view('backend.contact.index');
    }
}