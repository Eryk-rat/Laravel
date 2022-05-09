<?php

namespace App\Http\Controllers;

use App\Http\Requests\Createtest_library_2Request;
use App\Http\Requests\Updatetest_library_2Request;
use App\Repositories\test_library_2Repository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Response;

class test_library_2Controller extends AppBaseController
{
    /** @var test_library_2Repository $testLibrary2Repository*/
    private $testLibrary2Repository;

    public function __construct(test_library_2Repository $testLibrary2Repo)
    {
        $this->testLibrary2Repository = $testLibrary2Repo;
    }

    /**
     * Display a listing of the test_library_2.
     *
     * @param Request $request
     *
     * @return Response
     */
    public function index(Request $request)
    {
        $testLibrary2s = $this->testLibrary2Repository->all();

        return view('test_library_2s.index')
            ->with('testLibrary2s', $testLibrary2s);
    }

    /**
     * Show the form for creating a new test_library_2.
     *
     * @return Response
     */
    public function create()
    {
        return view('test_library_2s.create');
    }

    /**
     * Store a newly created test_library_2 in storage.
     *
     * @param Createtest_library_2Request $request
     *
     * @return Response
     */
    public function store(Createtest_library_2Request $request)
    {
        $input = $request->all();

        $testLibrary2 = $this->testLibrary2Repository->create($input);

        Flash::success('Test Library 2 saved successfully.');

        return redirect(route('testLibrary2s.index'));
    }

    /**
     * Display the specified test_library_2.
     *
     * @param int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $testLibrary2 = $this->testLibrary2Repository->find($id);

        if (empty($testLibrary2)) {
            Flash::error('Test Library 2 not found');

            return redirect(route('testLibrary2s.index'));
        }

        return view('test_library_2s.show')->with('testLibrary2', $testLibrary2);
    }

    /**
     * Show the form for editing the specified test_library_2.
     *
     * @param int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $testLibrary2 = $this->testLibrary2Repository->find($id);

        if (empty($testLibrary2)) {
            Flash::error('Test Library 2 not found');

            return redirect(route('testLibrary2s.index'));
        }

        return view('test_library_2s.edit')->with('testLibrary2', $testLibrary2);
    }

    /**
     * Update the specified test_library_2 in storage.
     *
     * @param int $id
     * @param Updatetest_library_2Request $request
     *
     * @return Response
     */
    public function update($id, Updatetest_library_2Request $request)
    {
        $testLibrary2 = $this->testLibrary2Repository->find($id);

        if (empty($testLibrary2)) {
            Flash::error('Test Library 2 not found');

            return redirect(route('testLibrary2s.index'));
        }

        $testLibrary2 = $this->testLibrary2Repository->update($request->all(), $id);

        Flash::success('Test Library 2 updated successfully.');

        return redirect(route('testLibrary2s.index'));
    }

    /**
     * Remove the specified test_library_2 from storage.
     *
     * @param int $id
     *
     * @throws \Exception
     *
     * @return Response
     */
    public function destroy($id)
    {
        $testLibrary2 = $this->testLibrary2Repository->find($id);

        if (empty($testLibrary2)) {
            Flash::error('Test Library 2 not found');

            return redirect(route('testLibrary2s.index'));
        }

        $this->testLibrary2Repository->delete($id);

        Flash::success('Test Library 2 deleted successfully.');

        return redirect(route('testLibrary2s.index'));
    }
}
