<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambill Data Buku</title>
</head>

<body>
    <table border="1" cellpadding="5px">
        <tr>
            <th>id_buku</th>
            <th>judul</th>
            <th>penulis</th>
            <th>foto</th>
            <th>id_jenis</th>
        </tr>
        <?php
        include "koneksi.php";
        $hasil = mysqli_query($kon, "SELECT * FROM book ORDER BY id_buku asc");
        $no = 0;
        while ($data = mysqli_fetch_array($hasil)) :
            $no++;
        ?>
            <tr>
                <td><?php echo $no; ?></td>
                <td><?php echo $data['id_buku']; ?></td>
                <td><?php echo $data['judul']; ?></td>
                <td><?php echo $data['penulis']; ?></td>
                <td><?php echo $data['foto']; ?></td>
                <td>
                    <button id="<?php echo $data['id_buku']; ?>" class="hapus"> Hapus </button>
                </td>
            </tr>
        <?php endwhile; ?>
    </table>
    <script type='text/javascript'>
        $(document).on('click', '.hapus', function() {
            var id = $(this).attr('id');
            $.ajax({
                type: 'POST',
                url: "hapus.php",
                data: {
                    id: id
                },
                success: function() {
                    $('#tampil_data').load("tampil.php");
                },
                error: function(response) {
                    console.log(response.responseText);
                }
            });
        });
    </script>
</body>

</html>