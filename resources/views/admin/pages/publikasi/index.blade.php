@extends('admin.layouts.main')
@section('container')
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">Dashboard | Publikasi Desa</h1>
    </div>

    <h3>Pengumuman</h3>
        <!-- Button to trigger add announcement modal -->
        <button class="btn btn-primary mb-3" data-bs-toggle="modal" data-bs-target="#addAnnouncementModal">Tambah Pengumuman</button>

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
                    <!-- Sample Data (Replace with dynamic data from the database) -->
                    <tr>
                        <td>1</td>
                        <td>Pengumuman 1</td>
                        <td>Isi pengumuman pertama.</td>
                        <td>
                            <button class="btn btn-warning btn-sm" data-bs-toggle="modal" data-bs-target="#editAnnouncementModal1">Edit</button>
                            <a href="delete_announcement.php?id=1" class="btn btn-danger btn-sm" onclick="return confirm('Apakah Anda yakin ingin menghapus?');">Hapus</a>
                        </td>
                    </tr>
                    <!-- More announcements -->
                </tbody>
            </table>
        </div>

        <!-- Gallery Section -->
        <h3>Galeri</h3>
        <!-- Button to trigger add gallery image modal -->
        <button class="btn btn-primary mb-3" data-bs-toggle="modal" data-bs-target="#addGalleryImageModal">Tambah Foto</button>

        <div class="table-responsive">
            <table class="table table-striped table-sm">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>Deskripsi</th> <!-- Changed to "Photo Description" -->
                        <th>Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    <!-- Sample Data (Replace with dynamic data from the database) -->
                    <tr>
                        <td>1</td>
                        <td>Foto acara desa di balai desa.</td> <!-- Replace image with a description -->
                        <td>
                            <button class="btn btn-warning btn-sm" data-bs-toggle="modal" data-bs-target="#editGalleryImageModal1">Edit</button>
                            <a href="delete_gallery.php?id=1" class="btn btn-danger btn-sm" onclick="return confirm('Apakah Anda yakin ingin menghapus?');">Hapus</a>
                        </td>
                    </tr>
                    <!-- More gallery entries with descriptions -->
                </tbody>
            </table>
        </div>
    </main>
    </div>
    </div>

        <!-- Modal for Adding Announcement -->
        <div class="modal fade" id="addAnnouncementModal" tabindex="-1" aria-labelledby="addAnnouncementModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="addAnnouncementModalLabel">Tambah Pengumuman</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <form action="add_announcement.php" method="POST">
                            <div class="mb-3">
                                <label for="announcementTitle" class="form-label">Deskripsi</label>
                                <input type="text" class="form-control" id="announcementTitle" name="title" required>
                            </div>
                            <div class="mb-3">
                                <label for="announcementContent" class="form-label">Keterangan</label>
                                <textarea class="form-control" id="announcementContent" name="content" rows="3" required></textarea>
                            </div>
                            <button type="submit" class="btn btn-primary">Simpan</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>

        <!-- Modal for Editing Announcement -->
        <div class="modal fade" id="editAnnouncementModal1" tabindex="-1" aria-labelledby="editAnnouncementModal1Label" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="editAnnouncementModal1Label">Edit Pengumuman</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <form action="edit_announcement.php?id=1" method="POST">
                            <div class="mb-3">
                                <label for="editAnnouncementTitle" class="form-label">Judul</label>
                                <input type="text" class="form-control" id="editAnnouncementTitle" name="title" value="Pengumuman 1" required>
                            </div>
                            <div class="mb-3">
                                <label for="editAnnouncementContent" class="form-label">Isi</label>
                                <textarea class="form-control" id="editAnnouncementContent" name="content" rows="3" required>Isi pengumuman pertama.</textarea>
                            </div>
                            <button type="submit" class="btn btn-primary">Update</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>

        <!-- Modal for Adding Gallery Image -->
        <div class="modal fade" id="addGalleryImageModal" tabindex="-1" aria-labelledby="addGalleryImageModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="addGalleryImageModalLabel">Tambah Foto Galeri</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <form action="add_gallery.php" method="POST" enctype="multipart/form-data">
                            <div class="mb-3">
                                <label for="galleryImage" class="form-label">Pilih Foto</label>
                                <input type="file" class="form-control" id="galleryImage" name="image" required>
                            </div>
                            <div class="mb-3">
                                <label for="galleryDescription" class="form-label">Deskripsi Foto</label>
                                <input type="text" class="form-control" id="galleryDescription" name="description" placeholder="" required>
                            </div>
                            <button type="submit" class="btn btn-primary">Simpan</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>

        <!-- Modal for Editing Gallery Image -->
        <div class="modal fade" id="editGalleryImageModal1" tabindex="-1" aria-labelledby="editGalleryImageModal1Label" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="editGalleryImageModal1Label">Edit Keterangan Foto</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <form action="edit_gallery.php?id=1" method="POST" enctype="multipart/form-data">
                            <div class="mb-3">
                                <label for="galleryDescription" class="form-label">Keterangan Foto</label>
                                <input type="text" class="form-control" id="galleryDescription" name="description" value="Foto acara desa di balai desa." required>
                            </div>
                            <button type="submit" class="btn btn-primary">Update</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
@endsection
