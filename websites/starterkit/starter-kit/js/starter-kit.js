// This will create a function that loads jQuery for us within this JavaScript file.
// Credit to "gnarf" of StackOverflow for this.
// The source for this function can be found here - http://stackoverflow.com/questions/2145914/including-a-js-file-within-a-js-file

function include(filename, onload) {
    var head = document.getElementsByTagName('head')[0];
    var script = document.createElement('script');
    script.src = filename;
    script.type = 'text/javascript';
    script.onload = script.onreadystatechange = function() {
        if (script.readyState) {
            if (script.readyState === 'complete' || script.readyState === 'loaded') {
                script.onreadystatechange = null;                                                  
                onload();
            }
        } 
        else {
            onload();          
        }
    };
    head.appendChild(script);
}

function InOut( elem )
{
 elem.delay()
     .fadeIn(2000)
     .delay(10000)
     .fadeOut( 
               function(){ 
                   if(elem.next().length > 0) {
                    InOut( elem.next() );
                  } else {
                    InOut( elem.siblings(':first'));
                  }
                }
             );
}

include('https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js', function() {
    $(document).ready(function() {

        if ($('.banner').hasClass('carousel')) {
          $(function() {
            $('.banner__item').hide();
            InOut( $('.banner__item:first') );
          });
        }

    });
});