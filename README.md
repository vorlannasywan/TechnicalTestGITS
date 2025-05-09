- Deskripsi Soal 3
Program ini memeriksa apakah string yang diberikan memiliki tanda kurung yang seimbang. Tanda kurung yang diperbolehkan adalah: (), {}, dan [].

- Kompleksitas
- Waktu (Time Complexity): O(n), dimana n adalah panjang string input.
  - Setiap karakter dalam string diproses sekali, dan setiap operasi pada stack (push/pop) dilakukan dalam waktu konstan.
  
- Ruang (Space Complexity): O(n), dimana n adalah panjang string input.
  - Stack digunakan untuk menyimpan karakter pembuka, dan dalam kasus terburuk, semua karakter bisa dimasukkan ke dalam stack.

- Cara Penggunaan
1. Masukkan string yang ingin diperiksa apakah seimbang atau tidak.
2. Program akan mengembalikan "YES" jika bracket seimbang, dan "NO" jika tidak.
