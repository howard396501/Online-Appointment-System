<html>
    <head>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
        <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
        <link rel="stylesheet" href="/resources/demos/style.css">
        <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
        <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
        <title>個人時間預約系統</title>
    </head>
    <body>
        <div class="pricing-header px-3 py-3 pt-md-5 pb-md-4 mx-auto text-center">
            <h1 class="display-5">個人線上時間預約系統</h1>
            <p class="lead">不接受電話和征宇預約</p>
            <form action=database_email.php method="post">
                <div class="information">
                    <h5>請填寫預約人名：<input type="text" name="appointment" id="appointment" required="required"></h5>
                    <h5>請填寫預約人數：<input type="text" name="people" id="people" required="required"></h5>
                    <h5>請填寫電子信箱：<input type="text" name="email" id="email" required="required"></h5>
                    <h5>請填寫預約原因：</h5>
                    <textarea rows="4" cols="50" name="events" id="events" placeholder="若要取消預約，請填〝取消預約〞，其餘同預約資料填寫。" required="required"></textarea>
                    <p>
                    <h5>請選擇日期：<input type="text" name="datepicker" id="datepicker" required="required"></h5>
                    <h5>請選擇時段：
                        <select name="salutation" id="salutation" required="required">
                            <option selected>請選擇</option>
                            <option>09:00</option>
                            <option>09:30</option>
                            <option>10:00</option>
                            <option>10:30</option>
                            <option>11:00</option>
                            <option>11:30</option>
                            <option>12:00</option>
                            <option>12:30</option>
                            <option>13:00</option>
                            <option>13:30</option>
                            <option>14:00</option>
                            <option>14:30</option>
                            <option>15:00</option>
                            <option>15:30</option>
                            <option>16:00</option>
                            <option>16:30</option>
                            <option>17:00</option>
                            <option>17:30</option>
                            <option>18:00</option>
                        </select>
                    </h5>
                </div>
                <button type="submit" class="btn btn-primary" name="alert" id="alert">送出</button>
                <button type="button" class="btn btn-success" data-toggle="modal" data-target="#exampleModalCenter">
                    我的目前行事曆
                </button>
                <div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                    <div class="modal-dialog modal-dialog-centered" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="exampleModalLongTitle">我的目前行事曆</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <div class="modal-body">
                                <iframe src="https://calendar.google.com/calendar/embed?src=howard396501%40gmail.com&ctz=Asia%2FTaipei" 
                                style="border: 0" width="400" height="300" frameborder="0" scrolling="no"></iframe>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-dismiss="modal">關閉</button>
                            </div>
                        </div>
                    </div>
                </div>
                <hr>
            </form>
        </div>
        <footer class="page-footer font-small">
            <div class="footer-copyright text-center py-3">
                <p>Copyright © 2018 國立臺北科技大學 106電機工程系 陳子軒 All rights reserved.</p>
            </div> 
        </footer>
        <script>
            $(function() {
                $( "#datepicker" ).datepicker() ;
                $( "#salutation" ).selectmenu() ;
                $( "#alert" ).click(function(){
                    alert("確定送出？");
                });
            }) ;
        </script>  
    </body>
</html>