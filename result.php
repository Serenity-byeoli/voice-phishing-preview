<?php
$score = 0;

for ($i = 1; $i <= 5; $i++) {
    if (isset($_POST["q$i"]) && $_POST["q$i"] === "correct") {
        $score++;
    }
}
?>
<!DOCTYPE html>
<html lang="ko">
<head>
<meta charset="UTF-8">
<title>결과</title>
<style>
    body { font-family: ; background:#f7f7f7; padding:20px; }
    .box { max-width:500px; margin:auto; background:white; padding:20px;
           border-radius:10px; box-shadow:0 0 10px #ccc; text-align:center; }
    .correct { color:green; font-weight:bold; }
    .wrong { color:red; font-weight:bold; }
</style>
</head>
<body>

<div class="box">
    <h2>결과</h2>
    <p>맞힌 개수: <?php echo $score; ?>/5 </p>

    <?php if ($score == 5): ?>
        <p class="correct">대단해요! 보이스피싱을 잘 알고 있어요!</p>
    <?php else: ?>
        <p class="wrong">조금 더 연습이 필요해요!</p>
    <?php endif; ?>

    <br>
    <a href="quiz.html">다시 풀기</a>
</div>

</body>
</html>
