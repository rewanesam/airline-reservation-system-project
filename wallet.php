<?php
session_start();
// require_once 'includes/db_connect.php'; // Remove or comment out this line
require_once 'includes/config.php'; // Use this line instead

// Check if user is logged in
if (!isset($_SESSION['user_id'])) {
    header('Location: login.php');
    exit();
}

$user_id = $_SESSION['user_id'];
$message = "";
$error = "";

// Helper: Get wallet balance
function get_wallet_balance($pdo, $user_id) {
    $stmt = $pdo->prepare("SELECT balance FROM wallet WHERE user_id = ?");
    $stmt->execute([$user_id]);
    $balance = $stmt->fetchColumn();
    return $balance !== false ? $balance : 0.00;
}

// Handle deposit
if (isset($_POST['deposit'])) {
    $amount = floatval($_POST['amount']);
    if ($amount > 0) {
        $pdo->beginTransaction();
        try {
            $stmt = $pdo->prepare("INSERT INTO transactions (user_id, type, amount, description) VALUES (?, 'deposit', ?, 'Deposit to wallet')");
            $stmt->execute([$user_id, $amount]);

            $stmt = $pdo->prepare("INSERT INTO wallet (user_id, balance) VALUES (?, ?) ON DUPLICATE KEY UPDATE balance = balance + VALUES(balance)");
            $stmt->execute([$user_id, $amount]);

            $pdo->commit();
            $message = "Deposit successful!";
        } catch (Exception $e) {
            $pdo->rollBack();
            $error = "Deposit failed. Please try again.";
        }
    } else {
        $error = "Enter a valid positive amount.";
    }
}

// Handle withdraw
if (isset($_POST['withdraw'])) {
    $amount = floatval($_POST['amount']);
    $balance = get_wallet_balance($pdo, $user_id);

    if ($amount > 0 && $balance >= $amount) {
        $pdo->beginTransaction();
        try {
            $stmt = $pdo->prepare("INSERT INTO transactions (user_id, type, amount, description) VALUES (?, 'withdraw', ?, 'Withdraw from wallet')");
            $stmt->execute([$user_id, $amount]);

            $stmt = $pdo->prepare("UPDATE wallet SET balance = balance - ? WHERE user_id = ?");
            $stmt->execute([$amount, $user_id]);

            $pdo->commit();
            $message = "Withdrawal successful!";
        } catch (Exception $e) {
            $pdo->rollBack();
            $error = "Withdrawal failed. Please try again.";
        }
    } else {
        $error = $amount <= 0 ? "Enter a valid positive amount." : "Insufficient balance.";
    }
}

// Get wallet balance
$balance = get_wallet_balance($pdo, $user_id);

// Get transaction history
$stmt = $pdo->prepare("SELECT type, amount, date, description FROM transactions WHERE user_id = ? ORDER BY date DESC LIMIT 20");
$stmt->execute([$user_id]);
$transactions = $stmt->fetchAll(PDO::FETCH_ASSOC);
?>

<!DOCTYPE html>
<html>
<head>
    <title>My Wallet</title>
    <style>
        body { font-family: Arial, sans-serif; margin: 40px; }
        .wallet-container { max-width: 500px; margin: auto; }
        .balance { font-size: 2em; margin-bottom: 20px; }
        .message { color: green; }
        .error { color: red; }
        table { width: 100%; border-collapse: collapse; margin-top: 20px; }
        th, td { border: 1px solid #ccc; padding: 8px; text-align: left; }
        th { background: #f4f4f4; }
        .btn { padding: 6px 16px; border: none; border-radius: 4px; cursor: pointer; }
        .btn-deposit { background: #28a745; color: #fff; }
        .btn-withdraw { background: #dc3545; color: #fff; }
        .btn:disabled { background: #ccc; cursor: not-allowed; }
    </style>
</head>
<body>
<div class="wallet-container">
    <h2>My Wallet</h2>
    <div class="balance">Balance: $<?php echo number_format($balance, 2); ?></div>
    <?php if ($message): ?>
        <div class="message"><?php echo $message; ?></div>
    <?php endif; ?>
    <?php if ($error): ?>
        <div class="error"><?php echo $error; ?></div>
    <?php endif; ?>
    <form method="post" style="margin-bottom: 10px;">
        <input type="number" name="amount" step="0.01" min="0.01" placeholder="Amount" required>
        <button class="btn btn-deposit" type="submit" name="deposit">Deposit</button>
        <button class="btn btn-withdraw" type="submit" name="withdraw" <?php echo $balance <= 0 ? 'disabled' : ''; ?>>Withdraw</button>
    </form>
    <h3>Recent Transactions</h3>
    <table>
        <tr>
            <th>Type</th>
            <th>Amount</th>
            <th>Date</th>
            <th>Description</th>
        </tr>
        <?php foreach ($transactions as $txn): ?>
            <tr>
                <td><?php echo ucfirst($txn['type']); ?></td>
                <td>$<?php echo number_format($txn['amount'], 2); ?></td>
                <td><?php echo $txn['date']; ?></td>
                <td><?php echo htmlspecialchars($txn['description']); ?></td>
            </tr>
        <?php endforeach; ?>
    </table>
</div>
</body>
</html> 