$(document).ready(function () {
    $("#submit-calculate").click(function () {
        let results = [];
        let choices = [];
        let moviePreferences = {
            Action: 0,
            Adventure: 0,
            Comedy: 0,
            Drama: 0,
            Fantasy: 0,
            Horror: 0,
            Romance: 0,
            Sci_fi: 0,
            // สามารถเพิ่มแนวอื่นๆ ตามความต้องการได้ ตัวอย่างการใส่ code แนวอื่นๆ ด้านล่าง โดยให้คะแนนเริ่มต้นเป็น 0 ดังนี้
            // romance: 0,
        };

        let unansweredQuestions = 0; // Counter for unanswered questions

        // ตรวจสอบคำตอบสำหรับแต่ละคำถาม
        for (let i = 1; i <= 20; i++) {
            const answer = $("input[name='q" + i + "']:checked").val(); // ดึงค่าที่เลือก

            if (answer) {
                results.push("คำถาม " + i + ": " + answer);
                // เพิ่มคะแนนตามคำตอบที่เลือก
                switch (answer) {
                    case 'a':
                        moviePreferences.Action++;
                        break;
                    case 'b':
                        moviePreferences.Adventure++;
                        break;
                    case 'c':
                        moviePreferences.Comedy++;
                        break;
                    case 'd':
                        moviePreferences.Drama++;
                        break;
                    case 'e':
                        moviePreferences.Fantasy++;
                        break;    
                    case 'f':
                        moviePreferences.Horror++;
                        break; 
                    case 'g':
                        moviePreferences.Romance++;
                        break; 
                    case 'h':
                        moviePreferences.Sci_fi++;
                        break;                                         

                    // สามารถเพิ่มแนวอื่นๆ ตามความต้องการได้ ตัวอย่าง
                    // case 'e':
                    //     moviePreferences.romance++;
                    //     break; 
                }
                choices.push(answer);
            } else {
                results.push("คำถาม " + i + ": ไม่ได้เลือกคำตอบ");
                unansweredQuestions++; // Increment unanswered questions counter
            }
        }

        // Check if there are any unanswered questions
        if (unansweredQuestions > 0) {
            Swal.fire({
                title: "ข้อผิดพลาด",
                text: "กรุณาตอบคำถามให้ครบทุกข้อ",
                icon: "warning"
            });
            return; // Exit the function if there are unanswered questions
        }

        // ประมวลผลผลลัพธ์
        let preferredGenre = Object.keys(moviePreferences).reduce((a, b) => moviePreferences[a] > moviePreferences[b] ? a : b);

        // แสดงผลลัพธ์
        Swal.fire({
            title: "ผลลัพธ์",
            html: results.join("<br>") + "<br><br>คุณชอบดูหนังแนว: <b>" + preferredGenre + "</b>",
            icon: "info"
        });

        //insert data to database
        $.ajax({
            url: 'inc/insert_answer.php',
            type: 'POST',
            data: {
                choices: choices
            },
            success: function (response) {
                console.log(response);
            }
        });
    });
});
