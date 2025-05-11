<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Complain;
use Dkpankaj1\Toastr\Services\ToasterService;
use Exception;
use Illuminate\Http\Request;

class ComplainController extends Controller
{
    public function index()
    {
        // $complains = Complain::withTrashed()->latest()->paginate(10);
        $complains = Complain::latest()->paginate(10);

        return view('admin.complains.index', ['complains' => $complains]);

    }
    public function create()
    {
        $problem = [
            'ac gas charging',
            'ac servicing',
            'ac installation',
            'fridge repairing',
            'fridge gas charging',
            'fridge installation',
            'washing machine gas charging',
            'washing machine repairing',
            'washing machine installation',
            'others'
        ];

        return view('admin.complains.create', ['problems' => $problem]);

    }

    public function store(Request $request)
    {

        $request->validate([
            'name' => ['required', 'string', 'max:255', 'min:2'],
            'mobile_number' => ['required', 'numeric', 'digits_between:10,15'],
            'email' => ['required', 'email', 'max:255'],
            'service' => ['required', 'string',],
            'address' => ['required', 'string'],
            'description' => ['required', 'string']
        ]);

        try {

            Complain::create([
                'name' => $request->name,
                'number' => $request->mobile_number,
                'email' => $request->email,
                'service' => $request->service,
                'address' => $request->address,
                'description' => $request->description
            ]);

            ToasterService::success('Complain created successfully.');
            return redirect()->route('admin.complains.index');

        } catch (Exception $e) {

            ToasterService::error('Complain not created successfully.');
            return redirect()->back();

        }

    }
    public function show(Complain $complain)
    {
        return view('admin.complains.show', ['complain' => $complain]);
    }

    public function edit(Complain $complain)
    {
        $problem = [
            'ac gas charging',
            'ac servicing',
            'ac installation',
            'fridge repairing',
            'fridge gas charging',
            'fridge installation',
            'washing machine gas charging',
            'washing machine repairing',
            'washing machine installation',
            'others'
        ];

        return view('admin.complains.edit', ['complain' => $complain, 'problems' => $problem]);

    }

    public function update(Request $request, Complain $complain)
    {

        $request->validate([
            'name' => ['required', 'string', 'max:255', 'min:2'],
            'mobile_number' => ['required', 'numeric', 'digits_between:10,15'],
            'email' => ['required', 'email', 'max:255'],
            'service' => ['required', 'string',],
            'address' => ['required', 'string'],
            'description' => ['required', 'string'],
            'status' => ['required', 'string'],
        ]);

        try {

            $complain->update([
                'name' => $request->name,
                'number' => $request->mobile_number,
                'email' => $request->email,
                'service' => $request->service,
                'address' => $request->address,
                'description' => $request->description,
                'status' => $request->status
            ]);

            ToasterService::success('Complain updated successfully.');
            return redirect()->route('admin.complains.index');

        } catch (Exception $e) {

            ToasterService::error('Complain not updated successfully.');
            return redirect()->back();

        }


    }
    public function destroy(Complain $complain)
    {
        try {

            $complain->delete();
            ToasterService::success('Complain deleted successfully.');
            return redirect()->route('admin.complains.index');

        } catch (Exception $e) {

            ToasterService::error('Complain not deleted successfully.');
            return redirect()->back();

        }


    }
}
