<?php

namespace App\Filters;

use CodeIgniter\HTTP\RequestInterface;
use CodeIgniter\HTTP\ResponseInterface;
use CodeIgniter\Filters\FilterInterface;

// Admin ONLY Auth Filter
class AdminAuthFilter implements FilterInterface
{
    public function before(RequestInterface $request, $arguments = null)
    {
        $session = session();

        if (!$session->get('isLoggedIn')) {
            return redirect()->to(base_url('/'));
        }

        $userType = $session->get('user_type');
        if (!$this->isAdminLoggedIn()) {
            return response()->setJSON([
                'status' => 'success',
                'redirect_url' => '/home', // Redirect URL on successful login
            ])->setStatusCode(401)->redirect(base_url('/'));
        }
    }
    private function isAdminLoggedIn()
    {
        $session = session();
        if ($session->get('user_type') === 'admin' && $session->get('isLoggedIn')) return true;

        return false;
    }

    public function after(RequestInterface $request, ResponseInterface $response, $arguments = null)
    {
        // Do something here if needed
    }
}
