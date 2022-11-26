<?php

namespace App\Http\Controllers;

use App\Models\Attachment;

class AttachmentController extends Controller
{
    public function index()
    {
        $attachments = Attachment::all();
        dd($attachments->toArray());
        return view('attachments.index', compact('attachments'));
    }
}
