    <div class="home">
        <div class="home-content">
            <div class="card tabel" style="margin-right:2rem; margin-top:7rem; margin-left: 4rem;">
                <div align="left" style="margin: 1rem calc(100rem/30);">
                    <table id="example" class="table table-striped table-bordered" style="width:100%">
                        <thead>
                            <tr>
                                <th>NIP PETUGAS</th>
                                <th>KODE REKAM MEDIS</th>
                                <th>TANGGAL PELAYANAN</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            foreach ($Pelayanan as $row)
                                echo "
                                    <tr>
                                        <td>" . $row['NIP'] . "</td>
                                        <td>" . $row['kodeRME'] . "</td>
                                        <td>" . $row['TglPelayanan'] . "</td>
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