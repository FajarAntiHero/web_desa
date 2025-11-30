<?php 
function potongTeks($text, $maxLength = 50) {
    // 1. Periksa apakah panjang teks melebihi batas (50 karakter)
    if (strlen($text) > $maxLength) {
        // 2. Jika melebihi, potong teks ke panjang maksimum
        //    substr($string, $start, $length)
        $text = substr($text, 0, $maxLength);
        
        // 3. Tambahkan elipsis (...) di akhir
        $text = $text . '...';
    }
    
    // 4. Kembalikan teks yang sudah diproses (dipotong atau asli)
    return $text;
}

?>