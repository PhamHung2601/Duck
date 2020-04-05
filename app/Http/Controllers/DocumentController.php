<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Document;

/**
 * Class DocumentController
 * @package App\Http\Controllers
 */
class DocumentController extends Controller
{
    /**
     * @param Request $request
     * @param $id
     * @param $slug
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector|\Illuminate\View\View
     */
    public function view(Request $request, $id, $slug)
    {
        $document = Document::find($id);
        if (empty($document) || empty($document->id)) {
            return Redirect('/');
        }
        return view('documents.view', compact('document'));
    }
}
