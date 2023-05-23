<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php    
// 1 Viết một chương trình PHP để đếm số ký tự trong một chuỗi sử dụng hàm strlen().
function countLength($string){
    return strlen($string);
}
echo "Bài 1:" . countLength("Hello word") ."<br>";
// 2 Viết một chương trình PHP để đếm số từ trong một chuỗi sử dụng hàm str_word_count().
function countWord($word){
    return str_word_count($word);
}
echo "Bài 2:" . countWord("Hello World") . "<br>";
//3 Viết một chương trình PHP để đảo ngược một chuỗi sử dụng hàm strrev().
function revertString($string){
    return strrev($string);
}
echo "Bài 3: " . revertString("Hello") . "<br>" ;
//4 Viết một chương trình PHP để tìm kiếm một chuỗi con trong một chuỗi sử dụng hàm strpos().
function fStrpos($input1,$input2) {
    return strpos($input1,$input2);
}
echo "Bài 4: " . fStrpos("Hello World", "World") . "<br>";
//5 //Viết một chương trình PHP để thay thế một chuỗi con trong một chuỗi bằng một chuỗi khác sử dụng hàm str_replace().
function fStrReplace($input1,$input2,$input3) {
    return str_replace($input1,$input2,$input3);
}
echo "Bài 5: " . fStrReplace("Hello", "Hi", "Hello World") . "<br>";
//6 Viết một chương trình PHP để kiểm tra xem một chuỗi có bắt đầu bằng một chuỗi con khác không sử dụng hàm strncmp().
function checkStartWord($word, $word2){
    if (strpos($word, $word2)=="") return "false";
    else if (strpos($word, $word2)!= 0) return "false";
    else return "true";
 }
 echo "Bài 6: " . checkStartWord("hello world", "hello") . "<br>";
 //7 Viết một chương trình PHP để chuyển đổi một chuỗi thành chữ hoa sử dụng hàm strtoupper().
 function upper($string){
     return strtoupper($string);
 }
 echo "Bài 7: " .upper("hello world"). "<br>"; 
//8 //Viết một chương trình PHP để chuyển đổi một chuỗi thành chữ thường sử dụng hàm strtolower().
function lower($word){
    return strtolower($word);
}
echo "Bài 8: " . lower("HELLO") . "<br>";
// 9 Viết một chương trình PHP để chuyển đổi một chuỗi thành chuỗi in hoa chữ cái đầu tiên của mỗi từ sử dụng hàm ucwords().
function str_ucwords($string){
    return ucwords($string);
}
echo "Bài 9: " . str_ucwords("hello my life") . "<br>";
// 10 Viết một chương trình PHP để loại bỏ khoảng trắng ở đầu và cuối chuỗi sử dụng hàm trim().
function str_trim($string){
    return trim($string);
}
echo "Bài 10: " . str_trim("   My life is special  ") .  "<br>";
// 11 Viết một chương trình PHP để loại bỏ ký tự đầu tiên của một chuỗi sử dụng hàm ltrim().
function str_ltrim($word, $word2){
    return ltrim($word, $word2);
}
echo "Bài 11: " . str_ltrim("Thảo anh ", "T") .  "<br>";
// 12 Viết một chương trình PHP để loại bỏ ký tự cuối cùng của một chuỗi sử dụng hàm rtrim().
function str_rtrim($word, $word2){
    return rtrim($word, $word2);
}
echo "Bài 12: " . str_rtrim("Thỏa", "a") . "<br>";
// 13 Viết một chương trình PHP để tách một chuỗi thành một mảng các phần tử sử dụng hàm explode().
function str_explode($word, $word2){
    print_r (explode($word, $word2));
}
echo "Bài 13: " . str_explode(" ","How are you ? ") .  "<br>";
// 14 Viết một chương trình PHP để nối các phần tử của một mảng thành một chuỗi sử dụng hàm implode().
function str_implode($char, $array){
    print_r("Bài 14:" . implode($char, $array));
  }
      $array = array('Thanh', 'Thảo');
echo  str_implode( " ",$array) . "</br>";
// 15 Viết một chương trình PHP để thêm một chuỗi vào đầu hoặc cuối của một chuỗi sử dụng hàm str_pad().
function addword($word, $word2, $word3){
    return str_pad($word, $word2, $word3);
}
echo "Bài 15: " . addword("hello","23","everybody") . "<br>";
// 16 Viết một chương trình PHP để kiểm tra xem một chuỗi có kết thúc bằng một chuỗi con khác không sử dụng hàm strrchr().
function checkEndWord($input1, $input2){
    $result = strstr($input1, $input2);
    if (str_word_count($result)== 1) return "true";
    else return "false";
 }
 echo "Bài 16: " . checkEndWord("hello my life", "life") .  "<br>";
// 17 Viết một chương trình PHP để kiểm tra xem một chuỗi có chứa một chuỗi con khác không sử dụng hàm strstr().
function findWord17($word, $word2){
    return strpos($word, $word2);
}
echo "Bài 17: " . findWord17("hello world", "world") . "<br>";
// 18 Viết một chương trình PHP để thay thế tất cả các ký tự trong một chuỗi không phải là chữ cái hoặc số bằng một ký tự khác sử dụng hàm preg_replace().
function str_preg_replace($pattern, $replace, $str){
    return preg_replace($pattern, $replace, $str);
  }
echo "Bài  18: " . str_preg_replace("/Xin chao/", "Hello", "Xin chao cac ban"). "<br/>";
// 19 Viết một chương trình PHP để kiểm tra xem một chuỗi có phải là một số nguyên hay không sử dụng hàm is_int().
function checknumber($number){
    if(is_int($number)){
      echo ("Bài 19 : Đúng");
    }else{
      echo ("Bài 19: Sai");
    }
  }
echo checknumber(19) . "<br/>";
// 20 Viết một chương trình PHP để kiểm tra xem một chuỗi có phải là một email hợp lệ hay không sử dụng hàm filter_var().
function checkemail($email){
    if(filter_var($email, FILTER_VALIDATE_EMAIL)){
      echo ("Bài 20: Email hợp lệ");
    }else{
      echo ("Bài 20: Email không hợp lệ");
    }
  }
        checkemail("linhnhik824@gmailcom");
?>
</body>
</html>
