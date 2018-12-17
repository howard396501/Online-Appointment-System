Online-Appointment-System
===
開發環境
---
使用平台：Windows 10(企業版，x64) <br>
使用語言：PHP <br>
使用框架：無 <br>
使用套件：PHP Mailer (https://github.com/PHPMailer/PHPMailer) <br>

安裝
---
1.  安裝XAMPP(https://www.apachefriends.org/zh_tw/index.html)
2.  <code>git clone https://github.com/howard396501/Online-Appointment-System.git</code> <br>
3.  取出appointment專案資料夾(其餘不要) <br>
4.  更改<code>database_email.php</code>內容 <br>
5.      25. $mail->Username = 'Your Email' ;  // 填寫上你的Email Address             
        26. $mail->Password = 'Your Email Password' ;  // 填寫上你的Email Password
        30. $mail->setFrom('System Email', 'System') ; // 填寫上你的系統Email(自己的Email也可以)
        32. $mail->addAddress('Your Email') ; //填寫上你的Email(被預約人之Email) 
6.  設計資料庫(詳閱下面〝資料庫表單及欄位〞) <br>
7.  開啟XAMPP中的Apache Server和MySQL <br>

資料庫表單及欄位
---
資料庫名稱：appointment <br>
表單名稱：information <br>
欄位：id(主鍵)、names、people、email、content、dates、intime <br>
![image](https://github.com/howard396501/Online-Appointment-System/blob/master/database.jpg) <br>
