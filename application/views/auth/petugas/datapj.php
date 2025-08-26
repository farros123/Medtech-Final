    <div class="home">
        <div class="home-content">
            <div class="card tabel" style="margin-right:2rem; margin-top:7rem; margin-left: 4rem;">
                <div align="left" style="margin: 1rem calc(100rem/30);">
                    <table id="example" class="table table-striped table-bordered" style="width:100%">
                        <div style="margin: 2rem;">
                            <a href="<?= base_url('authpetugas/inputpj') ?>" class="btn btn-primary" style="margin-left: -2rem;">+ Input Data Petugas</a>
                        </div>
                        <thead>
                            <tr>
                                <th>IDPJ</th>
                                <th>NAMA</th>
                                <th>NIK/th>
                                <th>HUBUNGAN</th>
                                <th>ALAMAT</th>
                                <th>NOTELP</th>
                                <th>ACTION</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            foreach ($penanggung_jawab as $row)
                                echo "
                                    <tr>
                                        <td width='50'>" . $row['IdPj'] . "</td>
                                        <td width='150'>" . $row['Nama'] . "</td>
                                        <td width='50'>" . $row['Nik'] . "</td>
                                        <td width='50'>" . $row['Hubungan'] . "</td>
                                        <td width='100'>" . $row['Alamat'] . "</td>
                                        <td width='100'>" . $row['Notelp'] . "</td>
                                        <td width='120'> 
                                            <a class='btn btn-info' href='" . base_url('authpetugas/editpj?IdPj=') . "" . $row['IdPj'] . "'>Edit</a> 
                                            <a class='btn btn-danger' href='" . base_url('authpetugas/AksiDelete_P?IdPj=') . "" . $row['IdPj'] . "'>Hapus</a> 
                                        </td>
                                    </tr>
                                ";
                            ?>
                        </tbody>
                    </table>
                </div>    
            </div>
        </div>
    </div>
    <script>
        $(document).ready(function() {
            $('#example').DataTable();
        });
    </script>
    <script src="<?php echo base_url('asset\js') ?>\script.js"></script>
</body>
</html>