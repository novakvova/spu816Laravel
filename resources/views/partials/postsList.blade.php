<div class="row mb-2">
    @foreach($posts as $post)
        <div class="col-md-6">
            <div class="row g-0 border rounded overflow-hidden flex-md-row mb-4 shadow-sm h-md-250 position-relative">
                <div class="col p-4 d-flex flex-column position-static">
                    <strong class="d-inline-block mb-2 text-primary">{{$post->category["name"]}}</strong>
                    <h3 class="mb-0">{{$post["title"]}}</h3>
                    <div class="mb-1 text-muted">{{$post["created_at"]}}</div>
                    <p class="card-text mb-auto">{{$post["description_short"]}}</p>
                    <div class="d-flex mt-2 w-50 justify-content-between">
                        <p class="font-weight-bold mr-2">Tags: </p>
                        @foreach($post->tags as $item)
                            <a class="link-secondary pr-2"  href="#"> {{$item["name"]}}  </a>
                        @endforeach
                    </div>
                    <a href="/ShowPost/{{$post["id"]}}" class="stretched-link">Continue reading</a>
                </div>
                <div class="col-auto d-none d-lg-block">
                    <svg class="bd-placeholder-img" width="200" height="250" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: Thumbnail" preserveAspectRatio="xMidYMid slice" focusable="false"><title>Placeholder</title><rect width="100%" height="100%" fill="#55595c"/><text x="50%" y="50%" fill="#eceeef" dy=".3em">Thumbnail</text></svg>

                </div>
            </div>
        </div>
    @endforeach
</div>
