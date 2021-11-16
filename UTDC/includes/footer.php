        <p>&copy 2021-2022</p>
        <script>
        let mybutton = document.getElementById("btn-back-to-top");

        // When the user scrolls down 150px from the top of the document, show the button
        window.onscroll = function () {
            scrollFunction();
        };

        function scrollFunction() {
            if (document.body.scrollTop > 150 || document.documentElement.scrollTop > 150) {
                mybutton.style.display = "block";
            } 
            else {
                mybutton.style.display = "none";
            }
        }
        // When the user clicks on the button, scroll to the top of the document
        mybutton.addEventListener("click", backToTop);

        function backToTop() {
            document.body.scrollTop = 0;
            document.documentElement.scrollTop = 0;
        }
        </script>
        
        <script>
            function showmore(){
                var a = document.getElementById("learn-more");
                var b = document.getElementById("show-more");
                a.style.display="block";
                b.style.display="none";
            }
        </script>

        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
        </div>
    </body>
</html>