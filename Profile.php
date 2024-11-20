<!DOCTYPE html>
<html lang="th">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ประวัติส่วนตัว - นางสาววิลาวัณ ไชยมณี</title>
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: 'Arial', sans-serif;
        }

        body {
            background: linear-gradient(to right, #6a11cb, #2575fc);
            color: #ffffff;
            padding: 20px;
        }

        .container {
            max-width: 800px;
            margin: 0 auto;
            background: #ffffff;
            color: #333333;
            border-radius: 10px;
            padding: 30px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        }

        img {
            width: 150px;
            height: 150px;
            border-radius: 50%;
            margin: 0 auto 20px auto;
            display: block;
            border: 3px solid #6a11cb;
        }

        h1 {
            text-align: center;
            color: #2575fc;
            margin-bottom: 20px;
        }

        p, ul {
            line-height: 1.8;
            margin: 10px 0;
            font-size: 1.1rem;
            text-align: left;
        }

        ul {
            list-style-type: disc;
            padding-left: 20px;
        }

        .section-title {
            font-size: 1.5rem;
            margin-top: 20px;
            color: #6a11cb;
            text-decoration: underline;
        }

        footer {
            text-align: center;
            margin-top: 30px;
            font-size: 0.9rem;
            color: #555555;
        }
    </style>
</head>
<body>
    <div class="container">
        <?php
        $name = "นางสาววิลาวัณ ไชยมณี";
        $dob = "8 กันยายน 2545";
        $age = 22;
        $education = "สาขาวิทยาการจัดการคอมพิวเตอร์และเทคโนโลยีสารสนเทศ คณะวิทยาศาสตร์ มหาวิทยาลัยราชภัฏอุดรธานี";
        $project = "ระบบตรวจจับความผิดปกติและแจ้งเตือนด้วยข้อมูลสภาพแวดล้อมภายในสำหรับห้องครัว";
        $software = [
            "โปรแกรม Arduino",
            "Frontend",
            "แอปพลิเคชัน LINE Notify",
            "ภาษา C",
            "ภาษา PHP",
            "โปรแกรมจัดการฐานข้อมูล MySQL",
            "Xampp"
        ];
        $hardware = [
            "บอร์ด ESP32",
            "สาย Mirco USB",
            "เซ็นเซอร์ MQ-2",
            "สายไฟจั๊มเปอร์ผู้ – เมีย",
            "สายไฟจั๊มเปอร์ เมีย - เมีย",
            "ลำโพง Buzzer",
            "จอแสดงผลตัวอักษร LCD",
            "พัดลมระบายอากาศ DC",
            "บอร์ดขยายขา ESP32",
            "หลอดไฟ LED สีเขียว สีแดง",
            "เซ็นเซอร์ DHT11",
            "เบรดบอร์ด",
            "เซ็นเซอร์ตรวจจับอุณหภูมิ"
        ];
        ?>

        <img src="http://localhost/Github/me.jpg" alt="รูปโปรไฟล์">
        <h1>ประวัติส่วนตัว</h1>
        <p><strong>ชื่อ:</strong> <?php echo $name; ?></p>
        <p><strong>วันเกิด:</strong> <?php echo $dob; ?></p>
        <p><strong>อายุ:</strong> <?php echo $age; ?> ปี</p>
        <p><strong>การศึกษา:</strong> <?php echo $education; ?></p>

        <h2 class="section-title">โครงงานปัจจุบัน</h2>
        <p><?php echo $project; ?></p>

        <h2 class="section-title">เครื่องมือที่ใช้ในการพัฒนา</h2>
        <p><strong>โปรแกรมที่ใช้ในการพัฒนาระบบ (Software):</strong></p>
        <ul>
            <?php foreach ($software as $item) {
                echo "<li>$item</li>";
            } ?>
        </ul>

        <p><strong>เครื่องมือที่ใช้ในการพัฒนาระบบ (Hardware):</strong></p>
        <ul>
            <?php foreach ($hardware as $item) {
                echo "<li>$item</li>";
            } ?>
        </ul>
    </div>

    <footer>
        &copy; 2024 นางสาววิลาวัณ ไชยมณี. All rights reserved.
    </footer>
</body>
</html>
