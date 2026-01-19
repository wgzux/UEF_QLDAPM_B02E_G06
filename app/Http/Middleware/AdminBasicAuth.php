<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class AdminBasicAuth
{
    /**
     * Handle an incoming request.
     * Use HTTP Basic auth and validate against ADMIN_PASSWORD env var.
     */
    public function handle(Request $request, Closure $next)
    {
        $user = $request->getUser();
        $pass = $request->getPassword();

        $adminUser = env('ADMIN_USER', 'admin');
        $adminPass = env('ADMIN_PASSWORD', 'adminpass');

        if ($user === $adminUser && $pass === $adminPass) {
            return $next($request);
        }

        $headers = ['WWW-Authenticate' => 'Basic realm="Admin Area"'];
        return response('Unauthorized', 401, $headers);
    }
}
