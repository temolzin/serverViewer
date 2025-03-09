<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ServerDetailController extends Controller
{
    public function index()
    {
        return view('serverDataTable');
    }

    public function getData()
    {
        $path = storage_path('app/private/serverLog.txt');
        $data = [];

        if (file_exists($path)) {
            $file = file_get_contents($path);
            $rows = explode("|", $file);

            $data[] = [
                'hostName'       => $rows[0] ?? '',
                'uptime'         => $rows[1] ?? '',
                'kernelVersion'  => $rows[2] ?? '',
                'status'         => $rows[3] ?? '',
                'cpuCount'       => $rows[4] ?? '',
                'storageTotal'   => $rows[5] ?? '',
                'ipAddresses'    => $rows[6] ?? '',
                'osType'         => $rows[7] ?? '',
                'osVersion'      => $rows[8] ?? '',
                'filesystemInfo' => $rows[9] ?? '',
                'users'          => $rows[10] ?? '',
                'groups'         => $rows[11] ?? '',
                'pythonVersion'  => $rows[12] ?? '',
                'mainIp'         => $rows[13] ?? ''        
            ];
        }

        return response()->json(['data' => $data]);
    }
}
