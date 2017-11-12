**1. Cài đặt xampp trước khi cài đặt composer**

_Link download_

https://www.apachefriends.org/download.html

**2. Cài đặt composer**

_Link download_

https://getcomposer.org/Composer-Setup.exe

**3. Tải thư viện laravel**

_Chạy cmd và trỏ vào thư mục của project, có thể dùng git bash hoặc Powershell trên win10 thay thế cho cmd_

    composer install

**4. Cấu hình database (file .env)**

_- Copy file .env.example và đổi thành .env_

- File .env là file cấu hình cơ sở dữ liệu và một số phần mở rộng của project. File này sẽ được tự động không commit lên github vì mỗi người sẽ sử dụng tên db, mật khẩu và password khác nhau.

_- Generate key của project_

    php artisan key:generate

_- Tạo cơ sở dữ liệu trên phpmyadmin rồi nhập thông tin cấu hình vào file .env_

    DB_DATABASE=

    DB_USERNAME=

    DB_PASSWORD=

_Sau khi cấu hình xong thì chạy lệnh để tạo cơ sở dữ liệu từ migrate_

    php artisan migrate

**5. Run project app**

    php artisan serve [--port=port_number]

_Mở trình duyệt lên và chạy link_

    localhost:port_number 
    Mặc định port=8000 : localhost:8000

_Cách bên trên thì có thể lưu project ở bất cứ đâu trên máy tính_ 

_Ngoài ra có thể copy project vào htdocs để chạy trực tiếp_




