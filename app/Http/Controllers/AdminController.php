<?php
// Подключение необходимых файлов и библиотек
require_once DIR . '/config.php'; // Конфигурация базы данных
require_once DIR . '/models/User.php'; // Модель пользователя
require_once DIR . '/helpers/Helper.php'; // Вспомогательные функции

class AdminController {
    // Свойства класса
    private $userModel;

    // Конструктор
    public function construct() {
        $this->userModel = new User();
    }

    // Метод для отображения панели администратора
    public function index() {
        // Логика для получения данных и отображения представления
        $users = $this->userModel->getAllUsers();
        include __DIR . '/views/admin/dashboard.php';
    }

    // Метод для добавления пользователя
    public function addUser() {
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            // Обработка данных формы
            $username = $_POST['username'];
            $password = $_POST['password'];
    
            // Простая валидация на пустоту
            if (empty($username) || empty($password)) {
                echo "Пожалуйста, заполните все поля.";
                return;
            }
    
            // Валидация и добавление пользователя
            if ($this->userModel->addUser($username, $password)) {
                // Успешное добавление
                header('Location: /admin/users');
                exit;
            } else {
                // Ошибка добавления
                echo "Ошибка при добавлении пользователя.";
            }
        } else {
            // Если запрос не POST, выводим форму для добавления пользователя
            include DIR . '/views/admin/add_user_form.php';
        }
    }