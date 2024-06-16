<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
class LoginController extends Controller
{
    public function login()
    {   
        $sessionLogin = session('loggedInUser');
        if (!$sessionLogin) {
            return view('login');
        } else {
            return redirect('/index');
        }
    }
    public function register()
    {
        $sessionLogin = session('loggedInUser');
        if (!$sessionLogin) {
            return view('register');
        } else {
            return redirect('/');
        }
    }

    public function auth(Request $req)
    {
        try {

            DB::beginTransaction();

            $employee_no = $req->employee_no;
            $password = $req->password;

            $data = DB::select("SELECT COUNT(tbl_login.emp_no) as auth FROM tbl_login WHERE UPPER(tbl_login.emp_no) LIKE UPPER('%$employee_no%') AND UPPER(tbl_login.password) LIKE UPPER('%$password%')")[0];

            if ($data->auth == 0) {
                return response()->json('ERROR');
            }

            $login = DB::table("tbl_login")->where("emp_no", $employee_no)->first();

            $req->session()->put('loggedInUser', [
                'emp_no' => $login->emp_no,
                'name' => $login->name,
            ]);

            DB::commit();

            return response()->json('SUCCESS');

        } catch (\Throwable $th) {
            return response()->json([
                'MESSAGETYPE' => 'E',
                'MESSAGE' => 'Something went wrong',
                'SERVERMSG' => dd($th->getMessage()),
            ], 400)->header(
                'Accept',
                'application/json'
            );
        }
    }

    public function registerInsert(Request $req)
    {
        try {

            DB::beginTransaction();

            $employee_no = $req->employee_no;
            $password = $req->password;
            $name = $req->name;

            $tbl_login = DB::table('tbl_login')->where("emp_no", $employee_no)->count();

            if ($tbl_login > 0) {
                return response()->json('ERROR');
            }

            DB::table("tbl_login")->insert([
                "emp_no" => $employee_no,
                "password" => $password,
                "name" => $name,
            ]);

            DB::commit();

            return response()->json('SUCCESS');

        } catch (\Throwable $th) {
            return response()->json([
                'MESSAGETYPE' => 'E',
                'MESSAGE' => 'Something went wrong',
                'SERVERMSG' => dd($th->getMessage()),
            ], 400)->header(
                'Accept',
                'application/json'
            );
        }
    }

    public function logout()
    {
        if (session()->has('loggedInUser')) {
            session()->pull('loggedInUser');
            Auth::logout();
            return redirect('/login');
        }
    }
}