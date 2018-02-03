<div id="main_slider" >
    <h2 id="main_slider_heading">Did you know??</h2>

        @foreach ($sliderImages as $sliderImages)

            <div  class='my_slides'>
                <img   id="slider_picture" class='col-xs-12 col-lg-12 .img-responsive' src='{{$sliderImages->image_path}}' alt='Sorry No Image' > 
                <h4  class='col-xs-12'>{{$sliderImages->slider_highlight}} </h4>
                <strong class='col-xs-12'>{{$sliderImages->image_text}}</strong>
                <button  onclick='plusDivs(-1)'>❮ Prev</button>
                @for ($i = 0; $i < $sliderImages->count(); $i++)
                    <button  onclick='currentDiv({{$i}})'>{{$i}}</button> 
                @endfor        
                <button  onclick='plusDivs(1)'>Next ❯</button>
            </div>
        @endforeach
    </div>
<script>
    var myIndex = 0;
    carousel();
    
    function carousel() 
    {
        var i;
        var x = document.getElementsByClassName("my_slides");
            for (i = 0; i < x.length; i++)
            {
                x[i].style.display = "none";  
            }
            myIndex++;
            if (myIndex > x.length) 
            {
                myIndex = 1
            }    
        x[myIndex-1].style.display = "block";  
        setTimeout(carousel, 10000);
    }
    var slideIndex = 1;
    showDivs(slideIndex);
    
    function plusDivs(n) 
    {
        showDivs(slideIndex += n);
    }
    
    function currentDiv(n) 
    {
        showDivs(slideIndex = n);
    }

    function showDivs(n) 
    {
        var i;
        var x = document.getElementsByClassName("my_slides");
        if (n > x.length) 
        {
            slideIndex = 1
        }    
        if (n < 1) 
        {
            slideIndex = x.length
        }
        for (i = 0; i < x.length; i++) 
        {
            x[i].style.display = "none";  
        }
        x[slideIndex-1].style.display = "block";  
    }
</script>