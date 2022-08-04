1, Viết chương trình giả lập máy ATM với các yêu cầu sau 
  a, Tạo giao diện cho người dùng nhập mã PIN, 
     nếu mã PIN có tồn tại trong mảng accounts, 
     thì chuyển người dùng sang màn hình lựa chọn, 
     nếu không thì đưa ra cảnh báo mã pin không đúng 

  b, Ở màn lựa chọn tạo giao diện với 3 nút nhấn 
     - Rút tiền 
     - Thoát 
     - Truy vấn thông tin tk
     Khi ấn vào rút tiền -> màn hình nhập số tiền muốn rút và tiến hành rút tiền
     Khi ấn vào thoát thì thoát chương trình 
     Khi ấn vào truy vấn thông tin thì in ra thông tin của người dùng 
  
  Tài khoản người dùng lưu trữ trong mảng accounts = [
     ["pin"=>"12112121","amount"=>"2000000","name"=>"Luan"],
     ["pin"=>"12112121","amount"=>"2000000","name"=>"Luan"],
     ["pin"=>"12112121","amount"=>"2000000","name"=>"Luan"]  
  ]
  
2, Viết chương trình giả lập đăng nhập gồm 3 file,
  login.php có giao diện nhập mật khẩu và email, so sánh mật khẩu và email với mảng cố định 
  profile.php in ra thông tin của người đăng nhập
  logout.php thực hiện xử lý huỷ session và chuyển người dùng về trang login.php

accounts = [
["email"=>"a@gmail.com","name"=>"Luan","password"=>"123456"],
["email"=>"b@gmail.com","name"=>"Nam","password"=>"12345678"],
["email"=>"c@gmail.com","name"=>"Linh","password"=>"12345690"]
]
  