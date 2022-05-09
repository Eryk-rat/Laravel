<?php

namespace App\Http\Controllers;

use App\Http\Requests\Createtest_libraryRequest;
use App\Http\Requests\Updatetest_libraryRequest;
use App\Repositories\test_libraryRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Response;

class test_libraryController extends AppBaseController
{
    /** @var test_libraryRepository $testLibraryRepository*/
    private $testLibraryRepository;

    public function __construct(test_libraryRepository $testLibraryRepo)
    {
        $this->testLibraryRepository = $testLibraryRepo;
    }

    /**
     * Display a listing of the test_library.
     *
     * @param Request $request
     *
     * @return Response
     */
    public function index(Request $request)
    {
        $testLibraries = $this->testLibraryRepository->all();

        return view('test_libraries.index')
            ->with('testLibraries', $testLibraries);
    }

    /**
     * Show the form for creating a new test_library.
     *
     * @return Response
     */
    public function create()
    {
        return view('test_libraries.create');
    }

    /**
     * Store a newly created test_library in storage.
     *
     * @param Createtest_libraryRequest $request
     *
     * @return Response
     */
    public function store(Createtest_libraryRequest $request)
    {
        $input = $request->all();

        $testLibrary = $this->testLibraryRepository->create($input);

        Flash::success('Test Library saved successfully.');

        return redirect(route('testLibraries.index'));
    }

    /**
     * Display the specified test_library.
     *
     * @param int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $testLibrary = $this->testLibraryRepository->find($id);

        if (empty($testLibrary)) {
            Flash::error('Test Library not found');

            return redirect(route('testLibraries.index'));
        }

        return view('test_libraries.show')->with('testLibrary', $testLibrary);
    }

    /**
     * Show the form for editing the specified test_library.
     *
     * @param int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $testLibrary = $this->testLibraryRepository->find($id);

        if (empty($testLibrary)) {
            Flash::error('Test Library not found');

            return redirect(route('testLibraries.index'));
        }

        return view('test_libraries.edit')->with('testLibrary', $testLibrary);
    }

    /**
     * Update the specified test_library in storage.
     *
     * @param int $id
     * @param Updatetest_libraryRequest $request
     *
     * @return Response
     */
    public function update($id, Updatetest_libraryRequest $request)
    {
        $testLibrary = $this->testLibraryRepository->find($id);

        if (empty($testLibrary)) {
            Flash::error('Test Library not found');

            return redirect(route('testLibraries.index'));
        }

        $testLibrary = $this->testLibraryRepository->update($request->all(), $id);

        Flash::success('Test Library updated successfully.');

        return redirect(route('testLibraries.index'));
    }

    /**
     * Remove the specified test_library from storage.
     *
     * @param int $id
     *
     * @throws \Exception
     *
     * @return Response
     */
    public function destroy($id)
    {
        $testLibrary = $this->testLibraryRepository->find($id);

        if (empty($testLibrary)) {
            Flash::error('Test Library not found');

            return redirect(route('testLibraries.index'));
        }

        $this->testLibraryRepository->delete($id);

        Flash::success('Test Library deleted successfully.');

        return redirect(route('testLibraries.index'));
    }

    public function reeed(){
        $text = json_decode(file_get_contents(public_path() . "/datasets.git/amazon.books.json", true));
        $colection = collect($text);
        foreach ($colection as $texts)
                {
                    //echo 'id : ';var_dump($texts->_id);
                    echo 'strony : ';var_dump($texts->title);
                    //print json_encode($texts['title']);
                   
                }
    }
}
