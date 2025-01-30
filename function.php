add_action('wp_ajax_send_contact_form', 'handle_contact_form');
add_action('wp_ajax_nopriv_send_contact_form', 'handle_contact_form');

function handle_contact_form() {
  // Отримати дані з AJAX-запиту
  $first_name = sanitize_text_field($_POST['first_name']);
  $last_name  = sanitize_text_field($_POST['last_name']);
  $phone      = sanitize_text_field($_POST['phone']);
  $email      = sanitize_email($_POST['email']);
  $comment    = sanitize_textarea_field($_POST['comment']);

  // Перевірка наявності даних
  if (empty($first_name) || empty($last_name) || empty($phone) || empty($email) || empty($comment)) {
    wp_send_json_error('Будь ласка, заповніть всі поля.');
  }

  // Налаштування листа
  $to      = 'ваша_пошта@example.com'; // Замініть на свою пошту
  $subject = 'Нове повідомлення з контактної форми';
  $message = "Ім'я: $first_name\nПрізвище: $last_name\nТелефон: $phone\nПошта: $email\nКоментар: $comment";
  $headers = array('Content-Type: text/plain; charset=UTF-8');

  // Відправка листа через wp_mail()
  $result = wp_mail($to, $subject, $message, $headers);

  if ($result) {
    wp_send_json_success('Лист успішно надіслано.');
  } else {
    wp_send_json_error('Помилка при відправці листа.');
  }
}