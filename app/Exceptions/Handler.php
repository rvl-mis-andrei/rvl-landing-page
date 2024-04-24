<?php

namespace App\Exceptions;

use Illuminate\Foundation\Exceptions\Handler as ExceptionHandler;
use Throwable;

class Handler extends ExceptionHandler
{
    /**
     * The list of the inputs that are never flashed to the session on validation exceptions.
     *
     * @var array<int, string>
     */
    private $message;
    public function __construct(){
        $this->message = [
            '404'=> [
                'status' => '404',
                'message' => 'we are sorry, but the page you requested is not found',
                'return_at' => 'Back To Home',
                'return_url' => 'home'
            ],
            '503'=> [
                'status' => '503',
                'message' => 'we are sorry, but the page you requested is under construction',
                'return_at' => 'Back To Home',
                'return_url' => 'home'
            ],
        ];
    }
    protected $dontFlash = [
        'current_password',
        'password',
        'password_confirmation',
    ];

    /**
     * Register the exception handling callbacks for the application.
     */

    public function register(): void
    {
        $this->reportable(function (Throwable $e) {
            //
        });
    }

    public function render($request, Throwable $exception)
    {
        if ($this->isHttpException($exception)) {
            $status_code = $exception->getStatusCode();
            if (in_array($status_code,[404,503])) {
                return response()->view( 'errors.0001', $this->message[$status_code],503);
            }
        }
        return parent::render($request, $exception);
     }
}
