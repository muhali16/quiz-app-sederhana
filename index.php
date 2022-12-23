<?php 
if(isset($_POST["periksa"])){
    $jawab = $_POST['pilihan'] ?? 'f';
    $jawaban = 'c';

    switch($jawab)
    {
        case 'a':
            $pilihan = "a. Kreatif dan inovatif dalam berkarya";
            break;
        case 'b':
            $pilihan = "b. Penggerak gerakan anti narkoba";
            break;
        case 'c':
            $pilihan = "c. Berkarya dengan narkoba";
            break;
        case 'd':
            $pilihan = "d. Menerapkan pola hidup sehat";
            break;
        case 'e':
            $pilihan = "e. Berprestasi di bidangnya";
            break;
        default:
            $pilihan = "Tidak Menjawab.";
            break;
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Quis</title>
    <link rel="stylesheet" href="app.css">
</head>
<body>
    <section id="container">
        <div class="question_area">
            <h1>Quiz Pemuda Sehat <br>Negara Kuat</h1>
            <p class="soal">Yang tidak termasuk dari implementasi pemuda sehat negara kuat adalah</p>
            <form action="" method="POST" class="pilihan">
                <ul>
                    <li>
                        <label for="a" <?= $jawab == 'a' ? 'style="border: 2px solid red;" ' : '' ?> >
                            <input type="radio" name="pilihan" id="a" value="a" <?= isset($_POST['periksa']) ? 'disabled' : '' ?> <?= $jawab == 'a' ? 'checked' : '' ?> >
                            a. Kreatif dan inovatif dalam berkarya
                        </label>
                    </li>
                    <li>
                        <label for="b" <?= $jawab == 'b' ? 'style="border: 2px solid red;" ' : '' ?> >
                            <input type="radio" name="pilihan" id="b" value="b" <?= isset($_POST['periksa']) ? 'disabled' : '' ?> <?= $jawab == 'b' ? 'checked' : '' ?>>
                            b. Penggerak gerakan anti narkoba
                        </label>
                    </li>
                    <li>
                        <label for="c" <?= $jawab == 'c' ? 'style="border: 2px solid green;" ' : '' ?>>
                            <input type="radio" name="pilihan" id="c" value="c" <?= isset($_POST['periksa']) ? 'disabled' : '' ?> <?= $jawab == 'c' ? 'checked' : '' ?>>
                            c. Berkarya dengan narkoba
                        </label>
                    </li>
                    <li>
                        <label for="d" <?= $jawab == 'd' ? 'style="border: 2px solid red;" ' : '' ?> >
                            <input type="radio" name="pilihan" id="d" value="d" <?= isset($_POST['periksa']) ? 'disabled' : '' ?> <?= $jawab == 'd' ? 'checked' : '' ?>>
                            d. Menerapkan pola hidup sehat
                        </label>
                    </li>
                    <li>
                        <label for="e" <?= $jawab == 'e' ? 'style="border: 2px solid red;" ' : '' ?> >
                            <input type="radio" name="pilihan" id="e" value="e" <?= isset($_POST['periksa']) ? 'disabled' : '' ?> <?= $jawab == 'e' ? 'checked' : '' ?>>
                            e. Berprestasi di bidangnya
                        </label>
                    </li>
                </ul>
                <button type="reset" <?= isset($_POST['periksa']) ? 'disabled' : '' ?> >Reset</button>
                <button type="submit" name="periksa" style="margin-left: 10px;" <?= isset($_POST['periksa']) ? 'disabled' : '' ?> >Submit</button>
                <?= isset($_POST['periksa']) ? '<a style="margin: 10px;" href="index.php">
                    <button>Jawab Ulang Pertanyaan</button>
                </a>':''?>
            </form>
        </div>
        <?php if(isset($_POST['periksa'])):?>
            <div class="answer_area" style="background-color: <?= ($jawab == $jawaban) ? 'rgb(211, 255, 211)' : 'rgb(253, 229, 229)'; ?>;">
            <?php if($jawab != $jawaban): ?>
                <svg style="color: red" xmlns="http://www.w3.org/2000/svg" width="180" height="180" fill="currentColor" class="bi bi-x wrong_answer" viewBox="0 0 16 16">
                    <path d="M4.646 4.646a.5.5 0 0 1 .708 0L8 7.293l2.646-2.647a.5.5 0 0 1 .708.708L8.707 8l2.647 2.646a.5.5 0 0 1-.708.708L8 8.707l-2.646 2.647a.5.5 0 0 1-.708-.708L7.293 8 4.646 5.354a.5.5 0 0 1 0-.708z" fill="red"></path> 
                </svg>
                <h2 style="color: red;">Salah!</h2>
            <?php else : ?>
                <svg xmlns="http://www.w3.org/2000/svg" width="180" height="180" fill="currentColor" class="bi bi-check-lg" viewBox="0 0 16 16" id="IconChangeColor"> 
                    <path d="M12.736 3.97a.733.733 0 0 1 1.047 0c.286.289.29.756.01 1.05L7.88 12.01a.733.733 0 0 1-1.065.02L3.217 8.384a.757.757 0 0 1 0-1.06.733.733 0 0 1 1.047 0l3.052 3.093 5.4-6.425a.247.247 0 0 1 .02-.022Z" id="mainIconPathAttribute" fill="green"></path> 
                </svg>
                <h2  style="color: green;">Benar!</h2>
            <?php endif ?>
                <p class="jawab" style="color: <?= ($jawab == $jawaban) ? 'green' : 'red'; ?>;">Jawaban anda: <?= $pilihan?></p>
                <p class="jawaban" style="color: <?= ($jawab == $jawaban) ? 'green' : 'red'; ?>;"><strong>Pembahasan: </strong>Yang tidak termasuk dari implementasi pemuda sehat negara kuat adalah <strong>C. Berkarya dengan narkoba</strong></p>
            </div>
        <?php endif ?>
    </section>
</body>
</html>