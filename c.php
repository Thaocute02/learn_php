<?php
//Bài 1: Viết chương trình PHP, sử dụng câu lệnh điều kiện if else để kiểm tra 1 số là số chẵn hay số lẻ?
echo "Bài 1" ;
function checkFomat($number){
    if($number%2==0){
        echo (" Số  $number là số chẵn ");
    }else{
        echo (" Số $number là số lẻ ");
    }
}
        checkFomat(5);
echo "<br>" ;
//Bài 2: Viết chương trình PHP, sử dụng câu lệnh if else để xếp hạng học lực của học sinh dựa trên điểm điểm thi giữa kỳ, điểm thi cuối kỳ.
echo "Bài 2" ;
function arangeScore($score01, $score02){
    $mediunScore = $score01*0.3 + $score02*0.7;
    if ($mediunScore >= 9) echo (" Học lực xuất sắc");
    if ($mediunScore >= 7 & $mediunScore <=9) echo (" Học lực khá");
    if ($mediunScore >= 5 & $mediunScore <=7) echo (" Học lực trung binh");
    if ($mediunScore <= 5) echo (" Học lực yếu");
}
        arangeScore(6,7);
echo "<br>" ;
//Bài 3: Kiểm tra năm nay là năm chẵn hay năm lẻ, in ra màn hình kết quả chẵn hay lẻ.
echo "Bài 3" ;
function checkDatee(){
    $date = getdate();
    if($date['year'] %2==0){
        echo (" Năm nay là năm chẵn ");
    }else{
        echo(" Năm nay là năm lẻ ");
    }
}  
        checkDatee();
echo "<br>";
//Bài 4: Viết chương trình PHP, sử dụng câu lệnh vòng lặp For để in ra số từ 1 đến 100.
echo "Bài 4" ."<br>";
function countNumber(){
    for($x=1; $x<=100; $x++){
        echo ("$x ");
    }
}
        countNumber();
echo "<br>" ;
//Bài 5: Viết trang PHP hiển thị dãy số từ 1 đến 100 sao cho số chẵn là chữ in đậm, số lẻ là chữ in thường.Kết quả: 1 2 3 4….., 100 .Hướng dẫn: Sử dụng vòng lặp for, 1 biến đếm i, toán tử %.
echo "Bài 5" . "<br>";
function displayNumber(){
    for($x=1; $x<=100; $x++){
        if($x%2==0){
            echo ("<b> $x </b>");
        }else{
         echo (" $x ");
        } 
    }
}
        displayNumber();
echo "<br>" ;
//Bài 6: Viết chương trình PHP, sử dụng vòng lặp For each in ra các năm trong mảng có sẵn dưới đây:
$nam = array( 1990, 1991, 1992, 1993, 1994, 1995 );
echo "Bài 6" ;
function useFor(){
    $nam = array( 1990, 1991, 1992, 1993, 1994, 1995 );
    foreach ($nam as $value){
        echo (" $value ");
    }
}
        useFor();
?>