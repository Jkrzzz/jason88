<!DOCTYPE html>
<html lang="en">
  <head>
    <title>JASON88</title>
    <!-- Required meta tags -->
    <meta charset="utf-8" />
    <meta
      name="viewport"
      content="width=device-width, initial-scale=1, shrink-to-fit=no"
    />
    <link rel="icon" href="{{asset('user/img/logo-title.png')}}" type="image/icon type" />
    <!-- Bootstrap CSS v5.2.1 -->
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css"
      rel="stylesheet"
      integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT"
      crossorigin="anonymous"
    />
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css"
      integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw=="
      crossorigin="anonymous"
      referrerpolicy="no-referrer"
    />
    <link rel="stylesheet" href="{{asset('user/css/style.css')}}" />
  </head>

  <body>
    <nav>
      <div class="d-flex justify-content-between">
        <div>
          <a href="{{url('/')}}" class="logo-link">
            <img src="{{asset('user/img/logo-1.png')}}" alt="" />
          </a>
        </div>
        <div class="d-flex justify-content-center align-items-center date-time">
          <p class="date" id="date">5/10/23</p>
          <p class="time" id="time">10:53:54</p>
        </div>
        <div class="text-end">
          <button class="btn btn-link" onclick="showQRModal()">
            สมัครสมาชิก <i class="fa-solid fa-plus"></i>
          </button>
        </div>
      </div>
    </nav>
    <div class="side-icon">
      <div>
        <a
          href="{{$links[0]->link}}"
          class="side-icon-link"
          target="_blank"
        >
          <i class="fa-brands fa-facebook"></i>
        </a>
      </div>
      <div>
        <a href="{{$links[1]->link}}" class="side-icon-link sil-twitter" target="_blank">
          <i class="fa-brands fa-youtube"></i>
        </a>
      </div>
      <div>
        <a
          href="{{$links[2]->link}}"
          class="side-icon-link sil-twitter sil-what"
          target="_blank"
        >
          <img src="{{asset('user/img/line-icon.png')}}" alt="" />
        </a>
      </div>
    </div>
    <div class="show-modal d-none" id="show-modal">
      <div class="show-modal-com">
        <div class="hide-modal">
          <i class="fa-solid fa-xmark" onclick="hideQRModal()"></i>
        </div>
        <div class="bg-modal">
          <a href="{{$images[3]->link}}" target="_blank">  <img src="{{asset('images/'.$images[3]->image)}}" alt="" /></a>
        </div>
      </div>
    </div>
    <div class="body-top">
      <header></header>
      <main>
        <div class="top-div">
          <img class="top-gif" src="{{asset('images/'.$images[0]->image)}}" alt="" />
        </div>
        <div class="mt-5 top-h-p" id="first">
          <h5>เค้าไพ่บาคาร่าคืออะไร?</h5>
          <p>
            &nbsp;&nbsp;&nbsp;เชื่อว่าหลายๆคนรู้จักและคุ้นเคยกันดีกับคำว่า
            <b>“เค้าไพ่บาคาร่า”</b>
            แต่สำหรับมือใหม่แล้วอาจจะยังสับสนและยังไม่เข้าใจความหมายของเค้าไพ่บาคาร่า
            ว่ามันมีไว้เพื่ออะไร มีประโยชน์อย่างไร
            และสำคัญอย่างไรกับการเล่นบาคาร่าออนไลน์
            หลังจากอ่านบทความนี้หลายๆท่านจะได้เข้าใจว่าประโยชน์ที่แท้จริงของเค้าไพ่บาคาร่าคืออะไร
            และ อ่านเค้าไพ่อย่างไรให้แม่น บทความนี้มีคำตอบครับ
          </p>
        </div>
        <div class="modal-div">
          <img
            onclick="showQRModal()"
            src="{{asset('user/img/modal.gif')}}"
            alt=""
            class="modal-gif"
          />
        </div>
        <div class="div-card">
          <div class="card-header">
            <p>สารบัญเนื้อหา</p>
          </div>
          <div class="card-body">
            <ol>
              <li>
                <a href="#first">เค้าไพ่บาคาร่าคืออะไร?</a>
              </li>
              <li>
                <a href="#second">เค้าไพ่บาคาร่ามีกี่แบบ?</a>
                <ol>
                  <li>
                    <a href="#two-one"
                      >เค้าไพ่บาคาร่าแบบมังกร หรือเค้าไพ่มังกร</a
                    >
                  </li>
                  <li>
                    <a href="#two-two"
                      >เค้าไพ่บาคาร่าแบบตัดสอง หรือเค้าไพ่สองตัด</a
                    >
                  </li>

                  <li>
                    <a href="#two-three"
                      >เค้าไพ่บาคาร่าแบบตัดสาม หรือเค้าไพ่สามตัด</a
                    >
                  </li>
                  <li>
                    <a href="#two-four">เค้าไพ่บาคาร่าแบบเสมอต่อ</a>
                  </li>
                  <li>
                    <a href="#two-five">เค้าไพ่บาคาร่าแบบเสมอตัด</a>
                  </li>
                  <li>
                    <a href="#two-six"
                      >เค้าไพ่บาคาร่าแบบฝั่งผู้เล่น (Player) นำ</a
                    >
                  </li>
                  <li>
                    <a href="#two-seven"
                      >เค้าไพ่บาคาร่าแบบฝั่งเจ้ามือ (Banker) นำ</a
                    >
                  </li>
                  <li>
                    <a href="#two-eight">เค้าไพ่บาคาร่าปิงปอง</a>
                  </li>
                  <li>
                    <a href="#two-nine">เค้าไพ่บาคาร่าแบบผสม</a>
                  </li>
                </ol>
              </li>
              <li>
                <a href="#third">ลงเดิมพันด้วยการดูเค้าไพ่บาคาร่าแบบมืออาชีพ</a>
              </li>
            </ol>
          </div>
        </div>
        <p class="mb-4 p-start">
          &nbsp;&nbsp;&nbsp;คำว่า เค้าไพ่บาคาร่า
          เป็นชื่อเรียกศัพท์เฉพาะในวงการบาคาร่า หรือ บาคาร่าออนไลน์
          เค้าไพ่นั้นมีความสำคัญอย่างยิ่งต่อการลงเดิมพันบาคาร่า
          ยิ่งเป็นนักเดิมพันมืออาชีพด้านบาคาร่าด้วยแล้ว
          เค้าไพ่นั้นถือว่าเป็นคีย์เวิร์ดสำคัญในการสร้างรายได้เลยทีเดียว
          ฉะนั้นเค้าไพ่จึงมีความสำคัญต่อนักเดิมพัน
          ไม่ว่าจะเป็นการอ่านทิศทางของเค้าไพ่เพื่อที่จะคำนวณการลงเดิมพัน
          หรือการอ่านภาพรวมเกมบาคาร่าว่า กระดานนี้ควรจะลงทุนไปทาง เจ้ามือ
          (Banker) หรือ ผู้เล่น (Player) นั่นเอง
        </p>
        <div class="mt-3 div-some-p" id="second">
          <h5>เค้าไพ่บาคาร่ามีกี่แบบ?</h5>
          <p>
            &nbsp;&nbsp;&nbsp;หลังจากเรารู้กันแล้วว่าเค้าไพ่บาคาร่ามีความสำคัญอย่างไร
            คราวนี้เราจะมาดูกันว่าเค้าไพ่บาคาร่านั้นมีทั้งหมดกี่แบบ
            แต่ละแบบมีความสำคัญกับการลงเดิมพันแบบไหน ต้องทำความเข้าใจกันก่อนว่า
            เค้าไพ่บาคาร่านั้นเป็นศัพท์เฉพาะของวงการคาสิโนออนไลน์
            ซึ่งในบางที่อาจจะมีชื่อเรียกที่แตกต่างกันออกไปนิดหน่อย
            แต่ก็ไม่ถึงกับความหมายผิดเพี้ยนไปครับ
            มาดูกันว่าเค้าไพ่บาคาร่ามีแบบไหนกันบ้างครับ
          </p>
        </div>
        <div class="second-de" id="two-one">
          <ul>
            <li class="li-head">
              <h5 class="li-h5">เค้าไพ่บาคาร่าแบบมังกร หรือเค้าไพ่มังกร</h5>
            </li>
          </ul>
          <p>
            &nbsp;&nbsp;&nbsp;ลักษณะการออกเค้าไพ่มังกรนั้นจะสังเกตได้ไม่ยากครับ
            คือในกระดานของเกมบาคาร่าเกมนั้นจะ
            มีการออกผลของทางฝั่งใดฝั่งหนึ่งติดกัน 5 ครั้งขึ้นไป ตามภาพประกอบครับ
          </p>
          <img src="{{asset('user/img/show-1.png')}}" alt="" />
          <p class="p-str">
            <strong>จุดสังเกตเค้าไพ่มังกร</strong>： ตามภาพจะมีการออกผลซ้ำของ
            Banker ติดต่อกันจนเกิดเป็นเส้นตรงแนวยาว
            ซึ่งหากเห็นกระดานมีการออกผลแบบนี้
            สันนิษฐานได้เลยครับว่าคือเค้าไพ่บาคาร่าแบบมังกร หรือเค้าไพ่มังกร
            ซึ่งเราสามารถลงเดิมพันตามหางมังกรไปได้เรื่อยๆจนกว่าจะโดนตัดรอบครับ
          </p>
          <p class="p-red">
            <span>*หมายเหตุ</span> เค้าไพ่มังกรนั้นอาจจะสลับการออกผลของฝั่ง
            เจ้ามือ (Banker) หรือ ผู้เล่น (Player)
            ติดต่อกันหลายๆรอบเป็นเส้นตรงแนวยาวได้
          </p>
        </div>
        <div class="second-de" id="two-two">
          <ul>
            <li class="li-head">
              <h5 class="li-h5">เค้าไพ่บาคาร่าแบบตัดสอง หรือเค้าไพ่สองตัด</h5>
            </li>
          </ul>
          <p>
            &nbsp;&nbsp;&nbsp;
            ลักษณะการออกของเค้าไพ่บาคาร่าแบบตัดสองหรือสองตัดนั้น
            จะมีลักษณะการออกผลเป็นฝั่ง เจ้ามือ (Banker) หรือ ผู้เล่น (Player)
            ติดกัน 2ครั้งแล้วเปลี่ยนเป็นออกผลอื่นหรือสลับกันระหว่างฝั่ง เจ้ามือ
            (Banker) และ ผู้เล่น (Player) อีก2ครั้งติดกันดังภาพประกอบ
          </p>
          <img src="{{asset('user/img/show-2.png')}}" alt="" />
          <p class="p-str">
            <strong>จุดสังเกตเค้าไพ่แบบตัดสอง</strong>：
            ในหน้ากระดานแสดงผลนั้นจะเห็นได้อย่างชัดเจนว่า
            การออกผลมีการสลับกันออกผลระหว่าง ฝั่งเจ้ามือ (Banker) และ
            ฝั่งผู้เล่น (Player)
            สองครั้งติดและสลับกันไปมาแบบนี้ในส่วนใหญ่ของกระดาน
            หากเจอการออกผลแบบนี้
            สันนิษฐานได้เลยครับว่าคือเค้าไพ่บาคาร่าแบบตัดสอง
            และแทงตามแบบสลับฝั่งได้เลยครับ
          </p>
        </div>
        <div class="second-de" id="two-three">
          <ul>
            <li class="li-head">
              <h5 class="li-h5">เค้าไพ่บาคาร่าแบบตัดสาม หรือเค้าไพ่สามตัด</h5>
            </li>
          </ul>
          <p>
            &nbsp;&nbsp;&nbsp; ลักษณะการออกของเค้าไพ่บาคาร่าแบบตัดสาม
            หรือเค้าไพ่สามตัดนั้น จะคล้ายคลึงกับเค้าไพ่บาคาร่าแบบตัดสอง
            แต่เพียงการออกผลติดกันของฝั่งเจ้ามือ (Banker) หรือผู้เล่น (Player)
            นั้นจะออกติดกัน 3 ครั้งแล้วจึงสลับผลออกแบบใหม่ ดังภาพประกอบ
          </p>
          <img src="{{asset('user/img/show-3.png')}}" alt="" />
          <p class="p-str">
            <strong>จุดสังเกตเค้าไพ่แบบสามตัด</strong>：
            บนหน้ากระดานแสดงผลเค้าไพ่นั้นจะเห็นได้ว่า มีการออกผลติดต่อกัน
            3ครั้งของ ฝั่งเจ้ามือ (Banker) หรือ ผู้เล่น (Player)
            สลับกันอยู่เช่นนี้ในส่วนใหญ่ หากเจอการออกไพ่แบบนี้
            สันนิษฐานได้เลยว่าจะเป็นการออกเค้าไพ่บาคาร่าแบบสามตัด
            และแทงตามการรูปแบบการเปลี่ยนไพ่ได้เลยครับ
          </p>
        </div>
        <div class="second-de" id="two-four">
          <ul>
            <li class="li-head">
              <h5 class="li-h5">เค้าไพ่บาคาร่าแบบเสมอต่อ</h5>
            </li>
          </ul>
          <p>
            &nbsp;&nbsp;&nbsp; เค้าไพ่บาคาร่าแบบเสมอต่อคือ
            เค้าไพ่บาคาร่าที่มีการออกผลเสมอ (Tie)
            แล้วมีการออกผลของตัวนั้นๆต่อไปอีกอย่างน้อยๆ 1
            รอบแล้วค่อยเปลี่ยนผลออกเป็น ฝั่งตรงข้าม เช่น
            ตาแรกและตาที่สองเค้าไพ่ออกผลเป็น ฝั่งเจ้ามือ (Banker)
            ตาที่สามออกผลเป็นเสมอ (Tie) หลังจากผลที่ออกเสมอรอบถัดไปจะออกเป็นเสมอ
            (Tie) หรือ เจ้ามือ (Banker) ต่อนั่นเอง ดังภาพประกอบ
          </p>
          <img src="{{asset('user/img/show-4.png')}}" alt="" />
          <p class="p-str">
            <strong>จุดสังเกตเค้าไพ่บาคาร่าแบบเสมอต่อ</strong>：
            ตัวที่ก่อนออกผลเสมอเป็นอะไรหลังจากรอบที่ออกผลเสมอจะเป็นการออกผลตัวนั้นต่อ
            โดยที่ยังไม่เปลี่ยนฝั่งเป็นฝั่งตรงข้าม
            หากเห็นกระดานเค้าไพ่ออกผลแบบนี้สันนิษฐานได้เลยว่าเป็นการออกเค้าไพ่บาคาร่าแบบเสมอต่อนั่นเอง
          </p>
        </div>
        <div class="second-de" id="two-five">
          <ul>
            <li class="li-head">
              <h5 class="li-h5">เค้าไพ่บาคาร่าแบบเสมอตัด</h5>
            </li>
          </ul>
          <p>
            &nbsp;&nbsp;&nbsp; เเค้าไพ่บาคาร่าแบบเสมอตัดคือตัวที่ออกผลมาเป็นเสมอ
            (Tie) แล้วมีการออกผลของรอบต่อไปเป็นฝั่งตรงกันข้าม โดยที่จะไม่ออกเสมอ
            หรือออกผลของฝั่งเดิมต่อ เช่น ตาแรกและตาที่สองออกผลมาเป็นฝั่งผู้เล่น
            (Player) ตาที่สามออกผลเป็นเสมอ (Tie)
            หลังจากที่ออกผลเสมอแล้วรอบถัดไปจะเปลี่ยนฝั่งจากผู้เล่น (Player)
            เป็นเจ้ามือ (Banker) ทันที
          </p>
          <img src="{{asset('user/img/show-5.png')}}" alt="" />
          <p class="p-str">
            <strong>จุดสังเกตเค้าไพ่บาคาร่าแบบเสมอตัด</strong>：
            ตัวที่ก่อนออกผลเสมอเป็นอะไรหลังจากออกเสมอแล้ว
            จะออกเป็นตัวฝั่งตรงข้ามนั่นเอง
            หากเห็นกระดานเค้าไพ่ออกผลเช่นนี้สันนิษฐานได้เลยว่าเป็นการออกเค้าไพ่บาคาร่าแบบเสมอตัด
            นั่นเอง
          </p>
        </div>
        <div class="second-de" id="two-six">
          <ul>
            <li class="li-head">
              <h5 class="li-h5">เค้าไพ่บาคาร่าแบบฝั่งผู้เล่น (Player) นำ</h5>
            </li>
          </ul>
          <p>
            &nbsp;&nbsp;&nbsp; เป็นเค้าไพ่ที่ไม่มีรูปแบบการออกที่ตายตัว
            ในรูปกระดานของเค้าไพ่ส่วนใหญ่แล้วจะเป็นการออกผลฝั่งผู้เล่น (Player)
            เป็นหลัก เช่น ขึ้นเป็นมังกรน้ำเงิน แล้วหลังจากนั้นเปลี่ยนมาเป็น
            คู่น้ำเงินตัดสอง หรือ ตัดสาม แล้วขึ้นมาเป็นเค้าไพ่มังกรน้ำเงิน
            อีกและหมุนวนเป็นเช่นนี้โดยจะเน้นไปที่ฝั่งผู้เล่น (Player)
            เป็นหลักนั่นเอง
          </p>
          <img src="{{asset('user/img/show-6.png')}}" alt="" />
          <p class="p-str">
            <strong>จุดสังเกตเค้าไพ่บาคาร่าแบบผู้เล่น (Player) นำ</strong>：
            จะมีการออกผลส่วนใหญ่ของหน้าผู้เล่น (Player)
            โดยอาจจะขึ้นเป็นเค้าไพ่มังกร หรือเค้าไพ่ตัดสองตัดสามสลับกันไป
            หากเห็นกระดานมีเค้าไพ่ในลักษณะนี้สันนิษฐานได้เลยว่าคือเค้าไพ่บาคาร่าแบบฝั่งผู้เล่น
            (Player) นำและเน้นแทงฝั่งผู้เล่นได้เลยครับ
          </p>
        </div>
        <div class="second-de" id="two-seven">
          <ul>
            <li class="li-head">
              <h5 class="li-h5">เค้าไพ่บาคาร่าแบบฝั่งเจ้ามือ (Banker) นำ</h5>
            </li>
          </ul>
          <p>
            &nbsp;&nbsp;&nbsp; ลักษณะเค้าไพ่บาคาร่าแบบฝั่งเจ้ามือ (Banker)
            นำนี้จะคล้ายๆกับเค้าไพ่บาคาร่าฝั่งผู้เล่น (Player)
            นำโดยรูปแบบการออกของเค้าไพ่นั้นจะเป็นแบบผสมกันไปหลากหลายเค้าไพ่
            แต่ว่าจะออกเป็นหน้าเจ้ามือ (Banker) มากกว่า ออกผู้เล่น (Player)
            นั่นเอง
          </p>
          <img src="{{asset('user/img/show-7.png')}}" alt="" />
          <p class="p-str">
            <strong>จุดสังเกตเค้าไพ่บาคาร่าแบบเจ้ามือ (Banker) นำ</strong>：
            จะมีการออกผลส่วนใหญ่ของหน้าเจ้ามือ (Banker)
            โดยอาจจะขึ้นเป็นเค้าไพ่มังกรแดง หรือเค้าไพ่ตัดสองตัดสาม สลับกันไป
            หากเห็นกระดานมีเค้าไพ่ในลักษณะนี้สันนิษฐานได้เลยว่าคือเค้าไพ่บาคาร่าแบบเจ้ามือ
            (Banker) นำนั่นเอง
          </p>
        </div>
        <div class="second-de" id="two-eight">
          <ul>
            <li class="li-head">
              <h5 class="li-h5">เค้าไพ่บาคาร่าปิงปอง</h5>
            </li>
          </ul>
          <p>
            &nbsp;&nbsp;&nbsp; เค้าไพ่บาคาร่าปิงปองหรือเรียกสั้นว่าเค้าไพ่ปิงปอง
            จะสังเกตได้ง่ายๆจากกระดานเค้าไพ่ โดยส่วนใหญ่นั้นจะออกหน้าฝั่งผู้เล่น
            (Player) และ เจ้ามือ (Banker) สลับกันเป็นลูกเดี่ยวๆไปมา
            หากเห็นกระดานมีการสลับสีกันเดี่ยวๆแบบนี้
            สันนิษฐานได้เลยว่าเป็นเค้าไพ่ปิงปอง
          </p>
          <img src="{{asset('user/img/show-8.png')}}" alt="" />
          <p class="p-str">
            <strong>จุดสังเกตเค้าไพ่ปิงปอง</strong>：
            การสลับสีน้ำเงินและแดงหรือสลับผลออกระหว่างเจ้ามือ (Banker)
            และผู้เล่น (Player) จะออกผลเพียงแค่ครั้งเดียวไม่มีการออกเบิ้ลออกซ้ำ
            และเปลี่ยนกันไปมาจนหมดกระดาน
          </p>
        </div>
        <div class="second-de" id="two-nine">
          <ul>
            <li class="li-head">
              <h5 class="li-h5">เค้าไพ่บาคาร่าแบบผสม</h5>
            </li>
          </ul>
          <p>
            &nbsp;&nbsp;&nbsp; เค้าไพ่บาคาร่าแบบผสม
            คือการออกเค้าไพ่บาคาร่าที่มีการออกผลของหลายๆแบบมารวมกัน
            โดยอาจจะมีการออกแบบปิงปองก่อนในช่วงต้น
            และหลังจากนั้นสลับมาเป็นเค้าไพ่ตัดสอง แล้วเปลี่ยนมาเป็นเค้าไพ่มังกร
            กล่าวคือมีการรวมของเค้าไพ่ต่างๆไว้ในกระดานเดียว
            ซึ่งหากเจอเค้าไพ่แบบผสมนี้แนะนำว่าหากเจอแล้วให้เปลี่ยนห้องจะดีกว่าครับ
          </p>
          <p class="p-str">
            <strong>จุดสังเกตเค้าไพ่บาคาร่าแบบผสม</strong>：
            จะไม่มีการออกไปในทิศทางใดทิศทางเดียวแน่ชัด
            ซึ่งจะมีสลับกันออกไปเรื่อยๆ ในบางครั้งออกเป็นเค้าไพ่ปิงปอง
            สลับกับเค้าไพ่มังกร และกลับมาเป็นเสมอตัด แล้วเปลี่ยนไปเรื่อยๆ
            หากเห็นเค้าไพ่เช่นนี้สันนิษฐานได้เลยครับว่าเป็นเค้าไพ่แบบผสม
            ซึ่งเค้าไพ่เช่นนี้ต้องอาศัยความชำนาญเป็นพิเศษ
          </p>
        </div>
        <div class="mt-3 div-some-p" id="third">
          <h5>ลงเดิมพันด้วยการดูเค้าไพ่บาคาร่าแบบมืออาชีพ</h5>
          <p>
            &nbsp;&nbsp;&nbsp; เมื่อเรารู้จักเค้าไพ่บาคาร่าว่ามีกี่แบบแล้ว
            การดูเค้าไพ่แบบมืออาชีพนั้นมีเคล็ดลับเพียงไม่กี่อย่างครับโดยอาศัยหลักการดังนี้
          </p>
          <ul>
            <li>ไม่ใจร้อน ไม่รีบลงเดิมพันในแต่ละรอบ</li>
            <li>พิจารณาเค้าไพ่อย่างละเอียดรอบคอบจนแน่ใจ</li>
            <li>
              เมื่อมั่นใจในเค้าไพ่จนสามารถเดาได้ในรอบถัดไปว่าแนวโน้มจะออกเป็นฝั่งไหน
              แล้วค่อยลงเดิมพัน
            </li>
            <li>รู้จักวางแผนการเงินในการลงเดิมพัน</li>
            <li>
              ได้ถึงจำนวนที่คาดหวัง หรือ 80% ที่คาดหวังให้ถอนเงิน ไม่โลภจนเกินไป
            </li>
          </ul>
          <p>
            &nbsp;&nbsp;&nbsp;
            เค้าไพ่รูปแบบต่างๆรวมไปถึงแนวทางการลงเดิมพันอย่างมืออาชีพที่กล่าวมาข้างต้น
            ทั้งหมดเป็นหลักการที่เซียนบาคาร่าส่วนใหญ่นิยมนำไปใช้กันครับ
            การวิเคราะห์รูปแบบการออกเค้าไพ่นั้นสำคัญมากๆในการลงเดิมพันแต่ละครั้ง
            เพราะหากอ่านและวิเคราะห์เค้าไพ่บาคาร่าได้เก่ง
            ก็จะสามารถสร้างกำไรจากการเล่นบาคาร่าได้อย่างจริงจัง
            แต่ในทางกลับกันเราก็ต้องไม่ลืมว่า
            ต้องเล่นอย่างมีสติและไม่โลภมากจนเกินไปครับ
          </p>
        </div>
        <div class="d-flex justify-content-center">
          <div class="game-gif" id="game-gif">
            <div onclick="hideGame()">
              <i class="fa-regular fa-circle-xmark"></i>
            </div>
            <a href="{{$images[1]->link}}" target="_blank">
              <img src="{{asset('images/'.$images[1]->image)}}" alt=""
            /></a>
          </div>
        </div>
        <div class="footer-gif">
          <img src="{{asset('images/'.$images[2]->image)}}" alt="" />
        </div>
      </main>
    </div>
    <footer>
      <div class="footer-title"></div>
      <div class="d-flex justify-content-center">
        <span class="footer-icon"
          ><a href="{{$links[0]->link}}" target="_blank"><i class="fa-brands fa-square-facebook"></i></a
        ></span>
        <span class="footer-icon"
          ><a href="{{$links[1]->link}}" target="_blank"> <i class="fa-brands fa-youtube"></i> </a
        ></span>
        <span class="footer-icon"
          ><a href="{{$links[2]->link}}" target="_blank"><i class="fa-brands fa-line"></i></a
        ></span>
      </div>
      <div class="copy-right">
        © 2023 JASON88 Thailand | All rights reserved
      </div>
    </footer>
    <!-- Bootstrap JavaScript Libraries -->
    <script
      src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"
      integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3"
      crossorigin="anonymous"
    ></script>

    <script
      src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.min.js"
      integrity="sha384-7VPbUDkoPSGFnVtYi0QogXtr74QeVeeIs99Qfg5YCF+TidwNdjvaKZX19NZ/e6oz"
      crossorigin="anonymous"
    ></script>
    <script
      src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/js/all.min.js"
      integrity="sha512-fD9DI5bZwQxOi7MhYWnnNPlvXdp/2Pj3XSTRrFs5FQa4mizyGLnJcN6tuvUS6LbmgN1ut+XGSABKvjN0H6Aoow=="
      crossorigin="anonymous"
      referrerpolicy="no-referrer"
    ></script>
    <script src="{{asset('user/js/index.js')}}"></script>
  </body>
</html>
