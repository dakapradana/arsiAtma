<script
			  src="https://code.jquery.com/jquery-3.5.1.js"
			  integrity="sha256-QWo7LDvxbWT2tbbQ97B53yJnYU3WhH/C8ycbRAkjPDc="
              crossorigin="anonymous"></script>
              
<script type="text/javascript">
    $(document).ready(function(){
       $("#btnSubmitSaran").click(function(){
            var postForm = {
                'name' : document.getElementById('name').value,
                'email' :document.getElementById('email').value,
                'no_telp':document.getElementById('nomor_telepon').value,
                'message':document.getElementById('message').value
            };

            $.ajax({
                type:"post",
                url:'http://localhost/arsiAtma/saran/submitSaran',
                data:postForm,

                success:function(data){
                    console.log(data);
                }
            });
       });
    });
</script>