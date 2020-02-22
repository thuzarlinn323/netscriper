</div>
            <!-- /.container-fluid -->

        </div>
        <!-- /#page-wrapper -->

    </div>
    <!-- /#wrapper -->

    <!-- jQuery -->
    <script src="js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>
    
    <script>
    ClassicEditor
        .create( document.querySelector( '#editor' ) )
        .catch( error => {
            console.error( error );
        } );
</script>

<script>
    $(document).ready(function(){            //jQuery
        $('#selectallbox').click(function(){
            if (this.checked) {
                $('.check_box').each(function(){
                    this.checked=true;
                })
            }else {
                $('.check_box').each(function(){
                    this.checked=false;
                })
            }
        })
    })        
</script>

</body>

</html>