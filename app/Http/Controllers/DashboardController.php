<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
class DashboardController extends Controller
{
    public function start()
    {
        return view('start');

    }

    public function index()
    {
        $sessionLogin = session('loggedInUser');
        $sessionLogin['emp_no'] ?? exit(header("Location: " . route('login')));
        $emp_no = $sessionLogin['emp_no'];
        $name = $sessionLogin['name'];
        $data = [
            'userInfo' => [
                'emp_no' => $emp_no,
                'name' => $name,
            ],
            "tanggal" => DB::select("SELECT 
                                        DATE_FORMAT(m.month_date, '%Y-%m') AS month, 
                                        COALESCE(SUM(tb.masuk), 0) AS total_masuk, 
                                        COALESCE(SUM(tb.keluar), 0) AS total_keluar
                                    FROM 
                                        (SELECT '2024-01-01' AS month_date
                                        UNION SELECT '2024-02-01'
                                        UNION SELECT '2024-03-01'
                                        UNION SELECT '2024-04-01'
                                        UNION SELECT '2024-05-01'
                                        UNION SELECT '2024-06-01'
                                        UNION SELECT '2024-07-01'
                                        UNION SELECT '2024-08-01'
                                        UNION SELECT '2024-09-01'
                                        UNION SELECT '2024-10-01'
                                        UNION SELECT '2024-11-01'
                                        UNION SELECT '2024-12-01') AS m
                                    LEFT JOIN 
                                        tbl_barang tb ON DATE_FORMAT(tb.date, '%Y-%m') = DATE_FORMAT(m.month_date, '%Y-%m')
                                    GROUP BY 
                                        DATE_FORMAT(m.month_date, '%Y-%m')
                                    ORDER BY 
                                        m.month_date;
                                    "),
            "habis" => DB::select("SELECT * FROM tbl_barang WHERE tbl_barang.total = 0"),
            "ada" => DB::select("SELECT * FROM tbl_barang WHERE tbl_barang.total <> 0 ORDER BY date DESC"),
            "masuk" => DB::select("SELECT SUM(tbl_barang.masuk) AS masuk FROM tbl_barang"),
            "keluar" => DB::select("SELECT SUM(tbl_barang.keluar) AS keluar FROM tbl_barang"),
        ];
        return view('dashboard', $data);
    }
}