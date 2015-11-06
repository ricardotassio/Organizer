<?php

namespace Organizer\Http\Controllers;

use Illuminate\Http\Request;

use Organizer\Http\Requests;
use Organizer\Http\Controllers\Controller;
use Organizer\Client;

class ClientController extends Controller
{

    /**
     * @var Client
     */
    private $client;

    public function __construct(Client $client)
    {
        $this->client = $client;
    }

    public function index()
    {
        return $this->client->all();
    }

    public function store(Request $request)
    {
        return $this->client->create($request->all());
    }

    public function show($id)
    {
        return $this->client->find($id);
    }

    public function destroy($id)
    {
        $this->client->find($id)->delete();
        return $this->client->find($id);
    }

    public function update(Request $request, $id)
    {
        $this->client->find($id)->update($request->all());
        return $this->client->find($id);
    }
}
