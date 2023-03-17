<div class="card-body" style="width:700px; font-family:'Courier New', Courier, monospace">
    <h3>
        KWITANSI PEMBAYARAN SPP
    </h3>
    <table>
        <td colspan="4">
            <hr>
        </td>
        <tr>
            <td>Tanggal Bayar</td>
            <td>:</td>
            <td style="text-align: right">
                {{ $pembayaran->tgl_bayar }}
            </td>
        </tr>

        <td colspan="4">
            <hr>
        </td>
        <tr>
            <td>ID Pembayaran</td>
            <td>:</td>
            <td>
                {{ $pembayaran->id_pembayaran }}
            </td>
        </tr>

        <tr>
            <td>Nama Siswa</td>
            <td>:</td>
            <td>
                {{ $pembayaran->nama_siswa }}
            </td>
        </tr>

        <tr>
            <td>NISN</td>
            <td>:</td>
            <td>
                {{ $pembayaran->nisn }}
            </td>
        </tr>
        <tr>
            <td>NIS</td>
            <td>:</td>
            <td>
                {{ $pembayaran->nis }}
            </td>
        </tr>

        <tr>
            <td>Kelas</td>
            <td>:</td>
            <td>
                {{ $pembayaran->nama_kelas }}
            </td>
        </tr>

        <tr>
            <td>Tahun Spp</td>
            <td> : </td>
            <td>{{ $pembayaran->tahun }}</td>
        </tr>

        <tr>
            <td>Petugas</td>
            <td> : </td>
            <td>{{ $pembayaran->nama_petugas }}</td>
        </tr>

        <td colspan="4">
            <hr>
        </td>

        <tr>
            <td>Total Harga</td>
            <td>:</td>
            <td style="text-align: right;">
                {{ $pembayaran->nominal }}
            </td>
        </tr>

        <td colspan="4">
            <hr>
        </td>

        <tr>
            <td>Total Bayar</td>
            <td>:</td>
            <td style="padding-left:180px">
                {{ $pembayaran->jumlah_bayar }}
            </td>
        </tr>

        <td colspan="4">
            <hr>
        </td>
    </table>
</div>