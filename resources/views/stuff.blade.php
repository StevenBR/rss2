
   <script>
           $(document).ready(function(){
               
               $.getJSON("https://b2a797bb-e1a5c304eaec.my.apitools.com/", function(data){
                   
                   $.each(data.group.entries, function(i,item){
                       if(i<10)
                       {
                           $('body').append("<p><a href='" + item.url + "'>" + item.title + "</a></p>");
                       }    
                   })
               })     
           })
        
    </script>
    
    
  <a href="http://www.cnn.com/index.html?eref=rss_topstories">Top Stories</a>
       

            </br>
            <a href="http://webdesign.about.com/library/z_whats_new.rss">Subscribe to What's New</a>

            <a href="http://webdesign.about.com/library/z_whats_new.rss"><img src="http://0.tqn.com/f/stay/a.gif" alt="Subscribe to What's New"></a>-->
*/