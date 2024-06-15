<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
class MasterDataController extends Controller
{
    public function masterdata()
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
        ];
        return view('masterdata', $data);
    }

    public function showBarang(Request $req)
    {
        $sessionLogin = session('loggedInUser');
        $sessionLogin['emp_no'] ?? exit(header("Location: " . route('login')));
        $emp_no = $sessionLogin['emp_no'];
        $name = $sessionLogin['name'];

        try {

            DB::beginTransaction();

            $output = "";

            $q = "SELECT * FROM tbl_barang";

            $data = DB::select($q);

            $output .= '
                <table id="tableBarang" class="table table-responsive table-hover mt-2 p-0" style="font-size: 16px;">
                <thead>
                    <tr style="color: #CD202E; height: 10px;" class="table-danger">
                        <th class="p-3" scope="col">No</th>
                        <th class="p-3" scope="col">Image</th>
                        <th class="p-3" scope="col">Name</th>
                        <th class="p-3" scope="col">Masuk</th>
                        <th class="p-3" scope="col">Keluar</th>
                        <th class="p-3" scope="col">Total</th>
                        <th class="p-3" scope="col">Action</th>
                    </tr>
                </thead>
                <tbody>
            ';

            if ($data) {
                foreach ($data as $i => $r) {
                    $output .= '
                        <tr>
                            <td class="p-3">'. ($i+1).'</td>
                            <td class="p-3"><img src="'. $r->image .'" width="180" alt=""></td>
                            <td class="p-3">'. $r->name .'</td>
                            <td class="p-3">'. $r->masuk .' Qty</td>
                            <td class="p-3">'. $r->keluar .' Qty</td>
                            <td class="p-3">'. $r->total .' Qty</td>
                            <td class="p-3">
                                <a class="btnEdit" data-uuid="'.$r->uuid.'"><img src="'.asset ("icons/edit.svg").'" style="cursor: pointer" alt=""></a>
                                <a class="btnDelete" data-uuid="'.$r->uuid.'"><img src="'.asset ("icons/delete.svg").'" style="cursor: pointer" alt=""></a>
                            </td>
                        </tr>
                    ';
                }
            }

            $output .= '</tbody></table>';

            DB::commit();

            return response()->json($output);

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

    public function insertBarang(Request $req)
    {
        try {

            DB::beginTransaction();

            $image = $req->image;
            $name = $req->name;
            $masuk = $req->masuk;
            $keluar = $req->keluar;
            $total = $req->total;

            DB::table("tbl_barang")->insert([
                "image" => $image,
                "name" => $name,
                "masuk" => $masuk,
                "keluar" => $keluar,
                "total" => $total,
                "uuid" => md5(uniqid(rand(), true)),
                "date" => now(),
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

    public function updateBarang(Request $req)
    {
        try {

            DB::beginTransaction();

            $uuid = $req->uuid;
            $image = $req->image;
            $name = $req->name;
            $masuk = $req->masuk;
            $keluar = $req->keluar;
            $total = $req->total;

            DB::table("tbl_barang")->where('uuid', $uuid)->update([
                "image" => $image,
                "name" => $name,
                "masuk" => $masuk,
                "keluar" => $keluar,
                "total" => $total,
                "date" => now(),
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

    public function deleteBarang(Request $req)
    {
        try {

            DB::beginTransaction();

            $uuid = $req->uuid;
            
            DB::table("tbl_barang")->where('uuid', $uuid)->delete();

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

    public function dataBarang(Request $req)
    {
        try {

            DB::beginTransaction();

            $data = DB::table("tbl_barang")->where('uuid', $req->uuid)->first();

            DB::commit();

            return response()->json($data);

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
}