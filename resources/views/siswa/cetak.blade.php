<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Cetak Kartu Pelajar</title>
    <style>
        .table {
            width: 80%;
        }

        .table,
        .th,
        .td {
            border: 1px solid black;
            border-collapse: collapse;
            padding-left: 5px;

        }
        .page-break { page-break-after: always; }
    </style>
</head>
<body style="font-size: 16px; line-height: 1.6;">
    <table>
        <tr>
            <td><img src="{{asset('dokumen/headersurat.png')}}" width="90px"></td>
        </tr>
        <tr>
            <td align="center">
                <u style="font-size: 30px">KARTU TANDA PELAJAR</u><br />Nomor : 421.8/{{$nisn}}/SMKN7/2020
            </td>
        </tr>
        <tr>
            <td>
                <table style="margin-left: 35px">
                    <tr>
                        <td>Nama</td>
                        <td style="padding-right: 20px; padding-left: 30px">:</td>
                        <td>{{$nama}}</td>
                    </tr>
                    <tr>
                        <td>Nomor Induk Siswa Nasional (NISN)</td>
                        <td style="padding-right: 20px; padding-left: 30px">:</td>
                        <td>{{$nisn}}</td>
                    </tr>
                    <tr>
                        <td>Agama</td>
                        <td style="padding-right: 20px; padding-left: 30px">:</td>
                        <td>{{$agama}}</td>
                    </tr>
                    <tr>
                        <td>Jenis Kelamin</td>
                        <td style="padding-right: 20px; padding-left: 30px">:</td>
                        <td>{{$jenkel}}</td>
                    </tr>
                    <tr>
                        <td>Tempat, Tanggal lahir</td>
                        <td style="padding-right: 20px; padding-left: 30px">:</td>
                        <td>{{$ttl}}</td>
                    </tr>
                    <tr>
                        <td>Alamat</td>
                        <td style="padding-right: 20px; padding-left: 30px">:</td>
                        <td>{{$alamat}}</td>
                    </tr>
                </table>
            </td>
        </tr>
        <tr>
            <td><div style="font-size: 20px;border: solid; font-weight: bold; width: 300px; margin: auto; text-align: center">{{$jurusan}}</div></td>
        </tr>
        <tr>
            <td align="center">
                <div style="margin-bottom: -200px;">
                     @if(file_exists('foto/'.$nisn.'.jpg'))
                            <img src="{{asset('foto/'.$nisn.'.jpg')}}" height="150px"  />
                            @else
                            <img src="{{asset('foto/nofoto.png')}}" height="150px" />
                            @endif
                </div>

            </td>
        </tr>
        <tr>
            <td>
                <div style=" margin-left:auto; margin-right:0; width: 250px; text-align: center">
                                    Pontianak, 14 Juni 2020<br />
                                    Kepala SMK Negeri 7 Pontianak<br />
                                    <img src="{{asset('admin/ttdkepsek_abriyandi.png')}}" width="100px" style="margin-top: -20px; margin-bottom:-40px" /><br />
                                    <b style="border-bottom: 1px solid black;">ABRIYANDI, S.Pd, M.Si.</b><br />
                                    NIP. 19741009 199903 1 006

                </div>
            </td>
        </tr>
    </table>


</body>
</html>
