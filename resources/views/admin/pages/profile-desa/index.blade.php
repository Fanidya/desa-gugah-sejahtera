@extends('admin.layouts.main')
@section('container')
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">Dashboard | Profil Desa</h1>
    </div>

    <!-- Visi Section -->
    <h2>Visi</h2>
    <button class="btn btn-primary mb-3" data-bs-toggle="modal" data-bs-target="#addVisionModal">Tambah Visi</button>
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
                @foreach ($visi as $v)
                    <tr>
                        <td>{{ $loop->iteration }}</td>
                        <td>{{ $v->title }}</td>
                        <td>{{ $v->description }}</td>
                        <td>
                            <button class="btn btn-warning btn-sm" data-bs-toggle="modal" data-bs-target="#editVisionModal">Edit</button>
                            <a href="delete_vision_mission.php?id=1" class="btn btn-danger btn-sm" onclick="return confirm('Apakah Anda yakin ingin menghapus?');">Hapus</a>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>

    <!-- Misi Section -->
    <h2>Misi</h2>
    <button class="btn btn-primary mb-3" data-bs-toggle="modal" data-bs-target="#addMissionModal">Tambah Misi</button>
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
                    <td>Misi 1</td>
                    <td>Meningkatkan kualitas hidup masyarakat desa.</td>
                    <td>
                        <button class="btn btn-warning btn-sm" data-bs-toggle="modal" data-bs-target="#editMissionModal">Edit</button>
                        <a href="delete_vision_mission.php?id=2" class="btn btn-danger btn-sm" onclick="return confirm('Apakah Anda yakin ingin menghapus?');">Hapus</a>
                    </td>
                </tr>
            </tbody>
        </table>
    </div>

    <!-- Modal for Adding Vision -->
    <div class="modal fade" id="addVisionModal" tabindex="-1" aria-labelledby="addVisionModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="addVisionModalLabel">Tambah Visi</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form action="{{ route('savevisi') }}" method="POST">
                        @csrf
                        <div class="mb-3">
                            <label for="visionTitle" class="form-label">Deskripsi</label>
                            <input type="text" class="form-control" id="visionTitle" name="title" required>
                        </div>
                        <div class="mb-3">
                            <label for="visionDescription" class="form-label">Keterangan</label>
                            <textarea class="form-control" id="visionDescription" name="description" rows="3" required></textarea>
                        </div>
                        <button type="submit" class="btn btn-primary">Simpan</button>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <!-- Modal for Adding Mission -->
    <div class="modal fade" id="addMissionModal" tabindex="-1" aria-labelledby="addMissionModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="addMissionModalLabel">Tambah Misi</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form action="add_mission.php" method="POST">
                        <div class="mb-3">
                            <label for="missionTitle" class="form-label">Deskripsi</label>
                            <input type="text" class="form-control" id="missionTitle" name="title" required>
                        </div>
                        <div class="mb-3">
                            <label for="missionDescription" class="form-label">Keterangan</label>
                            <textarea class="form-control" id="missionDescription" name="content" rows="3" required></textarea>
                        </div>
                        <button type="submit" class="btn btn-primary">Simpan</button>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <!-- Modal for Editing Vision -->
    <div class="modal fade" id="editVisionModal" tabindex="-1" aria-labelledby="editVisionModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="editVisionModalLabel">Edit Visi</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form action="edit_vision_mission.php?id=1" method="POST">
                        <div class="mb-3">
                            <label for="editVisionDescription" class="form-label">Deskripsi</label>
                            <input type="text" class="form-control" id="editVisionDescription" name="title" value="Visi 1" required>
                        </div>
                        <div class="mb-3">
                            <label for="editVisionRemarks" class="form-label">Keterangan</label>
                            <textarea class="form-control" id="editVisionRemarks" name="content" rows="3" required>Menjadi desa yang mandiri dan sejahtera.</textarea>
                        </div>
                        <button type="submit" class="btn btn-primary">Update</button>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <!-- Modal for Editing Mission -->
    <div class="modal fade" id="editMissionModal" tabindex="-1" aria-labelledby="editMissionModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="editMissionModalLabel">Edit Misi</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form action="edit_vision_mission.php?id=2" method="POST">
                        <div class="mb-3">
                            <label for="editMissionDescription" class="form-label">Deskripsi</label>
                            <input type="text" class="form-control" id="editMissionDescription" name="title" value="Misi 1" required>
                        </div>
                        <div class="mb-3">
                            <label for="editMissionRemarks" class="form-label">Keterangan</label>
                            <textarea class="form-control" id="editMissionRemarks" name="content" rows="3" required>Meningkatkan kualitas hidup masyarakat desa.</textarea>
                        </div>
                        <button type="submit" class="btn btn-primary">Update</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
