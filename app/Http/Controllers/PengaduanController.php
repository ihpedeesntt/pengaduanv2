<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use PhpOffice\PhpSpreadsheet\Spreadsheet;
use PhpOffice\PhpSpreadsheet\Writer\Xlsx;
use PhpOffice\PhpSpreadsheet\Writer\Xls;
Use \Carbon\Carbon;
use App\Pengaduan;
use DB;
use Auth;
use Illuminate\Support\Str;
use App\Http\Controllers\Alert;

use Illuminate\Support\Facades\Mail;
use App\Mail\EmailPengaduan;

class PengaduanController extends Controller
{
    public function index(){
        return view('content.pengaduan');
    }
    public function admin(){
        $pengaduan = Pengaduan::orderBy('created_at', 'DESC')->get();
        return view('content.pengadmin', compact('pengaduan'));
    }
    public function tambah(Request $request){
        $validatedData = $request->validate([
           
            'nama_pelapor'=>'required',
            //'email_pelapor'=>'required|email',
            'no_telp_pelapor'=>'required',
            'alamat_pelapor'=>'required',
            'materi'=>'required',
            'tempat_kejadian'=>'required',
            'tanggal_kejadian'=>'required',
            'terlapor'=>'required',
            'kronologi'=>'required',


		]);
		$data = [
            'nama' => $request->nama_pelapor,
            'alamat' => $request->alamat_pelapor,
            'materi' => $request->materi,
            'instansi' => $request->tempat_kejadian,

            ];
            
        $pengaduan = new \App\Pengaduan;
		$pengaduan->nama_pelapor = $request->nama_pelapor;
		$pengaduan->no_telp_pelapor = $request->no_telp_pelapor;
		$pengaduan->alamat_pelapor = $request->alamat_pelapor;
		$pengaduan->materi = $request->materi;
		$pengaduan->tempat_kejadian = $request->tempat_kejadian;
		$pengaduan->tanggal_kejadian = $request->tanggal_kejadian;
		$pengaduan->terlapor = $request->terlapor;
		$pengaduan->kronologi = $request->kronologi;
		$pengaduan->tiket_pengaduan = "PN".strtoupper(Str::random(4));
		$pengaduan->save();

// 		Pengaduan::create($request->all());
        $tiket = $pengaduan->tiket_pengaduan;
		Mail::to("marlynjeanne@bps.go.id")->send(new EmailPengaduan( $data));
		Mail::to("indra_souri@bps.go.id")->send(new EmailPengaduan( $data));
    	return redirect('/tiketpengaduan')->with('tiket',$tiket);
    }
    public function edit($id){
		$pengaduan = Pengaduan::find($id);
		return view('content.editpengaduan', compact('pengaduan'));
    }
    public function update(Request $request, $id){
		$pengaduan = Pengaduan::find($id);
		$pengaduan->update($request->all());
		return redirect('/admin/pengaduan')->with('success','Data Berhasil diupdate');
    }
    public function export(Request $request)
	{
			$spreadsheet = new Spreadsheet();
			$spreadsheet->removeSheetByIndex(0);
			$pengaduan = DB::table('pengaduan')->whereBetween('created_at', ["$request->from_date 00:00:00", "$request->to_date 23:59:59"])->orderBy('created_at', 'DESC')->get();

			$myWorkSheet = new \PhpOffice\PhpSpreadsheet\Worksheet\Worksheet($spreadsheet);

			$spreadsheet->addSheet($myWorkSheet, 0);

			$spreadsheet->setActiveSheetIndex(0);
			$sheet = $spreadsheet->getActiveSheet();


			$sheet->getStyle('B4:M5')->getFill()->setFillType(\PhpOffice\PhpSpreadsheet\Style\Fill::FILL_SOLID)->getStartColor()->setARGB('FCE4D6');
			$sheet->getColumnDimension('B')->setWidth(6);
			$sheet->getColumnDimension('C')->setWidth(28);
			$sheet->getColumnDimension('D')->setWidth(28);
			$sheet->getColumnDimension('E')->setWidth(28);
			$sheet->getColumnDimension('F')->setWidth(38);
			$sheet->getColumnDimension('G')->setWidth(22);
			$sheet->getColumnDimension('H')->setWidth(40);
			$sheet->getColumnDimension('I')->setWidth(22);
			$sheet->getColumnDimension('J')->setWidth(28);
			$sheet->getColumnDimension('K')->setWidth(40);
			$sheet->getColumnDimension('L')->setWidth(38);
			$sheet->getColumnDimension('M')->setWidth(45);

			$sheet->getStyle('B4:M90')->getAlignment()->setVertical(\PhpOffice\PhpSpreadsheet\Style\Alignment::VERTICAL_CENTER);
			$sheet->getStyle('B4:M5')->getAlignment()->setHorizontal('center');
			$sheet->getStyle('B4:N90')->getAlignment()->setWrapText(true);


			$sheet->setCellValue('B2','Daftar Pengaduan Tanggal : '.$request->from_date. ' s/d '.$request->to_date);
			$sheet->getStyle('B2')->getFont()->setBold(true);
			$sheet->getStyle('B2')->getFont()->setSize(20);

			$sheet->setCellValue('B4', 'No.');
			$sheet->setCellValue('C4', 'Nama Pelapor');
			$sheet->setCellValue('D4', 'Email');
			$sheet->setCellValue('E4', 'No. Telp');
			$sheet->setCellValue('F4', 'Alamat');
			$sheet->setCellValue('G4', 'Materi');
			$sheet->setCellValue('H4', 'Lokus ');
			$sheet->setCellValue('I4', 'Tanggal Kejadian');
			$sheet->setCellValue('J4', 'Terlapor');
			$sheet->setCellValue('K4', 'Kronologi');
			$sheet->setCellValue('L4', 'Tindak Lanjut');
			$sheet->setCellValue('M4', 'Tanggal Masuk Pengaduan');
			

			$sheet->setCellValue('B5','(1)');
			$sheet->setCellValue('C5','(2)');
			$sheet->setCellValue('D5','(3)');
			$sheet->setCellValue('E5','(4)');
			$sheet->setCellValue('F5','(5)');
			$sheet->setCellValue('G5','(6)');
			$sheet->setCellValue('H5','(7)');
			$sheet->setCellValue('I5','(8)');
			$sheet->setCellValue('J5','(9)');
			$sheet->setCellValue('K5','(10)');
			$sheet->setCellValue('L5','(11)');
			$sheet->setCellValue('M5','(12)');

			$styleArray = [
			    'borders' => [
			        'allBorders' => [
			            'borderStyle' => \PhpOffice\PhpSpreadsheet\Style\Border::BORDER_THIN,
			            'color' => ['argb' => '	#000000'],
			        ],
			    ],
			];
			$style2 = [
			    'borders' => [
			        'top' => [
			            'borderStyle' => \PhpOffice\PhpSpreadsheet\Style\Border::BORDER_DOUBLE,
			            'color' => ['argb' => '	#000000'],
			        ],
			    ],
			];
			$style3 = [
			    'borders' => [
			        'allBorders' => [
			            'borderStyle' => \PhpOffice\PhpSpreadsheet\Style\Border::BORDER_DOTTED,
			            'color' => ['argb' => '	#000000'],
			        ],
			    ],
			];
			
			
			
			$rows = 6;
			$no = 1;

			foreach ($pengaduan as $m) {
					$sheet->getStyle('B6:M300')->getAlignment()->setHorizontal('center');
					$sheet->setCellValue('B' . $rows, $no);
					$sheet->setCellValue('C' . $rows, $m->nama_pelapor);
					$sheet->setCellValue('D' . $rows, $m->email_pelapor);
					$sheet->setCellValue('E' . $rows, $m->no_telp_pelapor);
					$sheet->setCellValue('F' . $rows, $m->alamat_pelapor);
					$sheet->setCellValue('G' . $rows, $m->materi);
					$sheet->setCellValue('H' . $rows, $m->tempat_kejadian);
					$sheet->setCellValue('I' . $rows, $m->tanggal_kejadian);
					$sheet->setCellValue('J' . $rows, $m->terlapor);
					$sheet->setCellValue('K' . $rows, $m->kronologi);
					$sheet->setCellValue('L' . $rows, $m->tindak_lanjut);
					$sheet->setCellValue('M' . $rows, $m->created_at);
					
					$rows++;
					$no++;
			
				

			}





		

		$date = Carbon::now()->format('d-m-Y');
		$filename = 'Daftar Pengaduan : ('.$date.').xlsx';
		$writer = new Xlsx($spreadsheet);
		
		header("Pragma: public");
		header("Expires: 0");
		header("Cache-Control: must-revalidate, post-check=0, pre-check=0");
		header("Content-Type: application/force-download");
		header("Content-Type: application/octet-stream");
		header("Content-Type: application/download");;
		header("Content-Disposition: attachment;filename=$filename");
		header("Content-Transfer-Encoding: binary ");
		
		$writer->save("php://output");
		die;
		return view('content.masalah');
	}
}
