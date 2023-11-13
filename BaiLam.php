<!-- Câu 4: Viết chương trình PHP để kiểm tra xem một chuỗi có chứa một từ cụ thể hay không. -->
<?php
    // Hàm kiểm tra xem chuỗi có chứa từ cụ thể hay không
    function chuaTuCuThe($chuoi, $tuCanKiemTra) {
        return strpos($chuoi, $tuCanKiemTra) !== false;
    }

    // Chuỗi cần kiểm tra
    $chuoi = "Hello, World! This is a PHP example.";

    // Từ cần kiểm tra trong chuỗi
    $tuCanKiemTra = "PHP";

    echo "Câu 4: ";
    // Gọi hàm để kiểm tra chuỗi có chứa từ cụ thể hay không
    if (chuaTuCuThe($chuoi, $tuCanKiemTra)) {
        echo "Chuỗi \"$chuoi\" chứa từ \"$tuCanKiemTra\".";
    } else {
        echo "Chuỗi \"$chuoi\" không chứa từ \"$tuCanKiemTra\".";
    }
?>
<br>

<!-- Câu 5: Viết chương trình PHP để tìm giá trị lớn nhất và nhỏ nhất trong một mảng. -->
<?php
    function timGiaTriLonNhat($mang) {
        $lonNhat = $mang[0];
        foreach($mang as $giaTri) {
            if ($giaTri > $lonNhat) {
                $lonNhat = $giaTri;
            }
        }
        return $lonNhat;
    }

    function timGiaTriNhoNhat($mang) {
        $nhoNhat = $mang[0];
        foreach($mang as $giaTri) {
            if ($giaTri < $nhoNhat) {
                $nhoNhat = $giaTri;
            }
        }
        return $nhoNhat;
    }

    // Mảng ví dụ
    $mangSo = array(10, 5, 8, 3, 1, 7);

    $lonNhat = timGiaTriLonNhat($mangSo);
    $nhoNhat = timGiaTriNhoNhat($mangSo);

    echo "Câu 5: "."<br>";
    echo "Giá trị lớn nhất là: " . $lonNhat . "<br>";
    echo "Giá trị nhỏ nhất là: " . $nhoNhat;
?>
<br>

<!-- Câu 6: Viết chương trình PHP để sắp xếp một mảng theo thứ tự tăng dần. -->
<?php
    function sapXepTangDan($mang) {
        sort($mang);
        return $mang;
    }

    // Mảng ví dụ
    $mangSo = array(10, 5, 8, 3, 1, 7);

    $mangDaSapXep = sapXepTangDan($mangSo);

    echo "Câu 6: ";
    echo "Mảng sau khi sắp xếp tăng dần: ";
    foreach ($mangDaSapXep as $giaTri) {
        echo $giaTri . " ";
    }
?>
<br>

<!-- Câu 7: Viết chương trình PHP để tính giai thừa của một số nguyên dương. -->
<?php
    function tinhGiaiThua($n) {
        if ($n == 0 || $n == 1) {
            return 1;
        } else {
            return $n * tinhGiaiThua($n - 1);
        }
    }

    // Số cần tính giai thừa
    $soCanTinhGiaiThua = 5;

    $ketQua = tinhGiaiThua($soCanTinhGiaiThua);

    echo "Câu 7: ";
    echo "Giai thừa của $soCanTinhGiaiThua là: $ketQua";
?>
<br>

<!-- Câu 8: Viết chương trình PHP để tìm số nguyên tố trong một khoảng cho trước. -->
<?php
    // Hàm kiểm tra số nguyên tố
    function laSoNguyenTo($n) {
        if ($n <= 1) {
            return false;
        }
        for ($i = 2; $i <= sqrt($n); $i++) {
            if ($n % $i == 0) {
                return false;
            }
        }
        return true;
    }

    // Hàm tìm số nguyên tố trong khoảng
    function timSoNguyenToTrongKhoang($start, $end) {
        $soNguyenTo = array();
        for ($i = $start; $i <= $end; $i++) {
            if (laSoNguyenTo($i)) {
                $soNguyenTo[] = $i;
            }
        }
        return $soNguyenTo;
    }

    // Khoảng cần tìm số nguyên tố
    $start = 10;
    $end = 50;

    $ketQua = timSoNguyenToTrongKhoang($start, $end);

    echo "Câu 8: ";
    echo "Các số nguyên tố trong khoảng từ $start đến $end là: " . implode(", ", $ketQua);
?>
<br>

<!-- Câu 9: Viết chương trình PHP để tính tổng của các số trong một mảng. -->
<?php
    // Hàm tính tổng của mảng
    function tinhTong($mang) {
        $tong = 0;
        foreach ($mang as $giaTri) {
            $tong += $giaTri;
        }
        return $tong;
    }

    // Mảng ví dụ
    $mangSo = array(10, 5, 8, 3, 1, 7);

    $tong = tinhTong($mangSo);

    echo "Câu 9: ";
    echo "Tổng của các số trong mảng là: $tong";
?>
<br>

<!-- Câu 10: Viết chương trình PHP để in ra các số Fibonacci trong một khoảng cho trước. -->
<?php
    // Hàm in ra các số Fibonacci trong khoảng
    function inFibonacciTrongKhoang($start, $end) {
        $fibonacci = array();
        $a = 0;
        $b = 1;

        while ($a <= $end) {
            if ($a >= $start) {
                $fibonacci[] = $a;
            }
            $c = $a + $b;
            $a = $b;
            $b = $c;
        }

        return $fibonacci;
    }

    // Khoảng cần in số Fibonacci
    $start = 0;
    $end = 50;

    $ketQua = inFibonacciTrongKhoang($start, $end);

    echo "Câu 10: ";
    echo "Các số Fibonacci trong khoảng từ $start đến $end là: " . implode(", ", $ketQua);
?>
<br>

<!-- Câu 11:  -->
<?php
    // Hàm kiểm tra số Armstrong
    function laSoArmstrong($number) {
        $total = 0;
        $numDigits = strlen((string)$number);
        $temp = $number;

        while ($temp > 0) {
            $digit = $temp % 10;
            $total += pow($digit, $numDigits);
            $temp = (int)($temp / 10);
        }

        return $total == $number;
    }

    // Số cần kiểm tra
    $soCanKiemTra = 153;

    echo "Câu 11: ";
    if (laSoArmstrong($soCanKiemTra)) {
        echo "$soCanKiemTra là số Armstrong.";
    } else {
        echo "$soCanKiemTra không phải là số Armstrong.";
    }
?>
<br>

<!-- Câu 12: -->
<?php
    // Hàm chèn phần tử vào mảng ở vị trí bất kỳ
    function chenPhanTuVaoMang($mang, $phanTu, $viTri) {
        array_splice($mang, $viTri, 0, $phanTu);
        return $mang;
    }

    // Mảng ví dụ
    $mangSo = array(10, 5, 8, 3, 1, 7);

    // Phần tử cần chèn
    $phanTuCanChen = 20;

    // Vị trí cần chèn phần tử vào
    $viTriChen = 2;

    // Gọi hàm để chèn phần tử vào mảng
    $mangSauKhiChen = chenPhanTuVaoMang($mangSo, $phanTuCanChen, $viTriChen);

    // Hiển thị kết quả
    echo "Câu 12: ";
    echo "Mảng sau khi chèn phần tử $phanTuCanChen vào vị trí $viTriChen: ";
    foreach ($mangSauKhiChen as $giaTri) {
        echo $giaTri . " ";
    }
?>
<br>

<!-- Câu 13: -->
<?php
    // Hàm loại bỏ các phần tử trùng lặp từ mảng
    function loaiBoTrungLap($mang) {
        return array_unique($mang);
    }

    // Mảng ví dụ có phần tử trùng lặp
    $mangSo = array(10, 5, 8, 3, 1, 7, 5, 10);

    // Gọi hàm để loại bỏ các phần tử trùng lặp
    $mangSauKhiLoaiBo = loaiBoTrungLap($mangSo);

    // Hiển thị kết quả
    echo "Câu 13: ";
    echo "Mảng sau khi loại bỏ các phần tử trùng lặp: ";
    foreach ($mangSauKhiLoaiBo as $giaTri) {
        echo $giaTri . " ";
    }
?>
<br>

<!-- Câu 14: -->
<?php
    // Hàm tìm vị trí của phần tử trong mảng
    function timViTriPhanTu($mang, $phanTu) {
        $viTri = array_search($phanTu, $mang);
        return $viTri;
    }

    // Mảng ví dụ
    $mangSo = array(10, 5, 8, 3, 1, 7);

    // Phần tử cần tìm vị trí
    $phanTuCanTim = 3;

    // Gọi hàm để tìm vị trí của phần tử trong mảng
    $viTri = timViTriPhanTu($mangSo, $phanTuCanTim);

    // Kiểm tra và hiển thị kết quả
    echo "Câu 14: ";
    if ($viTri !== false) {
        echo "Vị trí của phần tử $phanTuCanTim trong mảng là: $viTri";
    } else {
        echo "Không tìm thấy phần tử $phanTuCanTim trong mảng.";
    }
?>
<br>

<!-- Câu 15: -->
<?php
    // Hàm đảo ngược chuỗi
    function daoNguocChuoi($chuoi) {
        return strrev($chuoi);
    }

    // Chuỗi ví dụ
    $chuoiBanDau = "Hello, My name's Linh!";

    // Gọi hàm để đảo ngược chuỗi
    $chuoiDaoNguoc = daoNguocChuoi($chuoiBanDau);

    // Hiển thị kết quả
    echo "Câu 15: "."<br>";
    echo "Chuỗi ban đầu: $chuoiBanDau <br>";
    echo "Chuỗi sau khi đảo ngược: $chuoiDaoNguoc";
?>
<br>

<!-- Câu 16: -->
<?php
    // Hàm tính số lượng phần tử trong mảng
    function demPhanTu($mang) {
        return count($mang);
    }

    // Mảng ví dụ
    $mangSo = array(10, 5, 8, 3, 1, 7);

    $soLuongPhanTu = demPhanTu($mangSo);

    // Hiển thị kết quả
    echo "Câu 16: ";
    echo "Số lượng phần tử trong mảng là: $soLuongPhanTu";
?>
<br>

<!-- Câu 17: -->
<?php
    // Hàm kiểm tra chuỗi Palindrome
    function laChuoiPalindrome($chuoi) {
        $chuoiKhongDau = strtolower(preg_replace('/[^a-zA-Z0-9]/', '', $chuoi));
        return $chuoiKhongDau == strrev($chuoiKhongDau);
    }

    // Chuỗi ví dụ
    $chuoi = "A man, a plan, a canal, Panama";

    echo "Câu 17: ";
    // Gọi hàm để kiểm tra chuỗi Palindrome
    if (laChuoiPalindrome($chuoi)) {
        echo "Chuỗi '$chuoi' là chuỗi Palindrome.";
    } else {
        echo "Chuỗi '$chuoi' không phải là chuỗi Palindrome.";
    }
?>
<br>

<!-- Câu 18: -->
<?php
    // Hàm đếm số lần xuất hiện của phần tử trong mảng
    function demSoLanXuatHien($mang, $phanTu) {
        return array_count_values($mang)[$phanTu] ?? 0;
    }

    // Mảng ví dụ
    $mangSo = array(10, 5, 8, 3, 1, 7, 5, 10);

    // Phần tử cần đếm số lần xuất hiện
    $phanTuCanDem = 5;

    // Gọi hàm để đếm số lần xuất hiện của phần tử trong mảng
    $soLanXuatHien = demSoLanXuatHien($mangSo, $phanTuCanDem);

    // Hiển thị kết quả
    echo "Câu 18: ";
    echo "Phần tử $phanTuCanDem xuất hiện $soLanXuatHien lần trong mảng.";
?>
<br>

<!-- Câu 19: -->
<?php
    // Hàm sắp xếp mảng theo thứ tự giảm dần
    function sapXepGiamDan($mang) {
        rsort($mang);
        return $mang;
    }

    // Mảng ví dụ
    $mangSo = array(10, 5, 8, 3, 1, 7);

    // Sắp xếp mảng
    $mangDaSapXep = sapXepGiamDan($mangSo);

    // Hiển thị kết quả
    echo "Câu 19: ";
    echo "Mảng sau khi sắp xếp giảm dần: ";
    foreach ($mangDaSapXep as $giaTri) {
        echo $giaTri . " ";
    }
?>
<br>

<!-- Câu 20: -->
<?php
    // Hàm thêm phần tử vào đầu mảng
    function themVaoDau($mang, $phanTu) {
        array_unshift($mang, $phanTu);
        return $mang;
    }

    // Hàm thêm phần tử vào cuối mảng
    function themVaoCuoi($mang, $phanTu) {
        $mang[] = $phanTu;
        return $mang;
    }

    // Mảng ví dụ
    $mangSo = array(10, 5, 8, 3, 1, 7);

    // Phần tử cần thêm
    $phanTuCanThem = 20;

    // Gọi hàm để thêm phần tử vào đầu mảng
    $mangSauKhiThemVaoDau = themVaoDau($mangSo, $phanTuCanThem);

    // Gọi hàm để thêm phần tử vào cuối mảng
    $mangSauKhiThemVaoCuoi = themVaoCuoi($mangSo, $phanTuCanThem);

    // Hiển thị kết quả
    echo "Câu 20: "."<br>";
    echo "Mảng sau khi thêm phần tử $phanTuCanThem vào đầu: ";
    foreach ($mangSauKhiThemVaoDau as $giaTri) {
        echo $giaTri . " ";
    }
    echo "<br>";

    echo "Mảng sau khi thêm phần tử $phanTuCanThem vào cuối: ";
    foreach ($mangSauKhiThemVaoCuoi as $giaTri) {
        echo $giaTri . " ";
    }
?>
<br>

<!-- Câu 21: -->
<?php
    // Hàm tìm số lớn thứ hai trong mảng
    function timSoLonThuHai($mang) {
        rsort($mang); // Sắp xếp mảng giảm dần
        $mangKhongTrungLap = array_unique($mang); // Loại bỏ các phần tử trùng lặp
        $soLuong = count($mangKhongTrungLap);

        if ($soLuong < 2) {
            return "Không có số lớn thứ hai trong mảng.";
        } else {
            $mangKhongTrungLap = array_values($mangKhongTrungLap);
            return $mangKhongTrungLap[1];
        }
    }

    // Mảng ví dụ
    $mangSo = array(10, 5, 8, 3, 1, 7, 5, 10);

    // Gọi hàm để tìm số lớn thứ hai trong mảng
    $soLonThuHai = timSoLonThuHai($mangSo);

    // Hiển thị kết quả
    echo "Câu 21: ";
    echo "Số lớn thứ hai trong mảng là: $soLonThuHai";
?>
<br>

<!-- Câu 22: -->
<?php
    // Hàm tính USCLN sử dụng thuật toán Euclid
    function uscln($a, $b) {
        while ($b != 0) {
            $temp = $b;
            $b = $a % $b;
            $a = $temp;
        }
        return $a;
    }

    // Hàm tính BSCNN dựa trên USCLN
    function bscnn($a, $b) {
        return ($a * $b) / uscln($a, $b);
    }

    // Hai số nguyên dương
    $so1 = 24;
    $so2 = 36;

    // Tính và hiển thị kết quả
    echo "Câu 22: "."<br>";
    echo "USCLN của $so1 và $so2 là: " . uscln($so1, $so2) . "<br>";
    echo "BSCNN của $so1 và $so2 là: " . bscnn($so1, $so2);
?>
<br>

<!-- Câu 23: -->
<?php
    // Hàm kiểm tra số hoàn hảo
    function laSoHoanHao($n) {
        if ($n <= 0) {
            return false;
        }

        $tongUoc = 0;

        for ($i = 1; $i <= $n / 2; $i++) {
            if ($n % $i == 0) {
                $tongUoc += $i;
            }
        }

        return $tongUoc == $n;
    }

    // Số cần kiểm tra
    $soCanKiemTra = 28;

    echo "Câu 23: ";
    // Gọi hàm để kiểm tra số hoàn hảo
    if (laSoHoanHao($soCanKiemTra)) {
        echo "$soCanKiemTra là số hoàn hảo.";
    } else {
        echo "$soCanKiemTra không phải là số hoàn hảo.";
    }
?>
<br>

<!-- Câu 24: -->
<?php
    // Hàm tìm số lẻ lớn nhất trong mảng
    function timSoLeLonNhat($mang) {
        $soLeLonNhat = null;

        foreach ($mang as $giaTri) {
            if ($giaTri % 2 != 0) {
                if ($soLeLonNhat === null || $giaTri > $soLeLonNhat) {
                    $soLeLonNhat = $giaTri;
                }
            }
        }

        return $soLeLonNhat;
    }

    // Mảng ví dụ
    $mangSo = array(10, 5, 8, 3, 1, 7);

    // Gọi hàm để tìm số lẻ lớn nhất trong mảng
    $soLeLonNhat = timSoLeLonNhat($mangSo);

    // Kiểm tra và hiển thị kết quả
    echo "Câu 24: ";
    if ($soLeLonNhat !== null) {
        echo "Số lẻ lớn nhất trong mảng là: $soLeLonNhat";
    } else {
        echo "Không có số lẻ trong mảng.";
    }
?>
<br>

<!-- Câu 25:  -->
<?php
    // Hàm kiểm tra số nguyên tố
    function kiemTraSoNguyenTo($n) {
        if ($n <= 1) {
            return false;
        }

        for ($i = 2; $i <= sqrt($n); $i++) {
            if ($n % $i == 0) {
                return false;
            }
        }

        return true;
    }

    // Số cần kiểm tra
    $soCanKiemTra = 17;

    echo "Câu 25: ";
    // Gọi hàm để kiểm tra số nguyên tố
    if (kiemTraSoNguyenTo($soCanKiemTra)) {
        echo "$soCanKiemTra là số nguyên tố.";
    } else {
        echo "$soCanKiemTra không phải là số nguyên tố.";
    }
?>
<br>

<!-- Câu 26: -->
<?php
    // Hàm tìm số dương lớn nhất trong mảng
    function timSoDuongLonNhat($mang) {
        $soDuongLonNhat = null;

        foreach ($mang as $giaTri) {
            if ($giaTri > 0) {
                if ($soDuongLonNhat === null || $giaTri > $soDuongLonNhat) {
                    $soDuongLonNhat = $giaTri;
                }
            }
        }

        return $soDuongLonNhat;
    }

    // Mảng ví dụ
    $mangSo = array(-10, 5, 8, -3, 1, 7);

    // Gọi hàm để tìm số dương lớn nhất trong mảng
    $soDuongLonNhat = timSoDuongLonNhat($mangSo);

    // Kiểm tra và hiển thị kết quả
    echo "Câu 26: ";
    if ($soDuongLonNhat !== null) {
        echo "Số dương lớn nhất trong mảng là: $soDuongLonNhat";
    } else {
        echo "Không có số dương trong mảng.";
    }
?>
<br>

<!-- Câu 27: -->
<?php
    // Hàm tìm số âm lớn nhất trong mảng
    function timSoAmLonNhat($mang) {
        $soAmLonNhat = null;

        foreach ($mang as $giaTri) {
            if ($giaTri < 0) {
                if ($soAmLonNhat === null || $giaTri > $soAmLonNhat) {
                    $soAmLonNhat = $giaTri;
                }
            }
        }

        return $soAmLonNhat;
    }

    // Mảng ví dụ
    $mangSo = array(-10, 5, -8, -3, 1, -7);

    // Gọi hàm để tìm số âm lớn nhất trong mảng
    $soAmLonNhat = timSoAmLonNhat($mangSo);

    // Kiểm tra và hiển thị kết quả
    echo "Câu 27: ";
    if ($soAmLonNhat !== null) {
        echo "Số âm lớn nhất trong mảng là: $soAmLonNhat";
    } else {
        echo "Không có số âm trong mảng.";
    }
?>
<br>

<!-- Câu 28: -->
<?php
    // Hàm tính tổng các số lẻ từ 1 đến n
    function tinhTongSoLe($n) {
        $tong = 0;

        for ($i = 1; $i <= $n; $i += 2) {
            $tong += $i;
        }

        return $tong;
    }

    // Số n cần tính tổng các số lẻ
    $n = 10;

    // Gọi hàm để tính tổng các số lẻ từ 1 đến n
    $tongSoLe = tinhTongSoLe($n);

    // Hiển thị kết quả
    echo "Câu 28: ";
    echo "Tổng các số lẻ từ 1 đến $n là: $tongSoLe";
?>
<br>

<!-- Câu 29: -->
<?php
    // Hàm kiểm tra số chính phương
    function laSoChinhPhuong($n) {
        return sqrt($n) == floor(sqrt($n));
    }

    // Hàm tìm số chính phương trong một khoảng
    function timSoChinhPhuongTrongKhoang($batDau, $ketThuc) {
        $soChinhPhuong = array();

        for ($i = $batDau; $i <= $ketThuc; $i++) {
            if (laSoChinhPhuong($i)) {
                $soChinhPhuong[] = $i;
            }
        }

        return $soChinhPhuong;
    }

    // Khoảng cần tìm số chính phương
    $batDau = 1;
    $ketThuc = 50;

    // Gọi hàm để tìm số chính phương trong khoảng
    $soChinhPhuongTrongKhoang = timSoChinhPhuongTrongKhoang($batDau, $ketThuc);

    // Hiển thị kết quả
    echo "Câu 29: ";
    echo "Các số chính phương trong khoảng từ $batDau đến $ketThuc là: ";
    foreach ($soChinhPhuongTrongKhoang as $soChinhPhuong) {
        echo $soChinhPhuong . " ";
    }
?>
<br>

<!-- Câu 30: -->
<?php
    // Hàm kiểm tra xem chuỗi $subChuoi có là chuỗi con của $chuoi hay không
    function laChuoiCon($chuoi, $subChuoi) {
        return strpos($chuoi, $subChuoi) !== false;
    }

    // Chuỗi gốc
    $chuoiGoc = "Hello, Yen Linh xin chào";

    // Chuỗi cần kiểm tra
    $subChuoi = "Linh";

    echo "Câu 30: ";
    // Gọi hàm để kiểm tra chuỗi $subChuoi có là chuỗi con của $chuoiGoc hay không
    if (laChuoiCon($chuoiGoc, $subChuoi)) {
        echo "\"$subChuoi\" là chuỗi con của \"$chuoiGoc\".";
    } else {
        echo "\"$subChuoi\" không phải là chuỗi con của \"$chuoiGoc\".";
    }
?>



