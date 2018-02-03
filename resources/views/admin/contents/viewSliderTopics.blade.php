 <div>
 <table class="table">
    <caption>Slider Data</caption>
    <button>Add Slider Data</button>
<tr>

    <td>Image Path</td>
    <td>Image Highlights</td>
    
    <td>Image details </td>
    
</tr>
@foreach($sliderImages as $sliderImages)
<tr>
     <td>{{$sliderImages->image_path}}</td>
    <td>{{$sliderImages->slider_highlight}}</td>
    <td>{{$sliderImages->image_text}}</td>
    
    <td>edit </td>
    <td>delete</td>
</tr>
@endforeach

</table>
</div>
