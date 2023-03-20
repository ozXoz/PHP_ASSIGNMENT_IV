<?php

namespace App\Http\Controllers\Admin;

use App\Models\Client;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Validator;

class ClientController extends Controller
{

    /**
     * Construct
     * 
     */
    public function __construct()
    {
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        return view('admin.clients.index', ['clients' => Client::get()]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.clients.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        $validator = Validator::make($request->all(), [
            'company_name' => 'required|max:255',
            'business_number' => 'required|max:255',
            'first_name' => 'required|max:255',
            'last_name' => 'required|max:255',
            'phone_number' => 'required|max:255',
            'cell_number' => 'required|max:255',
            'carriers' => 'required|max:255'
        ]);

        if ($validator->fails()) return redirect()->back()->withErrors($validator->errors());

        $client = new Client();

        $client->company_name = $request->get('company_name');
        $client->business_number = $request->get('business_number');
        $client->first_name = $request->get('first_name');
        $client->last_name = $request->get('last_name');
        $client->phone_number = $request->get('phone_number');
        $client->cell_number = $request->get('cell_number');
        $client->carriers = $request->get('carriers');
        $client->hst = $request->get('hst', 1);
        $client->website = $request->get('hst');

        $client->status = $request->get('status', 0);

        $client->save();
        logAction(\Auth::user()->id, 'clients', 'add client', $request->ip());

        return redirect()->intended(route('admin.clients'));
    }

    /**
     * Display the specified resource.
     *
     * @param User $client
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function show(Client $client, Request $request)
    {
        logAction(\Auth::user()->id, 'clients', 'add client', $request->ip());
        return view('admin.clients.show', ['client' => $client]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param User $client
     * @return \Illuminate\Http\Response
     */
    public function edit(Client $client)
    {
        return view('admin.clients.edit', ['client' => $client]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param User $client
     * @return mixed
     */
    public function update(Request $request, Client $client)
    {
        $validator = Validator::make($request->all(), [
            'company_name' => 'required|max:255',
            'business_number' => 'required|max:255',
            'first_name' => 'required|max:255',
            'last_name' => 'required|max:255',
            'phone_number' => 'required|max:255',
            'cell_number' => 'required|max:255',
            'carriers' => 'required|max:255'
        ]);

        if ($validator->fails()) return redirect()->back()->withErrors($validator->errors());

        $client->company_name = $request->get('company_name');
        $client->business_number = $request->get('business_number');
        $client->first_name = $request->get('first_name');
        $client->last_name = $request->get('last_name');
        $client->phone_number = $request->get('phone_number');
        $client->cell_number = $request->get('cell_number');
        $client->carriers = $request->get('carriers');
        $client->hst = $request->get('hst', $client->hst);
        $client->website = $request->get('hst', $client->website);

        $client->status = $request->get('status', 0);

        $client->save();
        logAction(\Auth::user()->id, 'clients', 'update client', $request->ip());

        return redirect()->intended(route('admin.clients'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id, Request $request)
    {
        $status = Client::destroy($id);

        logAction(\Auth::user()->id, 'clients', 'delete client', $request->ip());
        if($status)
        {
            return redirect()->route('admin.clients')->withFlashSuccess('User Deleted Successfully!');
        }

        return redirect()->route('admin.clients')->withFlashDanger('Unable to Delete User!');
    }
}
