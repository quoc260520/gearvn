<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.js" integrity="sha512-n/4gHW3atM3QqRcbCn6ewmpxcLAHGaDjpEBu4xZd47N0W2oQ+6q7oc3PXstrJYXcbNU1OHdQ1T7pAP+gi5Yu8g==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/ckeditor/4.17.2/ckeditor.js" integrity="sha512-QuHtmTNLFyCbmk2jGlr0URK0XiNn1G0nHYMaNfbOLQgXBiO6RllC+xFkPO5YnG6zYnRVUj6b5uSXwmJeJgOLBw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    
    <script type="text/javascript">
        $(document).ready(function(){ 
            var funcNum = <?php echo $_GET['CKEditorFuncNum'].';'; ?>
            $('#fileExplorer').on('click','img', function(){
                var fileUrl = $(this).attr('title');
                window.opener.CKEDITOR.tools.callFunction(funcNum, fileUrl);
                window.close();
            }).hover(function(){
                $(this).css('cursor','pointer');
            });
        });
    </script>
    <style>
         #fileExplorer{
            display: flex;
             flex-direction: row;
            flex-wrap: wrap;
        }
        .thumbnail{
            width: 150px;
            height: 160px;
            border: 1px solid #ccc;
            margin-left: 5px;
          
        }
        .file-list{
           
            justify-content: center;
            list-style: none;
             padding: 0;
           
        }
        img {
            width: 100px;
            height: 100px;
            border:1px solid red;
            margin-bottom:5px;
        }
        li {
            width: 100%;
            height: 100%;
            display: flex;
            flex-direction: column;
            justify-items: center;
            align-items: center;

        }
        h3{
            max-width: 100px;
            color: rgb(17, 115, 226);
            font-size: 13px;
            line-height: 16px;
            font-weight: 400;
            height: 36px;
            overflow: hidden;
            display: block;
            display: -webkit-box;
            -webkit-box-orient: vertical;
            -webkit-line-clamp: 3; 
             margin: 0;
             padding-bottom: 5px;
        }
    </style>
    <title>File Browse</title>
</head>
<body>
    <div id="fileExplorer">
        @foreach($file_names as $key=>$file_name)
        <div class="thumbnail">
            <ul class="file-list">
                <li>
                    <img src="{{ asset('image/image_product/'.$file_name) }}"  alt="Product" title="{{ asset('image/image_product/'.$file_name)}}">
                    <h3> {{ $file_name }}</h3>
                </li>
            </ul>
        </div>
        @endforeach
    </div>
    
</body>
</html>