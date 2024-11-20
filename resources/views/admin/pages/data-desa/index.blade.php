@extends('admin.layouts.main')
@section('container')
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">Dashboard | Data Desa</h1>
    </div>

    <h2>Data Desa</h2>
                <div class="table-responsive">
                    <table class="table table-striped table-sm">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>Deskripsi</th>
                                <th>Keterangan</th>
                                <th>Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>1</td>
                                <td>Total Warga</td>
                                <td>5,598</td>
                                <td>
                                    <button class="btn btn-warning btn-sm" data-bs-toggle="modal" data-bs-target="#editDataModal1">Edit</button>
                                    <a href="delete_data.php?id=1" class="btn btn-danger btn-sm" onclick="return confirm('Apakah Anda yakin ingin menghapus?');">Hapus</a>
                                </td>
                            </tr>
                            <tr>
                                <td>2</td>
                                <td>Total KK</td>
                                <td>1,672</td>
                                <td>
                                    <button class="btn btn-warning btn-sm" data-bs-toggle="modal" data-bs-target="#editDataModal2">Edit</button>
                                    <a href="delete_data.php?id=2" class="btn btn-danger btn-sm" onclick="return confirm('Apakah Anda yakin ingin menghapus?');">Hapus</a>
                                </td>
                            </tr>
                            <tr>
                                <td>3</td>
                                <td>Dusun</td>
                                <td>3</td>
                                <td>
                                    <button class="btn btn-warning btn-sm" data-bs-toggle="modal" data-bs-target="#editDataModal3">Edit</button>
                                    <a href="delete_data.php?id=3" class="btn btn-danger btn-sm" onclick="return confirm('Apakah Anda yakin ingin menghapus?');">Hapus</a>
                                </td>
                            </tr>
                            <tr>
                                <td>4</td>
                                <td>Jumlah RT</td>
                                <td>3</td>
                                <td>
                                    <button class="btn btn-warning btn-sm" data-bs-toggle="modal" data-bs-target="#editDataModal4">Edit</button>
                                    <a href="delete_data.php?id=4" class="btn btn-danger btn-sm" onclick="return confirm('Apakah Anda yakin ingin menghapus?');">Hapus</a>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </main>
        </div>
    </div>

    <!-- Modal for Editing Total Warga -->
<div class="modal fade" id="editDataModal1" tabindex="-1" aria-labelledby="editDataModal1Label" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="editDataModal1Label">Edit Total Warga</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form action="edit_data.php?id=1" method="POST">
                    <div class="mb-3">
                        <label for="editTotalWarga" class="form-label">Keterangan</label>
                        <input type="text" class="form-control" id="editTotalWarga" name="nilai" value="5,598" required>
                    </div>
                    <button type="submit" class="btn btn-primary">Update</button>
                </form>
            </div>
        </div>
    </div>
</div>

<!-- Modal for Editing Total KK -->
<div class="modal fade" id="editDataModal2" tabindex="-1" aria-labelledby="editDataModal2Label" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="editDataModal2Label">Edit Total KK</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form action="edit_data.php?id=2" method="POST">
                    <div class="mb-3">
                        <label for="editTotalKK" class="form-label">Keterangan</label>
                        <input type="text" class="form-control" id="editTotalKK" name="nilai" value="1,672" required>
                    </div>
                    <button type="submit" class="btn btn-primary">Update</button>
                </form>
            </div>
        </div>
    </div>
</div>

<!-- Modal for Editing Dusun -->
<div class="modal fade" id="editDataModal3" tabindex="-1" aria-labelledby="editDataModal3Label" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="editDataModal3Label">Edit Dusun</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form action="edit_data.php?id=3" method="POST">
                    <div class="mb-3">
                        <label for="editDusun" class="form-label">Keterangan</label>
                        <input type="text" class="form-control" id="editDusun" name="nilai" value="3" required>
                    </div>
                    <button type="submit" class="btn btn-primary">Update</button>
                </form>
            </div>
        </div>
    </div>
</div>

<!-- Modal for Editing Jumlah RT -->
<div class="modal fade" id="editDataModal4" tabindex="-1" aria-labelledby="editDataModal4Label" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="editDataModal4Label">Edit Jumlah RT</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form action="edit_data.php?id=4" method="POST">
                    <div class="mb-3">
                        <label for="editRT" class="form-label">Keterangan</label>
                        <input type="text" class="form-control" id="editRT" name="nilai" value="3" required>
                    </div>
                    <button type="submit" class="btn btn-primary">Update</button>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection
