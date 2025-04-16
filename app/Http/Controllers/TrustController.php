<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Trust;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class TrustController extends Controller
{
    public function Trust(Request $request)
    {
        try {
            $validatedData = $request->validate([
                'site_id' => 'required|string',
                'trust_name' => 'required|string|unique:trust',
                'site_name' => 'required|string',
                'country' => 'string',
                'state' => 'required|string',
                'city' => 'required|string',
                'start_date' => 'nullable|string',
                'end_date' => 'nullable|string',
                'added_date' => 'nullable|string',
                'entity' => 'nullable|string',
                'location_info' => 'nullable|string',
                'address' => 'nullable|string',
                'occupation' => 'nullable|string',
                'doc_req' => 'nullable|string',
                'change_since_last_month' => 'nullable|string',
                'employer' => 'nullable|string',
                'remark' => 'nullable|string',
            ]);

            $newRecord = new Trust;

            $newRecord->site_id = $validatedData['site_id'];
            $newRecord->trust_name = $validatedData['trust_name'];
            $newRecord->site_name = $validatedData['site_name'];
            $newRecord->country = $validatedData['country'];
            $newRecord->state = $validatedData['state'];
            $newRecord->city = $validatedData['city'];
            $newRecord->start_date = $validatedData['start_date'];
            $newRecord->end_date = $validatedData['end_date'];
            $newRecord->added_date = $validatedData['added_date'];
            $newRecord->entity = $validatedData['entity'];
            $newRecord->location_info = $validatedData['location_info'];
            $newRecord->address = $validatedData['address'];
            $newRecord->occupation = $validatedData['occupation'];
            $newRecord->doc_req = $validatedData['doc_req'];
            $newRecord->change_since_last_month = $validatedData['change_since_last_month'];
            $newRecord->employer = $validatedData['employer'];
            $newRecord->remark = $validatedData['remark'];

            $newRecord->save();

        } catch (\Exception $e) {
            $message = 'Error saving data: ' . $e->getMessage();
        }
        return redirect()->route('addtrust')->with('success', 'trust-added');
    }

    public function editTrust($id)
    {
        $trust = Trust::findOrFail($id);

        return view('edittrust', compact('trust'));
    }

    public function updateTrust(Request $request, $id)
    {
        $request->validate([
            'site_id' => 'required|string',
            'trust_name' => 'required|string|unique:trust,trust_name,' . $id,
            'site_name' => 'required|string',
            'country' => 'string',
            'state' => 'required|string',
            'city' => 'required|string',
            'start_date' => 'nullable|string',
            'end_date' => 'nullable|string',
            'added_date' => 'nullable|string',
            'entity' => 'nullable|string',
            'location_info' => 'nullable|string',
            'address' => 'nullable|string',
            'occupation' => 'nullable|string',
            'doc_req' => 'nullable|string',
            'change_since_last_month' => 'nullable|string',
            'employer' => 'nullable|string',
            'remark' => 'nullable|string',
        ]);

        try {
            $trust = Trust::findOrFail($id);

            $trust->update($request->all());

            return redirect()->route('search_trusts')->with('success', 'Trust updated successfully');
        } catch (\Exception $e) {

            return redirect()->route('edittrust')->with('error', 'Error updating trust: ' . $e->getMessage());
        }
    }

    public function filterResults(Request $request)
    {
        $query = $request->searchInput;
        $state = $request->state;
        $city = $request->city;

        $trusts = Trust::search($query)->paginate(10);
        // $trusts->filter(function($trust))Where('state',$state)->Where('city',$city)->get();

        return view('search_trusts', compact('trusts'));
    }




    public function deleteTrust($id)
    {
        try {
            $trust = Trust::findOrFail($id);

            $trust->delete();

            return redirect()->route('search_trusts')->with('success', 'Trust deleted successfully');
        } catch (\Exception $e) {

            return redirect()->route('search_trusts')->with('error', 'Error deleting trust: ' . $e->getMessage());
        }
    }
}
