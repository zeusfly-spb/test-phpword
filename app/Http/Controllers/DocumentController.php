<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use PhpOffice\PhpWord\PhpWord;
use PhpOffice\PhpWord\IOFactory;
use Symfony\Component\HttpFoundation\BinaryFileResponse;


class DocumentController extends Controller
{
    public function createDoc(Request $request): BinaryFileResponse
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'date' => 'required|date',
            'content' => 'required|string',
        ]);

        $phpWord = new PhpWord();
        $section = $phpWord->addSection();
        $section->addText($request->input('title'));
        $section->addText($request->input('date'));
        $section->addText($request->input('content'));

        $filePath = storage_path('app/public/' . $request->input('title') . '.docx');
        $objWriter = IOFactory::createWriter($phpWord, 'Word2007');
        $objWriter->save($filePath);

        return response()->download($filePath);
    }
}
