<?php
// Array with names
$a[] = "what is the fullform of AJAX";
$a[] = "Are the HTML tags and elements the same thing?";
$a[] = "What are tags and attributes in HTML?";
$a[] = "What are void elements in HTML?";
$a[] = "Define multipart form data?";
$a[] = "Describe HTML layout structure.";
$a[] = "How to optimize website assets loading?";
$a[] = "Please explain how to indicate the character set being used by a document in HTML?";
$a[] = "Can we display a web page inside a web page or Is nesting of webpages possible?";
$a[] = "How is Cell Padding different from Cell Spacing?";
$a[] = "How can we club two or more rows or columns into a single row or column in an HTML table?";
$a[] = "Is it possible to change an inline element into a block level element?";
$a[] = "In how many ways you can display HTML elements?";
$a[] = "How to specify the link in HTML and explain the target attribute?";
$a[] = "In how many ways can we specify the CSS styles for the HTML element?";
$a[] = "Difference between link tag <link> and anchor tag <a>?";
$a[] = "When to use scripts in the head and when to use scripts in the body?";
$a[] = "Inline and block elements in HTML5?";
$a[] = "Is the <datalist> tag and <select> tag same?";
$a[] = "Define Image Map?";
$a[] = "Convert the below data into Tabular format in HTML5?";
$a[] = "Is drag and drop possible using HTML5 and how?";
$a[] = "Explain the concept of web storage in HTML5.";
$a[] = "Explain HTML5 Graphics.";
$a[] = "Explain new input types provided by HTML5 for forms?";
$a[] = "What are Web Workers?";
$a[] = "Explain Web Components and it’s usage.";

// get the q parameter from URL
$q = $_REQUEST["q"];

$hint = "";

// lookup all hints from array if $q is different from ""
if ($q !== "") {
  $q = strtolower($q);
  $len=strlen($q);
  foreach($a as $name) {
    if (stristr($q, substr($name, 0, $len))) {
      if ($hint === "") {
        $hint = $name;
      } else {
        $hint .= "<br> $name";
      }
    }
  }
}

// Output "no suggestion" if no hint was found or output correct values
echo $hint === "" ? "no suggestion" : $hint;
?>