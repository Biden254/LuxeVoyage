# LuxeVoyage Laravel Project Setup Guide (Windows)

Welcome to the LuxeVoyage collaborative Laravel project! This guide provides simple steps for Windows users to set up the backend after cloning the repo and avoid conflicts by using branches.

---

## ✅ **1. Install Required Software**

* **Git**: [https://git-scm.com/downloads](https://git-scm.com/downloads)
* **XAMPP (includes PHP & MySQL)**: [https://www.apachefriends.org/](https://www.apachefriends.org/)
* **Composer**: [https://getcomposer.org/Composer-Setup.exe](https://getcomposer.org/Composer-Setup.exe)

Ensure PHP is in your system PATH (`C:\xampp\php`) and verify installations with:

```bash
git --version
php -v
composer -V
```

---

## ✅ **2. Clone the Repository**

```bash
git clone https://github.com/Biden254/LuxeVoyage.git
cd LuxeVoyage
```

---

## ✅ **3. Create a Branch**

Always work on your own branch to avoid conflicts:

```bash
git checkout -b your-branch-name
```

---

## ✅ **4. Install Laravel Dependencies**

```bash
composer install
```

---

## ✅ **5. Setup Environment**

```powershell
copy .env.example .env
php artisan key:generate
```

Edit `.env` to set database credentials:

```
DB_DATABASE=luxe_voyage
DB_USERNAME=root
DB_PASSWORD=
```

---

## ✅ **6. Set Up Database**

* Start MySQL from XAMPP Control Panel.
* Create database via [phpMyAdmin](http://localhost/phpmyadmin).
* Run migrations:

```bash
php artisan migrate
```

---

## ✅ **7. Run the Server**

```bash
php artisan serve
```

Access backend at: `http://127.0.0.1:8000`

---

## ✅ **8. Workflow Reminder**

* Make changes on your branch.
* Commit and push to your branch:

```bash
git add .
git commit -m "Your message"
git push origin your-branch-name
```

* Create Pull Requests to merge into `main` after review.

---

**Let's do this!**
