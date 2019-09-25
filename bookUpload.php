<?php
 
 include "hedds.php";


//$stings="INSERT INTO"


?>
 <link rel="stylesheet" type="text/css" href="css/styleUploading.css">
<div class="container"> 
<div class="row">
	<div class="col-md-6" style="border-style:solid ">
		
	  
            
   <div class="container">
	<div class="row">
    <div class="col-md-6">
		<div class="form_main" style="border-style: solid;width: 100%">
                <h4 class="heading"><strong>Quick </strong> Upload Book<span></span></h4>
                <div class="form" style="border-style: solid;width: 100%">

                	<!--,,user_email,p_password,home_address,cellphone,postal_address,locations,user_type,gender,user_picture)-->
                <form class="form-group" action="" method="post" id="contactFrm" name="contactFrm" style="width: 100%">

            <input type="text" required="" placeholder="Please input your Name" value="<?php echo  $first_name; ?>" id="first_name" name="first_name" class="form-control btn-block" readonly>
             <input type="text" required="" placeholder="Please input your Name" value="<?php echo  $user_id; ?>" id="first_name" name="first_name" class="form-control btn-block" readonly>

            
                    <input type="text" required="" placeholder="Please insert ISB number" value="" id="iesb" name="iesb" class="form-control btn-block">
                    <label class="mdb-main-label">Book Category</label>
                    <select id="cates" class="form-control mdb-select md-form colorful-select dropdown-primary mb-2 mycat">
                    </select>
                     
                    <label class="mdb-main-label">Universities</label>
                    <select id="universe" class="form-control mdb-select md-form colorful-select dropdown-primary mb-2 myselecni">

                    </select>

                    <label class="mdb-main-label">Qualification Type</label>
                    <select id="qualic" class="form-control mdb-select md-form colorful-select dropdown-primary mb-2 myqual">

                    </select>
                    
                    <input type="text" required="" placeholder="Please book tittle" value="" id="tittle" name="tittle" class="form-control btn-block">
                    <input type="text" required="" placeholder="Please author of book" value="" id="author" name="author" class="form-control btn-block">
                    <input type="text" required="" placeholder="Please Publisher name" value="" id="publisher" name="publisher" class="form-control btn-block">
                     <label class="mdb-main-label">when the book published</label>
                    <input type="date" required="" placeholder="book year published" value="" id="years" name="years" class="form-control btn-block">
                    
                           <span>Upload Book Image</span>
                           <input class="form-control btn-block" id="file" name="file" type="file">
                           
                	 
                     <input type="button" value="submit" name="submit" class="txt2" onclick="uploading();">
                </form>
            </div>
            </div>
            </div>
	</div>
</div>

</div>
  <div class="col-md-5">
  	<span class="amid" style="border-style: solid;width: 40%">hdfhdfhdfhdfjhdfhjfdhjdfhjdfhj</span>
  	<div class="showme">list it here</div>
  </div>
</div> 


</div> 

<script type="text/javascript">
	$(document).ready(function(){
		/*$.ajax({
			url:"http://localhost/BAXTERBATER2/back_end_books.php?action=barter_bookCategory",
			method:"GET",
			success:function(response){
				var res=JSON.parse(response);
                //console.log(response);
                //console.log(res);
                $output="";
                $.each(res,function(){
                $output+=(this).b_cat_id;
                });
               $(".first_name").val($output);
			}
		});*/

		////////////////////////////////
		$.ajax({
			url:"http://localhost/BAXTERBATER2/back_end_books.php?action=myresult",
			method:"GET",
			datatype : "application/json",
			contentType: "text/plain",
			success:function(response){
				var res=JSON.parse(response);
                console.log(response);
               console.log(res);
               var univrsity=res.Unive;
                var outputs="";

                outputs+="<option value='' >--select University--</option>";
                $.each(univrsity,function(){
                outputs+="<option class='valued' value="+(this).university_id+">"+(this).university_name+"</option>";
                //outputs+="<option class= value='+(this).university_id+'>"+(this).university_name+"</option>";
               });
               $(".myselecni").html(outputs);
               $(".showme").html(outputs);

                var category=res.BookCategory;
               var outputCategory="";
                outputCategory+="<option value='' >--select Category--</option>";
                $.each(category,function(){
                	 outputCategory+="<option class='valued' value="+(this).b_cat_id+">"+(this).category_name+"</option>";
                });
                  $(".mycat").html(outputCategory);
                  //////////////////selection for qualification type
                var qual=res.Qualification;
               var outputQualic="";
                outputQualic+="<option value='' >--select Qualification--</option>";
                $.each(qual,function(){
                	 outputQualic+="<option class='valued' value="+(this).qualification_id+">"+(this).qualification_type+"</option>";
                });
                  $(".myqual").html(outputQualic);
                   
			}//end of success
		});// end of ajax

              
		
	});

	function uploading(){
		
		//here i am searching for selected option
    var option = $('#universe').find('option:selected');
    var b_cat_id = option.val();//to get content of "value" attrib
    //var text = $option.text();//to get <option>Text</option> content
      console.log(b_cat_id);


    //here i am searching for selected option
    var option = $('#cates').find('option:selected');
    var b_cat_id = option.val();//to get content of "value" attrib
    //var text = $option.text();//to get <option>Text</option> content
    console.log(b_cat_id);

    //here i am searching for selected option
    var option = $('#qualic').find('option:selected');
    var qualification_id = option.val();//to get content of "value" attrib
    //var text = $option.text();//to get <option>Text</option> content
    console.log(qualification_id);

    var formData = new FormData();
	var fileUpload = $("#file").get(0);
	var files = fileUpload.files[0];
	
    
     formData.append('first_name',$("#first_name").val());
     formData.append('last_name',$("#last_name").val());
     formData.append('user_email',$('#user_email').val());
     formData.append('p_password',$('#p_password').val());
     formData.append('home_address',$("#home_address").val());
     formData.append('iesb',$("#iesb").val());
     formData.append('tittle',$("#tittle").val());
     formData.append('author',$("#author").val());
     formData.append('publisher',$('#publisher').val());//radio
     formData.append('years',$("#years").val());//radio
     formData.append('file',files);   
     formData.append('action','insertuser'); //action calling Insert function

	}
</script>           
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script><!--this one works-->

