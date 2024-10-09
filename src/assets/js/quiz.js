$(document).ready(function () {
    $("#submit-calculate").click(function () {
        let results = [];
        let moviePreferences = {
            action: 0,
            drama: 0,
            comedy: 0,
            thriller: 0,
            // สามารถเพิ่มแนวอื่นๆ ตามความต้องการได้ ตัวอย่างการใส่ code แนวอื่นๆ ด้านล่าง โดยให้คะแนนเริ่มต้นเป็น 0 ดังนี้
            // romance: 0,
        };

        // ตรวจสอบคำตอบสำหรับแต่ละคำถาม
        for (let i = 1; i <= 20; i++) {
            const answer = $("input[name='q" + i + "']:checked").val(); // ดึงค่าที่เลือก
            if (answer) {
                results.push("คำถาม " + i + ": " + answer);

                // เพิ่มคะแนนตามคำตอบที่เลือก
                switch (answer) {
                    case 'a':
                        moviePreferences.action++;
                        break;
                    case 'b':
                        moviePreferences.drama++;
                        break;
                    case 'c':
                        moviePreferences.comedy++;
                        break;
                    case 'd':
                        moviePreferences.thriller++;
                        break;
                    // สามารถเพิ่มแนวอื่นๆ ตามความต้องการได้ ตัวอย่าง
                    // case 'e':
                    //     moviePreferences.romance++;
                    //     break; bayge
                }
            } else {
                results.push("คำถาม " + i + ": ไม่ได้เลือกคำตอบ");
            }
        }

        // ประมวลผลผลลัพธ์
        let preferredGenre = Object.keys(moviePreferences).reduce((a, b) => moviePreferences[a] > moviePreferences[b] ? a : b);

        // แสดงผลลัพธ์
        Swal.fire({
            title: "ผลลัพธ์",
            html: results.join("<br>") + "<br><br>คุณชอบดูหนังแนว: <b>" + preferredGenre + "</b>",
            icon: "info"
        });
    });
});