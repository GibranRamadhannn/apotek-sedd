<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class BreadcrumbMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        $routeName = $request->route()->getName();
        $breadcrumbs = [];

        switch ($routeName) {
                // Dashboard
            case 'dashboard.index':
                $breadcrumbs = [
                    ['name' => 'Dashboard', 'url' => '/dashboard'],
                ];
                break;
            case 'dashboard.produk.index':
                $breadcrumbs = [
                    ['name' => 'Dashboard', 'url' => '/dashboard'],
                    ['name' => 'Produk', 'url' => '/dashboard/produk'],
                ];
                break;
            case 'dashboard.pelanggan.index':
                $breadcrumbs = [
                    ['name' => 'Dashboard', 'url' => '/dashboard'],
                    ['name' => 'Pelanggan', 'url' => '/dashboard/pelanggan'],
                ];
                break;
            case 'dashboard.pembelian.index':
                $breadcrumbs = [
                    ['name' => 'Dashboard', 'url' => '/dashboard'],
                    ['name' => 'Pembelian', 'url' => '/dashboard/pembelian'],
                ];
                break;

                // Master
            case 'master.tipe.index':
                $breadcrumbs = [
                    ['name' => 'Master', 'url' => '/master/tipe'],
                ];
                break;

                // POS
            case 'pos.index':
                $breadcrumbs = [
                    ['name' => 'Pos', 'url' => '/pos'],
                ];
                break;

                // List Order
            case 'listorder.index':
                $breadcrumbs = [
                    ['name' => 'List Order', 'url' => '/listorder'],
                ];
                break;

                // Stock
            case 'stock.index':
                $breadcrumbs = [
                    ['name' => 'stock', 'url' => '/stock'],
                ];
                break;
        }

        view()->share('breadcrumbs', $breadcrumbs);

        return $next($request);
    }
}
