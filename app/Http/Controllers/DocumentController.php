<?php

namespace App\Http\Controllers;

use App\Tag;
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
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function index(Request $request)
    {
        $tagParam = $request->tag;
        if ($tagParam) {
            try {
                /** @var Tag $tag */
                $tag = Tag::where('name', $tagParam)->first();
                $documentList = $tag->documents;
                if (count($documentList)) {
                    $documents = Document::whereIn('id', $documentList->pluck('id')->toArray())->orderBy('id', 'desc')->paginate(10);
                }
            } catch (\Exception $e) {
                $documents = Document::orderBy('id', 'desc')->paginate(10);
            }
        } else {
            $documents = Document::orderBy('position', 'desc')->paginate(10);
        }
        return view('documents.list', compact('documents'));
    }

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
