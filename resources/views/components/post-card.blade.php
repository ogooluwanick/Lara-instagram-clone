@props(['item'])

<div class="col-4 mb-4">
        <a href="/p/{{$item->id}}">
                <img class=" embed-responsive embed-responsive-1by1 "  :height="[400]"  src="{{asset("storage/".$item["image"])}}"  alt="post">
        </a>
</div>