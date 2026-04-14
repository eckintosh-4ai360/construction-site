<?php

namespace App\Http\Controllers;

use App\Mail\ContactInquiryMail;
use App\Mail\QuoteRequestMail;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Validator;
use Throwable;

class InquiryController extends Controller
{
    public function contact(Request $request): Response|RedirectResponse
    {
        $validator = Validator::make($request->all(), [
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'email', 'max:255'],
            'subject' => ['required', 'string', 'max:255'],
            'message' => ['required', 'string', 'max:5000'],
        ]);

        if ($validator->fails()) {
            return $this->errorResponse($request, $validator->errors()->first(), 422);
        }

        try {
            Mail::to(config('site.contact_recipient'))->send(
                new ContactInquiryMail($validator->validated())
            );
        } catch (Throwable $exception) {
            report($exception);

            return $this->errorResponse(
                $request,
                'We could not send your message right now. Please try again later.',
                500
            );
        }

        return $this->successResponse($request, 'Your message has been sent. Thank you!');
    }

    public function quote(Request $request): Response|RedirectResponse
    {
        $validator = Validator::make($request->all(), [
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'email', 'max:255'],
            'phone' => ['required', 'string', 'max:50'],
            'message' => ['required', 'string', 'max:5000'],
        ]);

        if ($validator->fails()) {
            return $this->errorResponse($request, $validator->errors()->first(), 422);
        }

        try {
            Mail::to(config('site.quote_recipient'))->send(
                new QuoteRequestMail($validator->validated())
            );
        } catch (Throwable $exception) {
            report($exception);

            return $this->errorResponse(
                $request,
                'We could not send your consultation request right now. Please try again later.',
                500
            );
        }

        return $this->successResponse($request, 'Your quote request has been sent successfully. Thank you!');
    }

    protected function successResponse(Request $request, string $message): Response|RedirectResponse
    {
        if ($request->ajax()) {
            return response('OK');
        }

        return back()->with('status', $message);
    }

    protected function errorResponse(Request $request, string $message, int $status): Response|RedirectResponse
    {
        if ($request->ajax()) {
            return response($message, $status);
        }

        return back()->withInput()->withErrors(['form' => $message]);
    }
}
