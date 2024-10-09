<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Movie Personality Quiz</title>
  <link rel="stylesheet" href="QA_Form.css">
</head>
<body>
  <div class="container">
    <h1>ประเภทหนังที่เข้ากับคุณ</h1>
    <form id="quizForm">
      <div class="question">
        <p>1. ในวันหยุดสุดสัปดาห์ คุณชอบทำกิจกรรมแบบไหนมากที่สุด?</p>
        <label><input type="radio" name="q1" value="a"> ทำกิจกรรมที่ท้าทาย เช่น ปีนเขา หรือเดินป่า</label><br>
        <label><input type="radio" name="q1" value="b"> อ่านหนังสือหรือใช้เวลาไปกับการไตร่ตรองเรื่องต่างๆ</label><br>
        <label><input type="radio" name="q1" value="c"> พบปะเพื่อนฝูงและทำกิจกรรมสนุกๆ ร่วมกัน</label><br>
        <label><input type="radio" name="q1" value="d"> อยู่บ้านดูซีรีส์หรือภาพยนตร์ที่ทำให้หัวใจเต้นแรง</label><br>
      </div>
      
      <div class="question">
        <p>2. คุณมักจะจัดการกับความเครียดอย่างไร?</p>
        <label><input type="radio" name="q2" value="a"> ไปออกกำลังกายหรือทำกิจกรรมที่ต้องใช้พลังงาน</label><br>
        <label><input type="radio" name="q2" value="b"> นั่งสมาธิหรือใช้เวลาคิดทบทวนสิ่งที่เกิดขึ้น</label><br>
        <label><input type="radio" name="q2" value="c"> หาสิ่งที่ทำให้หัวเราะหรือทำกิจกรรมที่ผ่อนคลาย</label><br>
        <label><input type="radio" name="q2" value="d"> ดูหนังหรือเล่นเกมที่ตื่นเต้นเร้าใจ</label><br>
      </div>

      <div class="question">
        <p>3. คุณคิดว่าตัวเองเป็นคนที่มีลักษณะนิสัยแบบใด?</p>
        <label><input type="radio" name="q3" value="a"> ชอบความท้าทายและกล้าหาญ</label><br>
        <label><input type="radio" name="q3" value="b"> คิดลึกซึ้งและช่างสังเกต</label><br>
        <label><input type="radio" name="q3" value="c"> สนุกสนานและชอบเข้าสังคม</label><br>
        <label><input type="radio" name="q3" value="d"> ชอบการท้าทายและความตื่นเต้นในชีวิต</label><br>
      </div>

      <div class="question">
        <p>4. ถ้าต้องเลือกรูปแบบการเดินทางท่องเที่ยว คุณจะเลือกไปที่ไหน?</p>
        <label><input type="radio" name="q4" value="a"> สถานที่ที่มีการผจญภัย เช่น ภูเขาหรือทะเลทราย</label><br>
        <label><input type="radio" name="q4" value="b"> สถานที่ที่เงียบสงบและให้ความรู้สึกผ่อนคลาย</label><br>
        <label><input type="radio" name="q4" value="c"> สถานที่ที่เต็มไปด้วยความสนุกสนาน เช่น สวนสนุก</label><br>
        <label><input type="radio" name="q4" value="d"> สถานที่ที่มีเรื่องราวลึกลับหรือสถานที่ประวัติศาสตร์ที่น่าตื่นเต้น</label><br>
      </div>

      <div class="question">
        <p>5. เมื่อคุณดูภาพยนตร์ คุณมักจะมองหาอะไรในเรื่องนั้น?</p>
        <label><input type="radio" name="q5" value="a"> ฉากแอคชั่นและการผจญภัยที่น่าตื่นเต้น</label><br>
        <label><input type="radio" name="q5" value="b"> เนื้อเรื่องที่ลึกซึ้งและมีความหมาย</label><br>
        <label><input type="radio" name="q5" value="c"> ฉากตลกและเรื่องราวที่ทำให้ผ่อนคลาย</label><br>
        <label><input type="radio" name="q5" value="d"> ฉากที่สร้างความระทึกใจและทำให้ต้องลุ้นตาม</label><br>
      </div>
      
      <div class="question">
        <p>6. ถ้าคุณต้องเลือกกิจกรรมเพื่อผ่อนคลายหลังจากวันที่ยากลำบาก คุณจะเลือกทำอะไร?</p>
        <label><input type="radio" name="q6" value="a"> ออกกำลังกายหรือทำกิจกรรมที่ต้องใช้แรง</label><br>
        <label><input type="radio" name="q6" value="b"> อ่านหนังสือหรือฟังเพลงเงียบๆ</label><br>
        <label><input type="radio" name="q6" value="c"> ดูหนังตลกหรือเล่นเกมกับเพื่อน</label><br>
        <label><input type="radio" name="q6" value="d"> ดูภาพยนตร์ที่ทำให้รู้สึกตื่นเต้นหรือท้าทาย</label><br>
      </div>
      
      <div class="question">
        <p>7. บุคลิกแบบใดที่คุณคิดว่าเข้ากับตัวคุณที่สุด?</p>
        <label><input type="radio" name="q7" value="a"> นักผจญภัยที่ไม่กลัวความท้าทาย</label><br>
        <label><input type="radio" name="q7" value="b"> นักคิดที่ชอบวิเคราะห์และมองโลกในแง่มุมต่างๆ</label><br>
        <label><input type="radio" name="q7" value="c"> คนที่สนุกสนานและชอบสร้างความสุขให้คนรอบข้าง</label><br>
        <label><input type="radio" name="q7" value="d"> คนที่ชอบความลึกลับและสิ่งที่ท้าทายความคิด</label><br>
      </div>
            
      <div class="question">
        <p>8. เมื่อคุณพบเจอปัญหาในชีวิตประจำวัน คุณจัดการกับปัญหาเหล่านั้นอย่างไร?</p>
        <label><input type="radio" name="q8" value="a"> เผชิญหน้าและแก้ไขปัญหาด้วยความกล้าหาญ</label><br>
        <label><input type="radio" name="q8" value="b"> พิจารณาและคิดวิเคราะห์เพื่อหาวิธีแก้ไขที่ดีที่สุด</label><br>
        <label><input type="radio" name="q8" value="c"> หันเหความสนใจไปทำกิจกรรมที่สนุกสนานเพื่อคลายเครียด</label><br>
        <label><input type="radio" name="q8" value="d"> มองหาความช่วยเหลือหรือแรงบันดาลใจจากคนรอบข้าง</label><br>
      </div>
                  
      <div class="question">
        <p>9. ในกลุ่มเพื่อน คุณมักจะเป็นคนแบบไหน?</p>
        <label><input type="radio" name="q9" value="a"> คนที่ชอบเป็นผู้นำและจัดการสถานการณ์ต่างๆ</label><br>
        <label><input type="radio" name="q9" value="b"> คนที่คอยรับฟังและให้คำแนะนำเชิงลึก</label><br>
        <label><input type="radio" name="q9" value="c"> คนที่มักสร้างเสียงหัวเราะและบรรยากาศที่เป็นกันเอง</label><br>
        <label><input type="radio" name="q9" value="d"> คนที่ชอบเสนอไอเดียใหม่ๆ และทำให้เกิดความสนุกสนานท้าทาย</label><br>
      </div>
                        
      <div class="question">
        <p>10. กิจกรรมใดที่คุณรู้สึกว่าทำให้คุณมีความสุขที่สุด?</p>
        <label><input type="radio" name="q10" value="a"> กิจกรรมที่ท้าทายความสามารถและทำให้รู้สึกสำเร็จ</label><br>
        <label><input type="radio" name="q10" value="b"> การใช้เวลาเงียบๆ กับตัวเองเพื่อคิดทบทวนหรือทำสมาธิ</label><br>
        <label><input type="radio" name="q10" value="c"> การทำกิจกรรมที่ทำให้คุณและคนรอบข้างสนุกสนาน</label><br>
        <label><input type="radio" name="q10" value="d"> การทำสิ่งที่น่าตื่นเต้นและท้าทายความสามารถ</label><br>
      </div>
                              
      <div class="question">
        <p>11. ถ้าคุณต้องเขียนเรื่องราวของชีวิตตัวเอง คุณคิดว่าชีวิตคุณจะเป็นแนวไหน?</p>
        <label><input type="radio" name="q11" value="a"> ผจญภัยและเต็มไปด้วยความท้าทาย</label><br>
        <label><input type="radio" name="q11" value="b"> ลึกซึ้งและเต็มไปด้วยเรื่องราวที่ซับซ้อน</label><br>
        <label><input type="radio" name="q11" value="c"> สนุกสนานและมีช่วงเวลาที่สร้างเสียงหัวเราะมากมาย</label><br>
        <label><input type="radio" name="q11" value="d"> เต็มไปด้วยความลึกลับและเหตุการณ์ไม่คาดฝัน</label><br>
      </div>
                               
      <div class="question">
        <p>12. เวลาคุณเลือกหนังสือมาอ่าน คุณมักจะเลือกหนังสือประเภทใด?</p>
        <label><input type="radio" name="q12" value="a"> นิยายผจญภัยหรือแอคชั่นที่เต็มไปด้วยความตื่นเต้น</label><br>
        <label><input type="radio" name="q12" value="b"> หนังสือแนวปรัชญาหรือการพัฒนาตนเองที่ช่วยให้คุณเติบโต</label><br>
        <label><input type="radio" name="q12" value="c"> นิยายตลกหรือเรื่องสั้นที่ทำให้คุณหัวเราะได้</label><br>
        <label><input type="radio" name="q12" value="d"> หนังสือสืบสวนหรือเรื่องลึกลับที่ทำให้คุณต้องคิดวิเคราะห์</label><br>
      </div>
                                
      <div class="question">
        <p>13. ถ้าคุณสามารถมีพลังพิเศษได้หนึ่งอย่าง คุณจะเลือกพลังแบบไหน?</p>
        <label><input type="radio" name="q13" value="a"> พลังที่ทำให้คุณสามารถป้องกันตัวเองหรือช่วยเหลือผู้อื่นในสถานการณ์อันตราย</label><br>
        <label><input type="radio" name="q13" value="b"> พลังที่ช่วยให้คุณมองเห็นอนาคตหรือเข้าใจความคิดของคนอื่น</label><br>
        <label><input type="radio" name="q13" value="c"> พลังที่ทำให้คุณสร้างความสุขหรือความสนุกสนานให้คนรอบข้าง</label><br>
        <label><input type="radio" name="q13" value="d"> พลังที่ทำให้คุณสามารถหลบหลีกจากอันตรายหรือแก้ปัญหายากๆ ได้อย่างง่ายดาย</label><br>
      </div>
                                
      <div class="question">
        <p>14. เวลาคุณคิดถึงอนาคต คุณมักจะวางแผนชีวิตตัวเองอย่างไร?</p>
        <label><input type="radio" name="q14" value="a"> วางแผนเพื่อเผชิญกับความท้าทายและการเปลี่ยนแปลง</label><br>
        <label><input type="radio" name="q14" value="b"> ตั้งเป้าหมายชีวิตที่ชัดเจนและมุ่งมั่นที่จะบรรลุ</label><br>
        <label><input type="radio" name="q14" value="c"> ใช้ชีวิตอย่างเต็มที่ในทุกวันและสนุกกับปัจจุบัน</label><br>
        <label><input type="radio" name="q14" value="d"> เตรียมพร้อมสำหรับทุกสถานการณ์ที่ไม่คาดคิด</label><br>
      </div>
                                 
      <div class="question">
        <p>15. ถ้าคุณสามารถไปใช้ชีวิตที่ไหนก็ได้ คุณจะเลือกที่ไหน?</p>
        <label><input type="radio" name="q15" value="a"> เมืองใหญ่ที่เต็มไปด้วยโอกาสและความตื่นเต้น</label><br>
        <label><input type="radio" name="q15" value="b"> เมืองเล็กๆ ที่เงียบสงบและมีธรรมชาติรอบตัว</label><br>
        <label><input type="radio" name="q15" value="c"> ชุมชนที่เต็มไปด้วยผู้คนสนุกสนานและกิจกรรมบันเทิง</label><br>
        <label><input type="radio" name="q15" value="d"> สถานที่ที่มีประวัติศาสตร์ลึกลับหรือสภาพแวดล้อมที่น่าค้นหา</label><br>
      </div>
                                  
      <div class="question">
        <p>16. เมื่อคุณดูหนัง คุณชอบให้ตัวละครหลักมีลักษณะอย่างไร?</p>
        <label><input type="radio" name="q16" value="a"> กล้าหาญและไม่กลัวเผชิญหน้ากับอันตราย</label><br>
        <label><input type="radio" name="q16" value="b"> ละเอียดอ่อนและมีความคิดลึกซึ้ง</label><br>
        <label><input type="radio" name="q16" value="c"> สนุกสนานและมองโลกในแง่ดี</label><br>
        <label><input type="radio" name="q16" value="d"> ลึกลับและคาดเดาไม่ได้</label><br>
      </div>
                                            
      <div class="question">
        <p>17. คุณรู้สึกเชื่อมโยงกับเนื้อหาประเภทใดมากที่สุด?</p>
        <label><input type="radio" name="q17" value="a"> เรื่องราวที่เกี่ยวกับความสำเร็จจากการต่อสู้หรือความท้าทาย</label><br>
        <label><input type="radio" name="q17" value="b"> เรื่องราวที่เต็มไปด้วยการค้นหาความหมายของชีวิต</label><br>
        <label><input type="radio" name="q17" value="c"> เรื่องราวที่ให้ความสุขและการหัวเราะ</label><br>
        <label><input type="radio" name="q17" value="d"> เรื่องราวที่ทำให้คุณต้องคาดเดาและรู้สึกตื่นเต้น</label><br>
      </div>
                                            
      <div class="question">
        <p>18. ถ้าคุณมีเวลาว่างสัก 1 ชั่วโมง คุณจะเลือกทำอะไร?</p>
        <label><input type="radio" name="q18" value="a"> ไปเล่นกีฬาหรือทำกิจกรรมกลางแจ้ง</label><br>
        <label><input type="radio" name="q18" value="b"> อ่านหนังสือหรือฟังเพลงเงียบๆ เพื่อผ่อนคลาย</label><br>
        <label><input type="radio" name="q18" value="c"> นัดพบเพื่อนเพื่อสังสรรค์</label><br>
        <label><input type="radio" name="q18" value="d"> ดูซีรีส์หรือหนังที่ทำให้คุณตื่นเต้น</label><br>
      </div>
                                             
      <div class="question">
        <p>19. เมื่อคุณต้องเผชิญหน้ากับการตัดสินใจที่สำคัญ คุณมักจะทำอย่างไร?</p>
        <label><input type="radio" name="q19" value="a"> ตัดสินใจอย่างรวดเร็วและลงมือทำทันที</label><br>
        <label><input type="radio" name="q19" value="b"> คิดพิจารณาและวิเคราะห์ข้อดีข้อเสียอย่างละเอียด</label><br>
        <label><input type="radio" name="q19" value="c"> ปรึกษากับคนรอบข้างก่อนตัดสินใจ</label><br>
        <label><input type="radio" name="q19" value="d"> ลองทำสิ่งใหม่ๆ และพร้อมรับมือกับผลที่ตามมา</label><br>
      </div>
                                             
      <div class="question">
        <p>20. คุณมักจะได้รับคำชมเรื่องอะไรจากคนรอบข้าง?</p>
        <label><input type="radio" name="q20" value="a"> ความกล้าหาญและความเป็นผู้นำ</label><br>
        <label><input type="radio" name="q20" value="b"> ความเฉลียวฉลาดและความลึกซึ้งในการมองปัญหา</label><br>
        <label><input type="radio" name="q20" value="c"> ความสนุกสนานและเป็นมิตร</label><br>
        <label><input type="radio" name="q20" value="d"> ความคิดสร้างสรรค์และความไม่เหมือนใคร</label><br>
      </div>
                                                                                                  
      <button type="button" onclick="calculateResult()">ดูผลลัพธ์</button>
    </form>
    <div id="result"></div>
  </div>
  <script src="script.js"></script>
</body>
</html>
