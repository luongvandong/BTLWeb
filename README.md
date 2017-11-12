**1. Cài đặt xampp trước khi cài đặt composer**

_Link download_

https://www.apachefriends.org/download.html

**2. Cài đặt composer**

_Link download_

https://getcomposer.org/Composer-Setup.exe

**3. Tải thư viện laravel**

_Chạy cmd và trỏ vào thư mục của project, có thể dùng git bash hoặc Powershell trên win10 thay thế cho cmd_

`composer install`

**Cấu hình database**

_Coppy file .env.example và đổi thành .env_

_Generate key của project_

`php artisan key:generate`

**Run project app**

`php artisan serve [--port=port_number]`

_Mở trình duyệt lên và chạy link_

`localhost:port_number` Mặc định port=8000

_Cách bên trên thì có thể lưu project ở bất cứ đâu trên máy tính_ 

_Ngoài ra có thể copy project vào htdocs để chạy trực tiếp_




