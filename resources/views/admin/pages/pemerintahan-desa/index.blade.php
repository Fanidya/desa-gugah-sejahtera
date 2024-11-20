@extends('admin.layouts.main')
@section('container')

<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
    <h1 class="h2">Dashboard | Pemerintahan Desa</h1>
</div>

<!-- Struktur Organisasi Section -->
<h2>Struktur Organisasi</h2>
<div class="table-responsive">
    <table class="table table-striped table-sm">
        <thead>
            <tr>
                <th>No</th>
                <th>Deskripsi</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            <!-- Sample Data (Replace this with dynamic data from the database) -->
            <tr>
                <td>1</td>
                <td>Foto Struktur Organisasi</td>
                <td>
                    <button class="btn btn-warning btn-sm" data-bs-toggle="modal" data-bs-target="#editOrganizationModal1">Edit</button>
                    <a href="delete_organization.php?id=1" class="btn btn-danger btn-sm" onclick="return confirm('Apakah Anda yakin ingin menghapus?');">Hapus</a>
                </td>
            </tr>
            <!-- Add more entries as needed -->
        </tbody>
    </table>
</div>

<!-- Program Kerja Section -->
<h2 class="mt-5">Program Kerja</h2>
<button class="btn btn-primary mb-3" data-bs-toggle="modal" data-bs-target="#addProgramModal">Tambah Program Kerja</button>

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
            <!-- Sample Data (Replace this with dynamic data from the database) -->
            <tr>
                <td>1</td>
                <td>Program 1</td>
                <td>Meningkatkan Infrastruktur Desa.</td>
                <td>
                    <button class="btn btn-warning btn-sm" data-bs-toggle="modal" data-bs-target="#editProgramModal1">Edit</button>
                    <a href="delete_program.php?id=1" class="btn btn-danger btn-sm" onclick="return confirm('Apakah Anda yakin ingin menghapus?');">Hapus</a>
                </td>
            </tr>
            <tr>
                <td>2</td>
                <td>Program 2</td>
                <td>Menyejahterakan Masyarakat Desa.</td>
                <td>
                    <button class="btn btn-warning btn-sm" data-bs-toggle="modal" data-bs-target="#editProgramModal2">Edit</button>
                    <a href="delete_program.php?id=2" class="btn btn-danger btn-sm" onclick="return confirm('Apakah Anda yakin ingin menghapus?');">Hapus</a>
                </td>
            </tr>
            <!-- Add more entries as needed -->
        </tbody>
    </table>
</div>

<!-- Modal for Adding Program Kerja -->
<div class="modal fade" id="addProgramModal" tabindex="-1" aria-labelledby="addProgramModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="addProgramModalLabel">Tambah Program Kerja</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form action="add_program.php" method="POST">
                    <div class="mb-3">
                        <label for="programTitle" class="form-label">Deskripsi</label>
                        <input type="text" class="form-control" id="programTitle" name="title" required>
                    </div>
                    <div class="mb-3">
                        <label for="programDescription" class="form-label">Keterangan</label>
                        <textarea class="form-control" id="programDescription" name="description" rows="3" required></textarea>
                    </div>
                    <button type="submit" class="btn btn-primary">Simpan</button>
                </form>
            </div>
        </div>
    </div>
</div>

<!-- Modal for Editing Organizational Structure -->
<div class="modal fade" id="editOrganizationModal1" tabindex="-1" aria-labelledby="editOrganizationModal1Label" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="editOrganizationModal1Label">Edit Struktur Organisasi</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form action="edit_organization.php?id=1" method="POST" enctype="multipart/form-data">
                    <div class="mb-3">
                        <label for="editOrganizationName" class="form-label">Deskripsi</label>
                        <input type="text" class="form-control" id="editOrganizationName" name="name" value="Foto Struktur Organisasi" required>
                    </div>
                    <div class="mb-3">
                        <label for="editOrganizationPhoto" class="form-label">Pilih Foto</label>
                        <input type="file" class="form-control" id="editOrganizationPhoto" name="photo" accept="image/*">
                    </div>
                    <button type="submit" class="btn btn-primary">Update</button>
                </form>
            </div>
        </div>
    </div>
</div>

<!-- Modal for Editing Program Kerja 1 -->
<div class="modal fade" id="editProgramModal1" tabindex="-1" aria-labelledby="editProgramModal1Label" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="editProgramModal1Label">Edit Program Kerja</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form action="edit_program.php?id=1" method="POST">
                    <div class="mb-3">
                        <label for="editProgramTitle" class="form-label">Deskripsi</label>
                        <input type="text" class="form-control" id="editProgramTitle" name="title" value="Program 1" required>
                    </div>
                    <div class="mb-3">
                        <label for="editProgramDescription" class="form-label">Keterangan</label>
                        <textarea class="form-control" id="editProgramDescription" name="description" rows="3" required>Meningkatkan Infrastruktur Desa.</textarea>
                    </div>
                    <button type="submit" class="btn btn-primary">Update</button>
                </form>
            </div>
        </div>
    </div>
</div>

<!-- Modal for Editing Program Kerja 2 -->
<div class="modal fade" id="editProgramModal2" tabindex="-1" aria-labelledby="editProgramModal2Label" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="editProgramModal2Label">Edit Program Kerja</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form action="edit_program.php?id=2" method="POST">
                    <div class="mb-3">
                        <label for="editProgramTitle2" class="form-label">Deskripsi</label>
                        <input type="text" class="form-control" id="editProgramTitle2" name="title" value="Program 2" required>
                    </div>
                    <div class="mb-3">
                        <label for="editProgramDescription2" class="form-label">Keterangan</label>
                        <textarea class="form-control" id="editProgramDescription2" name="description" rows="3" required>Menyejahterakan Masyarakat Desa.</textarea>
                    </div>
                    <button type="submit" class="btn btn-primary">Update</button>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection
