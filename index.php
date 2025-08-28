<?php
require_once __DIR__ . "/config.php";
require_once __DIR__ . "/me.php";

echo "<h2>✅ Vercel PHP Test</h2>";
echo "<p>Email set to: " . htmlspecialchars($send) . "</p>";

// Test sending a Telegram message (uncomment if you want to trigger on page load)
// send_telegram_msg("🚀 Test message from Vercel PHP deployment!");
?>
