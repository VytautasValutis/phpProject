<?php

namespace App\Http\Controllers;

use App\Models\Client;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Validation\Validator as V;

class ClientController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }


    public function index(Request $request)
    {
        $sort = $request->sort ?? '';
        $filter = $request->filter ?? '';
        $per = (int) ($request->per ?? 8);
        $page = $request->page ?? 1;

        $clients = match($filter) {
            'tt' => Client::where('tt', 1),
            'fb' => Client::where('tt', 0),
            default => Client::where('tt', 0)->orWhere('tt', 1)
        };

        $clients = match($sort) {
            'name-asc' => $clients->orderBy('name'),
            'name-desc' => $clients->orderBy('name', 'desc'),
            'surname-asc' => $clients->orderBy('surname'),
            'surname-desc' => $clients->orderBy('surname', 'desc'),
            default => $clients
        };

        $request->session()->put('last-client-view', [
            'sort' => $sort,
            'filter' => $filter,
            'page' => $page,
            'per' => $per,
        ]);

        $clients = $clients->paginate($per)->withQueryString();

        return view('clients.index', [
            'clients' => $clients,
            'sortSelect' => Client::SORT,
            'sort' => $sort,
            'filterSelect' => Client::FILTER,
            'filter' => $filter,
            'perSelect' => Client::PER,
            'per' => $per,
            'page' => $page,
        ]);
    }

    public function create()
    {
        return view('clients.create');
    }

    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'name' => 'required|min:3',
            'surname' => 'required|min:3',
        ]);

        // $validator->after(function(V $validator) {
        //     $validator->errors()->add('fancy', 'error fancy');
        // });

        if($validator->fails()){
            $request->flash();
            return redirect()
                ->back()
                ->withErrors($validator);
        }

        $client = new Client;
        $client->name = $request->name;
        $client->surname = $request->surname;
        $client->tt = isset($request->tt) ? 1 : 0;
        $client->save();
        return redirect()
            ->route('clients-index')
            ->with('ok', 'New clients was ceated')
            ;
    }

    public function show(Client $client)
    {
        return view('clients.show', [
            'client' => $client
        ]);

    }

    public function edit(Request $request, Client $client)
    {
        
        return view('clients.edit', [
            'client' => $client
        ]);
    }

    public function update(Request $request, Client $client)
    {
        $validator = Validator::make($request->all(), [
            'name' => 'required|min:3',
            'surname' => 'required|min:3',
        ]);

        if($validator->fails()){
            $request->flash();
            return redirect()
                ->back()
                ->withErrors($validator)
                ->with('tt', $request->tt ?? 0);
        }

        $client->name = $request->name;
        $client->surname = $request->surname;
        $client->tt = isset($request->tt) ? 1 : 0;
        $client->save();
        return redirect()
            ->route('clients-index', $request->session()->get('last-client-view', []))
            ->With('ok', 'The client was updated')
            ->with('light-up', $client->id)
            ;

    }

    public function destroy(Request $request, Client $client)
    {
        if(!$request->confirm && $client->order->count()) {
            return redirect()
            ->back()
            ->with('delete-modal', ['This client has orders. Do Ypur really want to delete?',
            $client->id]);
        }
        
        $client->delete();
        return redirect()
            ->route('clients-index')
            ->with('info', 'Client removed');
    }
}
