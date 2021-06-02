<table class="table table-bordered">
    <thead>
        <tr>
            <th scope="col">No Transaksi</th>
            <th scope="col">Nama</th>
            <th scope="col">Alamat</th>
            <th scope="col">Pesanan</th>
            <th scope="col">Pengiriman</th>
            <th scope="col">Status</th>
        </tr>
    </thead>
    <tbody>
        <?php
        if (!empty($trans)) {
            foreach ($trans as $data) { // Lakukan looping pada variabel siswa dari controller
                echo "<tr>";
                echo "<td>" . $data->id . "</td>";
                echo "<td>" . $data->nama_user . "</td>";
                echo "<td>" . $data->alamat . "</td>";
                echo "<td>" . $data->nama_produk . "</td>";
                echo "<td>" . $data->kurir . "</td>";
                echo "<td>" . $data->status . "</td>";
                echo "</tr>";
            }
        } else {
            echo "<tr><td colspan='7'>
            Data transaksi tidak ditemukan !
            </td></tr>";
        }
        ?>
    </tbody>
</table>