<?php
require_once('../private/initialize.php');

$errors = [];
$username = '';
$email = '';
$password = '';
//Member: walterBoggis
//Password: P@ssword-1234 

//Admin: franklinBean
//Password: P@ssword-1234 
if (is_post_request()) {
    $first_name = $_POST['first_name'] ?? '';
    $last_name = $_POST['last_name'] ?? '';
    $username = $_POST['username'] ?? '';
    $email = $_POST['email'] ?? '';
    $password = $_POST['password'] ?? '';
    $confirm_password = $_POST['confirm_password'] ?? '';

    if (empty($username)) {
        $errors[] = "Username is required.";
    } elseif (strlen($username) < 3) {
        $errors[] = "Username must be at least 3 characters.";
    }

    if (empty($email)) {
        $errors[] = "Email is required.";
    } elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $errors[] = "Invalid email format.";
    }

    if (empty($password)) {
        $errors[] = "Password is required.";
    } elseif (strlen($password) < 8) {
        $errors[] = "Password must be at least 8 characters.";
    }

    if ($password !== $confirm_password) {
        $errors[] = "Passwords do not match.";
    }

    if (empty($errors)) {
        $existing_member = Members::find_by_username($username);
        if ($existing_member) {
            $errors[] = "Username already exists.";
        }
        $existing_email = Members::find_by_email($email);
        if ($existing_email) {
            $errors[] = "Email already exists.";
        }
    }

    if (empty($errors)) {
        $member = new Members();
        $member->first_name = $_POST['first_name'] ?? '';
        $member->last_name = $_POST['last_name'] ?? '';
        $member->username = $username;
        $member->email = $email;
        $member->member_type = 'm';

        $member->set_password_for_signup($password, $confirm_password);
        $member->set_hashed_password($password);

        $result = $member->save();
        if ($result) {
            $session->message('Account created successfully! Please log in.');
            redirect_to(url_for('/login.php'));
        } else {
            $errors[] = "Failed to create account. Please try again.";
            echo '<pre>';
            print_r($member->errors);
            echo '</pre>';
            die();
        }
    }
}
?>

<?php $page_title = 'Sign Up'; ?>
<?php include(SHARED_PATH . '/public_header.php'); ?>

<div id="content">
    <h1>Create Account</h1>

    <?php echo display_errors($errors); ?>

    <form action="<?php echo url_for('/signup.php'); ?>" method="post">
        <dl>
            <dt>First Name</dt>
            <dd><input type="text" name="first_name" required /></dd>
        </dl>

        <dl>
            <dt>Last Name</dt>
            <dd><input type="text" name="last_name" required /></dd>
        </dl>
        <dl>
            <dt>Username</dt>
            <dd>
                <input type="text" name="username" value="<?php echo h($username); ?>" required />
            </dd>
        </dl>

        <dl>
            <dt>Email</dt>
            <dd>
                <input type="email" name="email" value="<?php echo h($email); ?>" required />
            </dd>
        </dl>

        <dl>
            <dt>Password</dt>
            <dd>
                <input type="password" name="password" required />
                <small>Must be at least 8 characters</small>
            </dd>
        </dl>

        <dl>
            <dt>Confirm Password</dt>
            <dd>
                <input type="password" name="confirm_password" required />
            </dd>
        </dl>

        <div id="operations">
            <input type="submit" value="Sign Up" />
        </div>
    </form>

    <p>Already have an account? <a href="<?php echo url_for('/login.php'); ?>">Log in here</a></p>
</div>

<?php include(SHARED_PATH . '/public_footer.php'); ?>