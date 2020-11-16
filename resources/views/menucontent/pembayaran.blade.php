@extends('mainpage')
@section('contentmenu')
    
<div id="tengah">
    <div id="judulhalaman">
        <strong>Input Pembayaran</strong>
    </div>

    <form id="carijual" name="carijual" action="">
        <table border="0">
            <tbody>
                <tr>
                    <td>Nama Pelanggan</td>
                    <td>Tanggal Awal</td>
                    <td>Tanggal Akhir</td>
                    <td>&nbsp;</td>
                </tr>
                <tr>
                    <td><input name="nama" type="text" id="nama"></td>
                    <td><input name="tanggalawal" type="text" id="datepickerawal_J" class="hasDatepicker"></td>
                    <td><input name="tanggalakhir" type="text" id="datepickerakhir_J" class="hasDatepicker"></td>
                    <td><input name="tampil" id="tampil" type="submit" value="Tampilkan"></td>
                </tr>
            </tbody>
        </table>
    </form>
    <table>
        <tbody>
            <tr>
                <td id="namaField">Nama Pelanggan</td>
                <td id="namaField">Tanggal Penjualan</td>
                <td id="namaField">Tanggal JatuhTempo</td>
                <td id="namaField">Total Harga</td>
                <td id="namaField">Jumlah Bayar</td>
                <td id="namaField">Piutang</td>
            </tr>
            <tr>
                <td>&nbsp;</td>
                <td>&nbsp;</td>
                <td>&nbsp;</td>
                <td>&nbsp;</td>
                <td>&nbsp;</td>
                <td>&nbsp;</td>
            </tr>
            <tr>
                <td>&nbsp;</td>
                <td>&nbsp;</td>
                <td>&nbsp;</td>
                <td>&nbsp;</td>
                <td>&nbsp;</td>
                <td>&nbsp;</td>
            </tr>
            <tr>
                <td>&nbsp;</td>
                <td>&nbsp;</td>
                <td>&nbsp;</td>
                <td>&nbsp;</td>
                <td>&nbsp;</td>
                <td>&nbsp;</td>
            </tr>
            <tr>
                <td>&nbsp;</td>
                <td>&nbsp;</td>
                <td>&nbsp;</td>
                <td>&nbsp;</td>
                <td>&nbsp;</td>
                <td>&nbsp;</td>
            </tr>
            <tr>
                <td>&nbsp;</td>
                <td>&nbsp;</td>
                <td>&nbsp;</td>
                <td>&nbsp;</td>
                <td>&nbsp;</td>
                <td>&nbsp;</td>
            </tr>
        </tbody>
    </table>
</div>

@endsection