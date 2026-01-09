Bài 4. Phân loại điểm học sinh
Nhập điểm $score (0–10).

Nếu $score >= 8 → "Gioi"

Nếu $score >= 6.5 → "Kha"

Nếu $score >= 5 → "Trung binh"

Ngược lại → "Yeu"

Bài 5. Xếp loại nhiệt độ thời tiết
Nhập nhiệt độ $t (độ C).

Nếu $t >= 35 → "Rat nong"

Nếu $t >= 25 → "Nong"

Nếu $t >= 15 → "Mat"

Ngược lại → "Lanh"

Bài 6. Kiểm tra ngày trong tuần
Nhập số $day (1–7).

1 → "Thu Hai"

2 → "Thu Ba"

…

7 → "Chu Nhat"

Nếu khác 1–7 → "Ngay khong hop le"

🔵 Mức 3: Logic kết hợp

Bài 7. Kiểm tra năm nhuận
Nhập năm $year.

Năm nhuận nếu: chia hết cho 400 hoặc (chia hết cho 4 và không chia hết cho 100)

In: "Nam nhuan" hoặc "Khong phai nam nhuan"

Bài 8. Tính tiền điện
Nhập số điện $kwh.

≤ 50 kWh → 1.500đ/kWh

51–100 kWh → 2.000đ/kWh

100 kWh → 2.500đ/kWh
In ra tổng tiền phải trả.

Bài 9. Xếp loại BMI
Nhập cân nặng $weight (kg) và chiều cao $height (m).
Tính: BMI = weight / (height * height)

BMI < 18.5 → "Gay"

18.5–24.9 → "Binh thuong"

25–29.9 → "Thua can"

≥ 30 → "Beo phi"

🔴 Mức 4: Khó – nhiều điều kiện

Bài 10. Tính thuế thu nhập cá nhân đơn giản
Nhập lương $salary (triệu VNĐ/tháng).

≤ 11 → "Khong dong thue"

11–20 → Thuế = 10% phần vượt 11

20–50 → Thuế = 10% của 9 + 20% phần vượt 20

50 → Thuế = 10% của 9 + 20% của 30 + 30% phần vượt 50
In ra số tiền thuế phải đóng.