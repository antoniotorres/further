<html>
    <body>
        <textarea>
            
        </textarea>
        <p id="count"></p>
        <script type="text/javascript">
            function textareaLengthCheck() {
                var length = this.value.length;
                var charactersLeft = 500 - length;
                var count = document.getElementById('count');
                count.innerHTML = "Characters left: " + charactersLeft;
            }
        </script>
    </body>
</html>