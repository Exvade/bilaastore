<?php
// Path ke folder storage
$target = __DIR__ . '/storage/app/public';

// Fungsi untuk set permission folder & file secara rekursif
function fixPermissions($dir) {
    $files = new RecursiveIteratorIterator(
        new RecursiveDirectoryIterator($dir, RecursiveDirectoryIterator::SKIP_DOTS),
        RecursiveIteratorIterator::SELF_FIRST
    );

    foreach ($files as $file) {
        if ($file->isDir()) {
            chmod($file->getRealPath(), 0755);
        } else {
            chmod($file->getRealPath(), 0644);
        }
    }
    chmod($dir, 0755);
}

if (is_dir($target)) {
    fixPermissions($target);
    echo "Permission storage berhasil diperbaiki! ✨";
} else {
    echo "Folder storage tidak ditemukan di: " . $target;
}
?>