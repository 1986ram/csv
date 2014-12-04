
<?php
$array = array(
    1    => "a",
    "1"  => "b",
    1.5  => "c",
    true => "d",
);
//print_r($array);
?>

<?php
$a = array(1 => 'one', 2 => 'two', 3 => 'three');
unset($a[2]);


$b = array_values($a);
//print_r($b);
?>
<?php
$a1=array("red","green","blue","yellow");
$a2=array("red","green","blue");

$result=array_diff_assoc($a1,$a2);
//print_r($result);
?> 


<!DOCTYPE html>
<html>
    <head>
        <style>
            #modal {
                position:absolute;
                background:gray;
                padding:8px;
            }

            #content {
                background:white;
                padding:20px;
            }

            #close {
                position:absolute;
                background:url(close.png);
                width:24px;
                height:27px;
                top:-7px;
                right:-7px;
            }
        </style>
        <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
        <script>
            var modal = (function(){
                // Generate the HTML and add it to the document
                $modal = $('<div id="modal"></div>');
                $content = $('<div id="content"></div>');
                $close = $('<a id="close" href="#"></a>');

                $modal.hide();
                $modal.append($content, $close);

                $(document).ready(function(){
                    $('body').append($modal);                       
                });

                $close.click(function(e){
                    e.preventDefault();
                    $modal.hide();
                    $content.empty();
                });
                // Open the modal
                return function (content) {
                    $content.html(content);
                    // Center the modal in the viewport
                    $modal.css({
                        top: ($(window).height() - $modal.outerHeight()) / 2, 
                        left: ($(window).width() - $modal.outerWidth()) / 2
                    });
                    $modal.show();
                };
            }());

            // Wait until the DOM has loaded before querying the document
            $(document).ready(function(){
                $('a#popup').click(function(e){
                    modal("<p>This is popup's content.</p>");
                    e.preventDefault();
                });
            });
        </script>
    </head>
    <body>
        <a id='popup' href='#'>Simple popup</a>
    </body>
</html>

http://stackoverflow.com/questions/1328723/how-to-generate-a-simple-popup-using-jquery
