<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Mail\Notif;
use PhpOffice\PhpSpreadsheet\Spreadsheet;
use PhpOffice\PhpSpreadsheet\Writer\Xlsx;
use PhpOffice\PhpSpreadsheet\Writer\Xls;
Use \Carbon\Carbon;
use App\Aspirasi;
use Illuminate\Support\Facades\Mail;
use DB;
use Illuminate\Support\Str;

class AspirasiController extends Controller
{
    
    public function index(){
        return view('content.aspirasi');
    }
    public function admin(){
        $aspirasi = Aspirasi::orderBy('created_at', 'DESC')->get();
        return view('content.asadmin', compact('aspirasi'));
    }
    public function tambah(Request $request){
        $validatedData = $request->validate([
            'nama_aspirasi'=>'required',
            //'email_aspirasi'=>'required|email',
            'no_telp_aspirasi'=>'required',
            'alamat_aspirasi'=>'required',
            'judul_aspirasi'=>'required',
            'instansi_aspirasi'=>'required',
            'isi_aspirasi'=>'required',
            
        ]);
        $data = [
            'nama' => $request->nama_aspirasi,
            'alamat' => $request->alamat_aspirasi,
            'judul' => $request->judul_aspirasi,
            'instansi' => $request->instansi_aspirasi,

            ];
        // Mail::to("stephenababan@gmail.com")->send(new Notif());
        // Aspirasi::create($request->all());
        $aspirasi = new \App\Aspirasi;
		$aspirasi->nama_aspirasi = $request->nama_aspirasi;
		$aspirasi->no_telp_aspirasi = $request->no_telp_aspirasi;
		$aspirasi->alamat_aspirasi = $request->alamat_aspirasi;
		$aspirasi->judul_aspirasi = $request->judul_aspirasi;
		$aspirasi->instansi_aspirasi = $request->instansi_aspirasi;
		$aspirasi->isi_aspirasi = $request->isi_aspirasi;
		$aspirasi->tiket_aspirasi = "AS".strtoupper(Str::random(4));
		$aspirasi->save();
		$tiket = $aspirasi->tiket_aspirasi;
        
        // Mail::to("tio@bps.go.id")->cc("pst5300@bps.go.id")->send(new Notif( $data));
    	return redirect('/tiketaspirasi')->with('tiket',$tiket);
    }
    public function edit($id){
		$aspirasi = Aspirasi::find($id);
		return view('content.editaspirasi', compact('aspirasi'));
    }
    public function update(Request $request, $id){
		$aspirasi = Aspirasi::find($id);
		$aspirasi->update($request->all());
		return redirect('/admin/aspirasi')->with('success','Data Berhasil diupdate');
    }
    public function export(Request $request)
	{
			$spreadsheet = new Spreadsheet();
			$spreadsheet->removeSheetByIndex(0);
			$aspirasi = DB::table('aspirasi')->whereBetween('created_at', ["$request->from_date 00:00:00", "$request->to_date 23:59:59"])->orderBy('created_at', 'DESC')->get();

			$myWorkSheet = new \PhpOffice\PhpSpreadsheet\Worksheet\Worksheet($spreadsheet);

			$spreadsheet->addSheet($myWorkSheet, 0);

			$spreadsheet->setActiveSheetIndex(0);
			$sheet = $spreadsheet->getActiveSheet();


			$sheet->getStyle('B4:K5')->getFill()->setFillType(\PhpOffice\PhpSpreadsheet\Style\Fill::FILL_SOLID)->getStartColor()->setARGB('FCE4D6');
			$sheet->getColumnDimension('B')->setWidth(6);
			$sheet->getColumnDimension('C')->setWidth(28);
			$sheet->getColumnDimension('D')->setWidth(28);
			$sheet->getColumnDimension('E')->setWidth(28);
			$sheet->getColumnDimension('F')->setWidth(54);
			$sheet->getColumnDimension('G')->setWidth(28);
			$sheet->getColumnDimension('H')->setWidth(40);
			$sheet->getColumnDimension('I')->setWidth(54);
			$sheet->getColumnDimension('J')->setWidth(35);
			$sheet->getColumnDimension('K')->setWidth(45);

			$sheet->getStyle('B4:K90')->getAlignment()->setVertical(\PhpOffice\PhpSpreadsheet\Style\Alignment::VERTICAL_CENTER);
			$sheet->getStyle('B4:K5')->getAlignment()->setHorizontal('center');
			$sheet->getStyle('B4:L90')->getAlignment()->setWrapText(true);


			$sheet->setCellValue('B2','Daftar Aspirasi Tanggal : '.$request->from_date.' s/d '.$request->to_date);
			$sheet->getStyle('B2')->getFont()->setBold(true);
			$sheet->getStyle('B2')->getFont()->setSize(20);

			$sheet->setCellValue('B4', 'No.');
			$sheet->setCellValue('C4', 'Nama Pengirim');
			$sheet->setCellValue('D4', 'Email');
			$sheet->setCellValue('E4', 'No. Telp');
			$sheet->setCellValue('F4', 'Alamat');
			$sheet->setCellValue('G4', 'Judul Aspirasi');
			$sheet->setCellValue('H4', 'Instansi Tujuan ');
			$sheet->setCellValue('I4', 'Isi Aspirasi');
			$sheet->setCellValue('J4', 'Tindak Lanjut');
			$sheet->setCellValue('K4', 'Tanggal Masuk Aspirasi');
			

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

			foreach ($aspirasi as $m) {
					$sheet->getStyle('B6:L300')->getAlignment()->setHorizontal('center');
					$sheet->setCellValue('B' . $rows, $no);
					$sheet->setCellValue('C' . $rows, $m->nama_aspirasi);
					$sheet->setCellValue('D' . $rows, $m->email_aspirasi);
					$sheet->setCellValue('E' . $rows, $m->no_telp_aspirasi);
					$sheet->setCellValue('F' . $rows, $m->alamat_aspirasi);
					$sheet->setCellValue('G' . $rows, $m->judul_aspirasi);
					$sheet->setCellValue('H' . $rows, $m->instansi_aspirasi);
					$sheet->setCellValue('I' . $rows, $m->isi_aspirasi);
					$sheet->setCellValue('J' . $rows, $m->tindak_lanjut);
					$sheet->setCellValue('K' . $rows, $m->created_at);
					
					$rows++;
					$no++;
			
				

			}





		

		$date = Carbon::now()->format('d-m-Y');
		$filename = 'Daftar Aspirasi : ('.$date.').xlsx';
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
