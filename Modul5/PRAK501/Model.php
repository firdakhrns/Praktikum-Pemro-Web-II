<?php
require 'Koneksi.php';

function getAllMembers() {
    $conn = getConnection();
    $result = $conn->query("SELECT * FROM member");
    $conn->close();
    return $result;
}

function getMemberById($id) {
    $conn = getConnection();
    $stmt = $conn->prepare("SELECT * FROM member WHERE id_member=?");
    $stmt->bind_param("i", $id);
    $stmt->execute();
    return $stmt->get_result()->fetch_assoc();
}

function insertMember($nama, $nomor, $alamat, $tgl_mendaftar, $tgl_bayar) {
    $conn = getConnection();
    $stmt = $conn->prepare("INSERT INTO member (nama_member, nomor_member, alamat, tgl_mendaftar, tgl_terakhir_bayar) VALUES (?, ?, ?, ?, ?)");
    $stmt->bind_param("sssss", $nama, $nomor, $alamat, $tgl_mendaftar, $tgl_bayar);
    $stmt->execute();
    $conn->close();
}

function updateMember($id, $nama, $nomor, $alamat, $tgl_mendaftar, $tgl_bayar) {
    $conn = getConnection();
    $stmt = $conn->prepare("UPDATE member SET nama_member=?, nomor_member=?, alamat=?, tgl_mendaftar=?, tgl_terakhir_bayar=? WHERE id_member=?");
    $stmt->bind_param("sssssi", $nama, $nomor, $alamat, $tgl_mendaftar, $tgl_bayar, $id);
    $stmt->execute();
    $conn->close();
}

function deleteMember($id) {
    $conn = getConnection();
    $stmt = $conn->prepare("DELETE FROM member WHERE id_member=?");
    $stmt->bind_param("i", $id);
    $stmt->execute();
    $conn->close();
}

function getAllBooks() {
    $conn = getConnection();
    $result = $conn->query("SELECT * FROM buku");
    $conn->close();
    return $result;
}

function getBookById($id) {
    $conn = getConnection();
    $stmt = $conn->prepare("SELECT * FROM buku WHERE id_buku=?");
    $stmt->bind_param("i", $id);
    $stmt->execute();
    return $stmt->get_result()->fetch_assoc();
}

function insertBook($judul, $penulis, $penerbit, $tahun) {
    $conn = getConnection();
    $stmt = $conn->prepare("INSERT INTO buku (judul_buku, penulis, penerbit, tahun_terbit) VALUES (?, ?, ?, ?)");
    $stmt->bind_param("sssi", $judul, $penulis, $penerbit, $tahun);
    $stmt->execute();
    $conn->close();
}

function updateBook($id, $judul, $penulis, $penerbit, $tahun) {
    $conn = getConnection();
    $stmt = $conn->prepare("UPDATE buku SET judul_buku=?, penulis=?, penerbit=?, tahun_terbit=? WHERE id_buku=?");
    $stmt->bind_param("sssii", $judul, $penulis, $penerbit, $tahun, $id);
    $stmt->execute();
    $conn->close();
}

function deleteBook($id) {
    $conn = getConnection();
    $stmt = $conn->prepare("DELETE FROM buku WHERE id_buku=?");
    $stmt->bind_param("i", $id);
    $stmt->execute();
    $conn->close();
}

function getAllPeminjaman() {
    $conn = getConnection();
    $result = $conn->query("SELECT p.id_peminjaman, m.nama_member, b.judul_buku, p.tgl_pinjam, p.tgl_kembali
                            FROM peminjaman p
                            JOIN member m ON p.id_member = m.id_member
                            JOIN buku b ON p.id_buku = b.id_buku");
    $conn->close();
    return $result;
}

function getPeminjamanById($id) {
    $conn = getConnection();
    $stmt = $conn->prepare("SELECT * FROM peminjaman WHERE id_peminjaman=?");
    $stmt->bind_param("i", $id);
    $stmt->execute();
    return $stmt->get_result()->fetch_assoc();
}

function insertPeminjaman($id_member, $id_buku, $tgl_pinjam, $tgl_kembali) {
    $conn = getConnection();
    $stmt = $conn->prepare("INSERT INTO peminjaman (id_member, id_buku, tgl_pinjam, tgl_kembali) VALUES (?, ?, ?, ?)");
    $stmt->bind_param("iiss", $id_member, $id_buku, $tgl_pinjam, $tgl_kembali);
    $stmt->execute();
    $conn->close();
}

function updatePeminjaman($id, $id_member, $id_buku, $tgl_pinjam, $tgl_kembali) {
    $conn = getConnection();
    $stmt = $conn->prepare("UPDATE peminjaman SET id_member=?, id_buku=?, tgl_pinjam=?, tgl_kembali=? WHERE id_peminjaman=?");
    $stmt->bind_param("iissi", $id_member, $id_buku, $tgl_pinjam, $tgl_kembali, $id);
    $stmt->execute();
    $conn->close();
}

function deletePeminjaman($id) {
    $conn = getConnection();
    $stmt = $conn->prepare("DELETE FROM peminjaman WHERE id_peminjaman=?");
    $stmt->bind_param("i", $id);
    $stmt->execute();
    $conn->close();
}
?>