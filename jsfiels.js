$('document').ready(function(){

$("#notifications").hide(); 

$(".loader23").fadeOut();
		 $(document).on('click',".answers2",function(e) {
                
               $(window).scroll(function() {
             
   
});
                
                
var id=$(this).attr('id');
id=id.replace(/[^0-9]/g,'');
var rid=id.replace("an","");
var demo=$('#answer'+id).text();
   demo = demo.replace('</div>',"\n");
   
   
     	if(demo != "")
     	{
    $.ajax({
    	url:"postquation.php",
    	type:"post",
    	data:{id: rid,answer: demo},
    	success:function(data)
    	{	
    	  $('.qid'+rid).append(data);
           $("#answer"+id).text('');	
    	}
    });     
    }
});$(document).on('click',".alanswers2",function(e) {
                
var id=$(this).attr('id');
id=id.replace(/[^0-9]/g,'');
var rid=id.replace("an","");
var demo=$('#alanswer'+id).text();
   demo = demo.replace('</div>',"\n");
   
   
     	if(demo != "")
     	{
    $.ajax({
    	url:"postquation.php",
    	type:"post",
    	data:{id: rid,answer: demo},
    	success:function(data)
    	{	
    	  $('.qid'+rid).append(data);
           $("#alanswer"+id).text('');	
    	}
    });     
    }
});
		 $(document).on('keydown',".commentse",function(e){
            var id=$(this).attr('id');
            var val=$(this).val();
            if(e.which == 13)
     {
     $(this).val("");
     if(val != "")
     {
             $.ajax({
    	url:"postquation.php",
    	type:"post",
    	data:{id: id,comment: val},
    	success:function(data)
    	{
    		
    	  $('.com'+id).append(data);
    	$('.allcom'+id).append(data);
           $("#"+id).val('');
         	
    	}
    }); }
         }
		 });
		 $(document).on("click",".aske",function(){
		 
		 var val=$(".quations2").val();
		 var rid=$(".quations2").attr('id');
		     var id=rid.replace(/[^0-9]/g,'');
		     if(val != "")
		     {
		      $.ajax({
    	url:"postquation.php",
    	type:"post",
    	data:{quation: val,id: id},
    	success:function(data)
    	{
    	
    		
    	  $(".quations2").val("");
    	      $('.quationsdata').prepend(data);
    	      $('.alldatapost').prepend(data);
		 	
		 		
    	}
    	
    }); }
		     
		 });

         function readURL(input,sap) {
    if (input.files && input.files[0]) {
        var reader = new FileReader();

        reader.onload = function (e) {
            $('.'+sap).attr('src', e.target.result);
        }

        reader.readAsDataURL(input.files[0]);
    }
}

$("#img").change(function(){
    readURL(this,"dispalyimg");
});
$("#postdata").submit(function(e){
    e.preventDefault();
    
     var demo=new FormData(this);
    $(".loader23").fadeIn();
     $.ajax({
        url:"postquation.php",
        type:"post",
        cache:false,
        processData:false,
        contentType:false,
        data:demo,
        success:function(data)
        {   
             
         $(".loader23").fadeOut();
        $('.displaypost').prepend(data);
                //$('.alldatapost').prepend(data);
        $('#alMydatapost').modal('toggle');
        $("#postdata")[0].reset();
        $(".dispalyimg").removeAttr('src');
        }
    }); 

});

$("#quationdata").submit(function(e){
    e.preventDefault();
    
     var demo=new FormData(this);
    $(".loader23").fadeIn();
     $.ajax({
        url:"postquation.php",
        type:"post",
        cache:false,
        processData:false,
        contentType:false,
        data:demo,
        success:function(data)
        {   
       
         $(".loader23").fadeOut();
        $('.displaypost').prepend(data);
        $('#alMydatapost').modal('toggle');
        $("#postdata")[0].reset();
        $(".dispalyimg").removeAttr('src');
        }
    }); 

});




$(document).on('keydown',".postcomment",function(e) {
                
var id=$(this).attr('id');
var demo=$(this).val();

    if(e.which == 13)
     {
     if(demo != "")
     {
        $(this).val('');
      $.ajax({  
    url:"postquation.php",
        type:"post",
        data:{id: id,postcomment: demo},
        success:function(data)
        {
          
          $('.postcomdisplay'+id).append(data);
          $('.allpostcomdisplay'+id).append(data);
           $("#"+id).val('');   
        }  
        }); } 
    }
});


$(document).on("submit","#events1",function(e){
   
    e.preventDefault();
   
     var demo1=new FormData(this);
     $(".loader23").fadeIn();
     $.ajax({
        url:"postquation.php",
        type:"post",
        cache:false,
        processData:false,
        contentType:false,
        data:demo1,
        success:function(data)
        {
          $("#events1")[0].reset();
            $(".loader23").fadeOut();
           $('#alMydatapost').modal('toggle');
           $(".eventsdisplay").prepend(data);
         
       
        }
    }); 

	});

$(document).on('keydown',".postcommentof",function(e) {
                
var id=$(this).attr('id');
var demo=$(this).val();
 
    if(e.which == 13)
     {
     if(demo != "")
     {
           $(this).val('');
      $.ajax({  
    url:"postquation.php",
        type:"post",
        data:{id: id,postcommentof: demo},
        success:function(data)
        {
          
          $('.postcomdisplayco'+id).append(data);
           $('.allpostcomdisplayco'+id).append(data);
             
        }  
        }); } 
    }
});

 $(document).on("click","#quation1",function(){
      $('#alMydatapost').modal('toggle');
      
    });
    $(document).on("click",".postlike",function(){
         var id = $(this).attr('id');
         id = id.replace(/[^0-9]/g,'');
         
         $.ajax({
         url:"postquation.php",
         type:"post",
         data:{postlike: id,tablename: "postlike",colname: "postid"},
         success:function(data)
         {
         
          
           $("#poslik"+id).html('<span><img src="feed/Like.png" alt="Cinque Terre" ><label class="cpp">'+data+'</span></lable>');
            $("#alposlik"+id).html('<span><img src="feed/Like.png" alt="Cinque Terre" ><label class="cpp">'+data+'</span></lable>');
         }
         });
    });
   
     $(document).on("keyup","#socity",function(){ 
          var id = $(this).val();
          alert(id);
         $.ajax({
         url:"postquation.php",
         type:"post",
         data:{socityid: id},
         success:function(data)
         {
           $(".dissocitydata").html(data);
         }
         });});
         $(document).on("click",".clisocityname",function(){
         var id = $(this).text();
         $("#socity").val(id);
         $(".dissocitydata").html('');
         });
          $(document).on("click",".clisocityquize",function(){
         var id = $(this).text();
         $("#socityquize").val(id);
         $(".dissocitydata1").html('');
         });
          $(document).on("click",".clisocitypost",function(){
         var id = $(this).text();
         $("#socitypostdata").val(id);
         $(".dissocitypost1").html('');
         });
          $(document).on("click",".clisocityquations",function(){
         var id = $(this).text();
         $("#socityquations").val(id);
         $(".dissocityquations1").html('');
         });
         
         
         $(document).on("click",".videoswatch",function(){
         var url = $(this).attr('id');
         
         $('#iframvideos').attr('src',url);
         
      $('#videodis').modal('toggle');
      
    });
   /* var start ,end = 0;
    var url = /[-a-zA-Z0-9@:%_\+.~#?&//=]{2,256}\.[a-z]{2,4}\b(\/[-a-zA-Z0-9@:%_\+.~#?&//=]*)?/gi;
  $(document).on("keyup","#posttextdata", function( e ) {
        var urls, output= "";
       
      $(this).css('height','auto');
		$(this).height(this.scrollHeight);
      
        if ( e.keyCode !== 8 && e.keyCode !== 9 && e.keyCode !== 13 && e.keyCode !== 32 && e.keyCode !== 46 ) {
            return;
        } 
         var cursorPosition = $(this).prop("selectionStart");
           end = cursorPosition;
           
           if(end < start)
           {
           start = 0;
           }

        while ((urls = url.exec(this.value.slice(start,end))) !== null) {
            output = urls[0];
           
            
            if(output.indexOf("www.youtube.com") != -1)
            {
            alert('youtube');
            }
            else
            { 
            var demo = $(this).val().slice(start,end);*/
             /* sam = data.replace(output,"<a href='"+output+"'>"+output+"</a>");*/
             /*$.ajax({
             url:"sample.php",
             type:"post",
             data:{demo: demo,output: output},
             success:function(sam)
             {
             alert(sam);
             if(start > 0)
             {
              sam = $("#posttextdata").val().slice(0,start)+sam;
              }
              $("#posttextdata").val(sam);
              }
            
             });
             
            start = $("#posttextdata").val().length;
             }
             
            
        }
         
        console.log("URLS: " + output.substring(0, output.length - 2));
    });
   */
             
$(document).on("keyup","#posttextdata", function( e ) {
       
      $(this).css('height','auto');
		$(this).height(this.scrollHeight); });
   
   $("#quizes").submit(function(e){
    e.preventDefault();
    
   
     var demo2=new FormData(this);
    $(".loader23").fadeIn();
     $.ajax({
        url:"postquation.php",
        type:"post",
        cache:false,
        processData:false,
        contentType:false,
        data:demo2,
        success:function(data)
        { 
         
         $(".loader23").fadeOut();
        $('.displayquizedata').prepend(data);
        $('.alldata').prepend(data);
        $('#alMydatapost').modal('toggle');
         $("#quizes")[0].reset();
       
        }
    }); 
   });
   
   
   $(document).on("click",".voting",function(){
     var id = $(this).attr('id');
     var demo = $("input[name="+'day'+id+"]:checked").val()
     if(demo.length > 0)
     {
     $(this).hide();
     $.ajax({
     url:"postquation.php",
     type:"post",
     data:{quizeanswer: demo,id: id},
     success:function(data)
     {
     alert('Thank you for your vote');
     $("input[name="+'day'+id+"]:checked").prop('checked', false);
       }
     });
     }
   
   });
    
    
    $(document).on('keydown',".quizecommentse",function(e){
            var id=$(this).attr('id');
            var val=$(this).val();
            if(e.which == 13)
     {
     $(this).val("");
     if(val != "")
     {
             $.ajax({
    	url:"postquation.php",
    	type:"post",
    	data:{id: id,quizecomment: val},
    	success:function(data)
    	{
    		
    	  $('.quizecomdisplay'+id).append(data);
    	$('.allquizecomdisplay'+id).append(data);
           $("#"+id).val('');
         	
    	}
    }); }
         }
		 });
		 $(document).on("keyup","#socityquize",function(){var id = $(this).val();
		
		 if(id != "")
		 {
		 
         $.ajax({
         url:"postquation.php",
         type:"post",
         data:{socityid1: id,sname : "quize"},
         success:function(data)
         {
         
           $(".dissocitydata1").html(data);
         }
         });}else{$(".dissocitydata1").html("");}});
    
    $(document).on("keyup","#socitypostdata",function(){
    var id = $(this).val();
		
		 if(id != "")
		 {
		  
         $.ajax({
         url:"postquation.php",
         type:"post",
         data:{socityid1: id, sname: "post"},
         success:function(data)
         {
        
           $(".dissocitypost1").html(data);
         }
         });}else{$(".dissocitypost1").html("");}
    });
    
    
    $(document).on("keyup","#socityquations",function(){
       var id = $(this).val();
		
		 if(id != "")
		 {
		 
         $.ajax({
         url:"postquation.php",
         type:"post",
         data:{socityid1: id, sname: "quations"},
         success:function(data)
         {
        
           $(".dissocityquations1").html(data);
         }
         });}else{$(".dissocityquations1").html("");} 
    });
    
    $(document).on('keydown',".quizecommentof",function(e) {
                
var id=$(this).attr('id');
var demo=$(this).val();
 
    if(e.which == 13)
     {
     if(demo != "")
     {
           $(this).val('');
      $.ajax({  
    url:"postquation.php",
        type:"post",
        data:{id: id,quizecommentof: demo},
        success:function(data)
        {
          
          $('.quizecomdisplayco'+id).append(data);
           $('.allquizecomdisplayco'+id).append(data);
             
        }  
        }); } 
    }
});

/*$(document).on("click","#postlikes",function(){});*/
$(document).on("click",".postoflikes",function(){

var id = $(this).attr('id');
         id = id.replace(/[^0-9]/g,'');
         
         $.ajax({
         url:"postquation.php",
         type:"post",
         data:{postlike: id,tablename: "postcommentlikes",colname: "commentid"},
         success:function(data)
         {
         alert(data);
          
           $("#postlike"+id).html('<span><i class="fa fa-thumbs-up" style="font-size: 17px;" ></i>'+data+'<span>');
           $("#alpostlike"+id).html('<span><i class="fa fa-thumbs-up" style="font-size: 17px;" ></i>'+data+'<span>');
         }
         });

});
$(document).on("click",".quationlikes",function(){
var id = $(this).attr('id');
         id = id.replace(/[^0-9]/g,'');
         
         $.ajax({
         url:"postquation.php",
         type:"post",
         data:{postlike: id,tablename: "quastionslikes",colname: "quastionid"},
         success:function(data)
         {
         $("#alquelik"+id).html('<span><img src="feed/Like.png" alt="Cinque Terre" ><label class="cpp">'+data+'</span></lable>');
                  
           $("#quelik"+id).html('<span><img src="feed/Like.png" alt="Cinque Terre" ><label class="cpp">'+data+'</span></lable>');
           
         }
         });
});
$(document).on("click",".quizelikes",function(){

var id = $(this).attr('id');
         id = id.replace(/[^0-9]/g,'');
         
         $.ajax({
         url:"postquation.php",
         type:"post",
         data:{postlike: id,tablename: "quizelikes",colname: "quizeid"},
         success:function(data)
         {
         
          
           $("#quilik"+id).html('<span><img src="feed/Like.png" alt="Cinque Terre" ><label class="cpp">'+data+'</span></lable>');
           $("#alquilik"+id).html('<span><img src="feed/Like.png" alt="Cinque Terre" ><label class="cpp">'+data+'</span></lable>');
         }
         });

});
$(document).on("click",".quizecommentlikes",function(){
var id = $(this).attr('id');
         id = id.replace(/[^0-9]/g,'');
         
         $.ajax({
         url:"postquation.php",
         type:"post",
         data:{postlike: id,tablename: "quizecommentlikes",colname: "commentid"},
         success:function(data)
         {
         
          
           $("#postlike"+id).html('<span><i class="fa fa-thumbs-up" style="font-size: 17px;" ></i>'+data+'<span>');
           $("#alpostlike"+id).html('<span><i class="fa fa-thumbs-up" style="font-size: 17px;" ></i>'+data+'<span>');
         }
         });
});

$(document).on("click",".quationclaps",function(){

var id = $(this).attr('id');
         id = id.replace(/[^0-9]/g,'');
        
         $.ajax({
         url:"postquation.php",
         type:"post",
         data:{postclaps: id,tablename: "quationsclaps",colname: "answerid"},
         success:function(data)
         {
         
          
           $("#queclp"+id).html('<span><img src="feed/claps.png" alt="Cinque Terre" >'+data+'</span>');
           $("#alqueclp"+id).html('<span><img src="feed/claps.png" alt="Cinque Terre" >'+data+'</span>');
         }
         }); 
});


$(document).on("click",".postclaps",function(){

var id = $(this).attr('id');
         id = id.replace(/[^0-9]/g,'');
         
         $.ajax({
         url:"postquation.php",
         type:"post",
         data:{postclaps: id,tablename: "postclaps",colname: "postid"},
         success:function(data)
         {
         
          
           $("#posclp"+id).html('<span><img src="feed/claps.png" alt="Cinque Terre" >'+data+'</span>');
           $("#alposclp"+id).html('<span><img src="feed/claps.png" alt="Cinque Terre" >'+data+'</span>');
         }
         }); 
});

$(document).on("click",".quizeclaps",function(){

var id = $(this).attr('id');
         id = id.replace(/[^0-9]/g,'');
         
         $.ajax({
         url:"postquation.php",
         type:"post",
         data:{postclaps: id,tablename: "quizeclaps",colname: "quizeid"},
         success:function(data)
         {
         
          
           $("#quiclp"+id).html('<span><img src="feed/claps.png" alt="Cinque Terre" >'+data+'</span>');
            $("#alquiclp"+id).html('<span><img src="feed/claps.png" alt="Cinque Terre" >'+data+'</span>');
         }
         }); 
});



$(document).on("click",".postwhistle",function(){

var id = $(this).attr('id');
         id = id.replace(/[^0-9]/g,'');
         
         $.ajax({
         url:"postquation.php",
         type:"post",
         data:{postwhistle: id,tablename: "postwhistle",colname: "postid"},
         success:function(data)
         {
         
          
           $("#poswhi"+id).html('<span><img src="feed/whistle1.png" style="width:35px" alt="Cinque Terre" >'+data+'</span>');
            $("#alposwhi"+id).html('<span><img src="feed/whistle1.png" style="width:35px" alt="Cinque Terre" >'+data+'</span>');
         }
         }); 
});


$(document).on("click",".quizewhistle",function(){

var id = $(this).attr('id');
         id = id.replace(/[^0-9]/g,'');
         
         $.ajax({
         url:"postquation.php",
         type:"post",
         data:{postwhistle: id,tablename: "quizewhistle",colname: "quizeid"},
         success:function(data)
         {
         
          
           $("#quiwhi"+id).html('<span><img src="feed/whistle1.png" style="width:35px" alt="Cinque Terre" >'+data+'</span>');
           $("#alquiwhi"+id).html('<span><img src="feed/whistle1.png" style="width:35px" alt="Cinque Terre" >'+data+'</span>');
         }
         }); 
});


$(document).on("click",".quationwhistle",function(){

var id = $(this).attr('id');
         id = id.replace(/[^0-9]/g,'');
         
         $.ajax({
         url:"postquation.php",
         type:"post",
         data:{postwhistle: id,tablename: "quationswhistle",colname: "answerid"},
         success:function(data)
         {
         
          
           $("#quewhi"+id).html('<span><img src="feed/whistle1.png" style="width:35px" alt="Cinque Terre" >'+data+'</span>');
           $("#alquewhi"+id).html('<span><img src="feed/whistle1.png" style="width:35px" alt="Cinque Terre" >'+data+'</span>');
         }
         }); 
});


$(document).on("click",".editpost",function(){
  var id = $(this).attr('id');
  $.ajax({
         url:"editfeed.php",
         type:"post",
         data:{id: id,tablename: "socitypost",colname: "id",formname : "postform",socityid : 'socity_id'},
         success:function(data)
         {
           $(".editall").html(data);
           $('.editall').dialog({
						 
								title: "Edit Post Data",
								height:'auto',	
     width:700,
	 modal: true,
	  position: {
my: "center top",
at: "center top+100",
of: window,
collision: "none"
},

      show: {
        effect: "blind",
        duration: 1000
      },
      hide: {
       
        duration: 1000
      },
	 
	  open: function (event, ui) {
    $(".editall").css('overflow', 'hidden');
	/*$(".ui-dialog-titlebar-close").hide();*/
	 
	  }
    }); 
           
         }
                 });
   
});
$(document).on("click",".editquize",function(){
 var id = $(this).attr('id');
 
  $.ajax({
         url:"editfeed.php",
         type:"post",
         data:{id: id,tablename: "feedquiz",colname: "id",formname : "quizeform",socityid:"club_id"},
         success:function(data)
         {
           $(".editall").html(data);
           $('.editall').dialog({
						 
								title: "Edit Post Data",
								height:'auto',	
     width:700,
	 modal: true,
	  position: {
my: "center top",
at: "center top+100",
of: window,
collision: "none"
},

      show: {
        effect: "blind",
        duration: 1000
      },
      hide: {
       
        duration: 1000
      },
	 
	  open: function (event, ui) {
    $(".editall").css('overflow', 'hidden');
	/*$(".ui-dialog-titlebar-close").hide();*/
	 
	  }
    }); 
           
         }
                 });
});
$(document).on("click",".answeredit",function(){

alert("edit answers");

});


$(document).on("submit","#eformsdata",function(e){
      e.preventDefault();
      
      var demo=new FormData(this);
    $(".loader23").fadeIn();
     $.ajax({
        url:"postquation.php",
        type:"post",
        cache:false,
        processData:false,
        contentType:false,
        data:demo,
        success:function(data)
        {   
         $(".loader23").fadeOut();
       
        $('#epomd').modal('toggle');
        $("#eformsdata")[0].reset();
        $(".dispalyimg1").removeAttr('src');
        }
        });
      
      
});


$(document).on("click",".evpost",function(){

var id = $(this).attr('id');
 
 $("#epomd").modal('toggle');
 $('.dispalyimg1').attr('src',"");
 $('#eformsdata')[0].reset();
 $('#eveid').val(id)

});
$(document).on("change","#img1",function(){
readURL(this,"dispalyimg1");
});


$(document).on("click",".quationss",function(){
   var id = $(this).attr('id');
   
   $.ajax({
         url:"postquation.php",
         type:"post",
         data:{viewquations: id},
         success:function(data)
         {
        
          $("#qudialog").html(data);
        $("#qudialog").dialog({title: "Edit Post Data",
								height:'auto',	
     width:700,
	 modal: true,
	  position: {
my: "center top",
at: "center top+100",
of: window,
collision: "none"
},

      show: {
        effect: "blind",
        duration: 1000
      },
      hide: {
       
        duration: 1000
      },
	 
	  open: function (event, ui) {
    $(".editall").css('overflow', 'hidden');
	/*$(".ui-dialog-titlebar-close").hide();*/
	 
	  }
        }
        );
         }
         }); 

});



$(document).on("click",".intrested",function(){

var id = $(this).attr('id');
$.ajax({
        url:"postquation.php",
        type:"post",
        data:{intrested: id},
        success:function(data){
        $(".num"+id).html(data);
        }
       });

});

$(document).on("click",".applyjob",function(){
 var id = $(this).attr('id');

 $.ajax({
 url:"postquation.php",
 type:"post",
 data:{applyjob: id},
 success:function(data)
 {
 if(data == 1)
 {
   swal("Good job!", "your successfully applyed for this job", "success");
   }
   else
   {
   swal("Already appled to this job", "", "warning");
   }
 }
 });
});
/**for new friends
		$(document).on("focus","#search2",function(){

$(this).animate({  width: "135%"  }, 500 ,function(){
  $("#search-list1").slideDown();
  });
  
});

$(document).on("keyup","#search2",function(){

 var vale = $(this).val();
       if(vale =="")
       {
       $("#search-list1").html("<p>Searching..</p>");
       }
       else{
       $.ajax({
		 url:"newsearch.php",
		 type:"post",
		 data:{'valu': vale},
		 success: function(data){
		if(data == "1")
		{
		$("#search-list1").html("<p style='color:red'>No profile found..</p>");
		}
		else
		{
		$("#search-list1").html(data);
		}
		 }

	 });
	 }
  
});

$(document).on("focus",".search1",function(){
$('#new').click(function(){
  var name = $("#new").text();
   $("#search2").text(name);
 
 });
/**for new friends*/


$(document).on("focus",".search1",function(){

$(this).animate({
    width: "135%"
   
  }, 500 ,function(){
  $("#search-list").slideDown();
  });
  
});
$(document).on("focusout",".search1",function(){

$(this).animate({
    width: "100%"
   
  }, 1000,function(){$(".search1").val('');} );
   $("#search-list").slideUp();
    
});

$('#search-list').click(function(e){
       e.stopPropagation();
   });
   
$(document).on("keyup",".search1",function(){

 var vale = $(this).val();
       if(vale =="")
       {
       $("#search-list").html("<p>Searching..</p>");
       }
       else{
       $.ajax({
		 url:"search.php",
		 type:"post",
		 data:{'valu': vale},
		 success: function(data){
		if(data == "1")
		{
		$("#search-list").html("<p style='color:red'>No profile found..</p>");
		}
		else
		{
		$("#search-list").html(data);
		}
		 }

	 });
	 }
  
});

$(document).on("click",".sendmess",function(e){


var value = $(".chat-box1").val();
if(value != "")
{  
var id =$(".chat_box2").val();
$.ajax({
url:"insertchat.php",
type:"post",
data:{value: value,id: id},
success:function(data)
{
	allmessges(id);
     
}
});
$(".chat-box1").val('');

}

});
$(document).on("keyup",".chat-box",function(e){

if(e.which == 13 )
{
var value = $(this).val();
if(value != "")
{
var id =$(this).attr('id');
 id = id.replace("n","");
$.ajax({
url:"insertchat.php",
type:"post",
data:{value: value,id: id},
success:function(data)
{
$("#display"+id).append('<div style="border-radius: 8px;padding: 8px 12px;background-color: #e1e9ee;overflow: hidden;display: inline-block;float: right;clear: both;max-width: 75%;margin-top: 4%;"><p>'+value+'</p></div>');
$("#display"+id).stop().animate({ scrollTop: $(".mas-contanar")[0].scrollHeight}, 1000);
}
});
$(this).val('');

}
}
});
// set the time intervals
setInterval(function(){
  listoffriends();
   var i ;
   for(i = 0; i < $(".chat-boxing").length; i++)
   {
   disp(i);
   
    }
    friendrequest(); }, 3000);
    
    function disp(i)
    {
     var id = $(".chat-boxing:eq("+i+")").attr('id');
   id = id.replace("chat","");
   var lastmsg = $("#display"+id+" div p").last().text();
  
 
 $.ajax({
 url:"chat.php",
 type:"post",
 data:{id: id,lastmsg: lastmsg},
 success:function(data)
 {
  if(data == "0")
  {
    $(".msgnotif"+id).html("");
  }
  else
  {
  $(".msgnotif"+id).html("1");
 $("#display"+id).html(data);
 $("#display"+id).stop().animate({ scrollTop: $("#display"+id)[0].scrollHeight}, 1000);   
   }
  }
 
 });
    }

$(document).on("click",".listbox-head",function(){

     $(".message-container").slideToggle();
 });
 
  function listoffriends()
  {
    var id="sample";
    $.ajax({
          url:"friendaction.php",
          type:"post",
          data:{type:"friendlist"},
          success:function(data)
          {
           $(".message-container").html(data);  
          }
        });
  }
  listoffriends();
  
  
  $(document).on("click",".container1",function(){
    var id = $(this).attr('id');
      var leng = $(".chat-boxing").length;
      var idlen = $("#chat"+id).length;
      if(idlen == 0)
      {
      var name = $("#"+id+" "+"p").text();
       $.ajax({
       url:"friendaction.php",
       type:"post",
       data:{id: id,name: name,type: "displaytextobx",leng: leng},
       success:function(data)
       {
       $("#chat").append(data);
       }
       });
      }

  });
  
  $(document).on("click",".remchat",function(){
 
 var id = $(this).attr("id");
  id =id.replace("rm","");

 $("#chat"+id).remove();
 });
 
  $(document).on("click","#notifi",function(e){
    $("#notifications").slideDown();
    e.stopPropagation();
    });
    
   
$('html').click(function() {    
        $('#notifications').slideUp();
});

$(document).on("click","#notifications",function(){
    $(this).stop().slideUp();
});

 $(document).on("click",".frequst",function(){
 var id = $(this).attr('id');
 
 $.ajax({
 url:"friendaction.php",
 type:"post",
 data:{id: id,type: "accept"},
 success:function(data)
 {
 
 if(data == 1)
 {
  swal("Connection Successfull", "your are connected successfully", "success");
    listoffriends();

 }
 else
 {
  swal("your are not Connected", "Somthing is wrong please try again", "warning");
 }
 
 }
 });
});

//function for friend request

function friendrequest()
{
$.ajax({
url:"friendaction.php",
type:"post",
data:{type:"friendrequerstlist"},
success:function(data)
{
$("#notifications").html(data);
}
});
}

friendrequest();

 /*function noteficationMessage()
 {
   var sample = $(".container1").length;
  
  
   var i;
   for(i= 0 ; i <= sample; i++)
   {
    var sam = $(".container1:eq("+i+")").attr('id');
    alert(sam);
   }
  }
  noteficationMessage(); */

function Notificationmessage(i)
{
var id = $(".chat-boxing:eq("+i+")").attr('id');
   id = id.replace("chat","");
 $.ajax({
 url:"friendaction.php",
 type:"post",
 data:{id: id,type:"pendingmsg"},
 success:function(data)
 {
 $("#msgnotif"+id).html("New");
 }
 });
}

 $(document).on("click",".userdetails",function(){
	
     
     var id = $(this).attr('id');
	 	 if(id=="newid")
	  {
		$('#personone').css("display","none");  
		$('#persontwo').css("display","block");  
	  }else{ 
		    $('#personone').css("display","block");  
		$('#persontwo').css("display","none"); 
	     $(".userdetails").css("background", "white");
     $(this).css("background", "#7fd4d1");
    var img = $("#"+id+" img").attr('src');
    var name = $("#"+id+" span").text();
	
   $(".centerid").attr("src",img);
   $(".username").text(name);
  
   
   
    
	  $(".chat_box2").val(id);
    allmessges(id);
	}
        });
 //Notificationmessage()
 function allmessges(id)
 {
  $.ajax({
     url:"friendaction.php",
     type:"post",
     data:{id: id, type:"fullviewchat"},
     success:function(data)
     {
     
     $(".diaplaymess").html(data);
     $(".diaplaymess").stop().animate({ scrollTop: $(".diaplaymess")[0].scrollHeight}, 1000);
     }
     });
 }



});