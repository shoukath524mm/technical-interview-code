<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Job as Model;
use App\Http\Requests\Job as JobRequest;


class Job extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return Response
    */
    public function index()
    {
        $jobs = Model::collect();
        return $jobs;
        //return JobResource::collection($jobs);
    }


    /**
     * Store a newly created resource in storage.
     *
     * @param  Request  $request
     *
     * @return Response
     */
    public function store(JobRequest $request)
    {
        
        $this->request = $request;
        Model::create($this->request->all());
    }
}
